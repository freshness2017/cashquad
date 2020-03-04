<!DOCTYPE html>
<html lang="en">

<head>
  <meta name="robots" content="index, follow" />
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1,maximum-scale=7">
  <title>Free Admin Dashboard Template Build with Bulma.io By Irfan Maulana</title>


  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="bulma.css">

</head>

<body>

  <header class="hero">
    <div class="hero-head">
      <nav class="navbar has-shadow" role="navigation" aria-label="main navigation">
        <div class="navbar-brand">

          <a class="navbar-item is--brand">
            <img class="navbar-brand-logo" src="/bulma-admin-dashboard-template/logo.png" alt="Bulma Admin Template logo">
          </a>
          <a class="navbar-item is-tab is-hidden-mobile is-active"><span class="icon is-medium"><i class="fa fa-home"></i></span>Home</a>
          <a class="navbar-item is-tab is-hidden-mobile" href="https://github.com/mazipan/bulma-admin-dashboard-template">Github</a>
          <a class="navbar-item is-tab is-hidden-mobile" href="https://mazipan.github.io/bulma-resume-template/">Resume Template</a>
          <a class="navbar-item is-tab is-hidden-mobile" href="#about">About</a>

          <button class="button navbar-burger" data-target="navMenu">
            <span></span>
            <span></span>
            <span></span>
          </button>

        </div>


        <div class="navbar-menu navbar-end" id="navMenu">
          <a class="navbar-item is-tab is-hidden-tablet is-active">Home</a>
          <a class="navbar-item is-tab is-hidden-tablet" href="https://github.com/mazipan/bulma-admin-dashboard-template">Github</a>
          <a class="navbar-item is-tab is-hidden-tablet" href="https://mazipan.github.io/bulma-resume-template/">Resume Template</a>
          <a class="navbar-item is-tab is-hidden-tablet" href="#about">About</a>
          <a class="navbar-item nav-tag">
            <span class="icon is-small">
              <i class="fa fa-envelope-o"></i>
            </span>
            <span class="tag is-primary tag-notif">6</span>
          </a>
          <div class="navbar-item has-dropdown is-hoverable">
            <a class="navbar-link">
              <figure class="image is-32x32" style="margin-right:.5em;">
                <img src="https://avatars1.githubusercontent.com/u/7221389?v=4&s=32">
              </figure>
              mazipan
            </a>

            <div class="navbar-dropdown is-right">
                <a class="navbar-item">
                  <span class="icon is-small">
                    <i class="fa fa-user-o"></i>
                  </span>
                  &nbsp; Profile
                </a>
                <hr class="navbar-divider">
                <a class="navbar-item">
                  <span class="icon is-small">
                    <i class="fa fa-power-off"></i>
                  </span>
                  &nbsp; Logout
                </a>
            </div>
          </div>
        </div>
      </nav>
    </div>
  </header>

  <div class="wrapper">
    <div class="columns">
      <aside style="background-color:#79b5a3;margin-top:16px;" class="column is-2 aside">
        <nav class="menu">
          <p class="menu-label">
            General
          </p>
          <ul class="menu-list">
            <li><a class="is-active" href="#"><span class="icon is-small"><i class="fa fa-tachometer"></i></span> Dashboard</a></li>
          </ul>
          <p class="menu-label">
            Administration
          </p>
          <ul class="menu-list">
            <li><a href="/bulma-admin-dashboard-template/forms.html"><span class="icon is-small"><i class="fa fa-pencil-square-o"></i></span> Forms</a></li>
            <li><a href="/bulma-admin-dashboard-template/ui-elements.html"><span class="icon is-small"><i class="fa fa-desktop"></i></span> UI Elements</a></li>
            <li><a href="/bulma-admin-dashboard-template/tables.html"><span class="icon is-small"><i class="fa fa-table"></i></span> Tables</a></li>
            <li><a href="/bulma-admin-dashboard-template/presentations.html"><span class="icon is-small"><i class="fa fa-bar-chart"></i></span> Presentations</a></li>

            <li>
              <a class=""><i class="fa fa-cog"></i> Settings</a>
              <ul>
                <li><a>Members</a></li>
                <li><a>Plugins</a></li>
                <li><a>Add a member</a></li>
              </ul>
            </li>
          </ul>
          <p class="menu-label">
            Live On
          </p>
          <ul class="menu-list">
            <li><a><span class="icon is-small"><i class="fa fa-bug"></i></span> Additional Pages</a></li>
            <li><a><span class="icon is-small"><i class="fa fa-windows"></i></span> Extras</a></li>
            <li><a><span class="icon is-small"><i class="fa fa-laptop"></i></span> Landing Page</a></li>
          </ul>
        </nav>
      </aside>

      <main class="column main">
        <nav class="breadcrumb is-small" aria-label="breadcrumbs">
          <ul>
            <li><a href="#">Home</a></li>
            <li class="is-active"><a href="#" aria-current="page">Dashboard</a></li>
          </ul>
        </nav>

        <div class="level">
          <div class="level-left">
            <div class="level-item">
              <div class="title has-text-primary"><i class="fa fa-tachometer"></i> Dashboard</div>
            </div>
          </div>
          <div class="level-right">
            <div class="level-item">
              <button type="button" class="button is-small">
                March 8, 2017 - April 6, 2017
              </button>
            </div>
          </div>
        </div>

        <div class="columns is-multiline">
          <div class="column">
            <div class="box notification is-primary">
              <div class="heading">Top Seller Total</div>
              <div class="title">56,950</div>
              <div class="level">
                <div class="level-item">
                  <div class="">
                    <div class="heading">Sales $</div>
                    <div class="title is-5">250K</div>
                  </div>
                </div>
                <div class="level-item">
                  <div class="">
                    <div class="heading">Overall $</div>
                    <div class="title is-5">750K</div>
                  </div>
                </div>
                <div class="level-item">
                  <div class="">
                    <div class="heading">Sales %</div>
                    <div class="title is-5">25%</div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="column">
            <div class="box notification is-warning">
              <div class="heading">Revenue / Expenses</div>
              <div class="title">55% / 45%</div>
              <div class="level">
                <div class="level-item">
                  <div class="">
                    <div class="heading">Rev Prod $</div>
                    <div class="title is-5">30%</div>
                  </div>
                </div>
                <div class="level-item">
                  <div class="">
                    <div class="heading">Rev Serv $</div>
                    <div class="title is-5">25%</div>
                  </div>
                </div>
                <div class="level-item">
                  <div class="">
                    <div class="heading">Exp %</div>
                    <div class="title is-5">45%</div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="column">
            <div class="box notification is-info">
              <div class="heading">Feedback Activity</div>
              <div class="title">78% &uarr;</div>
              <div class="level">
                <div class="level-item">
                  <div class="">
                    <div class="heading">Pos</div>
                    <div class="title is-5">1560</div>
                  </div>
                </div>
                <div class="level-item">
                  <div class="">
                    <div class="heading">Neg</div>
                    <div class="title is-5">368</div>
                  </div>
                </div>
                <div class="level-item">
                  <div class="">
                    <div class="heading">Pos/Neg %</div>
                    <div class="title is-5">77% / 23%</div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="column">
            <div class="box notification is-danger">
              <div class="heading">Orders / Returns</div>
              <div class="title">75% / 25%</div>
              <div class="level">
                <div class="level-item">
                  <div class="">
                    <div class="heading">Orders $</div>
                    <div class="title is-5">425K</div>
                  </div>
                </div>
                <div class="level-item">
                  <div class="">
                    <div class="heading">Returns $</div>
                    <div class="title is-5">106K</div>
                  </div>
                </div>
                <div class="level-item">
                  <div class="">
                    <div class="heading">Success %</div>
                    <div class="title is-5">+ 28,5%</div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="columns is-multiline">
          <div class="column is-6">
            <article class="message is-dark">
              <div class="message-header">
                <p>Chart</p>
              </div>
              <div class="message-body">
                <div id="chartLine" style="width: 100%;"></div>
              </div>
            </article>
          </div>
          <div class="column is-6">
            <article class="message is-dark">
              <div class="message-header">
                <p>Chart</p>
              </div>
              <div class="message-body">
                <div id="chartScatter" style="width: 100%;"></div>
              </div>
            </article>
          </div>
          <div class="column is-6">
            <article class="message is-dark">
              <div class="message-header">
                <p>Chart</p>
              </div>
              <div class="message-body">
                <div id="chartDoughnut" style="width: 100%;"></div>
              </div>
            </article>
          </div>
          <div class="column is-6">
            <article class="message is-dark">
              <div class="message-header">
                <p>Chart</p>
              </div>
              <div class="message-body">
                <div id="chartBar" style="width: 100%;"></div>
              </div>
            </article>
          </div>
        </div>
      </main>
    </div>
  </div>



  <!-- GOOGLE ANALYTICS AND FRIENDS -->
  <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
  <ins class="adsbygoogle" style="display:block" data-ad-client="ca-pub-5442972248172818" data-ad-slot="1487770485" data-ad-format="auto"></ins>
  <script>
  (adsbygoogle = window.adsbygoogle || []).push({});
  </script>
  <script type="application/ld+json">{"@context":"http://schema.org","@type":"WebSite","url":"https://www.mazipan.github.io/","name":"Irfan Maulana | Front End Developer","author":"Irfan Maulana","image":"http://mazipan.github.io/images/irfan-maulana.jpg","description":"Irfan Maulana is Front End Developer from Indonesia - Man that craft some code to build a beauty and readable code, experienced in web and desktop technology.","sameAs":["https://www.facebook.com/mazipanneh","https://instagram.com/maz_ipan","https://twitter.com/Maz_Ipan","https://id.linkedin.com/in/irfanmaulanamazipan","https://www.slideshare.net/IrfanMaulana21","https://github.com/mazipan"]}</script> <script type="application/ld+json">{"@context":"http://schema.org","@type":"Person","email":"mailto:mazipanneh@gmail.com","image":"http://mazipan.github.io/images/irfan-maulana.jpg","jobTitle":"Software Engineer","name":"Irfan Maulana","url":"https://www.mazipan.github.io/","sameAs":["https://www.facebook.com/mazipanneh","https://instagram.com/maz_ipan","https://twitter.com/Maz_Ipan","https://id.linkedin.com/in/irfanmaulanamazipan","https://www.slideshare.net/IrfanMaulana21","https://github.com/mazipan"]}</script>
  <script type="application/ld+json">
  {
    "@context": "http://schema.org",
    "@type": "BreadcrumbList",
    "itemListElement": [{
      "@type": "ListItem",
      "position": 1,
      "item": {
        "@id": "http://mazipan.github.io/",
        "name": "Home",
        "image": "http://mazipan.github.io/images/irfan-maulana.jpg"
      }
    }, {
      "@type": "ListItem",
      "position": 2,
      "item": {
        "@id": "http://mazipan.github.io/demo/",
        "name": "Demo",
        "image": "http://mazipan.github.io/images/irfan-maulana.jpg"
      }
    }, {
      "@type": "ListItem",
      "position": 3,
      "item": {
        "@id": "http://mazipan.github.io/bulma-admin-dashboard-template",
        "name": "bulma-admin-dashboard-template",
        "image": "https://mazipan.github.io/bulma-admin-dashboard-template/logo.png"
      }
    }]
  }
  </script>
</body>

</html>
