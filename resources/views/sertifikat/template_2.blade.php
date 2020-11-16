<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<style type="text/css">
	@page {
	  size: 29.7cm 21cm;
	  margin: 0;
	}
	body {
	  padding: 0;
	}
	#nama-partisipan {
		position: absolute;
		width: 735 px;
		height: 45 px;
		left: 190 px;
		top: 188 px;
		text-align: center;
		font-family: 'Times New Roman';
		font-size: 28pt;
		/*border-color: yellow;*/
		/*background-color: white;*/
		/*color: white;*/
	}
	#partisipasi {
		position: absolute;
		width: 211 px;
		height: 45 px;
		left: 458 px;
		top: 302 px; //302
		
		font-family: 'Times New Roman';
		font-size: 30px;
		/*border-color: yellow;*/
		/*background-color: white;*/
		/*color: white;*/
		text-align: center;
		alignment-baseline: central;
	}
	#qrcode {
		position: absolute;
		width: 122 px;
		height: 122 px;
		left: 25 px;
		top: 650 px;
		/*color: white;*/
		text-align: center;
		alignment-baseline: central;
		background-color: white;
	}

	#ttd-dekan {
		position: absolute;
		width: 130 px;
		height: 120 px;  
		left: 190 px;
		top: 610 px;
		//150 595
		font-family: 'Times New Roman';
		font-size: 30px;
		/*border-color: yellow;*/
		/*background-color: yellow;*/
		/*color: white;*/
		text-align: center;
		alignment-baseline: central;
		padding: 10px;
		
	}

	#gambar-ttd{
		object-fit: cover;
	}

	#gambar-sertif{
		position: absolute;
	}

</style>
<body>
	<img src="{{ asset($acara->FILE_SERTIF) }}" width="100%" id="gambar-sertif">
	<!-- <img src="{{ asset('/template/preview_Template 2.png')}}" width="100%" id="gambar-sertif"> -->
	<span id="nama-partisipan">{{ $partisipasi->user->NAMA_USER }}</span>
	<span id="partisipasi">{{ $partisipasi->partisipasi->PARTISIPASI }}</span>
	<img src="data:image/png;base64,{{ $qrcode }}" id="qrcode">
	<div id="ttd-dekan"><img src="{{ asset('/ttd/'.'dekan.png') }}" id="gambar-ttd" height="100%"></div>
</body>
</html>