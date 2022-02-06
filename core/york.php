<?php


class York{

    public function goto($loaction){
        echo  '<script>window.location="'.$loaction.'"</script>';

    }

    public function say($something){
        echo $something;
    }
}