




<!DOCTYPE html>
<html>
  <head prefix="og: http://ogp.me/ns# fb: http://ogp.me/ns/fb# object: http://ogp.me/ns/object# article: http://ogp.me/ns/article# profile: http://ogp.me/ns/profile#">
    <meta charset='utf-8'>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>type-a-number-php/server/ServerRequests.php at master · playgameservices/type-a-number-php · GitHub</title>
    <link rel="search" type="application/opensearchdescription+xml" href="/opensearch.xml" title="GitHub" />
    <link rel="fluid-icon" href="https://github.com/fluidicon.png" title="GitHub" />
    <link rel="apple-touch-icon" sizes="57x57" href="/apple-touch-icon-114.png" />
    <link rel="apple-touch-icon" sizes="114x114" href="/apple-touch-icon-114.png" />
    <link rel="apple-touch-icon" sizes="72x72" href="/apple-touch-icon-144.png" />
    <link rel="apple-touch-icon" sizes="144x144" href="/apple-touch-icon-144.png" />
    <meta property="fb:app_id" content="1401488693436528"/>

      <meta content="@github" name="twitter:site" /><meta content="summary" name="twitter:card" /><meta content="playgameservices/type-a-number-php" name="twitter:title" /><meta content="type-a-number-php - Ajax-y version of the Type-a-Number challenge using PHP" name="twitter:description" /><meta content="https://2.gravatar.com/avatar/bcb77bd54e9aa1d933b0dfb1fcf5846e?d=https%3A%2F%2Fidenticons.github.com%2F343a5a37a6857ba3671daea8ad7a48f1.png&amp;r=x&amp;s=400" name="twitter:image:src" />
<meta content="GitHub" property="og:site_name" /><meta content="object" property="og:type" /><meta content="https://2.gravatar.com/avatar/bcb77bd54e9aa1d933b0dfb1fcf5846e?d=https%3A%2F%2Fidenticons.github.com%2F343a5a37a6857ba3671daea8ad7a48f1.png&amp;r=x&amp;s=400" property="og:image" /><meta content="playgameservices/type-a-number-php" property="og:title" /><meta content="https://github.com/playgameservices/type-a-number-php" property="og:url" /><meta content="type-a-number-php - Ajax-y version of the Type-a-Number challenge using PHP" property="og:description" />

    <meta name="hostname" content="github-fe129-cp1-prd.iad.github.net">
    <meta name="ruby" content="ruby 2.1.0p0-github-tcmalloc (87d8860372) [x86_64-linux]">
    <link rel="assets" href="https://github.global.ssl.fastly.net/">
    <link rel="conduit-xhr" href="https://ghconduit.com:25035/">
    <link rel="xhr-socket" href="/_sockets" />


    <meta name="msapplication-TileImage" content="/windows-tile.png" />
    <meta name="msapplication-TileColor" content="#ffffff" />
    <meta name="selected-link" value="repo_source" data-pjax-transient />
    <meta content="collector.githubapp.com" name="octolytics-host" /><meta content="collector-cdn.github.com" name="octolytics-script-host" /><meta content="github" name="octolytics-app-id" /><meta content="4E121A1B:2478:99C5F:52FA2C4C" name="octolytics-dimension-request_id" />
    

    
    
    <link rel="icon" type="image/x-icon" href="/favicon.ico" />

    <meta content="authenticity_token" name="csrf-param" />
<meta content="wqf/Em2nJ6ltcWtLdcYys7OM69Ij546pC4YT0YGhiIM=" name="csrf-token" />

    <link href="https://github.global.ssl.fastly.net/assets/github-3edaf451c5611e17e1cd26dd9e684f8c2ff7cdab.css" media="all" rel="stylesheet" type="text/css" />
    <link href="https://github.global.ssl.fastly.net/assets/github2-456a392493f696a3779ecd85c4913acdef7d9507.css" media="all" rel="stylesheet" type="text/css" />
    


      <script src="https://github.global.ssl.fastly.net/assets/frameworks-141ccdd45eb970761fa7cacc2cb60ed9726dd738.js" type="text/javascript"></script>
      <script async="async" defer="defer" src="https://github.global.ssl.fastly.net/assets/github-b68d1e19c0b2aef3b0d249778034d8849a904f0e.js" type="text/javascript"></script>
      
      <meta http-equiv="x-pjax-version" content="b69b4a881f4921f927c68c221c42c1ee">

        <link data-pjax-transient rel='permalink' href='/playgameservices/type-a-number-php/blob/5ce6fb52f2994a90f18cf44a6926922268383988/server/ServerRequests.php'>

  <meta name="description" content="type-a-number-php - Ajax-y version of the Type-a-Number challenge using PHP" />

  <meta content="4439547" name="octolytics-dimension-user_id" /><meta content="playgameservices" name="octolytics-dimension-user_login" /><meta content="10483537" name="octolytics-dimension-repository_id" /><meta content="playgameservices/type-a-number-php" name="octolytics-dimension-repository_nwo" /><meta content="true" name="octolytics-dimension-repository_public" /><meta content="false" name="octolytics-dimension-repository_is_fork" /><meta content="10483537" name="octolytics-dimension-repository_network_root_id" /><meta content="playgameservices/type-a-number-php" name="octolytics-dimension-repository_network_root_nwo" />
  <link href="https://github.com/playgameservices/type-a-number-php/commits/master.atom" rel="alternate" title="Recent Commits to type-a-number-php:master" type="application/atom+xml" />

  </head>


  <body class="logged_out  env-production windows vis-public page-blob">
    <div class="wrapper">
      
      
      
      


      
      <div class="header header-logged-out">
  <div class="container clearfix">

    <a class="header-logo-wordmark" href="https://github.com/">
      <span class="mega-octicon octicon-logo-github"></span>
    </a>

    <div class="header-actions">
        <a class="button primary" href="/join">Sign up</a>
      <a class="button signin" href="/login?return_to=%2Fplaygameservices%2Ftype-a-number-php%2Fblob%2Fmaster%2Fserver%2FServerRequests.php">Sign in</a>
    </div>

    <div class="command-bar js-command-bar  in-repository">

      <ul class="top-nav">
          <li class="explore"><a href="/explore">Explore</a></li>
        <li class="features"><a href="/features">Features</a></li>
          <li class="enterprise"><a href="https://enterprise.github.com/">Enterprise</a></li>
          <li class="blog"><a href="/blog">Blog</a></li>
      </ul>
        <form accept-charset="UTF-8" action="/search" class="command-bar-form" id="top_search_form" method="get">

<input type="text" data-hotkey=" s" name="q" id="js-command-bar-field" placeholder="Search or type a command" tabindex="1" autocapitalize="off"
    
    
      data-repo="playgameservices/type-a-number-php"
      data-branch="master"
      data-sha="bdeb8d345a78b8f856a8fdde7354247a0c638aca"
  >

    <input type="hidden" name="nwo" value="playgameservices/type-a-number-php" />

    <div class="select-menu js-menu-container js-select-menu search-context-select-menu">
      <span class="minibutton select-menu-button js-menu-target">
        <span class="js-select-button">This repository</span>
      </span>

      <div class="select-menu-modal-holder js-menu-content js-navigation-container">
        <div class="select-menu-modal">

          <div class="select-menu-item js-navigation-item js-this-repository-navigation-item selected">
            <span class="select-menu-item-icon octicon octicon-check"></span>
            <input type="radio" class="js-search-this-repository" name="search_target" value="repository" checked="checked" />
            <div class="select-menu-item-text js-select-button-text">This repository</div>
          </div> <!-- /.select-menu-item -->

          <div class="select-menu-item js-navigation-item js-all-repositories-navigation-item">
            <span class="select-menu-item-icon octicon octicon-check"></span>
            <input type="radio" name="search_target" value="global" />
            <div class="select-menu-item-text js-select-button-text">All repositories</div>
          </div> <!-- /.select-menu-item -->

        </div>
      </div>
    </div>

  <span class="octicon help tooltipped downwards" title="Show command bar help">
    <span class="octicon octicon-question"></span>
  </span>


  <input type="hidden" name="ref" value="cmdform">

</form>
    </div>

  </div>
</div>


      


          <div class="site" itemscope itemtype="http://schema.org/WebPage">
    
    <div class="pagehead repohead instapaper_ignore readability-menu">
      <div class="container">
        

<ul class="pagehead-actions">


  <li>
    <a href="/login?return_to=%2Fplaygameservices%2Ftype-a-number-php"
    class="minibutton with-count js-toggler-target star-button tooltipped upwards"
    title="You must be signed in to use this feature" rel="nofollow">
    <span class="octicon octicon-star"></span>Star
  </a>

    <a class="social-count js-social-count" href="/playgameservices/type-a-number-php/stargazers">
      5
    </a>

  </li>

    <li>
      <a href="/login?return_to=%2Fplaygameservices%2Ftype-a-number-php"
        class="minibutton with-count js-toggler-target fork-button tooltipped upwards"
        title="You must be signed in to fork a repository" rel="nofollow">
        <span class="octicon octicon-git-branch"></span>Fork
      </a>
      <a href="/playgameservices/type-a-number-php/network" class="social-count">
        4
      </a>
    </li>
</ul>

        <h1 itemscope itemtype="http://data-vocabulary.org/Breadcrumb" class="entry-title public">
          <span class="repo-label"><span>public</span></span>
          <span class="mega-octicon octicon-repo"></span>
          <span class="author">
            <a href="/playgameservices" class="url fn" itemprop="url" rel="author"><span itemprop="title">playgameservices</span></a>
          </span>
          <span class="repohead-name-divider">/</span>
          <strong><a href="/playgameservices/type-a-number-php" class="js-current-repository js-repo-home-link">type-a-number-php</a></strong>

          <span class="page-context-loader">
            <img alt="Octocat-spinner-32" height="16" src="https://github.global.ssl.fastly.net/images/spinners/octocat-spinner-32.gif" width="16" />
          </span>

        </h1>
      </div><!-- /.container -->
    </div><!-- /.repohead -->

    <div class="container">
      

      <div class="repository-with-sidebar repo-container new-discussion-timeline js-new-discussion-timeline  ">
        <div class="repository-sidebar">
            

<div class="sunken-menu vertical-right repo-nav js-repo-nav js-repository-container-pjax js-octicon-loaders">
  <div class="sunken-menu-contents">
    <ul class="sunken-menu-group">
      <li class="tooltipped leftwards" title="Code">
        <a href="/playgameservices/type-a-number-php" aria-label="Code" class="selected js-selected-navigation-item sunken-menu-item" data-gotokey="c" data-pjax="true" data-selected-links="repo_source repo_downloads repo_commits repo_tags repo_branches /playgameservices/type-a-number-php">
          <span class="octicon octicon-code"></span> <span class="full-word">Code</span>
          <img alt="Octocat-spinner-32" class="mini-loader" height="16" src="https://github.global.ssl.fastly.net/images/spinners/octocat-spinner-32.gif" width="16" />
</a>      </li>

        <li class="tooltipped leftwards" title="Issues">
          <a href="/playgameservices/type-a-number-php/issues" aria-label="Issues" class="js-selected-navigation-item sunken-menu-item js-disable-pjax" data-gotokey="i" data-selected-links="repo_issues /playgameservices/type-a-number-php/issues">
            <span class="octicon octicon-issue-opened"></span> <span class="full-word">Issues</span>
            <span class='counter'>0</span>
            <img alt="Octocat-spinner-32" class="mini-loader" height="16" src="https://github.global.ssl.fastly.net/images/spinners/octocat-spinner-32.gif" width="16" />
</a>        </li>

      <li class="tooltipped leftwards" title="Pull Requests">
        <a href="/playgameservices/type-a-number-php/pulls" aria-label="Pull Requests" class="js-selected-navigation-item sunken-menu-item js-disable-pjax" data-gotokey="p" data-selected-links="repo_pulls /playgameservices/type-a-number-php/pulls">
            <span class="octicon octicon-git-pull-request"></span> <span class="full-word">Pull Requests</span>
            <span class='counter'>0</span>
            <img alt="Octocat-spinner-32" class="mini-loader" height="16" src="https://github.global.ssl.fastly.net/images/spinners/octocat-spinner-32.gif" width="16" />
</a>      </li>


    </ul>
    <div class="sunken-menu-separator"></div>
    <ul class="sunken-menu-group">

      <li class="tooltipped leftwards" title="Pulse">
        <a href="/playgameservices/type-a-number-php/pulse" aria-label="Pulse" class="js-selected-navigation-item sunken-menu-item" data-pjax="true" data-selected-links="pulse /playgameservices/type-a-number-php/pulse">
          <span class="octicon octicon-pulse"></span> <span class="full-word">Pulse</span>
          <img alt="Octocat-spinner-32" class="mini-loader" height="16" src="https://github.global.ssl.fastly.net/images/spinners/octocat-spinner-32.gif" width="16" />
</a>      </li>

      <li class="tooltipped leftwards" title="Graphs">
        <a href="/playgameservices/type-a-number-php/graphs" aria-label="Graphs" class="js-selected-navigation-item sunken-menu-item" data-pjax="true" data-selected-links="repo_graphs repo_contributors /playgameservices/type-a-number-php/graphs">
          <span class="octicon octicon-graph"></span> <span class="full-word">Graphs</span>
          <img alt="Octocat-spinner-32" class="mini-loader" height="16" src="https://github.global.ssl.fastly.net/images/spinners/octocat-spinner-32.gif" width="16" />
</a>      </li>

      <li class="tooltipped leftwards" title="Network">
        <a href="/playgameservices/type-a-number-php/network" aria-label="Network" class="js-selected-navigation-item sunken-menu-item js-disable-pjax" data-selected-links="repo_network /playgameservices/type-a-number-php/network">
          <span class="octicon octicon-git-branch"></span> <span class="full-word">Network</span>
          <img alt="Octocat-spinner-32" class="mini-loader" height="16" src="https://github.global.ssl.fastly.net/images/spinners/octocat-spinner-32.gif" width="16" />
</a>      </li>
    </ul>


  </div>
</div>

              <div class="only-with-full-nav">
                

  

<div class="clone-url open"
  data-protocol-type="http"
  data-url="/users/set_protocol?protocol_selector=http&amp;protocol_type=clone">
  <h3><strong>HTTPS</strong> clone URL</h3>
  <div class="clone-url-box">
    <input type="text" class="clone js-url-field"
           value="https://github.com/playgameservices/type-a-number-php.git" readonly="readonly">

    <span class="js-zeroclipboard url-box-clippy minibutton zeroclipboard-button" data-clipboard-text="https://github.com/playgameservices/type-a-number-php.git" data-copied-hint="copied!" title="copy to clipboard"><span class="octicon octicon-clippy"></span></span>
  </div>
</div>

  

<div class="clone-url "
  data-protocol-type="subversion"
  data-url="/users/set_protocol?protocol_selector=subversion&amp;protocol_type=clone">
  <h3><strong>Subversion</strong> checkout URL</h3>
  <div class="clone-url-box">
    <input type="text" class="clone js-url-field"
           value="https://github.com/playgameservices/type-a-number-php" readonly="readonly">

    <span class="js-zeroclipboard url-box-clippy minibutton zeroclipboard-button" data-clipboard-text="https://github.com/playgameservices/type-a-number-php" data-copied-hint="copied!" title="copy to clipboard"><span class="octicon octicon-clippy"></span></span>
  </div>
</div>


<p class="clone-options">You can clone with
      <a href="#" class="js-clone-selector" data-protocol="http">HTTPS</a>,
      or <a href="#" class="js-clone-selector" data-protocol="subversion">Subversion</a>.
  <span class="octicon help tooltipped upwards" title="Get help on which URL is right for you.">
    <a href="https://help.github.com/articles/which-remote-url-should-i-use">
    <span class="octicon octicon-question"></span>
    </a>
  </span>
</p>


  <a href="http://windows.github.com" class="minibutton sidebar-button">
    <span class="octicon octicon-device-desktop"></span>
    Clone in Desktop
  </a>

                <a href="/playgameservices/type-a-number-php/archive/master.zip"
                   class="minibutton sidebar-button"
                   title="Download this repository as a zip file"
                   rel="nofollow">
                  <span class="octicon octicon-cloud-download"></span>
                  Download ZIP
                </a>
              </div>
        </div><!-- /.repository-sidebar -->

        <div id="js-repo-pjax-container" class="repository-content context-loader-container" data-pjax-container>
          


<!-- blob contrib key: blob_contributors:v21:43309dd24124cee3fca174578019ecf4 -->

<p title="This is a placeholder element" class="js-history-link-replace hidden"></p>

<a href="/playgameservices/type-a-number-php/find/master" data-pjax data-hotkey="t" class="js-show-file-finder" style="display:none">Show File Finder</a>

<div class="file-navigation">
  

<div class="select-menu js-menu-container js-select-menu" >
  <span class="minibutton select-menu-button js-menu-target" data-hotkey="w"
    data-master-branch="master"
    data-ref="master"
    role="button" aria-label="Switch branches or tags" tabindex="0">
    <span class="octicon octicon-git-branch"></span>
    <i>branch:</i>
    <span class="js-select-button">master</span>
  </span>

  <div class="select-menu-modal-holder js-menu-content js-navigation-container" data-pjax>

    <div class="select-menu-modal">
      <div class="select-menu-header">
        <span class="select-menu-title">Switch branches/tags</span>
        <span class="octicon octicon-remove-close js-menu-close"></span>
      </div> <!-- /.select-menu-header -->

      <div class="select-menu-filters">
        <div class="select-menu-text-filter">
          <input type="text" aria-label="Filter branches/tags" id="context-commitish-filter-field" class="js-filterable-field js-navigation-enable" placeholder="Filter branches/tags">
        </div>
        <div class="select-menu-tabs">
          <ul>
            <li class="select-menu-tab">
              <a href="#" data-tab-filter="branches" class="js-select-menu-tab">Branches</a>
            </li>
            <li class="select-menu-tab">
              <a href="#" data-tab-filter="tags" class="js-select-menu-tab">Tags</a>
            </li>
          </ul>
        </div><!-- /.select-menu-tabs -->
      </div><!-- /.select-menu-filters -->

      <div class="select-menu-list select-menu-tab-bucket js-select-menu-tab-bucket" data-tab-filter="branches">

        <div data-filterable-for="context-commitish-filter-field" data-filterable-type="substring">


            <div class="select-menu-item js-navigation-item selected">
              <span class="select-menu-item-icon octicon octicon-check"></span>
              <a href="/playgameservices/type-a-number-php/blob/master/server/ServerRequests.php"
                 data-name="master"
                 data-skip-pjax="true"
                 rel="nofollow"
                 class="js-navigation-open select-menu-item-text js-select-button-text css-truncate-target"
                 title="master">master</a>
            </div> <!-- /.select-menu-item -->
        </div>

          <div class="select-menu-no-results">Nothing to show</div>
      </div> <!-- /.select-menu-list -->

      <div class="select-menu-list select-menu-tab-bucket js-select-menu-tab-bucket" data-tab-filter="tags">
        <div data-filterable-for="context-commitish-filter-field" data-filterable-type="substring">


        </div>

        <div class="select-menu-no-results">Nothing to show</div>
      </div> <!-- /.select-menu-list -->

    </div> <!-- /.select-menu-modal -->
  </div> <!-- /.select-menu-modal-holder -->
</div> <!-- /.select-menu -->

  <div class="breadcrumb">
    <span class='repo-root js-repo-root'><span itemscope="" itemtype="http://data-vocabulary.org/Breadcrumb"><a href="/playgameservices/type-a-number-php" data-branch="master" data-direction="back" data-pjax="true" itemscope="url"><span itemprop="title">type-a-number-php</span></a></span></span><span class="separator"> / </span><span itemscope="" itemtype="http://data-vocabulary.org/Breadcrumb"><a href="/playgameservices/type-a-number-php/tree/master/server" data-branch="master" data-direction="back" data-pjax="true" itemscope="url"><span itemprop="title">server</span></a></span><span class="separator"> / </span><strong class="final-path">ServerRequests.php</strong> <span class="js-zeroclipboard minibutton zeroclipboard-button" data-clipboard-text="server/ServerRequests.php" data-copied-hint="copied!" title="copy to clipboard"><span class="octicon octicon-clippy"></span></span>
  </div>
</div>


  <div class="commit file-history-tease">
    <img alt="Todd Kerpelman" class="main-avatar js-avatar" data-user="4397978" height="24" src="https://1.gravatar.com/avatar/8e42d1b3a58e20619f74d00c55405eff?d=https%3A%2F%2Fidenticons.github.com%2Fcaf58199f502a5c2d766cfe02e5b767b.png&amp;r=x&amp;s=140" width="24" />
    <span class="author"><a href="/ToddKerpelman" rel="author">ToddKerpelman</a></span>
    <time class="js-relative-date" data-title-format="YYYY-MM-DD HH:mm:ss" datetime="2013-06-04T09:41:24-07:00" title="2013-06-04 09:41:24">June 04, 2013</time>
    <div class="commit-title">
        <a href="/playgameservices/type-a-number-php/commit/e179d55439872e7efbb2d973e37873cc40848363" class="message" data-pjax="true" title="First pass of Ajax-y PHP version of Type-a-Number challenge">First pass of Ajax-y PHP version of Type-a-Number challenge</a>
    </div>

    <div class="participation">
      <p class="quickstat"><a href="#blob_contributors_box" rel="facebox"><strong>1</strong> contributor</a></p>
      
    </div>
    <div id="blob_contributors_box" style="display:none">
      <h2 class="facebox-header">Users who have contributed to this file</h2>
      <ul class="facebox-user-list">
          <li class="facebox-user-list-item">
            <img alt="Todd Kerpelman" class=" js-avatar" data-user="4397978" height="24" src="https://1.gravatar.com/avatar/8e42d1b3a58e20619f74d00c55405eff?d=https%3A%2F%2Fidenticons.github.com%2Fcaf58199f502a5c2d766cfe02e5b767b.png&amp;r=x&amp;s=140" width="24" />
            <a href="/ToddKerpelman">ToddKerpelman</a>
          </li>
      </ul>
    </div>
  </div>

<div id="files" class="bubble">
  <div class="file">
    <div class="meta">
      <div class="info">
        <span class="icon"><b class="octicon octicon-file-text"></b></span>
        <span class="mode" title="File Mode">file</span>
          <span>39 lines (35 sloc)</span>
        <span>1.302 kb</span>
      </div>
      <div class="actions">
        <div class="button-group">
            <a class="minibutton tooltipped leftwards"
               href="http://windows.github.com" title="Open this file in GitHub for Windows">
                <span class="octicon octicon-device-desktop"></span> Open
            </a>
              <a class="minibutton disabled tooltipped leftwards" href="#"
                 title="You must be signed in to make or propose changes">Edit</a>
          <a href="/playgameservices/type-a-number-php/raw/master/server/ServerRequests.php" class="button minibutton " id="raw-url">Raw</a>
            <a href="/playgameservices/type-a-number-php/blame/master/server/ServerRequests.php" class="button minibutton js-update-url-with-hash">Blame</a>
          <a href="/playgameservices/type-a-number-php/commits/master/server/ServerRequests.php" class="button minibutton " rel="nofollow">History</a>
        </div><!-- /.button-group -->
          <a class="minibutton danger disabled empty-icon tooltipped leftwards" href="#"
             title="You must be signed in to make or propose changes">
          Delete
        </a>
      </div><!-- /.actions -->
    </div>
        <div class="blob-wrapper data type-php js-blob-data">
        <table class="file-code file-diff tab-size-8">
          <tr class="file-code-line">
            <td class="blob-line-nums">
              <span id="L1" rel="#L1">1</span>
<span id="L2" rel="#L2">2</span>
<span id="L3" rel="#L3">3</span>
<span id="L4" rel="#L4">4</span>
<span id="L5" rel="#L5">5</span>
<span id="L6" rel="#L6">6</span>
<span id="L7" rel="#L7">7</span>
<span id="L8" rel="#L8">8</span>
<span id="L9" rel="#L9">9</span>
<span id="L10" rel="#L10">10</span>
<span id="L11" rel="#L11">11</span>
<span id="L12" rel="#L12">12</span>
<span id="L13" rel="#L13">13</span>
<span id="L14" rel="#L14">14</span>
<span id="L15" rel="#L15">15</span>
<span id="L16" rel="#L16">16</span>
<span id="L17" rel="#L17">17</span>
<span id="L18" rel="#L18">18</span>
<span id="L19" rel="#L19">19</span>
<span id="L20" rel="#L20">20</span>
<span id="L21" rel="#L21">21</span>
<span id="L22" rel="#L22">22</span>
<span id="L23" rel="#L23">23</span>
<span id="L24" rel="#L24">24</span>
<span id="L25" rel="#L25">25</span>
<span id="L26" rel="#L26">26</span>
<span id="L27" rel="#L27">27</span>
<span id="L28" rel="#L28">28</span>
<span id="L29" rel="#L29">29</span>
<span id="L30" rel="#L30">30</span>
<span id="L31" rel="#L31">31</span>
<span id="L32" rel="#L32">32</span>
<span id="L33" rel="#L33">33</span>
<span id="L34" rel="#L34">34</span>
<span id="L35" rel="#L35">35</span>
<span id="L36" rel="#L36">36</span>
<span id="L37" rel="#L37">37</span>
<span id="L38" rel="#L38">38</span>

            </td>
            <td class="blob-line-code"><div class="code-body highlight"><pre><div class='line' id='LC1'><span class="o">&lt;?</span><span class="nx">php</span></div><div class='line' id='LC2'><span class="sd">/**</span></div><div class='line' id='LC3'><span class="sd"> *</span></div><div class='line' id='LC4'><span class="sd"> * Copyright 2012 Google Inc. All Rights Reserved.</span></div><div class='line' id='LC5'><span class="sd"> *</span></div><div class='line' id='LC6'><span class="sd"> * Licensed under the Apache License, Version 2.0 (the &quot;License&quot;);</span></div><div class='line' id='LC7'><span class="sd"> * you may not use this file except in compliance with the License.</span></div><div class='line' id='LC8'><span class="sd"> * You may obtain a copy of the License at</span></div><div class='line' id='LC9'><span class="sd"> *</span></div><div class='line' id='LC10'><span class="sd"> * http://www.apache.org/licenses/LICENSE-2.0</span></div><div class='line' id='LC11'><span class="sd"> *</span></div><div class='line' id='LC12'><span class="sd"> * Unless required by applicable law or agreed to in writing, software</span></div><div class='line' id='LC13'><span class="sd"> * distributed under the License is distributed on an &quot;AS IS&quot; BASIS,</span></div><div class='line' id='LC14'><span class="sd"> * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.</span></div><div class='line' id='LC15'><span class="sd"> * See the License for the specific language governing permissions and</span></div><div class='line' id='LC16'><span class="sd"> * limitations under the License.</span></div><div class='line' id='LC17'><span class="sd"> *</span></div><div class='line' id='LC18'><span class="sd"> */</span></div><div class='line' id='LC19'><br/></div><div class='line' id='LC20'><span class="k">require_once</span><span class="p">(</span><span class="s1">&#39;./GameHandler.php&#39;</span><span class="p">);</span></div><div class='line' id='LC21'><br/></div><div class='line' id='LC22'><span class="nv">$output</span> <span class="o">=</span> <span class="k">array</span><span class="p">();</span></div><div class='line' id='LC23'><span class="k">try</span> <span class="p">{</span></div><div class='line' id='LC24'>&nbsp;&nbsp;<span class="nv">$handler</span> <span class="o">=</span> <span class="k">new</span> <span class="nx">GameHandler</span><span class="p">(</span><span class="nv">$_REQUEST</span><span class="p">[</span><span class="s1">&#39;userId&#39;</span><span class="p">],</span> <span class="nv">$_REQUEST</span><span class="p">[</span><span class="s1">&#39;tempKey&#39;</span><span class="p">]);</span></div><div class='line' id='LC25'>&nbsp;&nbsp;<span class="nv">$handler</span><span class="o">-&gt;</span><span class="na">verifyXSToken</span><span class="p">(</span>  <span class="nv">$_COOKIE</span><span class="p">[</span><span class="s1">&#39;xstokencookie&#39;</span><span class="p">]</span> <span class="p">,</span> <span class="nv">$_REQUEST</span><span class="p">[</span><span class="s1">&#39;xstoken&#39;</span><span class="p">]);</span></div><div class='line' id='LC26'>&nbsp;&nbsp;<span class="k">if</span> <span class="p">(</span><span class="nv">$_REQUEST</span><span class="p">[</span><span class="s1">&#39;action&#39;</span><span class="p">]</span> <span class="o">==</span> <span class="s1">&#39;login&#39;</span><span class="p">)</span> <span class="p">{</span></div><div class='line' id='LC27'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$output</span> <span class="o">=</span> <span class="nv">$handler</span><span class="o">-&gt;</span><span class="na">loginUser</span><span class="p">(</span><span class="nv">$_POST</span><span class="p">[</span><span class="s1">&#39;code&#39;</span><span class="p">]);</span></div><div class='line' id='LC28'>&nbsp;&nbsp;<span class="p">}</span> <span class="k">else</span> <span class="k">if</span> <span class="p">(</span><span class="nv">$_REQUEST</span><span class="p">[</span><span class="s1">&#39;action&#39;</span><span class="p">]</span> <span class="o">==</span> <span class="s1">&#39;submitScore&#39;</span><span class="p">)</span> <span class="p">{</span></div><div class='line' id='LC29'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$output</span> <span class="o">=</span> <span class="nv">$handler</span><span class="o">-&gt;</span><span class="na">submitScore</span><span class="p">(</span><span class="nv">$_POST</span><span class="p">[</span><span class="s1">&#39;scoreVal&#39;</span><span class="p">]);</span></div><div class='line' id='LC30'>&nbsp;&nbsp;<span class="p">}</span> <span class="k">else</span> <span class="k">if</span> <span class="p">(</span><span class="nv">$_REQUEST</span><span class="p">[</span><span class="s1">&#39;action&#39;</span><span class="p">]</span> <span class="o">==</span> <span class="s1">&#39;getHighScores&#39;</span><span class="p">)</span> <span class="p">{</span></div><div class='line' id='LC31'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$output</span> <span class="o">=</span> <span class="nv">$handler</span><span class="o">-&gt;</span><span class="na">getHighScores</span><span class="p">();</span></div><div class='line' id='LC32'>&nbsp;&nbsp;<span class="p">}</span></div><div class='line' id='LC33'>&nbsp;&nbsp;<span class="nv">$output</span><span class="p">[</span><span class="s1">&#39;status&#39;</span><span class="p">]</span> <span class="o">=</span> <span class="s1">&#39;success&#39;</span><span class="p">;</span></div><div class='line' id='LC34'><span class="p">}</span> <span class="k">catch</span> <span class="p">(</span><span class="nx">Exception</span> <span class="nv">$e</span><span class="p">)</span> <span class="p">{</span></div><div class='line' id='LC35'>&nbsp;&nbsp;<span class="nv">$output</span> <span class="o">=</span> <span class="k">array</span><span class="p">(</span><span class="s1">&#39;status&#39;</span> <span class="o">=&gt;</span> <span class="s1">&#39;failure&#39;</span><span class="p">,</span> <span class="s1">&#39;message&#39;</span> <span class="o">=&gt;</span> <span class="nv">$e</span><span class="o">-&gt;</span><span class="na">getMessage</span><span class="p">());</span></div><div class='line' id='LC36'><span class="p">}</span></div><div class='line' id='LC37'><br/></div><div class='line' id='LC38'><span class="k">print</span> <span class="nb">json_encode</span><span class="p">(</span><span class="nv">$output</span><span class="p">);</span></div></pre></div></td>
          </tr>
        </table>
  </div>

  </div>
</div>

<a href="#jump-to-line" rel="facebox[.linejump]" data-hotkey="l" class="js-jump-to-line" style="display:none">Jump to Line</a>
<div id="jump-to-line" style="display:none">
  <form accept-charset="UTF-8" class="js-jump-to-line-form">
    <input class="linejump-input js-jump-to-line-field" type="text" placeholder="Jump to line&hellip;" autofocus>
    <button type="submit" class="button">Go</button>
  </form>
</div>

        </div>

      </div><!-- /.repo-container -->
      <div class="modal-backdrop"></div>
    </div><!-- /.container -->
  </div><!-- /.site -->


    </div><!-- /.wrapper -->

      <div class="container">
  <div class="site-footer">
    <ul class="site-footer-links right">
      <li><a href="https://status.github.com/">Status</a></li>
      <li><a href="http://developer.github.com">API</a></li>
      <li><a href="http://training.github.com">Training</a></li>
      <li><a href="http://shop.github.com">Shop</a></li>
      <li><a href="/blog">Blog</a></li>
      <li><a href="/about">About</a></li>

    </ul>

    <a href="/">
      <span class="mega-octicon octicon-mark-github" title="GitHub"></span>
    </a>

    <ul class="site-footer-links">
      <li>&copy; 2014 <span title="0.02368s from github-fe129-cp1-prd.iad.github.net">GitHub</span>, Inc.</li>
        <li><a href="/site/terms">Terms</a></li>
        <li><a href="/site/privacy">Privacy</a></li>
        <li><a href="/security">Security</a></li>
        <li><a href="/contact">Contact</a></li>
    </ul>
  </div><!-- /.site-footer -->
</div><!-- /.container -->


    <div class="fullscreen-overlay js-fullscreen-overlay" id="fullscreen_overlay">
  <div class="fullscreen-container js-fullscreen-container">
    <div class="textarea-wrap">
      <textarea name="fullscreen-contents" id="fullscreen-contents" class="js-fullscreen-contents" placeholder="" data-suggester="fullscreen_suggester"></textarea>
          <div class="suggester-container">
              <div class="suggester fullscreen-suggester js-navigation-container" id="fullscreen_suggester"
                 data-url="/playgameservices/type-a-number-php/suggestions/commit">
              </div>
          </div>
    </div>
  </div>
  <div class="fullscreen-sidebar">
    <a href="#" class="exit-fullscreen js-exit-fullscreen tooltipped leftwards" title="Exit Zen Mode">
      <span class="mega-octicon octicon-screen-normal"></span>
    </a>
    <a href="#" class="theme-switcher js-theme-switcher tooltipped leftwards"
      title="Switch themes">
      <span class="octicon octicon-color-mode"></span>
    </a>
  </div>
</div>



    <div id="ajax-error-message" class="flash flash-error">
      <span class="octicon octicon-alert"></span>
      <a href="#" class="octicon octicon-remove-close close js-ajax-error-dismiss"></a>
      Something went wrong with that request. Please try again.
    </div>

  </body>
</html>

