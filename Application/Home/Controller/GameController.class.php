<?php
namespace Home\Controller;
use Think\Controller;
class GameController extends Controller {
    function game(){
        layout(false);
        $this->display("index");
    }
}