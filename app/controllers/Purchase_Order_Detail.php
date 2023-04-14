<?php  
class Purchase_Order_Detail extends Controller{
    public $__model, $__request, $__dataForm;
    private $data = [];
    public function __construct(){
        $this->__model = $this->model("PurchaseOrderDetailModel");
        $this->__request = new Request();
        if(isLogin()){
            $this->data['sub_data']['soSpGh'] = count($this->__model->getRawModel("select * from cart where user_id = ".isLogin()['user_id'] ." group by product_id,size_id"));
        }
    }
    public function index($idHD = null){
        if(isLogin()){
            if(empty($idHD)){
                if(!empty($_GET["idhd"])){
                    $idHD = $_GET['idhd'];
                }
                else{
                    Response::redirect(HOST_ROOT.'/shop');
                }
            }
            $user_id = isLogin()['user_id'];
            $this->data["sub_data"]['title'] = "Xem lai Chi tiet hoa don";
            $this->data['content'] = 'blocks/Purchase_Order_Detail';
            $this->data["sub_data"]["dsCthd"] = $this->__model->getCTHD($idHD);
            $this->renderView('layouts/client_layout',$this->data);
        }
        else{
            Response::redirect(HOST_ROOT.'/shop');
        }
    }
}


?>