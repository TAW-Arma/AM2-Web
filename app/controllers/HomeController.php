<?php

class HomeController extends BaseController
{
    protected $layout = 'layouts.public';

    public function GetIndex()
    {
        $data['public_servers']         = Server::with('server_cfg', 'server_basic_cfg', 'server_profile', 'server_dificulty_recruit','server_dificulty_regular','server_dificulty_veteran','server_dificulty_mercenary')->where('private_password', '=', '')->orderBy('name', 'asc')->get();

        $this->layout->title            = 'TAW.net - EU - ArmA Division';
        $this->layout->content          = View::make('home.index', $data);

        return $this->layout->render();
    }
}
