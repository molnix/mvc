<?php
require_once $_SERVER['DOCUMENT_ROOT'].'/application/middleware/AdminMiddleware.php';
require_once $_SERVER['DOCUMENT_ROOT'].'/application/models/model_portfolio.php';

class controller_admin_portfolio extends Controller
{
    function __construct()
    {
        $this->middleware[] = new AdminMiddleware();
        parent::__construct();
        $this->model = new Model_Portfolio();
    }

    function action_index()
    {
        $data = $this->model->get_data();
        $this->view->generate('portfolio/admin_portfolio.php', 'template_view.php', $data);
    }

    function action_create()
    {
        $this->view->generate('portfolio/admin_portfolio_creat.php');
    }

    public function action_store()
    {
        $this->model->insert([
            'year'  => $_POST['year'],
            'site'  => $_POST['site'],
            'description'  => $_POST['description'],
        ]);
        redirect('portfolio/admin_portfolio');
    }
    function action_delete2()
    {
        $this->model->delete($_GET['id']);
    
    }





    function action_delete()
    {
        $this->model->delete($_GET['id']);
        redirect('portfolio/admin_portfolio');
    }
    public function action_update()
    {
        $data = $this->model->getById($_GET['id']);
        $this->view->generate('portfolio/admin_portfolio_update.php','template_view.php', $data);
    }
    public function action_setUpdate()
    {
        $this->model->update([
            'idPortfolio' => (int)$_POST['idPortfolio'],
            'site' => $_POST['site'],
            'year'  => $_POST['year'],
            'description'  => $_POST['description'],
        ]);
    }
}