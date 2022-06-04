function swapPic(zone, nr) {

    var pic = document.getElementById('hovered')

    pic.src = '/storage/assets/img/Algeria/Algeria.svg'

    zone.onmouseout = function () {

      pic.src = '/storage/assets/img/Algeria/Algeria.svg'

    }

  }