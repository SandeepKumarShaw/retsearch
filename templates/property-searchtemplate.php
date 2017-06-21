<!-- Middel Panel Begin -->

<script src="<?php echo plugins_url(); ?>/rets-search/assets/js/custom-global-search.js"></script>
<link rel="stylesheet" type="text/css" href="<?php echo plugins_url(); ?>/rets-search/assets/css/custom-global-search.css">

    <form name="frm_glvar_home_search" id="glvar_home_search" action="<?php echo $action; ?>" method="GET">
        <label>City, Postal Code, Address, or Listing ID</label>
        <div class="white-bg">
        <input type="hidden" name="city" id="city" value="">
        <input type="hidden" name="postal_code" id="postal_code" value="">
        <input type="hidden" name="address" id="address" value="">
        <input type="hidden" name="search-community" id="community" value="">
        <input type="hidden" name="listing_id" id="listingid" value="">
        <input type="hidden" name="myvalue" id="myvalue" value="">
        <input type="hidden" name="check_search" value="1">
        <input type="hidden" name="limit" value="25">
        <input type="hidden" name="sort_by" value="">
        <input type="text" name="search_input" id="search-box" placeholder="City,PostalCode,Community,Address,Listing ID" value="" autocomplete="off">
        <div id="suggesstion-box" style="display:none;">
            <ul id="search-list">
            <li onClick="selectCity('ALAMO','Alamo')">Alamo</li>
            <li onClick="selectCity('ARMAGOSA','Amargosa')">Amargosa</li>
            <li onClick="selectCity('BEATTY','Beatty')">Beatty</li>
            <li onClick="selectCity('BLUEDIAM','Blue Diamond')">Blue Diamond</li>
            <li onClick="selectCity('BOULDERC','Boulder City')">Boulder City</li>
            <li onClick="selectCity('CALIENTE','Caliente')">Caliente</li>
            <li onClick="selectCity('CALNEVAR','Cal-Nev-Ari')">Cal-Nev-Ari</li>
            <li onClick="selectCity('COLDCRK','Cold Creek')">Cold Creek</li>
            <li onClick="selectCity('ELY','Ely')">Ely</li>
            <li onClick="selectCity('GLENDALE','Glendale')">Glendale</li>
            <li onClick="selectCity('GOODSPRG','Goodsprings')">Goodsprings</li>
            <li onClick="selectCity('HENDERSON','Henderson')">Henderson</li>
            <li onClick="selectCity('INDIANSP','Indian Springs')">Indian Springs</li>
            <li onClick="selectCity('JEAN','Jean')">Jean</li>
            <li onClick="selectCity('LASVEGAS','Las Vegas')">Las Vegas</li>
            <li onClick="selectCity('LAUGHLIN','Laughlin')">Laughlin</li>
            <li onClick="selectCity('LOGANDAL','Logandale')">Logandale</li>
            <li onClick="selectCity('MCGILL','Mc Gill')">Mc Gill</li>
            <li onClick="selectCity('MESQUITE','Mesquite')">Mesquite</li>
            <li onClick="selectCity('MOAPA','Moapa')">Moapa</li>
            <li onClick="selectCity('MTNSPRG','Mountain Spring')">Mountain Spring</li>
            <li onClick="selectCity('NORTHLAS','North Las Vegas')">North Las Vegas</li>
            <li onClick="selectCity('OTHER','Other')">Other</li>
            <li onClick="selectCity('OVERTON','Overton')">Overton</li>
            <li onClick="selectCity('PAHRUMP','Pahrump')">Pahrump</li>
            <li onClick="selectCity('PALMGRDNS','Palm Gardens')">Palm Gardens</li>
            <li onClick="selectCity('PANACA','Panaca')">Panaca</li>
            <li onClick="selectCity('PIOCHE','Pioche')">Pioche</li>
            <li onClick="selectCity('SANDYVLY','Sandy Valley')">Sandy Valley</li>
            <li onClick="selectCity('SEARCHLT','Searchlight')">Searchlight</li>
            <li onClick="selectCity('TONOPAH','Tonopah')">Tonopah</li>
            <li onClick="selectCity('URSINE','Ursine')">Ursine</li>
                
            <!--for post code-->    
            <li onClick="selectPostcode('00000')">00000</li>
            <li onClick="selectPostcode('13790')">13790</li>
            <li onClick="selectPostcode('21015')">21015</li>
            <li onClick="selectPostcode('24739')">24739</li>
            <li onClick="selectPostcode('24918')">24918</li>
            <li onClick="selectPostcode('25040')">25040</li>
            <li onClick="selectPostcode('37087')">37087</li>
            <li onClick="selectPostcode('46072')">46072</li>
            <li onClick="selectPostcode('46545')">46545</li>
            <li onClick="selectPostcode('46703')">46703</li>
            <li onClick="selectPostcode('47122')">47122</li>
            <li onClick="selectPostcode('47274')">47274</li>
            <li onClick="selectPostcode('60487')">60487</li>
            <li onClick="selectPostcode('70503')">70503</li>
            <li onClick="selectPostcode('71334')">71334</li>
            <li onClick="selectPostcode('71449')">71449</li>
            <li onClick="selectPostcode('81005')">81005</li>
            <li onClick="selectPostcode('84710')">84710</li>
            <li onClick="selectPostcode('84713')">84713</li>
            <li onClick="selectPostcode('84719')">84719</li>
            <li onClick="selectPostcode('84721')">84721</li>

            <li onClick="selectPostcode('84722')">84722</li>
            <li onClick="selectPostcode('84725')">84725</li>
            <li onClick="selectPostcode('84735')">84735</li>
            <li onClick="selectPostcode('84755')">84755</li>
            <li onClick="selectPostcode('84761')">84761</li>
            <li onClick="selectPostcode('84762')">84762</li>
            <li onClick="selectPostcode('84782')">84782</li>
            <li onClick="selectPostcode('86046')">86046</li>
            <li onClick="selectPostcode('86413')">86413</li>
            <li onClick="selectPostcode('86441')">86441</li>
            <li onClick="selectPostcode('86445')">86445</li>
            <li onClick="selectPostcode('87401')">87401</li>



            <li onClick="selectPostcode('89001')">89001</li>
            <li onClick="selectPostcode('89002')">89002</li>
            <li onClick="selectPostcode('89003')">89003</li>
            <li onClick="selectPostcode('89004')">89004</li>
            <li onClick="selectPostcode('89005')">89005</li>
            <li onClick="selectPostcode('89007')">89007</li>
            <li onClick="selectPostcode('89008')">89008</li>
            <li onClick="selectPostcode('89010')">89010</li>
            <li onClick="selectPostcode('89011')">89011</li>
            <li onClick="selectPostcode('89012')">89012</li>
            <li onClick="selectPostcode('89013')">89013</li>
            <li onClick="selectPostcode('89014')">89014</li>
            <li onClick="selectPostcode('89015')">89015</li>


            <li onClick="selectPostcode('89016')">89016</li>
            <li onClick="selectPostcode('89017')">89017</li>
            <li onClick="selectPostcode('89018')">89018</li>
            <li onClick="selectPostcode('89019')">89019</li>
            <li onClick="selectPostcode('89020')">89020</li>
            <li onClick="selectPostcode('89021')">89021</li>
            <li onClick="selectPostcode('89022')">89022</li>
            <li onClick="selectPostcode('89025')">89025</li>
            <li onClick="selectPostcode('89027')">89027</li>
            <li onClick="selectPostcode('89029')">89029</li>
            <li onClick="selectPostcode('89030')">89030</li>
            <li onClick="selectPostcode('89031')">89031</li>
            <li onClick="selectPostcode('89032')">89032</li>

            <li onClick="selectPostcode('89034')">89034</li>
            <li onClick="selectPostcode('89039')">89039</li>
            <li onClick="selectPostcode('89040')">89040</li>
            <li onClick="selectPostcode('89041')">89041</li>
            <li onClick="selectPostcode('89042')">89042</li>
            <li onClick="selectPostcode('89043')">89043</li>
            <li onClick="selectPostcode('89044')">89044</li>
            <li onClick="selectPostcode('89045')">89045</li>
            <li onClick="selectPostcode('89046')">89046</li>
            <li onClick="selectPostcode('89049')">89049</li>
            <li onClick="selectPostcode('89052')">89052</li>
            <li onClick="selectPostcode('89060')">89060</li>
            <li onClick="selectPostcode('89061')">89061</li>
            <li onClick="selectPostcode('89074')">89074</li>
            <li onClick="selectPostcode('89081')">89081</li>
            <li onClick="selectPostcode('89084')">89084</li>
            <li onClick="selectPostcode('89085')">89085</li>
            <li onClick="selectPostcode('89086')">89086</li>
            <li onClick="selectPostcode('89101')">89101</li>
            <li onClick="selectPostcode('89102')">89102</li>

            <li onClick="selectPostcode('89103')">89103</li>
            <li onClick="selectPostcode('89104')">89104</li>
            <li onClick="selectPostcode('89105')">89105</li>
            <li onClick="selectPostcode('89106')">89106</li>
            <li onClick="selectPostcode('89107')">89107</li>
            <li onClick="selectPostcode('89108')">89108</li>
            <li onClick="selectPostcode('89109')">89109</li>
            <li onClick="selectPostcode('89110')">89110</li>
            <li onClick="selectPostcode('89113')">89113</li>
            <li onClick="selectPostcode('89115')">89115</li>
            <li onClick="selectPostcode('89117')">89117</li>
            <li onClick="selectPostcode('89118')">89118</li>
            <li onClick="selectPostcode('89119')">89119</li>
            <li onClick="selectPostcode('89120')">89120</li>
            <li onClick="selectPostcode('89121')">89121</li>
            <li onClick="selectPostcode('89122')">89122</li>
            <li onClick="selectPostcode('89123')">89123</li>
            <li onClick="selectPostcode('89124')">89124</li>
            <li onClick="selectPostcode('89128')">89128</li>
            <li onClick="selectPostcode('89129')">89129</li>
            <li onClick="selectPostcode('89130')">89130</li>
            <li onClick="selectPostcode('89131')">89131</li>
            <li onClick="selectPostcode('89134')">89134</li>
            <li onClick="selectPostcode('89135')">89135</li>
            

            <li onClick="selectPostcode('89138')">89138</li>
            <li onClick="selectPostcode('89139')">89139</li>
            <li onClick="selectPostcode('89141')">89141</li>
            <li onClick="selectPostcode('89142')">89142</li>
            <li onClick="selectPostcode('89143')">89143</li>
            <li onClick="selectPostcode('89144')">89144</li>
            <li onClick="selectPostcode('89145')">89145</li>
            <li onClick="selectPostcode('89146')">89146</li>
            <li onClick="selectPostcode('89147')">89147</li>
            <li onClick="selectPostcode('89148')">89148</li>
            <li onClick="selectPostcode('89149')">89149</li>
            <li onClick="selectPostcode('89156')">89156</li>
            <li onClick="selectPostcode('89158')">89158</li>
            <li onClick="selectPostcode('89161')">89161</li>
            <li onClick="selectPostcode('89166')">89166</li>
            <li onClick="selectPostcode('89169')">89169</li>
            <li onClick="selectPostcode('89178')">89178</li>
            <li onClick="selectPostcode('89179')">89179</li>
            <li onClick="selectPostcode('89183')">89183</li>
            <li onClick="selectPostcode('89301')">89301</li>
            <li onClick="selectPostcode('89310')">89310</li>
            <li onClick="selectPostcode('89311')">89311</li>
            <li onClick="selectPostcode('89314')">89314</li>
            <li onClick="selectPostcode('89317')">89317</li>

            <li onClick="selectPostcode('89318')">89318</li>
            <li onClick="selectPostcode('89319')">89319</li>
            <li onClick="selectPostcode('89410')">89410</li>
            <li onClick="selectPostcode('89415')">89415</li>
            <li onClick="selectPostcode('89419')">89419</li>
            <li onClick="selectPostcode('89429')">89429</li>
            <li onClick="selectPostcode('89431')">89431</li>
            <li onClick="selectPostcode('89510')">89510</li>
            <li onClick="selectPostcode('89815')">89815</li>
            <li onClick="selectPostcode('89883')">89883</li>
            <li onClick="selectPostcode('92277')">92277</li>
            <li onClick="selectPostcode('92309')">92309</li>
            <li onClick="selectPostcode('92509')">92509</li>
            <li onClick="selectPostcode('96753')">96753</li>

            <li onClick="selectPostcode('96780')">96780</li>
            <li onClick="selectPostcode('99611')">99611</li>
            <li onClick="selectPostcode('99999')">99999</li>
            
            

                
            <!--community-->
                
            <li onClick="selectCommunity('ALIANTE','Aliante')">Aliante</li>
            <li onClick="selectCommunity('ALTAMIRA','Alta Mira')">Alta Mira</li>
            <li onClick="selectCommunity('ANTHEM','Anthem')">Anthem</li>
            <li onClick="selectCommunity('AnthemCC','Anthem Country Club')">Anthem Country Club</li>
            <li onClick="selectCommunity('ARDIENTE','Ardiente')">Ardiente</li>
            <li onClick="selectCommunity('ARLNRNCH','Arlington Ranch')">Arlington Ranch</li>
            <li onClick="selectCommunity('ARTESIA','Artesia')">Artesia</li>
            <li onClick="selectCommunity('DESERTSHRE','Desert Shores')">Black Mountain Vistas</li>
            <li onClick="selectCommunity('BLKMTNVIST','Black Mountain Vistas')">Burson Ranch</li>
            <li onClick="selectCommunity('CADENCE','Cadence')">Cadence</li>
            <li onClick="selectCommunity('CALICORDGE','Calico Ridge')">Calico Ridge</li>

            <li onClick="selectCommunity('CANYONGATE','Canyon Gate')">Canyon Gate</li>
            <li onClick="selectCommunity('CENTENHILL','Centennial Hills')">Centennial Hills</li>
            <li onClick="selectCommunity('CHAMPION','Champion Village')">Champion Village</li>
            <li onClick="selectCommunity('COMSTKPK','Comstock Park')">Comstock Park</li>
            <li onClick="selectCommunity('CORONARCH','Coronado Ranch')">Coronado Ranch</li>
            <li onClick="selectCommunity('COTTONWDS','Cottonwoods')">Cottonwoods</li>
            <li onClick="selectCommunity('DESERTINN','Desert Inn Country Club')">Desert Inn Country Club</li>
            <li onClick="selectCommunity('DESERTSHRE','Desert Shores')">Desert Shores</li>
            <li onClick="selectCommunity('DSRTGRNS','Desert Greens')">Desert Greens</li>
            <li onClick="selectCommunity('DSRTTRLS','Desert Trails')">Desert Trails</li>
            <li onClick="selectCommunity('ELDORADO','Eldorado')">Eldorado</li>
            <li onClick="selectCommunity('ELKHORNRCH','Elkhorn Ranch')">Elkhorn Ranch</li>
            <li onClick="selectCommunity('ELKORNSPR','Elkhorn Springs')">Elkhorn Springs</li>

            <li onClick="selectCommunity('FTHLSMACRC','Foothills at Mac Donald Ranch')">Foothills at Mac Donald Ranch</li>
            <li onClick="selectCommunity('GREENVLLEY','Green Valley')">Green Valley</li>
            <li onClick="selectCommunity('GREENVLYSO','Green Valley South')">Green Valley South</li>
            <li onClick="selectCommunity('GRNVLERCH','Green Valley Ranch')">Green Valley Ranch</li>
            <li onClick="selectCommunity('HIGHRANCH','Highlands Ranch')">Highlands Ranch</li>
            <li onClick="selectCommunity('HILLSBORO','Hillsboro')">Hillsboro</li>
            <li onClick="selectCommunity('INSPIRADA','Inspirada')">Inspirada</li>
            <li onClick="selectCommunity('IRNMTNRCH','Iron Mountain Ranch')">Iron Mountain Ranch</li>
            <li onClick="selectCommunity('LAKELASV','Lake Las Vegas')">Lake Las Vegas</li>
            <li onClick="selectCommunity('LASCAS','Las Casitas')">Las Casitas</li>
            <li onClick="selectCommunity('LASVCC','Las Vegas Country Club')">Las Vegas Country Club</li> 
            <li onClick="selectCommunity('LEGACY','Legacy')">Legacy</li>
            <li onClick="selectCommunity('LONEMTN','Lone Mountain')">Lone Mountain</li>
            <li onClick="selectCommunity('LONEMTNW','Lone Mountain West')">Lone Mountain West</li>
            <li onClick="selectCommunity('LOSPRADOS','Los Prados')">Los Prados</li>
            <li onClick="selectCommunity('LYNBROOK','Lynbrook')">Lynbrook</li>
            <li onClick="selectCommunity('MACDHGLD','MacDonald Highlands')">MacDonald Highlands</li>

            <li onClick="selectCommunity('MACDNLRC','MacDonald Ranch')">MacDonald Ranch</li>

            <li onClick="selectCommunity('MADCNYN','Madeira Canyon')">Madeira Canyon</li>
            <li onClick="selectCommunity('MCNEILL','McNeill')">McNeill</li>
            <li onClick="selectCommunity('MESAVERDE','Mesa Verde')">Mesa Verde</li>
            <li onClick="selectCommunity('MIRAVILLA','Mira Villa')">Mira Villa</li>
            <li onClick="selectCommunity('MONACO','Monaco')">Monaco</li>
            <li onClick="selectCommunity('MONTECITO','Montecito')">Montecito</li>
            <li onClick="selectCommunity('MOUNTNEDGE','Mountains Edge')">Mountains Edge</li>
            <li onClick="selectCommunity('MTCHGOLF','Mt. Charleston Golf Estates')">Mt. Charleston Golf Estates</li>
            <li onClick="selectCommunity('MTNFALLS','Mountain Falls')">Mountain Falls</li>
            <li onClick="selectCommunity('NONE','None')">None</li>
            <li onClick="selectCommunity('NRTHSH','North Shores')">North Shores</li>
            <li onClick="selectCommunity('NVTRLS','Nevada Trails')">Nevada Trails</li>
            <li onClick="selectCommunity('PAINTEDDES','Painted Desert')">Painted Desert</li>
            <li onClick="selectCommunity('PARADISEHI','Paradise Hills')">Paradise Hills</li>

            <li onClick="selectCommunity('PECCOLERCH','Peccole Ranch')">Peccole Ranch</li>
            <li onClick="selectCommunity('PKHGLDS','Park Highlands')">Park Highlands</li>
            <li onClick="selectCommunity('PROVIDENCE','Providence')">Providence</li>
            <li onClick="selectCommunity('QUEENSRDG','Queensridge')">Queensridge</li>
            <li onClick="selectCommunity('RCHCIR','Rancho Circle')">Rancho Circle</li>
            <li onClick="selectCommunity('RCHLASPALM','Rancho Las Palmas')">Rancho Las Palmas</li>
            <li onClick="selectCommunity('REDRCKCC','Red Rock Country Club')">Red Rock Country Club</li>
            <li onClick="selectCommunity('RHODESRNC','Rhodes Ranch')">Rhodes Ranch</li>
            <li onClick="selectCommunity('RIDGES','The Ridges')">The Ridges</li>
            <li onClick="selectCommunity('SCOTCHATES','Scotch 80s')">Scotch 80s</li>
            <li onClick="selectCommunity('SEVENHILLS','Seven Hills')">Seven Hills</li>
            <li onClick="selectCommunity('SHADOWHL','Shadow Hills')">Shadow Hills</li>

            <li onClick="selectCommunity('SHGHLANDS','Southern Highlands')">Southern Highlands</li>
            <li onClick="selectCommunity('SIENA','Siena')">Siena</li>
            <li onClick="selectCommunity('SILVERADO','Silverado Ranch')">Silverado Ranch</li>
            <li onClick="selectCommunity('SILVERSPRG','Silver Springs')">Silver Springs</li>
            <li onClick="selectCommunity('SILVERSTON','Silverstone Ranch')">Silverstone Ranch</li>

            <li onClick="selectCommunity('SMMRLIN','Summerlin')">Summerlin</li>
            <li onClick="selectCommunity('SNMACDNLRC','Sunridge at Mac Donald Ranch')">Sunridge at Mac Donald Ranch</li>
            <li onClick="selectCommunity('SOLE','Solera')">Solera</li>
            <li onClick="selectCommunity('SOUTHFORK','Southfork')">Southfork</li>   

            <li onClick="selectCommunity('SOUTHSHORE','South Shore')">South Shore</li>
            <li onClick="selectCommunity('SOUTHTER','Southern Terrace')">Southern Terrace</li>  
            <li onClick="selectCommunity('SOUTHVLYRN','South Valley Ranch')">South Valley Ranch</li>
            <li onClick="selectCommunity('SPANISHHIL','Spanish Hill')">Spanish Hill</li>    
            <li onClick="selectCommunity('SPANISHOAK','Spanish Oaks')">Spanish Oaks</li>
            <li onClick="selectCommunity('SPANISHTRL','Spanish Trail')">Spanish Trail</li>  
            <li onClick="selectCommunity('SPRNGMTNR','Spring Mountain Ranch')">Spring Mountain Ranch</li>
            <li onClick="selectCommunity('SPRNGVL','Spring Valley')">Spring Valley</li> 
            <li onClick="selectCommunity('STALLNMTN','Stallion Mountain')">Stallion Mountain</li>
            <li onClick="selectCommunity('SUMMERLINH','Summerlin Hills')">Summerlin Hills</li>  
            <li onClick="selectCommunity('SUNCITYALI','Sun City Aliante')">Sun City Aliante</li>
            <li onClick="selectCommunity('SUNCITYANT','Sun City Anthem')">Sun City Anthem</li>  
            <li onClick="selectCommunity('SUNCITYMCD','Sun City MacDonald Ranch')">Sun City MacDonald Ranch</li>
            <li onClick="selectCommunity('SUNCITYSUM','Sun City Summerlin')">Sun City Summerlin</li>    
            <li onClick="selectCommunity('SWRANCH','Southwest Ranch')">Southwest Ranch</li>
            <li onClick="selectCommunity('THEBLUFFS','The Bluffs')">The Bluffs</li> 
            <li onClick="selectCommunity('THELAKES','The Lakes')">The Lakes</li>
            <li onClick="selectCommunity('TIERADLPAL','Tierra De Las Palmas')">Tierra De Las Palmas</li>    

            <li onClick="selectCommunity('TUSCANY','Tuscany')">Tuscany</li>
            <li onClick="selectCommunity('TWNCENTER','Town Center')">Town Center</li>   
            <li onClick="selectCommunity('WHITNEYRC','Whitney Ranch')">Whitney Ranch</li>
            <li onClick="selectCommunity('WINERY','Winery')">Winery</li>
            <li onClick="selectCommunity('WOODCREST','Woodcrest')">Woodcrest</li>   
            <li onClick="selectCommunity('WSMMRLIN','Summerlin West')">Summerlin West</li>
            
            

                        
        </ul>
        </div>
        <!-- <input type="submit" name="submit" id="search_submit" value="Search"> -->
        
        <button id="search_submit" value="Search" type="submit" style="transition: none 0s ease 0s ; line-height: 22px; border-width: 1px; margin: 0px; padding: 5px; letter-spacing: 0px; font-weight: 400; font-size: 18px;"><i class="fa fa-search" style="transition: none 0s ease 0s ; line-height: 22px; border-width: 0px; margin: 0px; padding: 0px; letter-spacing: 0px; font-weight: 400; font-size: 17px;"></i><span style="transition: none 0s ease 0s ; line-height: 21px; border-width: 0px; margin: 0px 0px 0px 5px; padding: 0px; letter-spacing: 0px; font-weight: 400; font-size: 17px;"></span></button><a class="advance_search" href="<?php echo site_url();?>/<?php echo get_option('RS_Advanced'); ?>">Advance Search</a>
        </div>
    </form>
