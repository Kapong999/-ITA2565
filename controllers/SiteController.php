<?php

namespace app\controllers;

use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\filters\VerbFilter;
use app\models\LoginForm;
use app\models\ContactForm;
use yii\data\SqlDataProvider;
use app\models\HaDocuments;
use app\models\HadocumentsSearch;
use app\models\Group;
use app\models\GroupSearch;

class SiteController extends Controller
{
    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::className(),
                'only' => ['logout'],
                'rules' => [
                    [
                        'actions' => ['logout'],
                        'allow' => true,
                        'roles' => ['@'],
                    ],
                ],
            ],
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'logout' => ['post'],
                ],
            ],
        ];
    }

    public function actions()
    {
        return [
            'error' => [
                'class' => 'yii\web\ErrorAction',
            ],
            'captcha' => [
                'class' => 'yii\captcha\CaptchaAction',
                'fixedVerifyCode' => YII_ENV_TEST ? 'testme' : null,
            ],
        ];
    }

    public function actionIndex()
    {
        $searchModel = new GroupSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);
        $dataProvider->pagination->pageSize = 10;
        $dataProvider->sort->defaultOrder = ['id' => SORT_ASC];

        // ไตรมาส 1
        $ha = $searchModel->searchHa();
        $ha->pagination->pageSize = 50;
        $ha->sort->defaultOrder = ['id' => SORT_ASC];

        $had = $searchModel->searchHad();
        $had->pagination->pageSize = 29;
        $had->sort->defaultOrder = ['id' => SORT_ASC];

        $hadc = $searchModel->searchHadc();
        $hadc->pagination->pageSize = 20;
        $hadc->sort->defaultOrder = ['id' => SORT_ASC];

        $hadcc = $searchModel->searchHadcc();
        $hadcc->pagination->pageSize = 15;
        $hadcc->sort->defaultOrder = ['id' => SORT_ASC];

        $hade = $searchModel->searchHade();
        $hade->pagination->pageSize = 10;
        $hade->sort->defaultOrder = ['id' => SORT_ASC];

        $hadea = $searchModel->searchHadea();
        $hadea->pagination->pageSize = 10;
        $hadea->sort->defaultOrder = ['id' => SORT_ASC];

        $hadeb = $searchModel->searchHadeb();
        $hadeb->pagination->pageSize = 10;
        $hadeb->sort->defaultOrder = ['id' => SORT_ASC];

        $hadec = $searchModel->searchHadec();
        $hadec->pagination->pageSize = 10;
        $hadec->sort->defaultOrder = ['id' => SORT_ASC];

        $haded = $searchModel->searchHaded();
        $haded->pagination->pageSize = 10;
        $haded->sort->defaultOrder = ['id' => SORT_ASC];

        // ไตรมาส 2
        $indicators1 = $searchModel->searchIndicators1();
        $indicators1->pagination->pageSize = 10;
        $indicators1->sort->defaultOrder = ['id' => SORT_ASC];

        $indicators2 = $searchModel->searchIndicators2();
        $indicators2->pagination->pageSize = 10;
        $indicators2->sort->defaultOrder = ['id' => SORT_ASC];

        $indicators3 = $searchModel->searchIndicators3();
        $indicators3->pagination->pageSize = 10;
        $indicators3->sort->defaultOrder = ['id' => SORT_ASC];

        $indicators4 = $searchModel->searchIndicators4();
        $indicators4->pagination->pageSize = 10;
        $indicators4->sort->defaultOrder = ['id' => SORT_ASC];

        $indicators5 = $searchModel->searchIndicators5();
        $indicators5->pagination->pageSize = 10;
        $indicators5->sort->defaultOrder = ['id' => SORT_ASC];

        $indicators6 = $searchModel->searchIndicators6();
        $indicators6->pagination->pageSize = 10;
        $indicators6->sort->defaultOrder = ['id' => SORT_ASC];

        $indicators7 = $searchModel->searchIndicators7();
        $indicators7->pagination->pageSize = 10;
        $indicators7->sort->defaultOrder = ['id' => SORT_ASC];

        $indicators8 = $searchModel->searchIndicators8();
        $indicators8->pagination->pageSize = 10;
        $indicators8->sort->defaultOrder = ['id' => SORT_ASC];

        $indicators9 = $searchModel->searchIndicators9();
        $indicators9->pagination->pageSize = 10;
        $indicators9->sort->defaultOrder = ['id' => SORT_ASC];

        $indicators10 = $searchModel->searchIndicators10();
        $indicators10->pagination->pageSize = 10;
        $indicators10->sort->defaultOrder = ['id' => SORT_ASC];

        $indicators11 = $searchModel->searchIndicators11();
        $indicators11->pagination->pageSize = 10;
        $indicators11->sort->defaultOrder = ['id' => SORT_ASC];

        $indicators12 = $searchModel->searchIndicators12();
        $indicators12->pagination->pageSize = 10;
        $indicators12->sort->defaultOrder = ['id' => SORT_ASC];

        $indicators13 = $searchModel->searchIndicators13();
        $indicators13->pagination->pageSize = 10;
        $indicators13->sort->defaultOrder = ['id' => SORT_ASC];

        $indicators14 = $searchModel->searchIndicators14();
        $indicators14->pagination->pageSize = 10;
        $indicators14->sort->defaultOrder = ['id' => SORT_ASC];

        $indicators15 = $searchModel->searchIndicators15();
        $indicators15->pagination->pageSize = 10;
        $indicators15->sort->defaultOrder = ['id' => SORT_ASC];

        $indicators16 = $searchModel->searchIndicators16();
        $indicators16->pagination->pageSize = 10;
        $indicators16->sort->defaultOrder = ['id' => SORT_ASC];

        $indicators17 = $searchModel->searchIndicators17();
        $indicators17->pagination->pageSize = 10;
        $indicators17->sort->defaultOrder = ['id' => SORT_ASC];

        $indicators18 = $searchModel->searchIndicators18();
        $indicators18->pagination->pageSize = 10;
        $indicators18->sort->defaultOrder = ['id' => SORT_ASC];

        $indicators19 = $searchModel->searchIndicators19();
        $indicators19->pagination->pageSize = 10;
        $indicators19->sort->defaultOrder = ['id' => SORT_ASC];

        $indicators20 = $searchModel->searchIndicators20();
        $indicators20->pagination->pageSize = 10;
        $indicators20->sort->defaultOrder = ['id' => SORT_ASC];

        $indicators21 = $searchModel->searchIndicators21();
        $indicators21->pagination->pageSize = 10;
        $indicators21->sort->defaultOrder = ['id' => SORT_ASC];

        $indicators22 = $searchModel->searchIndicators22();
        $indicators22->pagination->pageSize = 10;
        $indicators22->sort->defaultOrder = ['id' => SORT_ASC];

        $indicators23 = $searchModel->searchIndicators23();
        $indicators23->pagination->pageSize = 10;
        $indicators23->sort->defaultOrder = ['id' => SORT_ASC];

        $indicators24 = $searchModel->searchIndicators24();
        $indicators24->pagination->pageSize = 10;
        $indicators24->sort->defaultOrder = ['id' => SORT_ASC];

        $indicators25 = $searchModel->searchIndicators25();
        $indicators25->pagination->pageSize = 10;
        $indicators25->sort->defaultOrder = ['id' => SORT_ASC];

        $indicators26 = $searchModel->searchIndicators26();
        $indicators26->pagination->pageSize = 10;
        $indicators26->sort->defaultOrder = ['id' => SORT_ASC];

        $indicators27 = $searchModel->searchIndicators27();
        $indicators27->pagination->pageSize = 10;
        $indicators27->sort->defaultOrder = ['id' => SORT_ASC];

        $indicators28 = $searchModel->searchIndicators28();
        $indicators28->pagination->pageSize = 10;
        $indicators28->sort->defaultOrder = ['id' => SORT_ASC];

        $indicators29 = $searchModel->searchIndicators29();
        $indicators29->pagination->pageSize = 10;
        $indicators29->sort->defaultOrder = ['id' => SORT_ASC];

        $indicators30 = $searchModel->searchIndicators30();
        $indicators30->pagination->pageSize = 10;
        $indicators30->sort->defaultOrder = ['id' => SORT_ASC];

        $indicators31 = $searchModel->searchIndicators31();
        $indicators31->pagination->pageSize = 10;
        $indicators31->sort->defaultOrder = ['id' => SORT_ASC];

        $indicators32 = $searchModel->searchIndicators32();
        $indicators32->pagination->pageSize = 10;
        $indicators32->sort->defaultOrder = ['id' => SORT_ASC];

        $indicators33 = $searchModel->searchIndicators33();
        $indicators33->pagination->pageSize = 10;
        $indicators33->sort->defaultOrder = ['id' => SORT_ASC];

        $indicators34 = $searchModel->searchIndicators34();
        $indicators34->pagination->pageSize = 10;
        $indicators34->sort->defaultOrder = ['id' => SORT_ASC];

        $indicators35 = $searchModel->searchIndicators35();
        $indicators35->pagination->pageSize = 10;
        $indicators35->sort->defaultOrder = ['id' => SORT_ASC];

        $indicators36 = $searchModel->searchIndicators36();
        $indicators36->pagination->pageSize = 10;
        $indicators36->sort->defaultOrder = ['id' => SORT_ASC];

        $indicators37 = $searchModel->searchIndicators37();
        $indicators37->pagination->pageSize = 10;
        $indicators37->sort->defaultOrder = ['id' => SORT_ASC];

        $indicators38 = $searchModel->searchIndicators38();
        $indicators38->pagination->pageSize = 10;
        $indicators38->sort->defaultOrder = ['id' => SORT_ASC];

        $indicators39 = $searchModel->searchIndicators39();
        $indicators39->pagination->pageSize = 10;
        $indicators39->sort->defaultOrder = ['id' => SORT_ASC];

        $indicators40 = $searchModel->searchIndicators40();
        $indicators40->pagination->pageSize = 10;
        $indicators40->sort->defaultOrder = ['id' => SORT_ASC];

        $indicators41 = $searchModel->searchIndicators41();
        $indicators41->pagination->pageSize = 10;
        $indicators41->sort->defaultOrder = ['id' => SORT_ASC];

        $indicators42 = $searchModel->searchIndicators42();
        $indicators42->pagination->pageSize = 10;
        $indicators42->sort->defaultOrder = ['id' => SORT_ASC];

        $indicators43 = $searchModel->searchIndicators43();
        $indicators43->pagination->pageSize = 10;
        $indicators43->sort->defaultOrder = ['id' => SORT_ASC];

        $indicators44 = $searchModel->searchIndicators44();
        $indicators44->pagination->pageSize = 10;
        $indicators44->sort->defaultOrder = ['id' => SORT_ASC];

        $indicators45 = $searchModel->searchIndicators45();
        $indicators45->pagination->pageSize = 10;
        $indicators45->sort->defaultOrder = ['id' => SORT_ASC];

        $indicators46 = $searchModel->searchIndicators46();
        $indicators46->pagination->pageSize = 10;
        $indicators46->sort->defaultOrder = ['id' => SORT_ASC];

        $indicators47 = $searchModel->searchIndicators47();
        $indicators47->pagination->pageSize = 10;
        $indicators47->sort->defaultOrder = ['id' => SORT_ASC];

        $indicators48 = $searchModel->searchIndicators48();
        $indicators48->pagination->pageSize = 10;
        $indicators48->sort->defaultOrder = ['id' => SORT_ASC];

        $indicators49 = $searchModel->searchIndicators49();
        $indicators49->pagination->pageSize = 10;
        $indicators49->sort->defaultOrder = ['id' => SORT_ASC];

        $indicators50 = $searchModel->searchIndicators50();
        $indicators50->pagination->pageSize = 10;
        $indicators50->sort->defaultOrder = ['id' => SORT_ASC];

        $indicators51 = $searchModel->searchIndicators51();
        $indicators51->pagination->pageSize = 10;
        $indicators51->sort->defaultOrder = ['id' => SORT_ASC];

        $indicators52 = $searchModel->searchIndicators52();
        $indicators52->pagination->pageSize = 10;
        $indicators52->sort->defaultOrder = ['id' => SORT_ASC];

        $indicators53 = $searchModel->searchIndicators53();
        $indicators53->pagination->pageSize = 10;
        $indicators53->sort->defaultOrder = ['id' => SORT_ASC];

        $indicators54 = $searchModel->searchIndicators54();
        $indicators54->pagination->pageSize = 10;
        $indicators54->sort->defaultOrder = ['id' => SORT_ASC];


        // ไตรมาส 3

        $indicators3_1 = $searchModel->searchIndicators3_1();
        $indicators3_1->pagination->pageSize = 10;
        $indicators3_1->sort->defaultOrder = ['id' => SORT_ASC];

        $indicators55 = $searchModel->searchIndicators55();
        $indicators55->pagination->pageSize = 10;
        $indicators55->sort->defaultOrder = ['id' => SORT_ASC];

        $indicators56 = $searchModel->searchIndicators56();
        $indicators56->pagination->pageSize = 10;
        $indicators56->sort->defaultOrder = ['id' => SORT_ASC];

        $indicators3_2 = $searchModel->searchIndicators3_2();
        $indicators3_2->pagination->pageSize = 10;
        $indicators3_2->sort->defaultOrder = ['id' => SORT_ASC];

        $indicators3_3 = $searchModel->searchIndicators3_3();
        $indicators3_3->pagination->pageSize = 10;
        $indicators3_3->sort->defaultOrder = ['id' => SORT_ASC];

        $indicators3_4 = $searchModel->searchIndicators3_4();
        $indicators3_4->pagination->pageSize = 10;
        $indicators3_4->sort->defaultOrder = ['id' => SORT_ASC];

        $indicators3_5 = $searchModel->searchIndicators3_5();
        $indicators3_5->pagination->pageSize = 10;
        $indicators3_5->sort->defaultOrder = ['id' => SORT_ASC];

        $indicators3_6 = $searchModel->searchIndicators3_6();
        $indicators3_6->pagination->pageSize = 10;
        $indicators3_6->sort->defaultOrder = ['id' => SORT_ASC];

        $indicators3_7 = $searchModel->searchIndicators3_7();
        $indicators3_7->pagination->pageSize = 10;
        $indicators3_7->sort->defaultOrder = ['id' => SORT_ASC];

        $indicators3_8 = $searchModel->searchIndicators3_8();
        $indicators3_8->pagination->pageSize = 10;
        $indicators3_8->sort->defaultOrder = ['id' => SORT_ASC];

        $indicators3_9 = $searchModel->searchIndicators3_9();
        $indicators3_9->pagination->pageSize = 10;
        $indicators3_9->sort->defaultOrder = ['id' => SORT_ASC];

        $indicators4_1 = $searchModel->searchIndicators4_1();
        $indicators4_1->pagination->pageSize = 10;
        $indicators4_1->sort->defaultOrder = ['id' => SORT_ASC];

        $indicators4_2 = $searchModel->searchIndicators4_2();
        $indicators4_2->pagination->pageSize = 10;
        $indicators4_2->sort->defaultOrder = ['id' => SORT_ASC];

        $indicators4_3 = $searchModel->searchIndicators4_3();
        $indicators4_3->pagination->pageSize = 10;
        $indicators4_3->sort->defaultOrder = ['id' => SORT_ASC];

        $indicators4_4 = $searchModel->searchIndicators4_4();
        $indicators4_4->pagination->pageSize = 10;
        $indicators4_4->sort->defaultOrder = ['id' => SORT_ASC];

        $indicators4_5 = $searchModel->searchIndicators4_5();
        $indicators4_5->pagination->pageSize = 10;
        $indicators4_5->sort->defaultOrder = ['id' => SORT_ASC];

        $indicators4_6 = $searchModel->searchIndicators4_6();
        $indicators4_6->pagination->pageSize = 10;
        $indicators4_6->sort->defaultOrder = ['id' => SORT_ASC];

        $indicators4_7 = $searchModel->searchIndicators4_7();
        $indicators4_7->pagination->pageSize = 10;
        $indicators4_7->sort->defaultOrder = ['id' => SORT_ASC];

        $indicators4_8 = $searchModel->searchIndicators4_8();
        $indicators4_8->pagination->pageSize = 10;
        $indicators4_8->sort->defaultOrder = ['id' => SORT_ASC];

        $indicators4_9 = $searchModel->searchIndicators4_9();
        $indicators4_9->pagination->pageSize = 10;
        $indicators4_9->sort->defaultOrder = ['id' => SORT_ASC];

        // ไตรมาส 4
        $indicators57 = $searchModel->searchIndicators57();
        $indicators57->pagination->pageSize = 10;
        $indicators57->sort->defaultOrder = ['id' => SORT_ASC];

        $indicators58 = $searchModel->searchIndicators58();
        $indicators58->pagination->pageSize = 10;
        $indicators58->sort->defaultOrder = ['id' => SORT_ASC];

        $indicators59 = $searchModel->searchIndicators59();
        $indicators59->pagination->pageSize = 10;
        $indicators59->sort->defaultOrder = ['id' => SORT_ASC];

        //test send mail
        //$this->sendMail('ikkdev@gmail.com','Your Fullname');

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
            'ha' => $ha,
            'had' => $had,
            'hadc' => $hadc,
            'hadcc' => $hadcc,
            'hade' => $hade,
            'hadea' => $hadea,
            'hadeb' => $hadeb,
            'hadec' => $hadec,
            'haded' => $haded,
            // ไตรมาส 2
            'indicators1' => $indicators1,
            'indicators2' => $indicators2,
            'indicators3' => $indicators3,
            'indicators4' => $indicators4,
            'indicators5' => $indicators5,
            'indicators6' => $indicators6,
            'indicators7' => $indicators7,
            'indicators8' => $indicators8,
            'indicators9' => $indicators9,
            'indicators10' => $indicators10,
            'indicators11' => $indicators11,
            'indicators12' => $indicators12,
            'indicators13' => $indicators13,
            'indicators14' => $indicators14,
            'indicators15' => $indicators15,
            'indicators16' => $indicators16,
            'indicators17' => $indicators17,
            'indicators18' => $indicators18,
            'indicators19' => $indicators19,
            'indicators20' => $indicators20,
            'indicators21' => $indicators21,
            'indicators22' => $indicators22,
            'indicators23' => $indicators23,
            'indicators24' => $indicators24,
            'indicators25' => $indicators25,
            'indicators26' => $indicators26,
            'indicators27' => $indicators27,
            'indicators28' => $indicators28,
            'indicators29' => $indicators29,
            'indicators30' => $indicators30,
            'indicators31' => $indicators31,
            'indicators32' => $indicators32,
            'indicators33' => $indicators33,
            'indicators34' => $indicators34,
            'indicators35' => $indicators35,
            'indicators36' => $indicators36,
            'indicators37' => $indicators37,
            'indicators38' => $indicators38,
            'indicators39' => $indicators39,
            'indicators40' => $indicators40,
            'indicators41' => $indicators41,
            'indicators42' => $indicators42,
            'indicators43' => $indicators43,
            'indicators44' => $indicators44,
            'indicators45' => $indicators45,
            'indicators46' => $indicators46,
            'indicators47' => $indicators47,
            'indicators48' => $indicators48,
            'indicators49' => $indicators49,
            'indicators50' => $indicators50,
            'indicators51' => $indicators51,
            'indicators52' => $indicators52,
            'indicators53' => $indicators53,
            'indicators54' => $indicators54,

            // ไตรมาส 3
            'indicators55' => $indicators55,
            'indicators56' => $indicators56,
            'indicators3_1' => $indicators3_1,
            'indicators3_2' => $indicators3_2,
            'indicators3_3' => $indicators3_3,
            'indicators3_4' => $indicators3_4,
            'indicators3_5' => $indicators3_5,
            'indicators3_6' => $indicators3_6,
            'indicators3_7' => $indicators3_7,
            'indicators3_8' => $indicators3_8,
            'indicators3_9' => $indicators3_9,
            'indicators4_1' => $indicators4_1,
            'indicators4_2' => $indicators4_2,
            'indicators4_3' => $indicators4_3,
            'indicators4_4' => $indicators4_4,
            'indicators4_5' => $indicators4_5,
            'indicators4_6' => $indicators4_6,
            'indicators4_7' => $indicators4_7,
            'indicators4_8' => $indicators4_8,
            'indicators4_9' => $indicators4_9,

            // ไตรมาส 4
            'indicators57' => $indicators57,
            'indicators58' => $indicators58,
            'indicators59' => $indicators59,
        ]);
    }

    public function actionLogin()
    {
        if (!\Yii::$app->user->isGuest) {
            return $this->goHome();
        }

        $model = new LoginForm();
        if ($model->load(Yii::$app->request->post()) && $model->login()) {
            return $this->goBack();
        } else {
            return $this->render('login', [
                'model' => $model,
            ]);
        }
    }

    public function actionLogout()
    {
        Yii::$app->user->logout();

        return $this->goHome();
    }

    public function actionContact()
    {
        $model = new ContactForm();
        if ($model->load(Yii::$app->request->post()) && $model->contact(Yii::$app->params['adminEmail'])) {
            Yii::$app->session->setFlash('contactFormSubmitted');

            return $this->refresh();
        } else {
            return $this->render('contact', [
                'model' => $model,
            ]);
        }
    }

    public function actionAbout()
    {
        return $this->render('about');
    }

    public function sendMail($email, $fullname)
    {
        Yii::$app->mailer
            ->compose('@app/mail/layouts/register', [
                'fullname' => $fullname
            ])
            ->setFrom(['chulatatnarin@gmail.com' => 'Namyuen Hospital'])
            ->setTo($email)
            ->setSubject('ยินดีต้อนรับสู่โรงพยาบาลน้ำยืน 2562')
            ->attach(Yii::getAlias('@webroot') . '/attach/' . 'brochure.pdf')
            //->attach(Yii::getAlias('@webroot').'/attach/'.'Poster.pdf')
            ->send();
    }
}
