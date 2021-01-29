/* Copy element value ******************************************************* */

  // HTML: onclick="copyElement(event)"

  function copyElement(event) {
    var target = event.target || event.srcElement;
    var text = target.innerHTML.replace('&amp;','&');
    console.log(text);
    navigator.clipboard.writeText(text);
  }

/* reset form content ******************************************************* */

  /* IF F5 with form content */
  if ( window.history.replaceState ) {
    window.history.replaceState( null, null, window.location.href );
  }

/* show content after scroll ************************************************ */

  function showFooterButtons() {
    foo = document.getElementById('foo');
    var y = window.scrollY;
    if (y >= 200) {
      foo.className  = '';
    } else {
      foo.className  = 'hidden';
    }
  };
  window.addEventListener('scroll', showFooterButtons);

/* for website coursemania.xyz ********************************************** */

  function SiteScript() {
    setTimeout(function() {
      window.open(
        document.getElementById("enroll-now").getElementsByTagName("a")[0].href,
        "_self"
      );
    }, 2000);
  }

/* for website coursetime.net ********************************************** */

  function SiteScript() {
    setTimeout(function() {
      window.open(
        document.getElementsByClassName("wp-block-button__link")[0].href,
        "_self"
      );
    }, 1000);
  }
