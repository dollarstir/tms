<?
function view($path,array $data=[]){
        func_get_args();
        
        require __DIR__.'/../'.$path;
    
    }