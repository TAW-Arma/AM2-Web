<?php

class SquadController extends BaseController
{
    public function GetSquadXML($squad_nickname)
    {
        $data['squad']              = Squad::where('nickname', '=', $squad_nickname)->first();
        $data['members']            = SquadMember::where('squad_id', '=', $data['squad']->id)->get();

        $content = View::make('squad.xml', $data);
        return Response::make($content, '200')->header('Content-Type', 'text/xml');
    }
    
    public function GetSquadXSL($squad_nickname)
    {
        $data['squad']              = Squad::where('nickname', '=', $squad_nickname)->first();
        $data['members']            = SquadMember::where('squad_id', '=', $data['squad']->id)->get();

        $content = View::make('squad.xsl', $data);
        return Response::make($content, '200')->header('Content-Type', 'text/xsl');
    }
    
    public function GetSquadDTD($squad_nickname)
    {
        $content =  View::make('squad.dtd');
        return Response::make($content, '200')->header('Content-Type', 'text/dtd');
    }
    
    public function GetSquadCSS($squad_nickname)
    {
        $content =  View::make('squad.css');
        return Response::make($content, '200')->header('Content-Type', 'text/css');
    }
    
    public function GetSquadLogoPAA($squad_nickname)
    {
        $squad      = Squad::where('nickname', '=', $squad_nickname)->first();
        $content    = file_get_contents('/var/www/controlpanel.odin-ict.nl/public' . substr($squad->picture, 0, -4) . '.paa');
        return Response::make($content, '200');
    }
    
    public function GetSquadLogoPNG($squad_nickname)
    {
        $squad      = Squad::where('nickname', '=', $squad_nickname)->first();
        $content    = file_get_contents('/var/www/controlpanel.odin-ict.nl/public' . $squad->picture);
        return Response::make($content, '200')->header('Content-Type', 'image/jpeg');
    }
}
