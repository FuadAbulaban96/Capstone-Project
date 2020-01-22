<?php
	
	$drop_city = $_GET['drop_city'];

	if ($_GET['drop_city'] == 'Tafielah') {
		echo   '<span class="current">Select Drop-off Location</span>
				<ul class="list">
				    <li data-value="" class="option selected disabled">select Drop-off Location</li>
				    <li data-value="Al Hasa" class="option"><option value="Al Hasa" >Al Hasa</option></li>
				    <li data-value="At Tafilah" class="option"><option value="At Tafilah" >At Tafilah</option></li>
				    <li data-value="Busayra" class="option"><option value="Busayra" >Busayra</option></li>
				</ul>';
	}elseif ($drop_city == 'Mafraq') {
		echo   '<span class="current">Select Drop-off Location</span>
				<ul class="list">
				    <li data-value="" class="option selected disabled">select Drop-off Location</li>
				    <li data-value="Al Hamra" class="option"><option value="Al Hamra" >Al Hamra</option></li>
				    <li data-value="Al Khalidiyah" class="option"><option value="Al Khalidiyah" >Al Khalidiyah</option></li>
				    <li data-value="Ar Ruwayshid" class="option"><option value="Ar Ruwayshid" >Ar Ruwayshid</option></li>
				    <li data-value="Balama" class="option"><option value="Balama" >Balama</option></li>
				    <li data-value="Dayr al Kahf" class="option"><option value="Dayr al Kahf" >Dayr al Kahf</option></li>
				    <li data-value="Hawsha" class="option"><option value="Hawsha" >Hawsha</option></li>
				    <li data-value="Irhab" class="option"><option value="Irhab" >Irhab</option></li>
				    <li data-value="Mafraq" class="option"><option value="Mafraq" >Mafraq</option></li>
				    <li data-value="Manshiyat Bani Hasan" class="option"><option value="Manshiyat Bani Hasan" >Manshiyat Bani Hasan</option></li>
				    <li data-value="Muthallath Jamiat Al al Bayt" class="option"><option value="Muthallath Jamiat Al al Bayt" >Muthallath Jamiat Al al Bayt</option></li>
				    <li data-value="Muthallath Sabha" class="option"><option value="Muthallath Sabha" >Muthallath Sabha</option></li>
				    <li data-value="Sabha" class="option"><option value="Sabha" >Sabha</option></li>
				    <li data-value="Sama as Sirhan" class="option"><option value="Sama as Sirhan" >Sama as Sirhan</option></li>
				    <li data-value="Umm al Jimal" class="option"><option value="Umm al Jimal" >Umm al Jimal</option></li>
				    <li data-value="Umm al Qittayn" class="option"><option value="Umm al Qittayn" >Umm al Qittayn</option></li>
				</ul>';
	}elseif ($drop_city == 'Amman') {
		echo   '<span class="current">select Drop-off Location</span>
				<ul class="list">
				    <li data-value="" class="option selected disabled">select Drop-off Location</li>
				    <li data-value="Al Jizah" class="option"><option value="Al Jizah" >Al Jizah</option></li>
				    <li data-value="Al Jubayhah" class="option"><option value="Al Jubayhah" >Al Jubayhah</option></li>
				    <li data-value="Al Juwayyidah" class="option"><option value="Al Juwayyidah" >Al Juwayyidah</option></li>
				    <li data-value="Al Muwaqqar" class="option"><option value="Al Muwaqqar" >Al Muwaqqar</option></li>
				    <li data-value="Al Abdalli" class="option"><option value="Al Abdalli" >Al Abdalli</option></li>
				    <li data-value="Amman" class="option"><option value="Amman" >Amman</option></li>
				    <li data-value="Hayy al Bunayyat" class="option"><option value="Hayy al Bunayyat" >Hayy al Bunayyat</option></li>
				    <li data-value="Hayy al Quwaysimah" class="option"><option value="Hayy al Quwaysimah" >Hayy al Quwaysimah</option></li>
				    <li data-value="Hisban" class="option"><option value="Hisban" >Hisban</option></li>
				    <li data-value="Jawa" class="option"><option value="Jawa" >Jawa</option></li>
				    <li data-value="Naur" class="option"><option value="Naur" >Naur</option></li>
				    <li data-value="Rujm ash Shami al Gharbi" class="option"><option value="Rujm ash Shami al Gharbi" >Rujm ash Shami al Gharbi</option></li>
				    <li data-value="Sahab" class="option"><option value="Sahab" >Sahab</option></li>
				    <li data-value="Umm al Basatin" class="option"><option value="Umm al Basatin" >Umm al Basatin</option></li>
				    <li data-value="Umm ar Rasas" class="option"><option value="Umm ar Rasas" >Umm ar Rasas</option></li>
				    <li data-value="Umm as Summaq" class="option"><option value="Umm as Summaq" >Umm as Summaq</option></li>
				    <li data-value="Wadi as Sir" class="option"><option value="Wadi as Sir" >Wadi as Sir</option></li>
				</ul>';
	}elseif ($drop_city == 'Zarqa') {
		echo   '<span class="current">Select Drop-off Location</span>
				<ul class="list">
				    <li data-value="" class="option selected disabled">Select Drop-off Location</li>
				    <li data-value="Al Azraq ash Shamali" class="option"><option value="Al Azraq ash Shamali" >Al Azraq ash Shamali</option></li>
				    <li data-value="Al Hashimiyah" class="option"><option value="Al Hashimiyah" >Al Hashimiyah</option></li>
				    <li data-value="Ar Rusayfah" class="option"><option value="Ar Rusayfah" >Ar Rusayfah</option></li>
				    <li data-value="Az Zulayl" class="option"><option value="Az Zulayl" >Az Zulayl</option></li>
				    <li data-value="Birayn" class="option"><option value="Birayn" >Birayn</option></li>
				    <li data-value="Muthallath al Azraq" class="option"><option value="Muthallath al Azraq" >Muthallath al Azraq</option></li>
				    <li data-value="Russeifa" class="option"><option value="Russeifa" >Russeifa</option></li>
				    <li data-value="Zarqa" class="option"><option value="Zarqa" >Zarqa</option></li>
				</ul>';
	}elseif ($drop_city == 'Irbid') {
		echo   '<span class="current">Select Drop-off Location</span>
				<ul class="list">
				    <li data-value="" class="option selected disabled">Select Drop-off Location</li>
				    <li data-value="Al Hisn" class="option"><option value="Al Hisn" >Al Hisn</option></li>
				    <li data-value="Al Mazar ash Shamali" class="option"><option value="Al Mazar ash Shamali" >Al Mazar ash Shamali</option></li>
				    <li data-value="Ar Ramtha" class="option"><option value="Ar Ramtha" >Ar Ramtha</option></li>
				    <li data-value="Ash Shajarah" class="option"><option value="Ash Shajarah" >Ash Shajarah</option></li>
				    <li data-value="Ash Shunah ash Shamaliyah" class="option"><option value="Ash Shunah ash Shamaliyah" >Ash Shunah ash Shamaliyah</option></li>
				    <li data-value="At Tayyibah" class="option"><option value="At Tayyibah" >At Tayyibah</option></li>
				    <li data-value="At Turrah" class="option"><option value="At Turrah" >At Turrah</option></li>
				    <li data-value="Aydun" class="option"><option value="Aydun" >Aydun</option></li>
				    <li data-value="Bayt Idis" class="option"><option value="Bayt Idis" >Bayt Idis</option></li>
				    <li data-value="Bayt Yafa" class="option"><option value="Bayt Yafa" >Bayt Yafa</option></li>
				    <li data-value="Dayr Abi Said" class="option"><option value="Dayr Abi Said" >Dayr Abi Said</option></li>
				    <li data-value="Dayr Yusuf" class="option"><option value="Dayr Yusuf" >Dayr Yusuf</option></li>
				    <li data-value="Hakama" class="option"><option value="Hakama" >Hakama</option></li>
				    <li data-value="Hatim" class="option"><option value="Hatim" >Hatim</option></li>
				    <li data-value="Irbid" class="option"><option value="Irbid" >Irbid</option></li>
				    <li data-value="Judita" class="option"><option value="Judita" >Judita</option></li>
				    <li data-value="Kafr Abil" class="option"><option value="Kafr Abil" >Kafr Abil</option></li>
				    <li data-value="Kafr Asad" class="option"><option value="Kafr Asad" >Kafr Asad</option></li>
				    <li data-value="Kafr Sawm" class="option"><option value="Kafr Sawm" >Kafr Sawm</option></li>
				    <li data-value="Kharja" class="option"><option value="Kharja" >Kharja</option></li>
				    <li data-value="Kitim" class="option"><option value="Kitim" >Kitim</option></li>
				    <li data-value="Kurayyimah" class="option"><option value="Kurayyimah" >Kurayyimah</option></li>
				    <li data-value="Malka" class="option"><option value="Malka" >Malka</option></li>
				    <li data-value="Qumaym" class="option"><option value="Qumaym" >Qumaym</option></li>
				    <li data-value="Saham al Kaffarat" class="option"><option value="Saham al Kaffarat" ><Saham al Kaffarat/option></li>
				    <li data-value="Sal" class="option"><option value="Sal" >Sal</option></li>
				    <li data-value="Samma" class="option"><option value="Samma" >Samma</option></li>
				    <li data-value="Samma ar Rawsan" class="option"><option value="Samma ar Rawsan" >Samma ar Rawsan</option></li>
				    <li data-value="Tibnah" class="option"><option value="Tibnah" >Tibnah</option></li>
				    <li data-value="Umm Qays" class="option"><option value="Umm Qays" >Umm Qays</option></li>
				    <li data-value="Waqqas" class="option"><option value="Waqqas" >Waqqas</option></li>
			d	    <li data-value="Zahar" class="option"><option value="Zahar" >Zahar</option></li>
				</ul>';
	}elseif ($drop_city == 'Maan') {
		echo   '<span class="current">Select Drop-off Location</span>
				<ul class="list">
				    <li data-value="" class="option selected disabled">Select Drop-off Location</li>
				    <li data-value="Adhruh" class="option"><option value="Adhruh" >Adhruh</option></li>
				    <li data-value="Al Husayniyah" class="option"><option value="Al Husayniyah" >Al Husayniyah</option></li>
				    <li data-value="Al Jafr" class="option"><option value="Al Jafr" >Al Jafr</option></li>
				    <li data-value="Al Murayghah" class="option"><option value="Al Murayghah" >Al Murayghah</option></li>
				    <li data-value="Al Quwayrah" class="option"><option value="Al Quwayrah" >Al Quwayrah</option></li>
				    <li data-value="Ash Shawbak" class="option"><option value="Ash Shawbak" >Ash Shawbak</option></li>
				    <li data-value="At Tayyibah" class="option"><option value="At Tayyibah" >At Tayyibah</option></li>
				    <li data-value="Ayl" class="option"><option value="Ayl" >Ayl</option></li>
				    <li data-value="Maan" class="option"><option value="Maan" >Maan</option></li>
				    <li data-value="Petra" class="option"><option value="Petra" >Petra</option></li>
				    <li data-value="Qir Moav" class="option"><option value="Qir Moav" >Qir Moav</option></li>
				</ul>';
	}elseif ($drop_city == 'Balqa') {
		echo   '<span class="current">Select Drop-off Location</span>
				<ul class="list">
				    <li data-value="" class="option selected disabled">Select Drop-off Location</li>
				    <li data-value="Al Fuhays" class="option"><option value="Al Fuhays" >Al Fuhays</option></li>
				    <li data-value="Al Karamah" class="option"><option value="Al Karamah" >Al Karamah</option></li>
				    <li data-value="As Salt" class="option"><option value="As Salt" >As Salt</option></li>
				    <li data-value="As Subayhi" class="option"><option value="As Subayhi" >As Subayhi</option></li>
				    <li data-value="Ash Shunah al Janubiyah" class="option"><option value="Ash Shunah al Janubiyah" >Ash Shunah al Janubiyah</option></li>
				    <li data-value="Dayr Alla" class="option"><option value="Dayr Alla" >Dayr Alla</option></li>
				    <li data-value="Yarqa" class="option"><option value="Yarqa" >Yarqa</option></li>
				    <li data-value="Allan" class="option"><option value="Allan" >Allan</option></li>
				    <li data-value="Ayn al Basha" class="option"><option value="Ayn al Basha" >Ayn al Basha</option></li>
				</ul>';
		
	}elseif ($drop_city == 'Ajlun') {
		echo   '<span class="current">Select Drop-off Location</span>
				<ul class="list">
					<li data-value="" class="option selected disabled">Select Drop-off Location</li>
				    <li data-value="Ajlun" class="option"><option value="Ajlun" >Ajlun</option></li>
				    <li data-value="Halawah" class="option"><option value="Halawah" >Halawah</option></li>
				    <li data-value="Kufrinjah" class="option"><option value="Kufrinjah" >Kufrinjah</option></li>
				    <li data-value="Sakhrah" class="option"><option value="Sakhrah" >Sakhrah</option></li>
				    <li data-value="Sakib" class="option"><option value="Sakib" >Sakib</option></li>
				    <li data-value="Anjarah" class="option"><option value="Anjarah" >Anjarah</option></li>
				    <li data-value="Ayn Jannah" class="option"><option value="Ayn Jannah" >Ayn Jannah</option></li>
				    <li data-value="Irjan" class="option"><option value="Irjan" >Irjan</option></li>
				</ul>';
		
	}elseif ($drop_city == 'Aqaba') {
		echo   '<span class="current">Select Drop-off Location</span>
				<ul class="list">
					<li data-value="" class="option selected disabled">Select Drop-off Location</li>
				    <li data-value="Ad Disah" class="option"><option value="Ad Disah" >Ad Disah</option></li>
				    <li data-value="Aqaba" class="option"><option value="Aqaba" >Aqaba</option></li>
				    <li data-value="Ar Rishah" class="option"><option value="Ar Rishah" >Ar Rishah</option></li>
				    <li data-value="Tala Bay" class="option"><option value="Tala Bay" >Tala Bay</option></li>
			    </ul>';
		
	}elseif ($drop_city == 'Jarash') {
		echo   '<span class="current">Select Drop-off Location</span>
				<ul class="list">
					<li data-value="" class="option selected disabled">Select Drop-off Location</li>
				    <li data-value="Al Kittah" class="option"><option value="Al Kittah" >Al Kittah</option></li>
				    <li data-value="Al Mastabah" class="option"><option value="Al Mastabah" >Al Mastabah</option></li>
				    <li data-value="Balila" class="option"><option value="Balila" >Balila</option></li>
				    <li data-value="Burma" class="option"><option value="Burma" >Burma</option></li>
				    <li data-value="Jarash" class="option"><option value="Jarash" >Jarash</option></li>
				    <li data-value="Qafqafa" class="option"><option value="Qafqafa" >Qafqafa</option></li>
				    <li data-value="Raymun" class="option"><option value="Raymun" >Raymun</option></li>
				    <li data-value="Suf" class="option"><option value="Suf" >Suf</option></li>
				</ul>';
		
	}elseif ($drop_city == 'Madaba') {
		echo   '<span class="current">Select Drop-off Location</span>
				<ul class="list">
					<li data-value="" class="option selected disabled">Select Drop-off Location</li>					
				    <li data-value="Al Faysaliyah" class="option"><option value="Al Faysaliyah" >Al Faysaliyah</option></li>
				    <li data-value="Al Arid" class="option"><option value="Al Arid" >Al Arid</option></li>
				    <li data-value="Dhiban" class="option"><option value="Dhiban" >Dhiban</option></li>
				    <li data-value="Juraynah" class="option"><option value="Juraynah" >Juraynah</option></li>
				    <li data-value="Madaba" class="option"><option value="Madaba" >Madaba</option></li>
				    <li data-value="Main" class="option"><option value="Main" >Main</option></li>
				    <li data-value="Mulayh" class="option"><option value="Mulayh" >Mulayh</option></li>
				</ul>';
		
	}elseif ($drop_city == 'Karak') {
		echo   '<span class="current">Select Drop-off Location</span>
				<ul class="list">
					<li data-value="" class="option selected disabled">Select Drop-off Location</li>
				    <li data-value="Adir" class="option"><option value="Adir" >Adir</option></li>
				    <li data-value="Al Husayniyah" class="option"><option value="Al Husayniyah" >Al Husayniyah</option></li>
				    <li data-value="Al Mazar al Janubi" class="option"><option value="Al Mazar al Janubi" >Al Mazar al Janubi</option></li>
				    <li data-value="Al Mughayyir" class="option"><option value="Al Mughayyir" >Al Mughayyir</option></li>
				    <li data-value="Al Qasr" class="option"><option value="Al Qasr" >Al Qasr</option></li>
				    <li data-value="Al Qatranah" class="option"><option value="Al Qatranah" >Al Qatranah</option></li>
				    <li data-value="Ar Rabbah" class="option"><option value="Ar Rabbah" >Ar Rabbah</option></li>
				    <li data-value="At Tayyibah" class="option"><option value="At Tayyibah" >At Tayyibah</option></li>
				    <li data-value="Fuqu" class="option"><option value="Fuqu" >Fuqu</option></li>
				    <li data-value="Ghawr al Mazraah" class="option"><option value="Ghawr al Mazraah" >Ghawr al Mazraah</option></li>
				    <li data-value="Karak City" class="option"><option value="Karak City" >Karak City</option></li>
				    <li data-value="Safi" class="option"><option value="Safi" >Safi</option></li>
				    <li data-value="Ayy" class="option"><option value="Ayy" >Ayy</option></li>
				    <li data-value="Izra" class="option"><option value="Izra" >Izra</option></li>
				</ul>';
	}
?>