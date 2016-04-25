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
                            <a class="btn btn-xs btn-success" href="steam://" title="Join the Server">
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
                                    Alpha
                                </td>
                                <td style="text-align: right;">
                                    <button class="btn btn-xs btn-success copy-button" data-clipboard-text="http://am2.taw.net/squads/taw-alpha/squad.xml" title="Click to copy me.">
                                        Copy
                                    </button>
                                </td>
                            </tr>
                            <tr>
                                <td style="text-align: left;">
                                    Bravo
                                </td>
                                <td style="text-align: right;">
                                    <button class="btn btn-xs btn-success copy-button" data-clipboard-text="http://am2.taw.net/squads/taw-bravo/squad.xml" title="Click to copy me.">
                                        Copy
                                    </button>
                                </td>
                            </tr>
                            <tr>
                                <td style="text-align: left;">
                                    Charlie
                                </td>
                                <td style="text-align: right;">
                                    <button class="btn btn-xs btn-success copy-button" data-clipboard-text="http://am2.taw.net/squads/taw-charlie/squad.xml" title="Click to copy me.">
                                        Copy
                                    </button>
                                </td>
                            </tr>
                            <tr>
                                <td style="text-align: left;">
                                    Delta
                                </td>
                                <td style="text-align: right;">
                                    <button class="btn btn-xs btn-success copy-button" data-clipboard-text="http://am2.taw.net/squads/taw-delta/squad.xml" title="Click to copy me.">
                                        Copy
                                    </button>
                                </td>
                            </tr>
                            <tr>
                                <td style="text-align: left;">
                                    Echo
                                </td>
                                <td style="text-align: right;">
                                    <button class="btn btn-xs btn-success copy-button" data-clipboard-text="http://am2.taw.net/squads/taw-echo/squad.xml" title="Click to copy me.">
                                        Copy
                                    </button>
                                </td>
                            </tr>
                            <tr>
                                <td style="text-align: left;">
                                    Foxtrot
                                </td>
                                <td style="text-align: right;">
                                    <button class="btn btn-xs btn-success copy-button" data-clipboard-text="http://am2.taw.net/squads/taw-foxtrot/squad.xml" title="Click to copy me.">
                                        Copy
                                    </button>
                                </td>
                            </tr>
                            <tr>
                                <td style="text-align: left;">
                                    Sierra
                                </td>
                                <td style="text-align: right;">
                                    <button class="btn btn-xs btn-success copy-button" data-clipboard-text="http://am2.taw.net/squads/taw-sierra/squad.xml" title="Click to copy me.">
                                        Copy
                                    </button>
                                </td>
                            </tr>
                            <tr>
                                <td style="text-align: left;">
                                    Romeo
                                </td>
                                <td style="text-align: right;">
                                    <button class="btn btn-xs btn-success copy-button" data-clipboard-text="http://am2.taw.net/squads/taw-romeo/squad.xml" title="Click to copy me.">
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
                                <th style="text-align: left;">
                                    
                                </th>
                                <th style="text-align: right;">

                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td style="text-align: left;">
                                    
                                </td>
                                <td style="text-align: right;">

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
                                    AM2 Modpack [Exile]
                                </td>
                                <td style="text-align: right;">
                                    <button class="btn btn-xs btn-success copy-button" data-clipboard-text="http://am2.taw.net/repo/exile/.a3s/autoconfig" title="Click to copy me.">
                                        Copy
                                    </button>
                                </td>
                            </tr>
                            <tr>
                                <td style="text-align: left;">
                                    AM2 Modpack [Domination]
                                </td>
                                <td style="text-align: right;">
                                    <button class="btn btn-xs btn-success copy-button" data-clipboard-text="http://am2.taw.net/repo/domination/.a3s/autoconfig" title="Click to copy me.">
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