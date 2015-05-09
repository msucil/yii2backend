<?php

namespace backend\controllers;

use Yii;
use common\models\Post;
use backend\models\PostSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\web\UploadedFile;

use backend\helpers\FormFileHelper;
use backend\helpers\ModelInputHelper;
use common\helpers\GeneralHelper;

/**
 * PostController implements the CRUD actions for Post model.
 */
class PostController extends Controller
{
    public function behaviors()
    {
        return [
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'delete' => ['post'],
                ],
            ],
            'access'=>[
                'class' => \yii\filters\AccessControl::className(),
                'rules' => [
                    [
                        'allow' => TRUE,
                        'roles' => ['@']
                    ]
                ]
            ]
        ];
    }

    /**
     * Lists all Post models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new PostSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);
        
        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Post model.
     * @param integer $id
     * @return mixed
     */
//    public function actionView($id)
//    {
//        return $this->render('view', [
//            'model' => $this->findModel($id),
//        ]);
//    }

    /**
     * Creates a new Post model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Post();

        if ($model->load(Yii::$app->request->post())) {
            $model->slug = ModelInputHelper::getSlug($model->post_title);
            $model->user_id = GeneralHelper::getUserId();
            $model->updated_at = ModelInputHelper::getDateTime();
            
            if(!$model->validate()){
                return $this->render('create',['model'=>$model]);
            }
            
            $image = UploadedFile::getInstance($model, "image");
            if($image){
                $image->name = FormFileHelper::getFileName($image->name);
                if(!$image->saveAs(FormFileHelper::getUploadPath().$image, FALSE))
                    $model->addError ('image', $image->error);
                
                $model->image = $image;
            }
            
            if($model->save()){
                Yii::$app->session->setFlash("success", $model->post_title." Successfully Saved!");
                return $this->redirect(['index']);
            }
            else{
                Yii::$app->session->setFlash("error", "Error occured while saving ".$model->post_title."!");
                return $this->render('create',['model' => $model]);
            }
            
        } else {
            return $this->render('create', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Updates an existing Post model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect('index');
        } else {
            return $this->render('update', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Deletes an existing Post model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     */
    public function actionDelete($id)
    {
        $this->findModel($id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Post model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Post the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Post::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
    
    public function actionTest(){
        print_r( \backend\helpers\FormFileHelper::getFileName("sample.jpg"));
        echo \backend\helpers\ModelInputHelper::getDateTime();
        echo "<br/>";
        echo FormFileHelper::getUploadPath();
    }
}
