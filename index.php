<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Video Player Khusus VK</title>
	<link rel="shortcut icon" href="https://bit.ly/samplefavicon" type="image/x-icon">
<meta name='google-adsense-platform-account' content='ca-host-pub-1556223355139109'/>
<meta name='google-adsense-platform-domain' content='blogspot.com'/>
</head>
<body>
	<style>
		body {
			padding: 0;
			margin: 0;
		}

		video {
			width: 100%;
			height: 100%;
			position: absolute;
		}
.embed {
    position: absolute;
    background: none;
    top: 2px;
    z-index: 999;
    color: aqua;
    font-family: sans-serif;
    font-size: 18px;
    border: 0;
    font-weight: 600;
    right: 10px;
}
	</style>
	<script src="https://cdn.fluidplayer.com/v3/current/fluidplayer.min.js">
	</script>
	<script>
		var apikey = "";//Your Drive Api Key
        var eid="";
        var video="";
        var embed="";

        if(!getParameterByName('id') || getParameterByName('ib')){
          var eid = prompt('Masukan URL :- ');
          embed = `
<iframe width="560" height="315" 
scrolling="no"
src="${location.href}?id=${eid}" 
frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; 
gyroscope; picture-in-picture" allowfullscreen>
</iframe>
          `;
          prompt('Hore Berhasil  :- ',embed);
          window.location.href = window.location.href+'?id='+eid;
        } 
        video = getParameterByName('id') ;
        if(getParameterByName('ib')){
            video = btoa(getParameterByName('ib'));
        }
        var vidurl = "https://vk.com/"+video+"?alt=media&key="+apikey;
        document.write("<video controls id='video' src="+vidurl+"></video>");


function getembed(){
            var code = `
<iframe width="560" height="315" 
scrolling="no"
src="${location.href}?id=${video}" 
frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; 
gyroscope; picture-in-picture" allowfullscreen>
</iframe>
          `;
          prompt('Here is Your Embed Code :- ',code);
}

function getParameterByName(name, url = window.location.href) {
    name = name.replace(/[\[\]]/g, '\\$&');
    var regex = new RegExp('[?&]' + name + '(=([^&#]*)|&|#|$)'),
        results = regex.exec(url);
    if (!results) return null;
    if (!results[2]) return '';
    return decodeURIComponent(results[2].replace(/\+/g, ' '));
}
	</script>


	<script>
		var myFP = fluidPlayer(
        'video',	{
	"layoutControls": {
		"controlBar": {
			"autoHideTimeout": 3,
			"animated": true,
			"autoHide": true
		},
		"htmlOnPauseBlock": {
			"html": '<button class=\"embed\" onclick=\"getembed()\">HibStream</button>\n',
			"height": null,
			"width": null
		},
		"autoPlay": true,
		"mute": true,
		"allowTheatre": true,
		"playPauseAnimation": true,
		"playbackRateEnabled": true,
		"allowDownload": false,
		"playButtonShowing": true,
		"fillToContainer": false,
                 "primaryColor": "#ff3d2d",
		"posterImage": "https://vk.com/s/v1/doc/CZDIoEVDaRcjKpuscMjp2NNfnP8P3KSeZsZiuADsUKIVSCZzjVQ"
	},
	"vastOptions": {
		"adList": [],
		"adCTAText": false,
		"adCTATextPosition": ""
	}
})

	</script>
</body>

</html>
