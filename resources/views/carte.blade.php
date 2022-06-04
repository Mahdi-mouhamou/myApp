<div id="pic"

style="height: auto; width: auto; background-image: url('/ressources/images/areas/assets.png'); background-repeat: no-repeat">

<img id="hovered" src="assets/img/areas/0.png" usemap="#image-map" width="960" height="631" />

<map name="image-map">

  <area target="_blank" alt="Asset Nord" title="Asset Nord" onmouseover="swapPic(this,1)"

    href="Tableaux Périmetre/table01.html"

    coords="316,59,332,51,349,41,371,29,395,18,413,6,634,3,637,21,621,36,625,59,629,82,626,99,607,129,594,132,586,134,580,125,564,120,552,119,539,113,509,111,494,116,479,125,463,133,459,167,452,174,401,173,399,192,377,195,353,180,339,149,335,110,320,86"

    shape="poly">

  <area target="_blank" alt="Asset Centre" title="Asset Centre" onmouseover="swapPic(this,2)"

    href="Tableaux Périmetre/table02.html"

    coords="457,164,459,137,483,116,512,110,539,111,555,116,579,125,592,134,611,127,614,133,622,145,629,154,633,161,640,168,654,175,662,189,644,189,643,206,625,207,627,241,618,243,619,249,588,249,585,255,584,289,575,295,574,320,556,324,554,370,542,374,543,397,500,398,497,360,491,355,491,324,484,323,484,199,460,196,436,194,400,196,403,174,451,172"

    shape="poly">

  <area target="_blank" alt="Asset Est" title="Asset Ouest" onmouseover="swapPic(this,4)"

    href="{{ route('get.product') }}"

    coords="348,180,367,180,368,187,374,192,397,196,482,196,482,318,492,321,489,354,497,353,497,429,490,426,477,423,478,437,448,439,449,429,440,427,440,438,427,437,426,430,405,432,403,537,111,329,116,285,148,267,167,262,191,261,212,265,220,254,230,248,253,232,273,228,276,218,272,210,277,197,301,193,296,184,318,178,335,183"

    shape="poly">

  <area target="_blank" target="_blank" alt="Asset Ouest" title="Asset Est" onmouseover="swapPic(this,3)"

    href="Tableaux Périmetre/table04.html"

    coords="661,186,665,207,670,225,679,255,688,279,692,306,693,324,693,332,696,351,692,358,685,367,681,375,689,383,699,397,705,413,708,421,719,427,732,426,749,439,757,434,770,454,626,556,575,606,491,624,483,619,491,610,488,599,489,593,480,591,468,587,462,584,457,581,449,578,436,575,428,566,420,563,421,553,406,541,406,437,424,433,441,437,442,428,448,431,452,437,478,437,475,426,492,424,490,430,498,432,499,397,543,394,542,367,553,369,553,320,572,319,571,291,585,290,580,252,587,247,613,246,620,240,628,241,625,204,639,204,642,187"

    shape="poly">

</map>

</div>


<script>
    function swapPic(zone, nr) {

var pic = document.getElementById('hovered')

pic.src = '/storage/assets/img/Algeria/Algeria.svg'

zone.onmouseout = function () {

  pic.src = '/storage/assets/img/Algeria/Algeria.svg'

}
}
</script>