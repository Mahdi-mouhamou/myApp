<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/main.css') }}" rel="stylesheet">
        <link rel="stylesheet" href="{{ asset('fonts\vendor\bootstrap-icons\bootstrap-icons.woff') }}"> 
        <script src="{{ asset('js/app.js') }}"></script>
        <script src="{{ asset('js/carte.js') }}"></script>
        <!-- Styles -->
        <style>
            /*! normalize.css v8.0.1 | MIT License | github.com/necolas/normalize.css */html{line-height:1.15;-webkit-text-size-adjust:100%}body{margin:0}a{background-color:transparent}[hidden]{display:none}html{font-family:system-ui,-apple-system,BlinkMacSystemFont,Segoe UI,Roboto,Helvetica Neue,Arial,Noto Sans,sans-serif,Apple Color Emoji,Segoe UI Emoji,Segoe UI Symbol,Noto Color Emoji;line-height:1.5}*,:after,:before{box-sizing:border-box;border:0 solid #e2e8f0}a{color:inherit;text-decoration:inherit}svg,video{display:block;vertical-align:middle}video{max-width:100%;height:auto}.bg-white{--bg-opacity:1;background-color:#fff;background-color:rgba(255,255,255,var(--bg-opacity))}.bg-gray-100{--bg-opacity:1;background-color:#f7fafc;background-color:rgba(247,250,252,var(--bg-opacity))}.border-gray-200{--border-opacity:1;border-color:#edf2f7;border-color:rgba(237,242,247,var(--border-opacity))}.border-t{border-top-width:1px}.flex{display:flex}.grid{display:grid}.hidden{display:none}.items-center{align-items:center}.justify-center{justify-content:center}.font-semibold{font-weight:600}.h-5{height:1.25rem}.h-8{height:2rem}.h-16{height:4rem}.text-sm{font-size:.875rem}.text-lg{font-size:1.125rem}.leading-7{line-height:1.75rem}.mx-auto{margin-left:auto;margin-right:auto}.ml-1{margin-left:.25rem}.mt-2{margin-top:.5rem}.mr-2{margin-right:.5rem}.ml-2{margin-left:.5rem}.mt-4{margin-top:1rem}.ml-4{margin-left:1rem}.mt-8{margin-top:2rem}.ml-12{margin-left:3rem}.-mt-px{margin-top:-1px}.max-w-6xl{max-width:72rem}.min-h-screen{min-height:100vh}.overflow-hidden{overflow:hidden}.p-6{padding:1.5rem}.py-4{padding-top:1rem;padding-bottom:1rem}.px-6{padding-left:1.5rem;padding-right:1.5rem}.pt-8{padding-top:2rem}.fixed{position:fixed}.relative{position:relative}.top-0{top:0}.right-0{right:0}.shadow{box-shadow:0 1px 3px 0 rgba(0,0,0,.1),0 1px 2px 0 rgba(0,0,0,.06)}.text-center{text-align:center}.text-gray-200{--text-opacity:1;color:#edf2f7;color:rgba(237,242,247,var(--text-opacity))}.text-gray-300{--text-opacity:1;color:#e2e8f0;color:rgba(226,232,240,var(--text-opacity))}.text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}.text-gray-500{--text-opacity:1;color:#a0aec0;color:rgba(160,174,192,var(--text-opacity))}.text-gray-600{--text-opacity:1;color:#718096;color:rgba(113,128,150,var(--text-opacity))}.text-gray-700{--text-opacity:1;color:#4a5568;color:rgba(74,85,104,var(--text-opacity))}.text-gray-900{--text-opacity:1;color:#1a202c;color:rgba(26,32,44,var(--text-opacity))}.underline{text-decoration:underline}.antialiased{-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.w-5{width:1.25rem}.w-8{width:2rem}.w-auto{width:auto}.grid-cols-1{grid-template-columns:repeat(1,minmax(0,1fr))}@media (min-width:640px){.sm\:rounded-lg{border-radius:.5rem}.sm\:block{display:block}.sm\:items-center{align-items:center}.sm\:justify-start{justify-content:flex-start}.sm\:justify-between{justify-content:space-between}.sm\:h-20{height:5rem}.sm\:ml-0{margin-left:0}.sm\:px-6{padding-left:1.5rem;padding-right:1.5rem}.sm\:pt-0{padding-top:0}.sm\:text-left{text-align:left}.sm\:text-right{text-align:right}}@media (min-width:768px){.md\:border-t-0{border-top-width:0}.md\:border-l{border-left-width:1px}.md\:grid-cols-2{grid-template-columns:repeat(2,minmax(0,1fr))}}@media (min-width:1024px){.lg\:px-8{padding-left:2rem;padding-right:2rem}}@media (prefers-color-scheme:dark){.dark\:bg-gray-800{--bg-opacity:1;background-color:#2d3748;background-color:rgba(45,55,72,var(--bg-opacity))}.dark\:bg-gray-900{--bg-opacity:1;background-color:#1a202c;background-color:rgba(26,32,44,var(--bg-opacity))}.dark\:border-gray-700{--border-opacity:1;border-color:#4a5568;border-color:rgba(74,85,104,var(--border-opacity))}.dark\:text-white{--text-opacity:1;color:#fff;color:rgba(255,255,255,var(--text-opacity))}.dark\:text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}.dark\:text-gray-500{--tw-text-opacity:1;color:#6b7280;color:rgba(107,114,128,var(--tw-text-opacity))}}
        </style>

       
    </head>
   <body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
      <div class="container-fluid">
        <a class="navbar-brand" href="#">EXPLORATION</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
    
        <div class="collapse navbar-collapse" id="navbarColor01">
          <ul class="navbar-nav me-auto">
            <li class="nav-item">
              <a class="nav-link active" href="#">Home
                <span class="visually-hidden">(current)</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/admin">Dashbord</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">About</a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Dropdown</a>
              <div class="dropdown-menu">
                <a class="dropdown-item" href="#">Action</a>
                <a class="dropdown-item" href="#">Another action</a>
                <a class="dropdown-item" href="#">Something else here</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#">Separated link</a>
              </div>
            </li>
          </ul>
          <form class="d-flex">
            <input class="form-control me-sm-2" type="text" placeholder="Search">
            <button class="btn btn-secondary my-2 my-sm-0" type="submit">Search</button>
          </form>
        </div>
      </div>
    </nav>
    <main>

                    <!-- Image Map Generated by http://www.image-map.net/  !!!!!!!!!!!!!!!!!!!!!!!!!!! -->

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

      <table class="table table-hover">
        <thead>
          <tr>
            <th scope="col">Type</th>
            <th scope="col">Column heading</th>
            <th scope="col">Column heading</th>
            <th scope="col">Column heading</th>
          </tr>
        </thead>
        <tbody>
          <tr class="table-active">
            <th scope="row">Active</th>
            <td>Column content</td>
            <td>Column content</td>
            <td>Column content</td>
          </tr>
          <tr>
            <th scope="row">Default</th>
            <td>Column content</td>
            <td>Column content</td>
            <td>Column content</td>
          </tr>
          <tr class="table-primary">
            <th scope="row">Primary</th>
            <td>Column content</td>
            <td>Column content</td>
            <td>Column content</td>
          </tr>
          <tr class="table-secondary">
            <th scope="row">Secondary</th>
            <td>Column content</td>
            <td>Column content</td>
            <td>Column content</td>
          </tr>
          <tr class="table-success">
            <th scope="row">Success</th>
            <td>Column content</td>
            <td>Column content</td>
            <td>Column content</td>
          </tr>
          <tr class="table-danger">
            <th scope="row">Danger</th>
            <td>Column content</td>
            <td>Column content</td>
            <td>Column content</td>
          </tr>
          <tr class="table-warning">
            <th scope="row">Warning</th>
            <td>Column content</td>
            <td>Column content</td>
            <td>Column content</td>
          </tr>
          <tr class="table-info">
            <th scope="row">Info</th>
            <td>Column content</td>
            <td>Column content</td>
            <td>Column content</td>
          </tr>
          <tr class="table-light">
            <th scope="row">Light</th>
            <td>Column content</td>
            <td>Column content</td>
            <td>Column content</td>
          </tr>
          <tr class="table-dark">
            <th scope="row">Dark</th>
            <td>Column content</td>
            <td>Column content</td>
            <td>Column content</td>
          </tr>
        </tbody>
      </table>
    </main>
    <div class="row">
      <div class="card text-white bg-primary mb-3" style="max-width: 20rem;">
        <div class="card-header">Header</div>
        <div class="card-body">
          <h4 class="card-title">Primary card title</h4>
          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
        </div>
      </div>
      <div class="card text-white bg-secondary mb-3" style="max-width: 20rem;">
        <div class="card-header">Header</div>
        <div class="card-body">
          <h4 class="card-title">Secondary card title</h4>
          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
        </div>
      </div>
      <div class="card text-white bg-success mb-3" style="max-width: 20rem;">
        <div class="card-header">Header</div>
        <div class="card-body">
          <h4 class="card-title">Success card title</h4>
          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
        </div>
      </div>
      <div class="card text-white bg-danger mb-3" style="max-width: 20rem;">
        <div class="card-header">Header</div>
        <div class="card-body">
          <h4 class="card-title">Danger card title</h4>
          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
        </div>
      </div>
    </div>
   
    <div class="row">
      <div class="card text-white bg-warning mb-3" style="max-width: 20rem;">
        <div class="card-header">Header</div>
        <div class="card-body">
          <h4 class="card-title">Warning card title</h4>
          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
        </div>
      </div>
      <div class="card text-white bg-info mb-3" style="max-width: 20rem;">
        <div class="card-header">Header</div>
        <div class="card-body">
          <h4 class="card-title">Info card title</h4>
          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
        </div>
      </div>
      <div class="card bg-light mb-3" style="max-width: 20rem;">
        <div class="card-header">Header</div>
        <div class="card-body">
          <h4 class="card-title">Light card title</h4>
          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
        </div>
      </div>
      <div class="card text-white bg-dark mb-3" style="max-width: 20rem;">
        <div class="card-header">Header</div>
        <div class="card-body">
          <h4 class="card-title">Dark card title</h4>
          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
        </div>
      </div>
    </div>
  
   </body>
</html>
