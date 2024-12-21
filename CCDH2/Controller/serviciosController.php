<?php

require_once('../Model/serviciosModel.php');

class serviciosController
{

    public static function ctl_intoAsesoriasAdmin($data)
    {
        try {
            serviciosModel::into_AsesoriasAdmin($data);
        } catch (Exception $e) {
            echo "Error: " . $e->getMessage();
        }
    }
    public static function ctl_intoAsesoriasUser($data)
    {
        try {
            serviciosModel::into_AsesoriasUser($data);
        } catch (Exception $e) {
            echo "Error: " . $e->getMessage();
        }
    }


    public static function ctl_getAsesorias()
    { {
            try {
                return serviciosModel::get_Asesorias();
            } catch (Exception $e) {
                echo "Error: " . $e->getMessage();
            }
        }
    }

    public static function ctl_getAsesoria($id)
    { {
            try {
                return serviciosModel::get_Asesoria($id);
            } catch (Exception $e) {
                echo "Error: " . $e->getMessage();
            }
        }
    }

    public static function ctl_updateAsesoria($data)
    { {
            try {
                 serviciosModel::updateAsesoria($data);

            } catch (Exception $e) {
                echo "Error: " . $e->getMessage();
            }
        }
    }

    public static function ctl_deleteAsesoria($data)
    { {
            try {
                 serviciosModel::deleteAsesoria($data);
                 
            } catch (Exception $e) {
                echo "Error: " . $e->getMessage();
            }
        }
    }

}











