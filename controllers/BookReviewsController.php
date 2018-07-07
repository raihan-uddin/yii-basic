<?php
/**
 * Created by PhpStorm.
 * User: MIT
 * Date: 25-Jun-18
 * Time: 7:47 AM
 */
use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\web\Response;
use yii\filters\VerbFilter;
use app\models\LoginForm;
use app\models\ContactForm;


class BookReviewsController extends Controller
{
    public function actionIndex()
    {
        echo "hello from the book reviews controller";
    }
}