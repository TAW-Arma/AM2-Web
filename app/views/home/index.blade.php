<div class="row">
    <div class="col-md-12">
        <div class="panel panel-primary">
            <div class="panel-heading">Servers</div>
            <table class="table">
                <thead>
                    <tr>
                        <th style="text-align: left;">
                            Status
                        </th>
                        <th style="text-align: left;">
                            Name
                        </th>
                        <th style="text-align: left;">
                            Mission
                        </th>
                        <th style="text-align: left;">
                            Players
                        </th>
                        <th style="text-align: right;">
                            Join Server
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($public_servers as $server)
                    <tr>
                        <td style="text-align: left;" id="{{ $server->name }}-status">
                            <i class="fa fa-circle" style="color: green;"></i>
                        </td>
                        <td style="text-align: left;">
                            {{ $server->hostname }}
                        </td>
                        <td style="text-align: left;">
                            {{ $server->server_cfg->template }}
                        </td>
                        <td style="text-align: left;" id="{{ $server->name }}-players">
                        </td>
                        <td style="text-align: right;">
                            <a class="btn btn-xs btn-success" href="steam://run/107410//-mod=@CBA_AM2;@TAW_DIV_CORE;@TAW_AM2_CONTENT;@TAW_AM2_CUP;@TAW_AM2_MAPS;%20-noLauncher%20-skipIntro%20-noSplash%20-noPause%20-world=empty%20-noLogs%20-noFilePatching%20-connect=149.202.223.31%20-port={{ $server->port }}2%20-password=overlord" title="Join the Server">
                                Join Server
                            </a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
            <div class="panel-footer">
                <b>&nbsp;</b>
            </div>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-md-4">
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-primary">
                    <div class="panel-heading">Squads</div>
                    <table class="table">
                        <thead>
                            <tr>
                                <th style="text-align: left;">
                                    Name
                                </th>
                                <th style="text-align: right;">
                                    Squad URL
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td style="text-align: left;">
                                    Armor Platoon
                                </td>
                                <td style="text-align: right;">
                                    <button class="btn btn-xs btn-success copy-button" data-clipboard-text="http://am2.taw.net/squads/taw-armored/squad.xml" title="Click to copy me.">
                                        Copy
                                    </button>
                                </td>
                            </tr>
                            <tr>
                                <td style="text-align: left;">
                                    Infantry Platoon
                                </td>
                                <td style="text-align: right;">
                                    <button class="btn btn-xs btn-success copy-button" data-clipboard-text="http://am2.taw.net/squads/taw-infantry/squad.xml" title="Click to copy me.">
                                        Copy
                                    </button>
                                </td>
                            </tr>
                            <tr>
                                <td style="text-align: left;">
                                    Support Platoon
                                </td>
                                <td style="text-align: right;">
                                    <button class="btn btn-xs btn-success copy-button" data-clipboard-text="http://am2.taw.net/squads/taw-support/squad.xml" title="Click to copy me.">
                                        Copy
                                    </button>
                                </td>
                            </tr>
                            <tr><td></td></tr> <!--Spacer between platoons and squads-->
                            <tr>
                                <td style="text-align: left;">
                                    Tank Squad
                                </td>
                                <td style="text-align: right;">
                                    <button class="btn btn-xs btn-success copy-button" data-clipboard-text="http://am2.taw.net/squads/taw-tank/squad.xml" title="Click to copy me.">
                                        Copy
                                    </button>
                                </td>
                            </tr>
                            <tr>
                                <td style="text-align: left;">
                                    IFV Squad
                                </td>
                                <td style="text-align: right;">
                                    <button class="btn btn-xs btn-success copy-button" data-clipboard-text="http://am2.taw.net/squads/taw-ifv/squad.xml" title="Click to copy me.">
                                        Copy
                                    </button>
                                </td>
                            </tr>
                            <tr>
                                <td style="text-align: left;">
                                    Airmobile Inf. Squad
                                </td>
                                <td style="text-align: right;">
                                    <button class="btn btn-xs btn-success copy-button" data-clipboard-text="http://am2.taw.net/squads/taw-airmobile/squad.xml" title="Click to copy me.">
                                        Copy
                                    </button>
                                </td>
                            </tr>
                            <tr>
                                <td style="text-align: left;">
                                    Mech. Inf. Squad
                                </td>
                                <td style="text-align: right;">
                                    <button class="btn btn-xs btn-success copy-button" data-clipboard-text="http://am2.taw.net/squads/taw-mechanized/squad.xml" title="Click to copy me.">
                                        Copy
                                    </button>
                                </td>
                            </tr>
                            <tr>
                                <td style="text-align: left;">
                                    CAS Squad
                                </td>
                                <td style="text-align: right;">
                                    <button class="btn btn-xs btn-success copy-button" data-clipboard-text="http://am2.taw.net/squads/taw-cas/squad.xml" title="Click to copy me.">
                                        Copy
                                    </button>
                                </td>
                            </tr>
                            <tr>
                                <td style="text-align: left;">
                                    Air Transport Squad
                                </td>
                                <td style="text-align: right;">
                                    <button class="btn btn-xs btn-success copy-button" data-clipboard-text="http://am2.taw.net/squads/taw-airtransport/squad.xml" title="Click to copy me.">
                                        Copy
                                    </button>
                                </td>
                            </tr>
                                                        <tr><td></td></tr> <!--Spacer between squads and staff-->
                            <tr>
                                <td style="text-align: left;">
                                    Division Command
                                </td>
                                <td style="text-align: right;">
                                    <button class="btn btn-xs btn-success copy-button" data-clipboard-text="http://am2.taw.net/squads/taw-divisioncommand/squad.xml" title="Click to copy me.">
                                        Copy
                                    </button>
                                </td>
                            </tr>
                               <tr>
                                <td style="text-align: left;">
                                    Command
                                </td>
                                <td style="text-align: right;">
                                    <button class="btn btn-xs btn-success copy-button" data-clipboard-text="http://am2.taw.net/squads/taw-command/squad.xml" title="Click to copy me.">
                                        Copy
                                    </button>
                                </td>
                            </tr>
                            <tr>
                                <td style="text-align: left;">
                                    NCO
                                </td>
                                <td style="text-align: right;">
                                    <button class="btn btn-xs btn-success copy-button" data-clipboard-text="http://am2.taw.net/squads/taw-nco/squad.xml" title="Click to copy me.">
                                        Copy
                                    </button>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                    <div class="panel-footer">
                        <b>&nbsp;</b>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-4">
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-primary">
                    <div class="panel-heading">Event Schedule</div>
                    <table class="table">
                        <thead>
                            <tr>
                                <th style="text-align: left;">
                                    Type
                                </th>
                                <th style="text-align: right;">
                                    Time
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td style="text-align: left;">
                                    Mandatory
                                </td>
                                <td style="text-align: right;">
                                    Sunday at 19:30 (GMT)
                                </td>
                            </tr>
                            <tr>
                                <td style="text-align: left;">
                                    Mandatory
                                </td>
                                <td style="text-align: right;">
                                    Tuesday at 19:30 (GMT)
                                </td>
                            </tr>
                            <tr>
                                <td style="text-align: left;">
                                    Optionals
                                </td>
                                <td style="text-align: right;">
                                    Saturday at 18:30 (GMT)
                                </td>
                            </tr>
                        </tbody>
                    </table>
                    <div class="panel-footer">
                        <b>&nbsp;</b>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-primary">
                    <div class="panel-heading">News</div>
                    <table class="table">
                        <thead>
                            <tr>
                                <td style="text-align: left;">
                                    <b>New TS!</b> Welcome CURT to the support staff!
                                </td>
                            </tr>
                            <tr>
                                <td style="text-align: left;">
                                    <b>TBone is on leave</b> until <i>March</i>, so Juvenis will be acting CO.
                                </td>
                            </tr>
                           <!-- <tr>
                                <td style="text-align: left; color: red;">
                                    Placeholder
                                </td>
                            </tr>
                            <tr>
                                <td style="text-align: left;">
                                    Placeholder
                                </td>
                           --> </tr>
                        </thead>
                        <tbody>
                            <tr>
                             
                            </tr>
                        </tbody>
                    </table>
                    <div class="panel-footer">
                        <b>&nbsp;</b>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-4">
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-primary">
                    <div class="panel-heading">Mod Packs</div>
                    <table class="table">
                        <thead>
                            <tr>
                                <th style="text-align: left;">
                                    Name
                                </th>
                                <th style="text-align: right;">
                                    Autoconfig
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td style="text-align: left;">
                                    AM2 Modpack [Normal]
                                </td>
                                <td style="text-align: right;">
                                    <button class="btn btn-xs btn-success copy-button" data-clipboard-text="http://am2.taw.net/repo/normal/.a3s/autoconfig" title="Click to copy me.">
                                        Copy
                                    </button>
                                </td>
                            </tr>
                            <tr>
                                <td style="text-align: left;">
                                    AM2 Modpack [Optional]
                                </td>
                                <td style="text-align: right;">
                                    <button class="btn btn-xs btn-success copy-button" data-clipboard-text="http://am2.taw.net/repo/optional/.a3s/autoconfig" title="Click to copy me.">
                                        Copy
                                    </button>
                                </td>
                            </tr>
                            <tr>
                                <td style="text-align: left;">
                                    AM2 Modpack [Enhancements]
                                </td>
                                <td style="text-align: right;">
                                    <button class="btn btn-xs btn-success copy-button" data-clipboard-text="http://am2.taw.net/repo/enhancements/.a3s/autoconfig" title="Click to copy me.">
                                        Copy
                                    </button>
                                </td>
                            </tr>
                            <tr>
                                <td style="text-align: left;">
                                    AM2 Modpack [Enhancements Lite]
                                </td>
                                <td style="text-align: right;">
                                    <button class="btn btn-xs btn-success copy-button" data-clipboard-text="http://am2.taw.net/repo/enhancementslite/.a3s/autoconfig" title="Click to copy me.">
                                        Copy
                                    </button>
                                </td>
                            </tr>
                            <tr>
                                <td style="text-align: left;">
                                    AM2 Modpack [Invade and Annex]
                                </td>
                                <td style="text-align: right;">
                                    <button class="btn btn-xs btn-success copy-button" data-clipboard-text="http://am2.taw.net/repo/invade-and-annex/.a3s/autoconfig" title="Click to copy me.">
                                        Copy
                                    </button>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                    <div class="panel-footer">
                        <b>&nbsp;</b>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script type="text/javascript">
    function get_server_stats()
    {
        $.ajax(
        {
            type:   "GET",
            url:    "http://cp.am2.taw.net/backend/server/stats",
            data:   { format: 'json' },
        }).done(function(data)
        {
            // console.log(data);
            @foreach ($public_servers as $server)

                if(data["gameq"]["51.254.72.106:{{ $server->port }}2"]['gq_online'] == 1)
                {
                    $('#{{ $server->name }}-status').html('<i class="fa fa-circle" style="color: green;"></i>');
                }
                else
                {
                    $('#{{ $server->name }}-status').html('<i class="fa fa-circle" style="color: red;"></i>');
                }
                $('#{{ $server->name }}-players').html(data["players"]["51.254.72.106:{{ $server->port }}2"]["num"] + ' / ' + data["players"]["51.254.72.106:{{ $server->port }}2"]["max"]);

            @endforeach
        });
    };
    $(document).ready(function()
    {
        get_server_stats();
    });
    window.setInterval(function()
    {
        get_server_stats();
    }, 5000);
</script>