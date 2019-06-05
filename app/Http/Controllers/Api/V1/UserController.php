<?php


namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Api\BaseController;
use App\Model\UserModel;
use Dingo\Api\Routing\Helpers;


class UserController extends BaseController
{

    use Helpers;
    public function FindAll()
    {
        return UserModel::all();
    }

    public function FindOne($id)
    {
//        return UserModel::findOrFail($id);
        $user = UserModel::findOrFail($id);
        return $this->response->item($user, new UserTransformer);
    }
}