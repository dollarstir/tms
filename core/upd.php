<?php

class Upd extends Database
{
    public function update($table, $records, $target= '',$files = null,$uploadto ='upload')
    {
        try {
            $vu = '';
            $flag = false;
            if (!is_null($files)) {
                if (count($files) > 0) {
                    foreach ($files as $name => $file) {
                        if ($flag) {
                            break;
                        } elseif ($file['size'] <= 0) {
                            break;
                        }
                        $oldfilename = $file['name'];
                        $filetype = array_reverse(explode('/', $file['type']))[0];
                        $newfilename = time().'.'.$filetype;
                        if (move_uploaded_file($file['tmp_name'], $uploadto.'/'.$newfilename)) {
                            $records[$name] = $newfilename;
                        } else {
                            $flag = true;
                        }
                    }
                }
            }

            if(!$flag){

                foreach ($records as $key => $value) {
                    $vu .= $key.'= :'.$key.',';
                }
                $vu = rtrim($vu, ',');
                $up = $this->conn->prepare("UPDATE $table SET $vu WHERE $target");
                // var_dump($up);
                foreach ($records as $key => $value) {
                    $up->bindValue(':'.$key, $value);
                }
                if ($up->execute()) {
                    $msg = 'Updated Successfully';
                } else {
                    $msg = 'Update Failed';
                }

            }
        } catch (PDOException $e) {
            $msg = 'ERROR: '.$e->getMessage();
        }

        return $msg;
    }
}
