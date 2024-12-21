<?php

require_once('../Model/voluntariadoModel.php');

class voluntariadoController
{

    public static function ctl_intoVoluntariadosAdmin($data)
    {
        try {
            serviciosModel::into_voluntariadosAdmin($data);
        } catch (Exception $e) {
            echo "Error: " . $e->getMessage();
        }
    }

    public static function ctl_intoVoluntariadoUser($data)
    {
        try {
            serviciosModel::into_voluntariadosUser($data);
        } catch (Exception $e) {
            echo "Error: " . $e->getMessage();
        }
    }

    public static function ctl_getVoluntariados()
    { {
            try {
                return serviciosModel::get_voluntariados();
            } catch (Exception $e) {
                echo "Error: " . $e->getMessage();
            }
        }
    }

    public static function ctl_getVoluntariado($id)
    { {
            try {
                return serviciosModel::get_voluntariado($id);
            } catch (Exception $e) {
                echo "Error: " . $e->getMessage();
            }
        }
    }

    public static function ctl_updateVoluntariado($data)
    { {
            try {
                 serviciosModel::updateVoluntariado($data);

            } catch (Exception $e) {
                echo "Error: " . $e->getMessage();
            }
        }
    }

    public static function ctl_deleteVoluntariado($data)
    { {
            try {
                 serviciosModel::deleteVoluntariado($data);
                 
            } catch (Exception $e) {
                echo "Error: " . $e->getMessage();
            }
        }
    }

}
