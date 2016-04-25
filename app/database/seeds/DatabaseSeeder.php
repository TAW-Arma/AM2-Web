<?php

class DatabaseSeeder extends Seeder {

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Eloquent::unguard();

        $this->call('UserTableSeeder');
        $this->call('SquadTableSeeder');
        $this->call('ServerTableSeeder');
    }

}

class UserTableSeeder extends Seeder {

    public function run()
    {
        $permission['see_dashboard']                        = new Permission;
        $permission['see_dashboard']->name                  = 'see_dashboard';
        $permission['see_dashboard']->description           = 'See Dashboard';
        $permission['see_dashboard']->save();

        $permission['see_security']                         = new Permission;
        $permission['see_security']->name                   = 'see_security';
        $permission['see_security']->description            = 'See Security';
        $permission['see_security']->save();

        $permission['see_user']                             = new Permission;
        $permission['see_user']->name                       = 'see_user';
        $permission['see_user']->description                = 'See User';
        $permission['see_user']->save();

        $permission['create_user']                          = new Permission;
        $permission['create_user']->name                    = 'create_user';
        $permission['create_user']->description             = 'Create User';
        $permission['create_user']->save();

        $permission['update_user']                          = new Permission;
        $permission['update_user']->name                    = 'update_user';
        $permission['update_user']->description             = 'Update User';
        $permission['update_user']->save();

        $permission['delete_user']                          = new Permission;
        $permission['delete_user']->name                    = 'delete_user';
        $permission['delete_user']->description             = 'Delete User';
        $permission['delete_user']->save();

        $permission['see_role']                             = new Permission;
        $permission['see_role']->name                       = 'see_role';
        $permission['see_role']->description                = 'See Role';
        $permission['see_role']->save();

        $permission['create_role']                          = new Permission;
        $permission['create_role']->name                    = 'create_role';
        $permission['create_role']->description             = 'Create Role';
        $permission['create_role']->save();

        $permission['update_role']                          = new Permission;
        $permission['update_role']->name                    = 'update_role';
        $permission['update_role']->description             = 'Update Role';
        $permission['update_role']->save();

        $permission['delete_role']                          = new Permission;
        $permission['delete_role']->name                    = 'delete_role';
        $permission['delete_role']->description             = 'Delete Role';
        $permission['delete_role']->save();

        $permission['see_permission']                       = new Permission;
        $permission['see_permission']->name                 = 'see_permission';
        $permission['see_permission']->description          = 'See Permission';
        $permission['see_permission']->save();

        $permission['create_permission']                    = new Permission;
        $permission['create_permission']->name              = 'create_permission';
        $permission['create_permission']->description       = 'Create Permission';
        $permission['create_permission']->save();

        $permission['update_permission']                    = new Permission;
        $permission['update_permission']->name              = 'update_permission';
        $permission['update_permission']->description       = 'Update Permission';
        $permission['update_permission']->save();

        $permission['delete_permission']                    = new Permission;
        $permission['delete_permission']->name              = 'delete_permission';
        $permission['delete_permission']->description       = 'Delete Permission';
        $permission['delete_permission']->save();

        $permission['see_server']                             = new Permission;
        $permission['see_server']->name                       = 'see_server';
        $permission['see_server']->description                = 'See Server';
        $permission['see_server']->save();

        $permission['create_server']                          = new Permission;
        $permission['create_server']->name                    = 'create_server';
        $permission['create_server']->description             = 'Create Server';
        $permission['create_server']->save();

        $permission['update_server']                          = new Permission;
        $permission['update_server']->name                    = 'update_server';
        $permission['update_server']->description             = 'Update Server';
        $permission['update_server']->save();

        $permission['delete_server']                          = new Permission;
        $permission['delete_server']->name                    = 'delete_server';
        $permission['delete_server']->description             = 'Delete Server';
        $permission['delete_server']->save();

        $permission['manage_server']                          = new Permission;
        $permission['manage_server']->name                    = 'manage_server';
        $permission['manage_server']->description             = 'Manage Server';
        $permission['manage_server']->save();

        $permission['see_squad']                             = new Permission;
        $permission['see_squad']->name                       = 'see_squad';
        $permission['see_squad']->description                = 'See Squad';
        $permission['see_squad']->save();

        $permission['create_squad']                          = new Permission;
        $permission['create_squad']->name                    = 'create_squad';
        $permission['create_squad']->description             = 'Create Squad';
        $permission['create_squad']->save();

        $permission['update_squad']                          = new Permission;
        $permission['update_squad']->name                    = 'update_squad';
        $permission['update_squad']->description             = 'Update Squad';
        $permission['update_squad']->save();

        $permission['delete_squad']                          = new Permission;
        $permission['delete_squad']->name                    = 'delete_squad';
        $permission['delete_squad']->description             = 'Delete Squad';
        $permission['delete_squad']->save();

        $permission['manage_squad']                          = new Permission;
        $permission['manage_squad']->name                    = 'manage_squad';
        $permission['manage_squad']->description             = 'Manage Squad';
        $permission['manage_squad']->save();

        $role['administrators']                             = new Role;
        $role['administrators']->name                       = 'administrators';
        $role['administrators']->description                = 'Administrators';
        $role['administrators']->level                      = 1;
        $role['administrators']->save();
        $role['administrators']->permissions()->sync(
        [
            $permission['see_dashboard']->id,
            $permission['see_security']->id,
            $permission['see_user']->id,
            $permission['create_user']->id,
            $permission['update_user']->id,
            $permission['delete_user']->id,
            $permission['see_role']->id,
            $permission['create_role']->id,
            $permission['update_role']->id,
            $permission['delete_role']->id,
            $permission['see_permission']->id,
            $permission['create_permission']->id,
            $permission['update_permission']->id,
            $permission['delete_permission']->id,
            $permission['see_server']->id,
            $permission['create_server']->id,
            $permission['update_server']->id,
            $permission['delete_server']->id,
            $permission['manage_server']->id,
            $permission['see_squad']->id,
            $permission['create_squad']->id,
            $permission['update_squad']->id,
            $permission['delete_squad']->id,
            $permission['manage_squad']->id
        ]);
        $role['administrators']->save();

        $role['squad_leaders']                              = new Role;
        $role['squad_leaders']->name                        = 'squad_leaders';
        $role['squad_leaders']->description                 = 'Squad Leaders';
        $role['squad_leaders']->level                       = 7;
        $role['squad_leaders']->save();
        $role['squad_leaders']->permissions()->sync(
        [
            $permission['see_dashboard']->id,
            $permission['see_server']->id,
            $permission['manage_server']->id,
            $permission['see_squad']->id,
            $permission['manage_squad']->id
        ]);
        $role['squad_leaders']->save();

        $user['feraldude']                                  = new User;
        $user['feraldude']->email                           = 'feraldude@taw.net';
        $user['feraldude']->username                        = 'feraldude';
        $user['feraldude']->password                        = '0p3r@t!0n';
        $user['feraldude']->verified                        = 1;
        $user['feraldude']->disabled                        = 0;
        $user['feraldude']->save();
        $user['feraldude']->roles()->sync(
        [
            $role['administrators']->id
        ]);
        $user['feraldude']->save();

        $user['aeroson']                                    = new User;
        $user['aeroson']->email                             = 'aeroson@taw.net';
        $user['aeroson']->username                          = 'aeroson';
        $user['aeroson']->password                          = 'welcome1234';
        $user['aeroson']->verified                          = 1;
        $user['aeroson']->disabled                          = 0;
        $user['aeroson']->save();
        $user['aeroson']->roles()->sync(
        [
            $role['administrators']->id
        ]);
        $user['aeroson']->save();

        $user['cloudstalker']                               = new User;
        $user['cloudstalker']->email                        = 'cloudstalker@taw.net';
        $user['cloudstalker']->username                     = 'cloudstalker';
        $user['cloudstalker']->password                     = 'welcome1234';
        $user['cloudstalker']->verified                     = 1;
        $user['cloudstalker']->disabled                     = 0;
        $user['cloudstalker']->save();
        $user['cloudstalker']->roles()->sync(
        [
            $role['administrators']->id
        ]);
        $user['cloudstalker']->save();

        $user['juvenis']                                    = new User;
        $user['juvenis']->email                             = 'juvenis@taw.net';
        $user['juvenis']->username                          = 'juvenis';
        $user['juvenis']->password                          = 'AcoUbJOYlxKtS00f';
        $user['juvenis']->verified                          = 1;
        $user['juvenis']->disabled                          = 0;
        $user['juvenis']->save();
        $user['juvenis']->roles()->sync(
        [
            $role['administrators']->id
        ]);
        $user['juvenis']->save();

        $user['samblues']                                   = new User;
        $user['samblues']->email                            = 'samblues@taw.net';
        $user['samblues']->username                         = 'samblues';
        $user['samblues']->password                         = 'nZ6OpPRCQONG1xoU';
        $user['samblues']->verified                         = 1;
        $user['samblues']->disabled                         = 0;
        $user['samblues']->save();
        $user['samblues']->roles()->sync(
        [
            $role['administrators']->id
        ]);
        $user['samblues']->save();

        $user['mavericksabre']                              = new User;
        $user['mavericksabre']->email                       = 'mavericksabre@taw.net';
        $user['mavericksabre']->username                    = 'mavericksabre';
        $user['mavericksabre']->password                    = '4AleEH1LnRezSFvS';
        $user['mavericksabre']->verified                    = 1;
        $user['mavericksabre']->disabled                    = 0;
        $user['mavericksabre']->save();
        $user['mavericksabre']->roles()->sync(
        [
            $role['administrators']->id
        ]);
        $user['mavericksabre']->save();

        $user['fijapowa']                                   = new User;
        $user['fijapowa']->email                            = 'fijapowa@taw.net';
        $user['fijapowa']->username                         = 'fijapowa';
        $user['fijapowa']->password                         = 'x2roBIo7sGTEtssa';
        $user['fijapowa']->verified                         = 1;
        $user['fijapowa']->disabled                         = 0;
        $user['fijapowa']->save();
        $user['fijapowa']->roles()->sync(
        [
            $role['squad_leaders']->id
        ]);
        $user['fijapowa']->save();

        $user['wargamer']                                   = new User;
        $user['wargamer']->email                            = 'wargamer@taw.net';
        $user['wargamer']->username                         = 'wargamer';
        $user['wargamer']->password                         = 'nrGSf6qPsexyoqfP';
        $user['wargamer']->verified                         = 1;
        $user['wargamer']->disabled                         = 0;
        $user['wargamer']->save();
        $user['wargamer']->roles()->sync(
        [
            $role['squad_leaders']->id
        ]);
        $user['wargamer']->save();

        $user['dutchwarrior']                               = new User;
        $user['dutchwarrior']->email                        = 'dutchwarrior@taw.net';
        $user['dutchwarrior']->username                     = 'dutchwarrior';
        $user['dutchwarrior']->password                     = '6BLEvVLnth3pNCUS';
        $user['dutchwarrior']->verified                     = 1;
        $user['dutchwarrior']->disabled                     = 0;
        $user['dutchwarrior']->save();
        $user['dutchwarrior']->roles()->sync(
        [
            $role['squad_leaders']->id
        ]);
        $user['dutchwarrior']->save();

        $user['naffi']                                      = new User;
        $user['naffi']->email                               = 'naffi@taw.net';
        $user['naffi']->username                            = 'naffi';
        $user['naffi']->password                            = '0LYmW7ngOoDmwVg6';
        $user['naffi']->verified                            = 1;
        $user['naffi']->disabled                            = 0;
        $user['naffi']->save();
        $user['naffi']->roles()->sync(
        [
            $role['squad_leaders']->id
        ]);
        $user['naffi']->save();

        $user['zlipnit']                                    = new User;
        $user['zlipnit']->email                             = 'zlipnit@taw.net';
        $user['zlipnit']->username                          = 'zlipnit';
        $user['zlipnit']->password                          = 'sXnC3B4PDo4k83Fe';
        $user['zlipnit']->verified                          = 1;
        $user['zlipnit']->disabled                          = 0;
        $user['zlipnit']->save();
        $user['zlipnit']->roles()->sync(
        [
            $role['squad_leaders']->id
        ]);
        $user['zlipnit']->save();

        $user['tbone']                                      = new User;
        $user['tbone']->email                               = 'tbone@taw.net';
        $user['tbone']->username                            = 'tbone';
        $user['tbone']->password                            = 'IVEZgCjQAWN7UkMo';
        $user['tbone']->verified                            = 1;
        $user['tbone']->disabled                            = 0;
        $user['tbone']->save();
        $user['tbone']->roles()->sync(
        [
            $role['squad_leaders']->id
        ]);
        $user['tbone']->save();

        $user['mzone']                                      = new User;
        $user['mzone']->email                               = 'mzone@taw.net';
        $user['mzone']->username                            = 'mzone';
        $user['mzone']->password                            = 'x2roBIo7sGTEtssa';
        $user['mzone']->verified                            = 1;
        $user['mzone']->disabled                            = 0;
        $user['mzone']->save();
        $user['mzone']->roles()->sync(
        [
            $role['squad_leaders']->id
        ]);
        $user['mzone']->save();
    }
}

class SquadTableSeeder extends Seeder
{
    public function run()
    {
        $user                                               = [];

        $user['feraldude']                                  = User::where('username', '=', 'feraldude')->first();
        $user['aeroson']                                    = User::where('username', '=', 'aeroson')->first();
        $user['cloudstalker']                               = User::where('username', '=', 'cloudstalker')->first();
        $user['juvenis']                                    = User::where('username', '=', 'juvenis')->first();
        $user['samblues']                                   = User::where('username', '=', 'samblues')->first();
        $user['mavericksabre']                              = User::where('username', '=', 'mavericksabre')->first();
        $user['fijapowa']                                   = User::where('username', '=', 'fijapowa')->first();
        $user['wargamer']                                   = User::where('username', '=', 'wargamer')->first();
        $user['dutchwarrior']                               = User::where('username', '=', 'dutchwarrior')->first();
        $user['naffi']                                      = User::where('username', '=', 'naffi')->first();
        $user['zlipnit']                                    = User::where('username', '=', 'zlipnit')->first();
        $user['tbone']                                      = User::where('username', '=', 'tbone')->first();
        $user['mzone']                                      = User::where('username', '=', 'mzone')->first();

        $squad                                              = [];
        $squad_member                                       = [];

        #################################################################################
        ## ALPHA SQUAD ##################################################################
        #################################################################################
        $squad['aplha']                                     = new Squad;
        $squad['aplha']->nickname                           = 'taw-alpha';
        $squad['aplha']->name                               = 'A - Alpacas';
        $squad['aplha']->email                              = 'fijapowa@taw.net';
        $squad['aplha']->web                                = 'http://taw.net/unit/1347.aspx';
        $squad['aplha']->picture                            = '/assets/modules/squad/taw-alpha.paa';
        $squad['aplha']->title                              = 'TAW - A - Alpacas';
        $squad['aplha']->save();
        $squad['aplha']->users()->sync(
        [
            $user['fijapowa']->id
        ]);
        #################################################################################

        #################################################################################
        #- MEMBERS ---------------------------------------------------------------------#
        #################################################################################
        $squad_member['fijapowa']                           = new SquadMember;
        $squad_member['fijapowa']->player_id                = '76561198044447933';
        $squad_member['fijapowa']->nickname                 = 'Fijapowa [AM 2SL]';
        $squad_member['fijapowa']->name                     = 'Fijapowa';
        $squad_member['fijapowa']->email                    = 'fijapowa@taw.net';
        $squad_member['fijapowa']->icq                      = 'Alpha Team - Squad Leader';
        $squad_member['fijapowa']->remark                   = 'Join us at TAW.net';
        $squad_member['fijapowa']->squad()->associate($squad['aplha']);
        $squad_member['fijapowa']->save();

        $squad_member['alexcouper']                         = new SquadMember;
        $squad_member['alexcouper']->player_id              = '';
        $squad_member['alexcouper']->nickname               = 'AlexCouper [AM 2FL]';
        $squad_member['alexcouper']->name                   = 'AlexCouper';
        $squad_member['alexcouper']->email                  = 'alexcouper@taw.net';
        $squad_member['alexcouper']->icq                    = 'Alpha Team - Fireteam Leader';
        $squad_member['alexcouper']->remark                 = 'Join us at TAW.net';
        $squad_member['alexcouper']->squad()->associate($squad['aplha']);
        $squad_member['alexcouper']->save();

        $squad_member['dostojetski']                        = new SquadMember;
        $squad_member['dostojetski']->player_id             = '76561197966688762';
        $squad_member['dostojetski']->nickname              = 'Dostojetski [AM 2]';
        $squad_member['dostojetski']->name                  = 'Dostojetski';
        $squad_member['dostojetski']->email                 = 'dostojetski@taw.net';
        $squad_member['dostojetski']->icq                   = 'Alpha Team - Medic';
        $squad_member['dostojetski']->remark                = 'Join us at TAW.net';
        $squad_member['dostojetski']->squad()->associate($squad['aplha']);
        $squad_member['dostojetski']->save();

        $squad_member['martybadger']                        = new SquadMember;
        $squad_member['martybadger']->player_id             = '76561197991383267';
        $squad_member['martybadger']->nickname              = 'MartyBadger [AM 2]';
        $squad_member['martybadger']->name                  = 'MartyBadger';
        $squad_member['martybadger']->email                 = 'martybadger@taw.net';
        $squad_member['martybadger']->icq                   = 'Alpha Team - Medic';
        $squad_member['martybadger']->remark                = 'Join us at TAW.net';
        $squad_member['martybadger']->squad()->associate($squad['aplha']);
        $squad_member['martybadger']->save();

        $squad_member['kingbee']                            = new SquadMember;
        $squad_member['kingbee']->player_id                 = '76561198061658214';
        $squad_member['kingbee']->nickname                  = 'KingBee [AM 2]';
        $squad_member['kingbee']->name                      = 'KingBee';
        $squad_member['kingbee']->email                     = 'kingbee@taw.net';
        $squad_member['kingbee']->icq                       = 'Alpha Team - Designated Marksmen / Anti Air';
        $squad_member['kingbee']->remark                    = 'Join us at TAW.net';
        $squad_member['kingbee']->squad()->associate($squad['aplha']);
        $squad_member['kingbee']->save();

        $squad_member['spheex']                             = new SquadMember;
        $squad_member['spheex']->player_id                  = '76561198009071060';
        $squad_member['spheex']->nickname                   = 'Spheex [AM 2]';
        $squad_member['spheex']->name                       = 'Spheex';
        $squad_member['spheex']->email                      = 'spheex@taw.net';
        $squad_member['spheex']->icq                        = 'Alpha Team - Designated Marksmen / Anti Air';
        $squad_member['spheex']->remark                     = 'Join us at TAW.net';
        $squad_member['spheex']->squad()->associate($squad['aplha']);
        $squad_member['spheex']->save();

        $squad_member['mcflaw']                             = new SquadMember;
        $squad_member['mcflaw']->player_id                  = '76561197993571682';
        $squad_member['mcflaw']->nickname                   = 'mcFlaw [AM 2]';
        $squad_member['mcflaw']->name                       = 'mcFlaw';
        $squad_member['mcflaw']->email                      = 'mcflaw@taw.net';
        $squad_member['mcflaw']->icq                        = 'Alpha Team - Anti Tank';
        $squad_member['mcflaw']->remark                     = 'Join us at TAW.net';
        $squad_member['mcflaw']->squad()->associate($squad['aplha']);
        $squad_member['mcflaw']->save();

        $squad_member['posseidon']                          = new SquadMember;
        $squad_member['posseidon']->player_id               = '76561198018604313';
        $squad_member['posseidon']->nickname                = 'posseidon [AM 2]';
        $squad_member['posseidon']->name                    = 'Posseidon';
        $squad_member['posseidon']->email                   = 'posseidon@taw.net';
        $squad_member['posseidon']->icq                     = 'Alpha Team - Machine Gunner';
        $squad_member['posseidon']->remark                  = 'Join us at TAW.net';
        $squad_member['posseidon']->squad()->associate($squad['aplha']);
        $squad_member['posseidon']->save();

        $squad_member['xsage']                              = new SquadMember;
        $squad_member['xsage']->player_id                   = '76561198067161690';
        $squad_member['xsage']->nickname                    = 'Xsage [AM 2SO]';
        $squad_member['xsage']->name                        = 'Xsage';
        $squad_member['xsage']->email                       = 'xsage@taw.net';
        $squad_member['xsage']->icq                         = 'Alpha Team - Machine Gunner';
        $squad_member['xsage']->remark                      = 'Join us at TAW.net';
        $squad_member['xsage']->squad()->associate($squad['aplha']);
        $squad_member['xsage']->save();

        $squad_member['gmjones']                            = new SquadMember;
        $squad_member['gmjones']->player_id                 = '76561198169145030';
        $squad_member['gmjones']->nickname                  = 'gmjones [AM 2]';
        $squad_member['gmjones']->name                      = 'gmjones';
        $squad_member['gmjones']->email                     = 'gmjones@taw.net';
        $squad_member['gmjones']->icq                       = 'Alpha Team - Anti Tank';
        $squad_member['gmjones']->remark                    = 'Join us at TAW.net';
        $squad_member['gmjones']->squad()->associate($squad['aplha']);
        $squad_member['gmjones']->save();

        $squad_member['aleksander']                         = new SquadMember;
        $squad_member['aleksander']->player_id              = '76561198030315708';
        $squad_member['aleksander']->nickname               = 'Aleksander [AM 2TI]';
        $squad_member['aleksander']->name                   = 'Aleksander';
        $squad_member['aleksander']->email                  = 'aleksander@taw.net';
        $squad_member['aleksander']->icq                    = 'Alpha Team - Reserve';
        $squad_member['aleksander']->remark                 = 'Join us at TAW.net';
        $squad_member['aleksander']->squad()->associate($squad['aplha']);
        $squad_member['aleksander']->save();
        #################################################################################







        #################################################################################
        ## BRAVO SQUAD ##################################################################
        #################################################################################
        $squad['bravo']                                     = new Squad;
        $squad['bravo']->nickname                           = 'taw-bravo';
        $squad['bravo']->name                               = 'B - Bulldogs';
        $squad['bravo']->email                              = 'wargamer@taw.net';
        $squad['bravo']->web                                = 'http://taw.net/unit/1785.aspx';
        $squad['bravo']->picture                            = '/assets/modules/squad/taw-bravo.paa';
        $squad['bravo']->title                              = 'TAW - B - Bulldogs';
        $squad['bravo']->save();
        $squad['bravo']->users()->sync(
        [
            $user['wargamer']->id
        ]);
        #################################################################################

        #################################################################################
        #- MEMBERS ---------------------------------------------------------------------#
        #################################################################################
        $squad_member['wargamer']                           = new SquadMember;
        $squad_member['wargamer']->player_id                = '76561198078206411';
        $squad_member['wargamer']->nickname                 = 'WarGamer [AM 2SL]';
        $squad_member['wargamer']->name                     = 'WarGamer';
        $squad_member['wargamer']->email                    = 'wargamer@taw.net';
        $squad_member['wargamer']->icq                      = 'Bravo Team - Squad Leader';
        $squad_member['wargamer']->remark                   = 'Join us at TAW.net';
        $squad_member['wargamer']->squad()->associate($squad['bravo']);
        $squad_member['wargamer']->save();

        $squad_member['alexnsl']                            = new SquadMember;
        $squad_member['alexnsl']->player_id                 = '76561197993699850';
        $squad_member['alexnsl']->nickname                  = 'AlexNSL [AM 2FL]';
        $squad_member['alexnsl']->name                      = 'AlexNSL';
        $squad_member['alexnsl']->email                     = 'alexnsl@taw.net';
        $squad_member['alexnsl']->icq                       = 'Bravo Team - Fireteam Leader';
        $squad_member['alexnsl']->remark                    = 'Join us at TAW.net';
        $squad_member['alexnsl']->squad()->associate($squad['bravo']);
        $squad_member['alexnsl']->save();

        $squad_member['agentjaded']                         = new SquadMember;
        $squad_member['agentjaded']->player_id              = '76561197976195751';
        $squad_member['agentjaded']->nickname               = 'AgentJaded [AM 2]';
        $squad_member['agentjaded']->name                   = 'AgentJaded';
        $squad_member['agentjaded']->email                  = 'agentjaded@taw.net';
        $squad_member['agentjaded']->icq                    = 'Bravo Team - Medic';
        $squad_member['agentjaded']->remark                 = 'Join us at TAW.net';
        $squad_member['agentjaded']->squad()->associate($squad['bravo']);
        $squad_member['agentjaded']->save();

        $squad_member['feraldude']                          = new SquadMember;
        $squad_member['feraldude']->player_id               = '76561198026339593';
        $squad_member['feraldude']->nickname                = 'FeralDude [AM 2ST]';
        $squad_member['feraldude']->name                    = 'FeralDude';
        $squad_member['feraldude']->email                   = 'feraldude@taw.net';
        $squad_member['feraldude']->icq                     = 'Bravo Team - Medic';
        $squad_member['feraldude']->remark                  = 'Join us at TAW.net';
        $squad_member['feraldude']->squad()->associate($squad['bravo']);
        $squad_member['feraldude']->save();

        $squad_member['balduin']                            = new SquadMember;
        $squad_member['balduin']->player_id                 = '';
        $squad_member['balduin']->nickname                  = 'Balduin [AM 2]';
        $squad_member['balduin']->name                      = 'Balduin';
        $squad_member['balduin']->email                     = 'balduin@taw.net';
        $squad_member['balduin']->icq                       = 'Bravo Team - Anti Tank';
        $squad_member['balduin']->remark                    = 'Join us at TAW.net';
        $squad_member['balduin']->squad()->associate($squad['bravo']);
        $squad_member['balduin']->save();

        $squad_member['zorr']                               = new SquadMember;
        $squad_member['zorr']->player_id                    = '76561197993222765';
        $squad_member['zorr']->nickname                     = 'Zorr [AM 2]';
        $squad_member['zorr']->name                         = 'Zorr';
        $squad_member['zorr']->email                        = 'zorr@taw.net';
        $squad_member['zorr']->icq                          = 'Bravo Team - Anti Air';
        $squad_member['zorr']->remark                       = 'Join us at TAW.net';
        $squad_member['zorr']->squad()->associate($squad['bravo']);
        $squad_member['zorr']->save();

        $squad_member['joshmazza']                          = new SquadMember;
        $squad_member['joshmazza']->player_id               = '';
        $squad_member['joshmazza']->nickname                = 'JoshMazza [AM 2]';
        $squad_member['joshmazza']->name                    = 'JoshMazza';
        $squad_member['joshmazza']->email                   = 'joshmazza@taw.net';
        $squad_member['joshmazza']->icq                     = 'Bravo Team - Anti Tank';
        $squad_member['joshmazza']->remark                  = 'Join us at TAW.net';
        $squad_member['joshmazza']->squad()->associate($squad['bravo']);
        $squad_member['joshmazza']->save();

        $squad_member['flogard']                            = new SquadMember;
        $squad_member['flogard']->player_id                 = '76561198057370640';
        $squad_member['flogard']->nickname                  = 'Flogard [AM 2TI]';
        $squad_member['flogard']->name                      = 'Flogard';
        $squad_member['flogard']->email                     = 'flogard@taw.net';
        $squad_member['flogard']->icq                       = 'Bravo Team - Machine Gunner';
        $squad_member['flogard']->remark                    = 'Join us at TAW.net';
        $squad_member['flogard']->squad()->associate($squad['bravo']);
        $squad_member['flogard']->save();

        $squad_member['duc']                                = new SquadMember;
        $squad_member['duc']->player_id                     = '76561198008097915';
        $squad_member['duc']->nickname                      = 'Duc [AM 2]';
        $squad_member['duc']->name                          = 'Duc';
        $squad_member['duc']->email                         = 'duc@taw.net';
        $squad_member['duc']->icq                           = 'Bravo Team - Machine Gunner';
        $squad_member['duc']->remark                        = 'Join us at TAW.net';
        $squad_member['duc']->squad()->associate($squad['bravo']);
        $squad_member['duc']->save();

        $squad_member['eggz']                               = new SquadMember;
        $squad_member['eggz']->player_id                    = '76561198033767595';
        $squad_member['eggz']->nickname                     = 'eggz [AM 2]';
        $squad_member['eggz']->name                         = 'eggz';
        $squad_member['eggz']->email                        = 'eggz@taw.net';
        $squad_member['eggz']->icq                          = 'Bravo Team - Reserve';
        $squad_member['eggz']->remark                       = 'Join us at TAW.net';
        $squad_member['eggz']->squad()->associate($squad['bravo']);
        $squad_member['eggz']->save();

        $squad_member['hadesdaman']                         = new SquadMember;
        $squad_member['hadesdaman']->player_id              = '76561198015075150';
        $squad_member['hadesdaman']->nickname               = 'hadesdaman [AM 2]';
        $squad_member['hadesdaman']->name                   = 'hadesdaman';
        $squad_member['hadesdaman']->email                  = 'hadesdaman@taw.net';
        $squad_member['hadesdaman']->icq                    = 'Bravo Team - Reserve';
        $squad_member['hadesdaman']->remark                 = 'Join us at TAW.net';
        $squad_member['hadesdaman']->squad()->associate($squad['bravo']);
        $squad_member['hadesdaman']->save();

        $squad_member['avalon']                             = new SquadMember;
        $squad_member['avalon']->player_id                  = '76561198063128830';
        $squad_member['avalon']->nickname                   = 'Avalon [AM 2]';
        $squad_member['avalon']->name                       = 'Avalon';
        $squad_member['avalon']->email                      = 'avalon@taw.net';
        $squad_member['avalon']->icq                        = 'Bravo Team - Reserve';
        $squad_member['avalon']->remark                     = 'Join us at TAW.net';
        $squad_member['avalon']->squad()->associate($squad['bravo']);
        $squad_member['avalon']->save();
        #################################################################################







        #################################################################################
        ## CHARLIE SQUAD ################################################################
        #################################################################################
        $squad['charlie']                                   = new Squad;
        $squad['charlie']->nickname                         = 'taw-charlie';
        $squad['charlie']->name                             = 'C - Crocodiles';
        $squad['charlie']->email                            = 'dutchwarrior@taw.net';
        $squad['charlie']->web                              = 'http://taw.net/unit/1505.aspx';
        $squad['charlie']->picture                          = '/assets/modules/squad/taw-charlie.paa';
        $squad['charlie']->title                            = 'TAW - C - Crocodiles';
        $squad['charlie']->save();
        $squad['charlie']->users()->sync(
        [
            $user['dutchwarrior']->id
        ]);
        #################################################################################

        #################################################################################
        #- MEMBERS ---------------------------------------------------------------------#
        #################################################################################
        $squad_member['dutchwarrior']                       = new SquadMember;
        $squad_member['dutchwarrior']->player_id            = '';
        $squad_member['dutchwarrior']->nickname             = 'Dutchwarrior [AM 2SL]';
        $squad_member['dutchwarrior']->name                 = 'Dutchwarrior';
        $squad_member['dutchwarrior']->email                = 'dutchwarrior@taw.net';
        $squad_member['dutchwarrior']->icq                  = 'Charlie Team - Squad Leader';
        $squad_member['dutchwarrior']->remark               = 'Join us at TAW.net';
        $squad_member['dutchwarrior']->squad()->associate($squad['charlie']);
        $squad_member['dutchwarrior']->save();

        $squad_member['redwolfproject']                     = new SquadMember;
        $squad_member['redwolfproject']->player_id          = '';
        $squad_member['redwolfproject']->nickname           = 'RedWolfProject [AM 2]';
        $squad_member['redwolfproject']->name               = 'RedWolfProject';
        $squad_member['redwolfproject']->email              = 'redwolfproject@taw.net';
        $squad_member['redwolfproject']->icq                = 'Charlie Team - ';
        $squad_member['redwolfproject']->remark             = 'Join us at TAW.net';
        $squad_member['redwolfproject']->squad()->associate($squad['charlie']);
        $squad_member['redwolfproject']->save();

        $squad_member['cloudstalker']                       = new SquadMember;
        $squad_member['cloudstalker']->player_id            = '76561198060591570';
        $squad_member['cloudstalker']->nickname             = 'CloudStalker [AM 2]';
        $squad_member['cloudstalker']->name                 = 'CloudStalker';
        $squad_member['cloudstalker']->email                = 'cloudstalker@taw.net';
        $squad_member['cloudstalker']->icq                  = 'Charlie Team - ';
        $squad_member['cloudstalker']->remark               = 'Join us at TAW.net';
        $squad_member['cloudstalker']->squad()->associate($squad['charlie']);
        $squad_member['cloudstalker']->save();

        $squad_member['malabeans']                          = new SquadMember;
        $squad_member['malabeans']->player_id               = '';
        $squad_member['malabeans']->nickname                = 'MalaBeans [AM 2]';
        $squad_member['malabeans']->name                    = 'MalaBeans';
        $squad_member['malabeans']->email                   = 'malabeans@taw.net';
        $squad_member['malabeans']->icq                     = 'Charlie Team - ';
        $squad_member['malabeans']->remark                  = 'Join us at TAW.net';
        $squad_member['malabeans']->squad()->associate($squad['charlie']);
        $squad_member['malabeans']->save();

        $squad_member['aeroson']                            = new SquadMember;
        $squad_member['aeroson']->player_id                 = '76561197995822692';
        $squad_member['aeroson']->nickname                  = 'aeroson [AM 2SA]';
        $squad_member['aeroson']->name                      = 'aeroson';
        $squad_member['aeroson']->email                     = 'aeroson@taw.net';
        $squad_member['aeroson']->icq                       = 'Charlie Team - ';
        $squad_member['aeroson']->remark                    = 'Join us at TAW.net';
        $squad_member['aeroson']->squad()->associate($squad['charlie']);
        $squad_member['aeroson']->save();

        $squad_member['ackack']                             = new SquadMember;
        $squad_member['ackack']->player_id                  = '';
        $squad_member['ackack']->nickname                   = 'AckAck [AM 2]';
        $squad_member['ackack']->name                       = 'AckAck';
        $squad_member['ackack']->email                      = 'ackack@taw.net';
        $squad_member['ackack']->icq                        = 'Charlie Team - ';
        $squad_member['ackack']->remark                     = 'Join us at TAW.net';
        $squad_member['ackack']->squad()->associate($squad['charlie']);
        $squad_member['ackack']->save();

        $squad_member['caparajo']                           = new SquadMember;
        $squad_member['caparajo']->player_id                = '';
        $squad_member['caparajo']->nickname                 = 'Caparajo [AM 2}';
        $squad_member['caparajo']->name                     = 'Caparajo';
        $squad_member['caparajo']->email                    = 'caparajo@taw.net';
        $squad_member['caparajo']->icq                      = 'Charlie Team - ';
        $squad_member['caparajo']->remark                   = 'Join us at TAW.net';
        $squad_member['caparajo']->squad()->associate($squad['charlie']);
        $squad_member['caparajo']->save();

        $squad_member['limo']                               = new SquadMember;
        $squad_member['limo']->player_id                    = '';
        $squad_member['limo']->nickname                     = 'Limo [AM 2]';
        $squad_member['limo']->name                         = 'Limo';
        $squad_member['limo']->email                        = 'limo@taw.net';
        $squad_member['limo']->icq                          = 'Charlie Team - ';
        $squad_member['limo']->remark                       = 'Join us at TAW.net';
        $squad_member['limo']->squad()->associate($squad['charlie']);
        $squad_member['limo']->save();

        $squad_member['daz']                                = new SquadMember;
        $squad_member['daz']->player_id                     = '';
        $squad_member['daz']->nickname                      = 'Daz [AM 2]';
        $squad_member['daz']->name                          = 'Daz';
        $squad_member['daz']->email                         = 'daz@taw.net';
        $squad_member['daz']->icq                           = 'Charlie Team - ';
        $squad_member['daz']->remark                        = 'Join us at TAW.net';
        $squad_member['daz']->squad()->associate($squad['charlie']);
        $squad_member['daz']->save();

        $squad_member['tonnecrow']                          = new SquadMember;
        $squad_member['tonnecrow']->player_id               = '';
        $squad_member['tonnecrow']->nickname                = 'Tonnecrow [AM 2]';
        $squad_member['tonnecrow']->name                    = 'Tonnecrow';
        $squad_member['tonnecrow']->email                   = 'tonnecrow@taw.net';
        $squad_member['tonnecrow']->icq                     = 'Charlie Team - ';
        $squad_member['tonnecrow']->remark                  = 'Join us at TAW.net';
        $squad_member['tonnecrow']->squad()->associate($squad['charlie']);
        $squad_member['tonnecrow']->save();
        #################################################################################







        #################################################################################
        ## DELTA SQUAD ##################################################################
        #################################################################################
        $squad['delta']                                     = new Squad;
        $squad['delta']->nickname                           = 'taw-delta';
        $squad['delta']->name                               = 'D - Devils';
        $squad['delta']->email                              = 'naffi@taw.net';
        $squad['delta']->web                                = 'http://taw.net/unit/2577.aspx';
        $squad['delta']->picture                            = '/assets/modules/squad/taw-delta.paa';
        $squad['delta']->title                              = 'TAW - D - Devils';
        $squad['delta']->save();
        $squad['delta']->users()->sync(
        [
            $user['naffi']->id
        ]);
        #################################################################################

        #################################################################################
        #- MEMBERS ---------------------------------------------------------------------#
        #################################################################################
        $squad_member['naffi']                              = new SquadMember;
        $squad_member['naffi']->player_id                   = '76561197966814736';
        $squad_member['naffi']->nickname                    = 'Naffi [AM 2SL]';
        $squad_member['naffi']->name                        = 'Naffi';
        $squad_member['naffi']->email                       = 'naffi@taw.net';
        $squad_member['naffi']->icq                         = 'Delta Team - Squad Leader';
        $squad_member['naffi']->remark                      = 'Join us at TAW.net';
        $squad_member['naffi']->squad()->associate($squad['delta']);
        $squad_member['naffi']->save();

        $squad_member['curt']                               = new SquadMember;
        $squad_member['curt']->player_id                    = '76561198046562196';
        $squad_member['curt']->nickname                     = 'CURT [AM PIO]';
        $squad_member['curt']->name                         = 'CURT';
        $squad_member['curt']->email                        = 'curt@taw.net';
        $squad_member['curt']->icq                          = 'Delta Team - ';
        $squad_member['curt']->remark                       = 'Join us at TAW.net';
        $squad_member['curt']->squad()->associate($squad['delta']);
        $squad_member['curt']->save();

        $squad_member['westie']                             = new SquadMember;
        $squad_member['westie']->player_id                  = '76561198065372755';
        $squad_member['westie']->nickname                   = 'Westie [AM 2DI]';
        $squad_member['westie']->name                       = 'Westie';
        $squad_member['westie']->email                      = 'westie@taw.net';
        $squad_member['westie']->icq                        = 'Delta Team - ';
        $squad_member['westie']->remark                     = 'Join us at TAW.net';
        $squad_member['westie']->squad()->associate($squad['delta']);
        $squad_member['westie']->save();

        $squad_member['denywilco']                          = new SquadMember;
        $squad_member['denywilco']->player_id               = '76561198083381131';
        $squad_member['denywilco']->nickname                = 'DenyWilCo [AM 2DI]';
        $squad_member['denywilco']->name                    = 'DenyWilCo';
        $squad_member['denywilco']->email                   = 'denywilco@taw.net';
        $squad_member['denywilco']->icq                     = 'Delta Team - ';
        $squad_member['denywilco']->remark                  = 'Join us at TAW.net';
        $squad_member['denywilco']->squad()->associate($squad['delta']);
        $squad_member['denywilco']->save();

        $squad_member['henribanaantje']                     = new SquadMember;
        $squad_member['henribanaantje']->player_id          = '76561198042668785';
        $squad_member['henribanaantje']->nickname           = 'HenriBanaantje [AM 2]';
        $squad_member['henribanaantje']->name               = 'HenriBanaantje';
        $squad_member['henribanaantje']->email              = 'henribanaantje@taw.net';
        $squad_member['henribanaantje']->icq                = 'Delta Team - ';
        $squad_member['henribanaantje']->remark             = 'Join us at TAW.net';
        $squad_member['henribanaantje']->squad()->associate($squad['delta']);
        $squad_member['henribanaantje']->save();

        $squad_member['mcdiod']                             = new SquadMember;
        $squad_member['mcdiod']->player_id                  = '76561198044320063';
        $squad_member['mcdiod']->nickname                   = 'McDiod [AM 2]';
        $squad_member['mcdiod']->name                       = 'McDiod';
        $squad_member['mcdiod']->email                      = 'mcdiod@taw.net';
        $squad_member['mcdiod']->icq                        = 'Delta Team - ';
        $squad_member['mcdiod']->remark                     = 'Join us at TAW.net';
        $squad_member['mcdiod']->squad()->associate($squad['delta']);
        $squad_member['mcdiod']->save();

        $squad_member['mistgun']                            = new SquadMember;
        $squad_member['mistgun']->player_id                 = '76561198072550332';
        $squad_member['mistgun']->nickname                  = 'Mistgun [AM 2DI]';
        $squad_member['mistgun']->name                      = 'Mistgun';
        $squad_member['mistgun']->email                     = 'mistgun@taw.net';
        $squad_member['mistgun']->icq                       = 'Delta Team - ';
        $squad_member['mistgun']->remark                    = 'Join us at TAW.net';
        $squad_member['mistgun']->squad()->associate($squad['delta']);
        $squad_member['mistgun']->save();

        $squad_member['fatprincess']                        = new SquadMember;
        $squad_member['fatprincess']->player_id             = '76561198080986769';
        $squad_member['fatprincess']->nickname              = 'FatPrincess [AM 2]';
        $squad_member['fatprincess']->name                  = 'FatPrincess';
        $squad_member['fatprincess']->email                 = 'fatprincess@taw.net';
        $squad_member['fatprincess']->icq                   = 'Delta Team - ';
        $squad_member['fatprincess']->remark                = 'Join us at TAW.net';
        $squad_member['fatprincess']->squad()->associate($squad['delta']);
        $squad_member['fatprincess']->save();

        $squad_member['zebov']                              = new SquadMember;
        $squad_member['zebov']->player_id                   = '76561198060586973';
        $squad_member['zebov']->nickname                    = 'zebov [AM 2]';
        $squad_member['zebov']->name                        = 'zebov';
        $squad_member['zebov']->email                       = 'zebov@taw.net';
        $squad_member['zebov']->icq                         = 'Delta Team - ';
        $squad_member['zebov']->remark                      = 'Join us at TAW.net';
        $squad_member['zebov']->squad()->associate($squad['delta']);
        $squad_member['zebov']->save();

        $squad_member['colen']                              = new SquadMember;
        $squad_member['colen']->player_id                   = '76561198046656368';
        $squad_member['colen']->nickname                    = 'Colen [AM 2]';
        $squad_member['colen']->name                        = 'Colen';
        $squad_member['colen']->email                       = 'colen@taw.net';
        $squad_member['colen']->icq                         = 'Delta Team - ';
        $squad_member['colen']->remark                      = 'Join us at TAW.net';
        $squad_member['colen']->squad()->associate($squad['delta']);
        $squad_member['colen']->save();

        $squad_member['brooks']                             = new SquadMember;
        $squad_member['brooks']->player_id                  = '76561198020469339';
        $squad_member['brooks']->nickname                   = 'Brooks [AM 2]';
        $squad_member['brooks']->name                       = 'Brooks';
        $squad_member['brooks']->email                      = 'brooks@taw.net';
        $squad_member['brooks']->icq                        = 'Delta Team - ';
        $squad_member['brooks']->remark                     = 'Join us at TAW.net';
        $squad_member['brooks']->squad()->associate($squad['delta']);
        $squad_member['brooks']->save();

        $squad_member['potatowarlord']                      = new SquadMember;
        $squad_member['potatowarlord']->player_id           = '';
        $squad_member['potatowarlord']->nickname            = 'Potatowarlord [AM 2]';
        $squad_member['potatowarlord']->name                = 'Potatowarlord';
        $squad_member['potatowarlord']->email               = 'potatowarlord@taw.net';
        $squad_member['potatowarlord']->icq                 = 'Delta Team - ';
        $squad_member['potatowarlord']->remark              = 'Join us at TAW.net';
        $squad_member['potatowarlord']->squad()->associate($squad['delta']);
        $squad_member['potatowarlord']->save();

        $squad_member['powey']                              = new SquadMember;
        $squad_member['powey']->player_id                   = '76561198026631436';
        $squad_member['powey']->nickname                    = 'Powey [AM 2]';
        $squad_member['powey']->name                        = 'Powey';
        $squad_member['powey']->email                       = 'powey@taw.net';
        $squad_member['powey']->icq                         = 'Delta Team - ';
        $squad_member['powey']->remark                      = 'Join us at TAW.net';
        $squad_member['powey']->squad()->associate($squad['delta']);
        $squad_member['powey']->save();
        #################################################################################







        #################################################################################
        ## ECHO SQUAD ###################################################################
        #################################################################################
        $squad['echo']                                      = new Squad;
        $squad['echo']->nickname                            = 'taw-echo';
        $squad['echo']->name                                = 'E - Expendables';
        $squad['echo']->email                               = 'zlipnit@taw.net';
        $squad['echo']->web                                 = 'http://taw.net/unit/3830.aspx';
        $squad['echo']->picture                             = '/assets/modules/squad/taw-echo.paa';
        $squad['echo']->title                               = 'TAW - E - Expendables';
        $squad['echo']->save();
        $squad['echo']->users()->sync(
        [
            $user['zlipnit']->id
        ]);
        #################################################################################

        #################################################################################
        #- MEMBERS ---------------------------------------------------------------------#
        #################################################################################
        $squad_member['zlipnit']                            = new SquadMember;
        $squad_member['zlipnit']->player_id                 = '';
        $squad_member['zlipnit']->nickname                  = 'Zlipnit [AM 2SL]';
        $squad_member['zlipnit']->name                      = 'Zlipnit';
        $squad_member['zlipnit']->email                     = 'zlipnit@taw.net';
        $squad_member['zlipnit']->icq                       = 'Echo Team - Squad Leader';
        $squad_member['zlipnit']->remark                    = 'Join us at TAW.net';
        $squad_member['zlipnit']->squad()->associate($squad['echo']);
        $squad_member['zlipnit']->save();
        #################################################################################







        #################################################################################
        ## FOXTROT SQUAD ################################################################
        #################################################################################
        $squad['foxtrot']                                   = new Squad;
        $squad['foxtrot']->nickname                         = 'taw-foxtrot';
        $squad['foxtrot']->name                             = 'F - Foxtrot';
        $squad['foxtrot']->email                            = 'juvenis@taw.net';
        $squad['foxtrot']->web                              = 'http://taw.net/unit/4102.aspx';
        $squad['foxtrot']->picture                          = '/assets/modules/squad/taw-foxtrot.paa';
        $squad['foxtrot']->title                            = 'TAW - F - Foxtrot';
        $squad['foxtrot']->save();
        $squad['foxtrot']->users()->sync(
        [
            $user['juvenis']->id
        ]);
        #################################################################################

        #################################################################################
        #- MEMBERS ---------------------------------------------------------------------#
        #################################################################################
        $squad_member['juvenis']                            = new SquadMember;
        $squad_member['juvenis']->player_id                 = '76561197996333781';
        $squad_member['juvenis']->nickname                  = 'Juvenis [AM DC]';
        $squad_member['juvenis']->name                      = 'Juvenis';
        $squad_member['juvenis']->email                     = 'juvenis@taw.net';
        $squad_member['juvenis']->icq                       = 'Foxtrot Team - Squad Leader / Division Commander';
        $squad_member['juvenis']->remark                    = 'Join us at TAW.net';
        $squad_member['juvenis']->squad()->associate($squad['foxtrot']);
        $squad_member['juvenis']->save();

        $squad_member['cannas']                             = new SquadMember;
        $squad_member['cannas']->player_id                  = '';
        $squad_member['cannas']->nickname                   = 'Cannas [AM 2FL]';
        $squad_member['cannas']->name                       = 'Cannas';
        $squad_member['cannas']->email                      = 'cannas@taw.net';
        $squad_member['cannas']->icq                        = 'Foxtrot Team - Fireteam Leader';
        $squad_member['cannas']->remark                     = 'Join us at TAW.net';
        $squad_member['cannas']->squad()->associate($squad['foxtrot']);
        $squad_member['cannas']->save();

        $squad_member['agepee']                             = new SquadMember;
        $squad_member['agepee']->player_id                  = '';
        $squad_member['agepee']->nickname                   = 'Agepee [AM 2FL]';
        $squad_member['agepee']->name                       = 'Agepee';
        $squad_member['agepee']->email                      = 'agepee@taw.net';
        $squad_member['agepee']->icq                        = 'Foxtrot Team - Fireteam Leader';
        $squad_member['agepee']->remark                     = 'Join us at TAW.net';
        $squad_member['agepee']->squad()->associate($squad['foxtrot']);
        $squad_member['agepee']->save();

        $squad_member['gamers']                             = new SquadMember;
        $squad_member['gamers']->player_id                  = '76561197998361918';
        $squad_member['gamers']->nickname                   = 'Gamers [AM 2FL]';
        $squad_member['gamers']->name                       = 'Gamers';
        $squad_member['gamers']->email                      = 'gamers@taw.net';
        $squad_member['gamers']->icq                        = 'Foxtrot Team - Medic';
        $squad_member['gamers']->remark                     = 'Join us at TAW.net';
        $squad_member['gamers']->squad()->associate($squad['foxtrot']);
        $squad_member['gamers']->save();

        $squad_member['jerpami']                            = new SquadMember;
        $squad_member['jerpami']->player_id                 = '76561197964461782';
        $squad_member['jerpami']->nickname                  = 'JerPaMi [AM 2]';
        $squad_member['jerpami']->name                      = 'JerPaMi';
        $squad_member['jerpami']->email                     = 'jerpami@taw.net';
        $squad_member['jerpami']->icq                       = 'Foxtrot Team - Medic';
        $squad_member['jerpami']->remark                    = 'Join us at TAW.net';
        $squad_member['jerpami']->squad()->associate($squad['foxtrot']);
        $squad_member['jerpami']->save();

        $squad_member['oconnor']                            = new SquadMember;
        $squad_member['oconnor']->player_id                 = '76561198127129362';
        $squad_member['oconnor']->nickname                  = 'OConnor [AM 2]';
        $squad_member['oconnor']->name                      = 'OConnor';
        $squad_member['oconnor']->email                     = 'oconnor@taw.net';
        $squad_member['oconnor']->icq                       = 'Foxtrot Team - Designated Marksman';
        $squad_member['oconnor']->remark                    = 'Join us at TAW.net';
        $squad_member['oconnor']->squad()->associate($squad['foxtrot']);
        $squad_member['oconnor']->save();

        $squad_member['shadex']                             = new SquadMember;
        $squad_member['shadex']->player_id                  = '';
        $squad_member['shadex']->nickname                   = 'ShadeX [AM 2]';
        $squad_member['shadex']->name                       = 'ShadeX';
        $squad_member['shadex']->email                      = 'shadex@taw.net';
        $squad_member['shadex']->icq                        = 'Foxtrot Team - Machine Gunner';
        $squad_member['shadex']->remark                     = 'Join us at TAW.net';
        $squad_member['shadex']->squad()->associate($squad['foxtrot']);
        $squad_member['shadex']->save();

        $squad_member['robertsmith']                        = new SquadMember;
        $squad_member['robertsmith']->player_id             = '';
        $squad_member['robertsmith']->nickname              = 'RobertSmith [AM 2]';
        $squad_member['robertsmith']->name                  = 'RobertSmith';
        $squad_member['robertsmith']->email                 = 'robertsmith@taw.net';
        $squad_member['robertsmith']->icq                   = 'Foxtrot Team - Machine Gunner';
        $squad_member['robertsmith']->remark                = 'Join us at TAW.net';
        $squad_member['robertsmith']->squad()->associate($squad['foxtrot']);
        $squad_member['robertsmith']->save();

        $squad_member['cuuts']                              = new SquadMember;
        $squad_member['cuuts']->player_id                   = '76561198043053852';
        $squad_member['cuuts']->nickname                    = 'Cuuts [AM 2]';
        $squad_member['cuuts']->name                        = 'Cuuts';
        $squad_member['cuuts']->email                       = 'cuuts@taw.net';
        $squad_member['cuuts']->icq                         = 'Foxtrot Team - Riflemen / Anti Tank / Anti Air';
        $squad_member['cuuts']->remark                      = 'Join us at TAW.net';
        $squad_member['cuuts']->squad()->associate($squad['foxtrot']);
        $squad_member['cuuts']->save();

        $squad_member['mets']                               = new SquadMember;
        $squad_member['mets']->player_id                    = '76561198013613091';
        $squad_member['mets']->nickname                     = 'Mets [AM 2]';
        $squad_member['mets']->name                         = 'Mets';
        $squad_member['mets']->email                        = 'mets@taw.net';
        $squad_member['mets']->icq                          = 'Foxtrot Team - Riflemen / Anti Tank / Anti Air';
        $squad_member['mets']->remark                       = 'Join us at TAW.net';
        $squad_member['mets']->squad()->associate($squad['foxtrot']);
        $squad_member['mets']->save();
        #################################################################################







        #################################################################################
        ## SIERRA SQUAD #################################################################
        #################################################################################
        $squad['sierra']                                    = new Squad;
        $squad['sierra']->nickname                          = 'taw-sierra';
        $squad['sierra']->name                              = 'S - Sierra';
        $squad['sierra']->email                             = 'tbone@taw.net';
        $squad['sierra']->web                               = 'http://taw.net/unit/3517.aspx';
        $squad['sierra']->picture                           = '/assets/modules/squad/taw-sierra.paa';
        $squad['sierra']->title                             = 'TAW - S - Sierra';
        $squad['sierra']->save();
        $squad['sierra']->users()->sync(
        [
            $user['tbone']->id
        ]);
        #################################################################################

        #################################################################################
        #- MEMBERS ---------------------------------------------------------------------#
        #################################################################################
        $squad_member['tbone']                              = new SquadMember;
        $squad_member['tbone']->player_id                   = '76561198061277904';
        $squad_member['tbone']->nickname                    = 'Tbone [AM 2SL]';
        $squad_member['tbone']->name                        = 'Tbone';
        $squad_member['tbone']->email                       = 'tbone@taw.net';
        $squad_member['tbone']->icq                         = 'Sierra Team - Squad Leader';
        $squad_member['tbone']->remark                      = 'Join us at TAW.net';
        $squad_member['tbone']->squad()->associate($squad['sierra']);
        $squad_member['tbone']->save();

        $squad_member['raggy']                              = new SquadMember;
        $squad_member['raggy']->player_id                   = '';
        $squad_member['raggy']->nickname                    = 'Raggy [AM 2]';
        $squad_member['raggy']->name                        = 'Raggy';
        $squad_member['raggy']->email                       = 'raggy@taw.net';
        $squad_member['raggy']->icq                         = 'Sierra Team - Vehicle Commander';
        $squad_member['raggy']->remark                      = 'Join us at TAW.net';
        $squad_member['raggy']->squad()->associate($squad['sierra']);
        $squad_member['raggy']->save();

        $squad_member['wer']                                = new SquadMember;
        $squad_member['wer']->player_id                     = '76561197980225768';
        $squad_member['wer']->nickname                      = 'Wer [AM 2]';
        $squad_member['wer']->name                          = 'Wer';
        $squad_member['wer']->email                         = 'wer@taw.net';
        $squad_member['wer']->icq                           = 'Sierra Team - Member';
        $squad_member['wer']->remark                        = 'Join us at TAW.net';
        $squad_member['wer']->squad()->associate($squad['sierra']);
        $squad_member['wer']->save();

        $squad_member['djdanny']                            = new SquadMember;
        $squad_member['djdanny']->player_id                 = '';
        $squad_member['djdanny']->nickname                  = 'DJDanny [AM 2]';
        $squad_member['djdanny']->name                      = 'DJDanny';
        $squad_member['djdanny']->email                     = 'djdanny@taw.net';
        $squad_member['djdanny']->icq                       = 'Sierra Team - Member';
        $squad_member['djdanny']->remark                    = 'Join us at TAW.net';
        $squad_member['djdanny']->squad()->associate($squad['sierra']);
        $squad_member['djdanny']->save();

        $squad_member['rify']                               = new SquadMember;
        $squad_member['rify']->player_id                    = '76561197996982914';
        $squad_member['rify']->nickname                     = 'Rify [AM 2]';
        $squad_member['rify']->name                         = 'Rify';
        $squad_member['rify']->email                        = 'rify@taw.net';
        $squad_member['rify']->icq                          = 'Sierra Team - Member';
        $squad_member['rify']->remark                       = 'Join us at TAW.net';
        $squad_member['rify']->squad()->associate($squad['sierra']);
        $squad_member['rify']->save();
        #################################################################################







        #################################################################################
        ## ROMEO SQUAD ##################################################################
        #################################################################################
        $squad['romeo']                                     = new Squad;
        $squad['romeo']->nickname                           = 'taw-romeo';
        $squad['romeo']->name                               = 'R - Romeo';
        $squad['romeo']->email                              = 'mzone@taw.net';
        $squad['romeo']->web                                = 'http://taw.net/unit/3756.aspx';
        $squad['romeo']->picture                            = '/assets/modules/squad/taw-romeo.paa';
        $squad['romeo']->title                              = 'TAW - R - Romeo';
        $squad['romeo']->save();
        $squad['romeo']->users()->sync(
        [
            $user['mzone']->id
        ]);
        #################################################################################

        #################################################################################
        #- MEMBERS ---------------------------------------------------------------------#
        #################################################################################
        $squad_member['mzone']                              = new SquadMember;
        $squad_member['mzone']->player_id                   = '76561198027927092';
        $squad_member['mzone']->nickname                    = 'MzONE [AM 2SL]';
        $squad_member['mzone']->name                        = 'MzONE';
        $squad_member['mzone']->email                       = 'mzone@taw.net';
        $squad_member['mzone']->icq                         = 'Romeo Team - Squad Leader';
        $squad_member['mzone']->remark                      = 'Join us at TAW.net';
        $squad_member['mzone']->squad()->associate($squad['romeo']);
        $squad_member['mzone']->save();

        $squad_member['marcverhagen']                       = new SquadMember;
        $squad_member['marcverhagen']->player_id            = '';
        $squad_member['marcverhagen']->nickname             = 'MarcVerhagen [AM 2FL]';
        $squad_member['marcverhagen']->name                 = 'MarcVerhagen';
        $squad_member['marcverhagen']->email                = 'marcverhagen@taw.net';
        $squad_member['marcverhagen']->icq                  = 'Romeo Team - Fireteam Leader';
        $squad_member['marcverhagen']->remark               = 'Join us at TAW.net';
        $squad_member['marcverhagen']->squad()->associate($squad['romeo']);
        $squad_member['marcverhagen']->save();

        $squad_member['soulmasteropus']                     = new SquadMember;
        $squad_member['soulmasteropus']->player_id          = '76561198042511972';
        $squad_member['soulmasteropus']->nickname           = 'SoulMasterOpus [AM 2]';
        $squad_member['soulmasteropus']->name               = 'SoulMasterOpus';
        $squad_member['soulmasteropus']->email              = 'soulmasteropus@taw.net';
        $squad_member['soulmasteropus']->icq                = 'Romeo Team - Member';
        $squad_member['soulmasteropus']->remark             = 'Join us at TAW.net';
        $squad_member['soulmasteropus']->squad()->associate($squad['romeo']);
        $squad_member['soulmasteropus']->save();

        $squad_member['xpwn']                               = new SquadMember;
        $squad_member['xpwn']->player_id                    = '';
        $squad_member['xpwn']->nickname                     = 'Xpwn [AM 2]';
        $squad_member['xpwn']->name                         = 'Xpwn';
        $squad_member['xpwn']->email                        = 'xpwn@taw.net';
        $squad_member['xpwn']->icq                          = 'Romeo Team - Medic';
        $squad_member['xpwn']->remark                       = 'Join us at TAW.net';
        $squad_member['xpwn']->squad()->associate($squad['romeo']);
        $squad_member['xpwn']->save();

        $squad_member['faroenoob']                          = new SquadMember;
        $squad_member['faroenoob']->player_id               = '';
        $squad_member['faroenoob']->nickname                = 'FaroeNoob [AM 2]';
        $squad_member['faroenoob']->name                    = 'FaroeNoob';
        $squad_member['faroenoob']->email                   = '@taw.net';
        $squad_member['faroenoob']->icq                     = 'Romeo Team - Member';
        $squad_member['faroenoob']->remark                  = 'Join us at TAW.net';
        $squad_member['faroenoob']->squad()->associate($squad['romeo']);
        $squad_member['faroenoob']->save();

        $squad_member['solores']                            = new SquadMember;
        $squad_member['solores']->player_id                 = '';
        $squad_member['solores']->nickname                  = 'Solores [AM 2]';
        $squad_member['solores']->name                      = 'Solores';
        $squad_member['solores']->email                     = 'solores@taw.net';
        $squad_member['solores']->icq                       = 'Romeo Team - Member';
        $squad_member['solores']->remark                    = 'Join us at TAW.net';
        $squad_member['solores']->squad()->associate($squad['romeo']);
        $squad_member['solores']->save();

        $squad_member['attila']                             = new SquadMember;
        $squad_member['attila']->player_id                  = '76561197972149267';
        $squad_member['attila']->nickname                   = 'Attila [AM 2]';
        $squad_member['attila']->name                       = 'Attila';
        $squad_member['attila']->email                      = 'attila@taw.net';
        $squad_member['attila']->icq                        = 'Romeo Team - Member';
        $squad_member['attila']->remark                     = 'Join us at TAW.net';
        $squad_member['attila']->squad()->associate($squad['romeo']);
        $squad_member['attila']->save();

        $squad_member['jasimov']                            = new SquadMember;
        $squad_member['jasimov']->player_id                 = '76561198076880089';
        $squad_member['jasimov']->nickname                  = 'Jasimov [AM 2]';
        $squad_member['jasimov']->name                      = 'Jasimov';
        $squad_member['jasimov']->email                     = 'jasimov@taw.net';
        $squad_member['jasimov']->icq                       = 'Romeo Team - Member';
        $squad_member['jasimov']->remark                    = 'Join us at TAW.net';
        $squad_member['jasimov']->squad()->associate($squad['romeo']);
        $squad_member['jasimov']->save();

        $squad_member['kylpet']                             = new SquadMember;
        $squad_member['kylpet']->player_id                  = '76561197999478272';
        $squad_member['kylpet']->nickname                   = 'Kylpet [AM 2]';
        $squad_member['kylpet']->name                       = 'Kylpet';
        $squad_member['kylpet']->email                      = 'kylpet@taw.net';
        $squad_member['kylpet']->icq                        = 'Romeo Team - Member';
        $squad_member['kylpet']->remark                     = 'Join us at TAW.net';
        $squad_member['kylpet']->squad()->associate($squad['romeo']);
        $squad_member['kylpet']->save();

        $squad_member['jannesd']                            = new SquadMember;
        $squad_member['jannesd']->player_id                 = '';
        $squad_member['jannesd']->nickname                  = 'JannesD [AM 2]';
        $squad_member['jannesd']->name                      = 'JannesD';
        $squad_member['jannesd']->email                     = 'jannesd@taw.net';
        $squad_member['jannesd']->icq                       = 'Romeo Team - Member';
        $squad_member['jannesd']->remark                    = 'Join us at TAW.net';
        $squad_member['jannesd']->squad()->associate($squad['romeo']);
        $squad_member['jannesd']->save();
        #################################################################################
    }
}

class ServerTableSeeder extends Seeder
{
    public function run()
    {
        $user                                               = [];
        $server                                             = [];
        
        $user['feraldude']                                  = User::where('username', '=', 'feraldude')->first();
        $user['aeroson']                                    = User::where('username', '=', 'aeroson')->first();
        $user['cloudstalker']                               = User::where('username', '=', 'cloudstalker')->first();
        $user['juvines']                                    = User::where('username', '=', 'juvines')->first();
        $user['samblues']                                   = User::where('username', '=', 'samblues')->first();
        $user['mavericksabre']                              = User::where('username', '=', 'mavericksabre')->first();
        $user['fijapowa']                                   = User::where('username', '=', 'fijapowa')->first();
        $user['wargamer']                                   = User::where('username', '=', 'wargamer')->first();
        $user['dutchwarrior']                               = User::where('username', '=', 'dutchwarrior')->first();
        $user['naffi']                                      = User::where('username', '=', 'naffi')->first();
        $user['zlipnit']                                    = User::where('username', '=', 'zlipnit')->first();
        $user['tbone']                                      = User::where('username', '=', 'tbone')->first();
        $user['mzone']                                      = User::where('username', '=', 'mzone')->first();

    }
}