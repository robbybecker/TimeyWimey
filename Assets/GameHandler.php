




<!DOCTYPE html>
<html>
  <head prefix="og: http://ogp.me/ns# fb: http://ogp.me/ns/fb# object: http://ogp.me/ns/object# article: http://ogp.me/ns/article# profile: http://ogp.me/ns/profile#">
    <meta charset='utf-8'>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>type-a-number-php/server/GameHandler.php at master · playgameservices/type-a-number-php · GitHub</title>
    <link rel="search" type="application/opensearchdescription+xml" href="/opensearch.xml" title="GitHub" />
    <link rel="fluid-icon" href="https://github.com/fluidicon.png" title="GitHub" />
    <link rel="apple-touch-icon" sizes="57x57" href="/apple-touch-icon-114.png" />
    <link rel="apple-touch-icon" sizes="114x114" href="/apple-touch-icon-114.png" />
    <link rel="apple-touch-icon" sizes="72x72" href="/apple-touch-icon-144.png" />
    <link rel="apple-touch-icon" sizes="144x144" href="/apple-touch-icon-144.png" />
    <meta property="fb:app_id" content="1401488693436528"/>

      <meta content="@github" name="twitter:site" /><meta content="summary" name="twitter:card" /><meta content="playgameservices/type-a-number-php" name="twitter:title" /><meta content="type-a-number-php - Ajax-y version of the Type-a-Number challenge using PHP" name="twitter:description" /><meta content="https://0.gravatar.com/avatar/bcb77bd54e9aa1d933b0dfb1fcf5846e?d=https%3A%2F%2Fidenticons.github.com%2F343a5a37a6857ba3671daea8ad7a48f1.png&amp;r=x&amp;s=400" name="twitter:image:src" />
<meta content="GitHub" property="og:site_name" /><meta content="object" property="og:type" /><meta content="https://0.gravatar.com/avatar/bcb77bd54e9aa1d933b0dfb1fcf5846e?d=https%3A%2F%2Fidenticons.github.com%2F343a5a37a6857ba3671daea8ad7a48f1.png&amp;r=x&amp;s=400" property="og:image" /><meta content="playgameservices/type-a-number-php" property="og:title" /><meta content="https://github.com/playgameservices/type-a-number-php" property="og:url" /><meta content="type-a-number-php - Ajax-y version of the Type-a-Number challenge using PHP" property="og:description" />

    <meta name="hostname" content="github-fe131-cp1-prd.iad.github.net">
    <meta name="ruby" content="ruby 2.1.0p0-github-tcmalloc (87d8860372) [x86_64-linux]">
    <link rel="assets" href="https://github.global.ssl.fastly.net/">
    <link rel="conduit-xhr" href="https://ghconduit.com:25035/">
    <link rel="xhr-socket" href="/_sockets" />


    <meta name="msapplication-TileImage" content="/windows-tile.png" />
    <meta name="msapplication-TileColor" content="#ffffff" />
    <meta name="selected-link" value="repo_source" data-pjax-transient />
    <meta content="collector.githubapp.com" name="octolytics-host" /><meta content="collector-cdn.github.com" name="octolytics-script-host" /><meta content="github" name="octolytics-app-id" /><meta content="4E121A1B:2470:91466:52FA2C60" name="octolytics-dimension-request_id" />
    

    
    
    <link rel="icon" type="image/x-icon" href="/favicon.ico" />

    <meta content="authenticity_token" name="csrf-param" />
<meta content="wqf/Em2nJ6ltcWtLdcYys7OM69Ij546pC4YT0YGhiIM=" name="csrf-token" />

    <link href="https://github.global.ssl.fastly.net/assets/github-3edaf451c5611e17e1cd26dd9e684f8c2ff7cdab.css" media="all" rel="stylesheet" type="text/css" />
    <link href="https://github.global.ssl.fastly.net/assets/github2-456a392493f696a3779ecd85c4913acdef7d9507.css" media="all" rel="stylesheet" type="text/css" />
    


      <script src="https://github.global.ssl.fastly.net/assets/frameworks-141ccdd45eb970761fa7cacc2cb60ed9726dd738.js" type="text/javascript"></script>
      <script async="async" defer="defer" src="https://github.global.ssl.fastly.net/assets/github-b68d1e19c0b2aef3b0d249778034d8849a904f0e.js" type="text/javascript"></script>
      
      <meta http-equiv="x-pjax-version" content="b69b4a881f4921f927c68c221c42c1ee">

        <link data-pjax-transient rel='permalink' href='/playgameservices/type-a-number-php/blob/5ce6fb52f2994a90f18cf44a6926922268383988/server/GameHandler.php'>

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
      <a class="button signin" href="/login?return_to=%2Fplaygameservices%2Ftype-a-number-php%2Fblob%2Fmaster%2Fserver%2FGameHandler.php">Sign in</a>
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
          


<!-- blob contrib key: blob_contributors:v21:58c1121409e5121dfcdc6e502ce3ba9e -->

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
              <a href="/playgameservices/type-a-number-php/blob/master/server/GameHandler.php"
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
    <span class='repo-root js-repo-root'><span itemscope="" itemtype="http://data-vocabulary.org/Breadcrumb"><a href="/playgameservices/type-a-number-php" data-branch="master" data-direction="back" data-pjax="true" itemscope="url"><span itemprop="title">type-a-number-php</span></a></span></span><span class="separator"> / </span><span itemscope="" itemtype="http://data-vocabulary.org/Breadcrumb"><a href="/playgameservices/type-a-number-php/tree/master/server" data-branch="master" data-direction="back" data-pjax="true" itemscope="url"><span itemprop="title">server</span></a></span><span class="separator"> / </span><strong class="final-path">GameHandler.php</strong> <span class="js-zeroclipboard minibutton zeroclipboard-button" data-clipboard-text="server/GameHandler.php" data-copied-hint="copied!" title="copy to clipboard"><span class="octicon octicon-clippy"></span></span>
  </div>
</div>


  <div class="commit file-history-tease">
    <img alt="Todd Kerpelman" class="main-avatar js-avatar" data-user="4397978" height="24" src="https://2.gravatar.com/avatar/8e42d1b3a58e20619f74d00c55405eff?d=https%3A%2F%2Fidenticons.github.com%2Fcaf58199f502a5c2d766cfe02e5b767b.png&amp;r=x&amp;s=140" width="24" />
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
            <img alt="Todd Kerpelman" class=" js-avatar" data-user="4397978" height="24" src="https://2.gravatar.com/avatar/8e42d1b3a58e20619f74d00c55405eff?d=https%3A%2F%2Fidenticons.github.com%2Fcaf58199f502a5c2d766cfe02e5b767b.png&amp;r=x&amp;s=140" width="24" />
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
          <span>297 lines (256 sloc)</span>
        <span>9.665 kb</span>
      </div>
      <div class="actions">
        <div class="button-group">
            <a class="minibutton tooltipped leftwards"
               href="http://windows.github.com" title="Open this file in GitHub for Windows">
                <span class="octicon octicon-device-desktop"></span> Open
            </a>
              <a class="minibutton disabled tooltipped leftwards" href="#"
                 title="You must be signed in to make or propose changes">Edit</a>
          <a href="/playgameservices/type-a-number-php/raw/master/server/GameHandler.php" class="button minibutton " id="raw-url">Raw</a>
            <a href="/playgameservices/type-a-number-php/blame/master/server/GameHandler.php" class="button minibutton js-update-url-with-hash">Blame</a>
          <a href="/playgameservices/type-a-number-php/commits/master/server/GameHandler.php" class="button minibutton " rel="nofollow">History</a>
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
<span id="L39" rel="#L39">39</span>
<span id="L40" rel="#L40">40</span>
<span id="L41" rel="#L41">41</span>
<span id="L42" rel="#L42">42</span>
<span id="L43" rel="#L43">43</span>
<span id="L44" rel="#L44">44</span>
<span id="L45" rel="#L45">45</span>
<span id="L46" rel="#L46">46</span>
<span id="L47" rel="#L47">47</span>
<span id="L48" rel="#L48">48</span>
<span id="L49" rel="#L49">49</span>
<span id="L50" rel="#L50">50</span>
<span id="L51" rel="#L51">51</span>
<span id="L52" rel="#L52">52</span>
<span id="L53" rel="#L53">53</span>
<span id="L54" rel="#L54">54</span>
<span id="L55" rel="#L55">55</span>
<span id="L56" rel="#L56">56</span>
<span id="L57" rel="#L57">57</span>
<span id="L58" rel="#L58">58</span>
<span id="L59" rel="#L59">59</span>
<span id="L60" rel="#L60">60</span>
<span id="L61" rel="#L61">61</span>
<span id="L62" rel="#L62">62</span>
<span id="L63" rel="#L63">63</span>
<span id="L64" rel="#L64">64</span>
<span id="L65" rel="#L65">65</span>
<span id="L66" rel="#L66">66</span>
<span id="L67" rel="#L67">67</span>
<span id="L68" rel="#L68">68</span>
<span id="L69" rel="#L69">69</span>
<span id="L70" rel="#L70">70</span>
<span id="L71" rel="#L71">71</span>
<span id="L72" rel="#L72">72</span>
<span id="L73" rel="#L73">73</span>
<span id="L74" rel="#L74">74</span>
<span id="L75" rel="#L75">75</span>
<span id="L76" rel="#L76">76</span>
<span id="L77" rel="#L77">77</span>
<span id="L78" rel="#L78">78</span>
<span id="L79" rel="#L79">79</span>
<span id="L80" rel="#L80">80</span>
<span id="L81" rel="#L81">81</span>
<span id="L82" rel="#L82">82</span>
<span id="L83" rel="#L83">83</span>
<span id="L84" rel="#L84">84</span>
<span id="L85" rel="#L85">85</span>
<span id="L86" rel="#L86">86</span>
<span id="L87" rel="#L87">87</span>
<span id="L88" rel="#L88">88</span>
<span id="L89" rel="#L89">89</span>
<span id="L90" rel="#L90">90</span>
<span id="L91" rel="#L91">91</span>
<span id="L92" rel="#L92">92</span>
<span id="L93" rel="#L93">93</span>
<span id="L94" rel="#L94">94</span>
<span id="L95" rel="#L95">95</span>
<span id="L96" rel="#L96">96</span>
<span id="L97" rel="#L97">97</span>
<span id="L98" rel="#L98">98</span>
<span id="L99" rel="#L99">99</span>
<span id="L100" rel="#L100">100</span>
<span id="L101" rel="#L101">101</span>
<span id="L102" rel="#L102">102</span>
<span id="L103" rel="#L103">103</span>
<span id="L104" rel="#L104">104</span>
<span id="L105" rel="#L105">105</span>
<span id="L106" rel="#L106">106</span>
<span id="L107" rel="#L107">107</span>
<span id="L108" rel="#L108">108</span>
<span id="L109" rel="#L109">109</span>
<span id="L110" rel="#L110">110</span>
<span id="L111" rel="#L111">111</span>
<span id="L112" rel="#L112">112</span>
<span id="L113" rel="#L113">113</span>
<span id="L114" rel="#L114">114</span>
<span id="L115" rel="#L115">115</span>
<span id="L116" rel="#L116">116</span>
<span id="L117" rel="#L117">117</span>
<span id="L118" rel="#L118">118</span>
<span id="L119" rel="#L119">119</span>
<span id="L120" rel="#L120">120</span>
<span id="L121" rel="#L121">121</span>
<span id="L122" rel="#L122">122</span>
<span id="L123" rel="#L123">123</span>
<span id="L124" rel="#L124">124</span>
<span id="L125" rel="#L125">125</span>
<span id="L126" rel="#L126">126</span>
<span id="L127" rel="#L127">127</span>
<span id="L128" rel="#L128">128</span>
<span id="L129" rel="#L129">129</span>
<span id="L130" rel="#L130">130</span>
<span id="L131" rel="#L131">131</span>
<span id="L132" rel="#L132">132</span>
<span id="L133" rel="#L133">133</span>
<span id="L134" rel="#L134">134</span>
<span id="L135" rel="#L135">135</span>
<span id="L136" rel="#L136">136</span>
<span id="L137" rel="#L137">137</span>
<span id="L138" rel="#L138">138</span>
<span id="L139" rel="#L139">139</span>
<span id="L140" rel="#L140">140</span>
<span id="L141" rel="#L141">141</span>
<span id="L142" rel="#L142">142</span>
<span id="L143" rel="#L143">143</span>
<span id="L144" rel="#L144">144</span>
<span id="L145" rel="#L145">145</span>
<span id="L146" rel="#L146">146</span>
<span id="L147" rel="#L147">147</span>
<span id="L148" rel="#L148">148</span>
<span id="L149" rel="#L149">149</span>
<span id="L150" rel="#L150">150</span>
<span id="L151" rel="#L151">151</span>
<span id="L152" rel="#L152">152</span>
<span id="L153" rel="#L153">153</span>
<span id="L154" rel="#L154">154</span>
<span id="L155" rel="#L155">155</span>
<span id="L156" rel="#L156">156</span>
<span id="L157" rel="#L157">157</span>
<span id="L158" rel="#L158">158</span>
<span id="L159" rel="#L159">159</span>
<span id="L160" rel="#L160">160</span>
<span id="L161" rel="#L161">161</span>
<span id="L162" rel="#L162">162</span>
<span id="L163" rel="#L163">163</span>
<span id="L164" rel="#L164">164</span>
<span id="L165" rel="#L165">165</span>
<span id="L166" rel="#L166">166</span>
<span id="L167" rel="#L167">167</span>
<span id="L168" rel="#L168">168</span>
<span id="L169" rel="#L169">169</span>
<span id="L170" rel="#L170">170</span>
<span id="L171" rel="#L171">171</span>
<span id="L172" rel="#L172">172</span>
<span id="L173" rel="#L173">173</span>
<span id="L174" rel="#L174">174</span>
<span id="L175" rel="#L175">175</span>
<span id="L176" rel="#L176">176</span>
<span id="L177" rel="#L177">177</span>
<span id="L178" rel="#L178">178</span>
<span id="L179" rel="#L179">179</span>
<span id="L180" rel="#L180">180</span>
<span id="L181" rel="#L181">181</span>
<span id="L182" rel="#L182">182</span>
<span id="L183" rel="#L183">183</span>
<span id="L184" rel="#L184">184</span>
<span id="L185" rel="#L185">185</span>
<span id="L186" rel="#L186">186</span>
<span id="L187" rel="#L187">187</span>
<span id="L188" rel="#L188">188</span>
<span id="L189" rel="#L189">189</span>
<span id="L190" rel="#L190">190</span>
<span id="L191" rel="#L191">191</span>
<span id="L192" rel="#L192">192</span>
<span id="L193" rel="#L193">193</span>
<span id="L194" rel="#L194">194</span>
<span id="L195" rel="#L195">195</span>
<span id="L196" rel="#L196">196</span>
<span id="L197" rel="#L197">197</span>
<span id="L198" rel="#L198">198</span>
<span id="L199" rel="#L199">199</span>
<span id="L200" rel="#L200">200</span>
<span id="L201" rel="#L201">201</span>
<span id="L202" rel="#L202">202</span>
<span id="L203" rel="#L203">203</span>
<span id="L204" rel="#L204">204</span>
<span id="L205" rel="#L205">205</span>
<span id="L206" rel="#L206">206</span>
<span id="L207" rel="#L207">207</span>
<span id="L208" rel="#L208">208</span>
<span id="L209" rel="#L209">209</span>
<span id="L210" rel="#L210">210</span>
<span id="L211" rel="#L211">211</span>
<span id="L212" rel="#L212">212</span>
<span id="L213" rel="#L213">213</span>
<span id="L214" rel="#L214">214</span>
<span id="L215" rel="#L215">215</span>
<span id="L216" rel="#L216">216</span>
<span id="L217" rel="#L217">217</span>
<span id="L218" rel="#L218">218</span>
<span id="L219" rel="#L219">219</span>
<span id="L220" rel="#L220">220</span>
<span id="L221" rel="#L221">221</span>
<span id="L222" rel="#L222">222</span>
<span id="L223" rel="#L223">223</span>
<span id="L224" rel="#L224">224</span>
<span id="L225" rel="#L225">225</span>
<span id="L226" rel="#L226">226</span>
<span id="L227" rel="#L227">227</span>
<span id="L228" rel="#L228">228</span>
<span id="L229" rel="#L229">229</span>
<span id="L230" rel="#L230">230</span>
<span id="L231" rel="#L231">231</span>
<span id="L232" rel="#L232">232</span>
<span id="L233" rel="#L233">233</span>
<span id="L234" rel="#L234">234</span>
<span id="L235" rel="#L235">235</span>
<span id="L236" rel="#L236">236</span>
<span id="L237" rel="#L237">237</span>
<span id="L238" rel="#L238">238</span>
<span id="L239" rel="#L239">239</span>
<span id="L240" rel="#L240">240</span>
<span id="L241" rel="#L241">241</span>
<span id="L242" rel="#L242">242</span>
<span id="L243" rel="#L243">243</span>
<span id="L244" rel="#L244">244</span>
<span id="L245" rel="#L245">245</span>
<span id="L246" rel="#L246">246</span>
<span id="L247" rel="#L247">247</span>
<span id="L248" rel="#L248">248</span>
<span id="L249" rel="#L249">249</span>
<span id="L250" rel="#L250">250</span>
<span id="L251" rel="#L251">251</span>
<span id="L252" rel="#L252">252</span>
<span id="L253" rel="#L253">253</span>
<span id="L254" rel="#L254">254</span>
<span id="L255" rel="#L255">255</span>
<span id="L256" rel="#L256">256</span>
<span id="L257" rel="#L257">257</span>
<span id="L258" rel="#L258">258</span>
<span id="L259" rel="#L259">259</span>
<span id="L260" rel="#L260">260</span>
<span id="L261" rel="#L261">261</span>
<span id="L262" rel="#L262">262</span>
<span id="L263" rel="#L263">263</span>
<span id="L264" rel="#L264">264</span>
<span id="L265" rel="#L265">265</span>
<span id="L266" rel="#L266">266</span>
<span id="L267" rel="#L267">267</span>
<span id="L268" rel="#L268">268</span>
<span id="L269" rel="#L269">269</span>
<span id="L270" rel="#L270">270</span>
<span id="L271" rel="#L271">271</span>
<span id="L272" rel="#L272">272</span>
<span id="L273" rel="#L273">273</span>
<span id="L274" rel="#L274">274</span>
<span id="L275" rel="#L275">275</span>
<span id="L276" rel="#L276">276</span>
<span id="L277" rel="#L277">277</span>
<span id="L278" rel="#L278">278</span>
<span id="L279" rel="#L279">279</span>
<span id="L280" rel="#L280">280</span>
<span id="L281" rel="#L281">281</span>
<span id="L282" rel="#L282">282</span>
<span id="L283" rel="#L283">283</span>
<span id="L284" rel="#L284">284</span>
<span id="L285" rel="#L285">285</span>
<span id="L286" rel="#L286">286</span>
<span id="L287" rel="#L287">287</span>
<span id="L288" rel="#L288">288</span>
<span id="L289" rel="#L289">289</span>
<span id="L290" rel="#L290">290</span>
<span id="L291" rel="#L291">291</span>
<span id="L292" rel="#L292">292</span>
<span id="L293" rel="#L293">293</span>
<span id="L294" rel="#L294">294</span>
<span id="L295" rel="#L295">295</span>
<span id="L296" rel="#L296">296</span>

            </td>
            <td class="blob-line-code"><div class="code-body highlight"><pre><div class='line' id='LC1'><span class="o">&lt;?</span><span class="nx">php</span></div><div class='line' id='LC2'><span class="sd">/**</span></div><div class='line' id='LC3'><span class="sd"> *</span></div><div class='line' id='LC4'><span class="sd"> * Copyright 2012 Google Inc. All Rights Reserved.</span></div><div class='line' id='LC5'><span class="sd"> *</span></div><div class='line' id='LC6'><span class="sd"> * Licensed under the Apache License, Version 2.0 (the &quot;License&quot;);</span></div><div class='line' id='LC7'><span class="sd"> * you may not use this file except in compliance with the License.</span></div><div class='line' id='LC8'><span class="sd"> * You may obtain a copy of the License at</span></div><div class='line' id='LC9'><span class="sd"> *</span></div><div class='line' id='LC10'><span class="sd"> * http://www.apache.org/licenses/LICENSE-2.0</span></div><div class='line' id='LC11'><span class="sd"> *</span></div><div class='line' id='LC12'><span class="sd"> * Unless required by applicable law or agreed to in writing, software</span></div><div class='line' id='LC13'><span class="sd"> * distributed under the License is distributed on an &quot;AS IS&quot; BASIS,</span></div><div class='line' id='LC14'><span class="sd"> * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.</span></div><div class='line' id='LC15'><span class="sd"> * See the License for the specific language governing permissions and</span></div><div class='line' id='LC16'><span class="sd"> * limitations under the License.</span></div><div class='line' id='LC17'><span class="sd"> *</span></div><div class='line' id='LC18'><span class="sd"> */</span></div><div class='line' id='LC19'><br/></div><div class='line' id='LC20'><span class="k">require_once</span> <span class="s1">&#39;google-api-php-client/src/Google_Client.php&#39;</span><span class="p">;</span></div><div class='line' id='LC21'><span class="k">require_once</span> <span class="s1">&#39;google-api-php-client/src/contrib/Google_GamesService.php&#39;</span><span class="p">;</span></div><div class='line' id='LC22'><br/></div><div class='line' id='LC23'><span class="k">class</span> <span class="nc">GameHandler</span></div><div class='line' id='LC24'><span class="p">{</span></div><div class='line' id='LC25'>&nbsp;&nbsp;<span class="cm">/* @var $pdo PDO */</span></div><div class='line' id='LC26'>&nbsp;&nbsp;<span class="k">private</span> <span class="nv">$pdo</span><span class="p">;</span></div><div class='line' id='LC27'><br/></div><div class='line' id='LC28'>&nbsp;&nbsp;<span class="cm">/* @var $client Google_Client */</span></div><div class='line' id='LC29'>&nbsp;&nbsp;<span class="k">private</span> <span class="nv">$client</span><span class="p">;</span></div><div class='line' id='LC30'><br/></div><div class='line' id='LC31'>&nbsp;&nbsp;<span class="cm">/* @var $games google_GamesService */</span></div><div class='line' id='LC32'>&nbsp;&nbsp;<span class="k">private</span> <span class="nv">$games</span><span class="p">;</span></div><div class='line' id='LC33'><br/></div><div class='line' id='LC34'>&nbsp;&nbsp;<span class="cm">/* @var $clientIsReady bool */</span></div><div class='line' id='LC35'>&nbsp;&nbsp;<span class="k">private</span>  <span class="nv">$clientIsAuthed</span><span class="p">;</span></div><div class='line' id='LC36'><br/></div><div class='line' id='LC37'>&nbsp;&nbsp;<span class="cm">/* @var $appVals array */</span></div><div class='line' id='LC38'>&nbsp;&nbsp;<span class="k">private</span> <span class="nv">$appVals</span><span class="p">;</span></div><div class='line' id='LC39'><br/></div><div class='line' id='LC40'><br/></div><div class='line' id='LC41'><br/></div><div class='line' id='LC42'><br/></div><div class='line' id='LC43'>&nbsp;&nbsp;<span class="sd">/**</span></div><div class='line' id='LC44'><span class="sd">   * Constructor for the GameHandler. If you have a userId and tempKey from</span></div><div class='line' id='LC45'><span class="sd">   * a previously successful login, pass it to the constructor and it will use that</span></div><div class='line' id='LC46'><span class="sd">   * to look up the user&#39;s OAuth 2.0 token in the database. Otherwise,</span></div><div class='line' id='LC47'><span class="sd">   * you&#39;ll need to perform a loginUser call.</span></div><div class='line' id='LC48'><span class="sd">   *</span></div><div class='line' id='LC49'><span class="sd">   * @param null $userId = The user&#39;s Google+ ID, if we know it yet</span></div><div class='line' id='LC50'><span class="sd">   * @param null $tempKey = The user;&#39;s</span></div><div class='line' id='LC51'><span class="sd">   */</span></div><div class='line' id='LC52'>&nbsp;&nbsp;<span class="k">function</span> <span class="nf">__construct</span><span class="p">(</span><span class="nv">$userId</span> <span class="o">=</span> <span class="k">NULL</span><span class="p">,</span> <span class="nv">$tempKey</span> <span class="o">=</span> <span class="k">NULL</span><span class="p">)</span> <span class="p">{</span></div><div class='line' id='LC53'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="c1">// If this were a real app, you would put this AppConstants file far</span></div><div class='line' id='LC54'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="c1">// away from your htdocs tree</span></div><div class='line' id='LC55'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$this</span><span class="o">-&gt;</span><span class="na">appVals</span> <span class="o">=</span> <span class="nb">parse_ini_file</span><span class="p">(</span><span class="s2">&quot;./outside-your-htdocs-folder/AppConstants.ini&quot;</span><span class="p">,</span> <span class="k">true</span><span class="p">);</span></div><div class='line' id='LC56'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$this</span><span class="o">-&gt;</span><span class="na">clientIsAuthed</span> <span class="o">=</span> <span class="k">false</span><span class="p">;</span></div><div class='line' id='LC57'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$this</span><span class="o">-&gt;</span><span class="na">connectToDatabase</span><span class="p">();</span></div><div class='line' id='LC58'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">if</span> <span class="p">(</span><span class="nv">$userId</span> <span class="o">&amp;&amp;</span> <span class="nv">$tempKey</span><span class="p">)</span> <span class="p">{</span></div><div class='line' id='LC59'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$this</span><span class="o">-&gt;</span><span class="na">setupApiClientForUser</span><span class="p">(</span><span class="nv">$userId</span><span class="p">,</span> <span class="nv">$tempKey</span><span class="p">);</span></div><div class='line' id='LC60'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="p">}</span></div><div class='line' id='LC61'>&nbsp;&nbsp;<span class="p">}</span></div><div class='line' id='LC62'><br/></div><div class='line' id='LC63'>&nbsp;&nbsp;<span class="sd">/**</span></div><div class='line' id='LC64'><span class="sd">   * Connects to the database, and assigns it to our pdo variable</span></div><div class='line' id='LC65'><span class="sd">   */</span></div><div class='line' id='LC66'>&nbsp;&nbsp;<span class="k">private</span> <span class="k">function</span> <span class="nf">connectToDatabase</span><span class="p">()</span></div><div class='line' id='LC67'>&nbsp;&nbsp;<span class="p">{</span></div><div class='line' id='LC68'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="c1">// Will throw a PDO exception if it fails</span></div><div class='line' id='LC69'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$this</span><span class="o">-&gt;</span><span class="na">pdo</span> <span class="o">=</span> <span class="k">new</span> <span class="nx">PDO</span><span class="p">(</span><span class="s1">&#39;mysql:host=&#39;</span> <span class="o">.</span> <span class="nv">$this</span><span class="o">-&gt;</span><span class="na">appVals</span><span class="p">[</span><span class="s1">&#39;db&#39;</span><span class="p">][</span><span class="s1">&#39;host&#39;</span><span class="p">]</span> <span class="o">.</span> <span class="s1">&#39;;dbname=&#39;</span> <span class="o">.</span> <span class="nv">$this</span><span class="o">-&gt;</span><span class="na">appVals</span><span class="p">[</span><span class="s1">&#39;db&#39;</span><span class="p">][</span><span class="s1">&#39;name&#39;</span><span class="p">],</span></div><div class='line' id='LC70'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$this</span><span class="o">-&gt;</span><span class="na">appVals</span><span class="p">[</span><span class="s1">&#39;db&#39;</span><span class="p">][</span><span class="s1">&#39;user&#39;</span><span class="p">],</span> <span class="nv">$this</span><span class="o">-&gt;</span><span class="na">appVals</span><span class="p">[</span><span class="s1">&#39;db&#39;</span><span class="p">][</span><span class="s1">&#39;pass&#39;</span><span class="p">]);</span></div><div class='line' id='LC71'>&nbsp;&nbsp;<span class="p">}</span></div><div class='line' id='LC72'><br/></div><div class='line' id='LC73'>&nbsp;&nbsp;<span class="sd">/**</span></div><div class='line' id='LC74'><span class="sd">   * Generates an un-authed Google_Client APIClient that we can use to query</span></div><div class='line' id='LC75'><span class="sd">   * the service, after we give it a bearer token</span></div><div class='line' id='LC76'><span class="sd">   */</span></div><div class='line' id='LC77'>&nbsp;&nbsp;<span class="k">private</span> <span class="k">function</span> <span class="nf">setupApiClient</span><span class="p">(</span><span class="nv">$redirectUri</span> <span class="o">=</span> <span class="s1">&#39;postmessage&#39;</span><span class="p">)</span> <span class="p">{</span></div><div class='line' id='LC78'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$this</span><span class="o">-&gt;</span><span class="na">client</span> <span class="o">=</span> <span class="k">new</span> <span class="nx">Google_Client</span><span class="p">();</span></div><div class='line' id='LC79'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$this</span><span class="o">-&gt;</span><span class="na">client</span><span class="o">-&gt;</span><span class="na">setClientId</span><span class="p">(</span><span class="nv">$this</span><span class="o">-&gt;</span><span class="na">appVals</span><span class="p">[</span><span class="s1">&#39;api&#39;</span><span class="p">][</span><span class="s1">&#39;clientId&#39;</span><span class="p">]);</span></div><div class='line' id='LC80'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$this</span><span class="o">-&gt;</span><span class="na">client</span><span class="o">-&gt;</span><span class="na">setClientSecret</span><span class="p">(</span><span class="nv">$this</span><span class="o">-&gt;</span><span class="na">appVals</span><span class="p">[</span><span class="s1">&#39;api&#39;</span><span class="p">][</span><span class="s1">&#39;clientSecret&#39;</span><span class="p">]);</span></div><div class='line' id='LC81'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$this</span><span class="o">-&gt;</span><span class="na">client</span><span class="o">-&gt;</span><span class="na">setDeveloperKey</span><span class="p">(</span><span class="nv">$this</span><span class="o">-&gt;</span><span class="na">appVals</span><span class="p">[</span><span class="s1">&#39;api&#39;</span><span class="p">][</span><span class="s1">&#39;apiKey&#39;</span><span class="p">]);</span></div><div class='line' id='LC82'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$this</span><span class="o">-&gt;</span><span class="na">client</span><span class="o">-&gt;</span><span class="na">setRedirectUri</span><span class="p">(</span><span class="nv">$redirectUri</span><span class="p">);</span></div><div class='line' id='LC83'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$this</span><span class="o">-&gt;</span><span class="na">games</span> <span class="o">=</span> <span class="k">new</span> <span class="nx">google_GamesService</span><span class="p">(</span><span class="nv">$this</span><span class="o">-&gt;</span><span class="na">client</span><span class="p">);</span></div><div class='line' id='LC84'>&nbsp;&nbsp;<span class="p">}</span></div><div class='line' id='LC85'><br/></div><div class='line' id='LC86'>&nbsp;&nbsp;<span class="sd">/**</span></div><div class='line' id='LC87'><span class="sd">   * Create a big random string we can use as a unique identifier</span></div><div class='line' id='LC88'><span class="sd">   *</span></div><div class='line' id='LC89'><span class="sd">   * @return string - A big 64-character alphanumeric string</span></div><div class='line' id='LC90'><span class="sd">   */</span></div><div class='line' id='LC91'>&nbsp;&nbsp;<span class="k">private</span> <span class="k">function</span> <span class="nf">generateTempKey</span><span class="p">()</span></div><div class='line' id='LC92'>&nbsp;&nbsp;<span class="p">{</span></div><div class='line' id='LC93'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$str</span> <span class="o">=</span> <span class="nb">base64_encode</span><span class="p">(</span><span class="nb">openssl_random_pseudo_bytes</span><span class="p">(</span><span class="mi">48</span><span class="p">));</span></div><div class='line' id='LC94'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">return</span> <span class="nv">$str</span><span class="p">;</span></div><div class='line' id='LC95'>&nbsp;&nbsp;<span class="p">}</span></div><div class='line' id='LC96'><br/></div><div class='line' id='LC97'>&nbsp;&nbsp;<span class="sd">/**</span></div><div class='line' id='LC98'><span class="sd">   * Makes sure the client is authed before we do anything. Throws an exception</span></div><div class='line' id='LC99'><span class="sd">   * otherwise</span></div><div class='line' id='LC100'><span class="sd">   *</span></div><div class='line' id='LC101'><span class="sd">   * @return bool - Pretty much only tue</span></div><div class='line' id='LC102'><span class="sd">   * @throws Exception - Thrown if APIClient is not authorized</span></div><div class='line' id='LC103'><span class="sd">   */</span></div><div class='line' id='LC104'>&nbsp;&nbsp;<span class="k">private</span> <span class="k">function</span> <span class="nf">verifyClientIsReady</span><span class="p">()</span></div><div class='line' id='LC105'>&nbsp;&nbsp;<span class="p">{</span></div><div class='line' id='LC106'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">if</span> <span class="p">(</span><span class="nv">$this</span><span class="o">-&gt;</span><span class="na">clientIsAuthed</span><span class="p">)</span> <span class="p">{</span></div><div class='line' id='LC107'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">return</span> <span class="k">true</span><span class="p">;</span></div><div class='line' id='LC108'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="p">}</span> <span class="k">else</span> <span class="p">{</span></div><div class='line' id='LC109'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">throw</span> <span class="k">new</span> <span class="nx">Exception</span><span class="p">(</span><span class="s2">&quot;Attempting to make a client call without setting up the client.</span></div><div class='line' id='LC110'><span class="s2">      Please pass in an OAuth 2.0 code, or a tempKey and userID.&quot;</span><span class="p">);</span></div><div class='line' id='LC111'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="p">}</span></div><div class='line' id='LC112'><br/></div><div class='line' id='LC113'>&nbsp;&nbsp;<span class="p">}</span></div><div class='line' id='LC114'><br/></div><div class='line' id='LC115'>&nbsp;&nbsp;<span class="sd">/**</span></div><div class='line' id='LC116'><span class="sd">   * Adds the user to a database and generates a temp key</span></div><div class='line' id='LC117'><span class="sd">   *</span></div><div class='line' id='LC118'><span class="sd">   * @param $playerId -- The playerID we get from calling players/me</span></div><div class='line' id='LC119'><span class="sd">   * @param $accessToken -- The access token we&#39;ll save for future calls</span></div><div class='line' id='LC120'><span class="sd">   * @return string -- Returns a tempKey we can use to identify the user later</span></div><div class='line' id='LC121'><span class="sd">   */</span></div><div class='line' id='LC122'>&nbsp;&nbsp;<span class="k">private</span> <span class="k">function</span> <span class="nf">addUserToDatabase</span><span class="p">(</span><span class="nv">$playerId</span><span class="p">,</span> <span class="nv">$accessToken</span><span class="p">)</span></div><div class='line' id='LC123'>&nbsp;&nbsp;<span class="p">{</span></div><div class='line' id='LC124'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$tempKey</span> <span class="o">=</span> <span class="nv">$this</span><span class="o">-&gt;</span><span class="na">generateTempKey</span><span class="p">();</span></div><div class='line' id='LC125'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$statement</span> <span class="o">=</span> <span class="nv">$this</span><span class="o">-&gt;</span><span class="na">pdo</span><span class="o">-&gt;</span><span class="na">prepare</span><span class="p">(</span><span class="s1">&#39;</span></div><div class='line' id='LC126'><span class="s1">      INSERT INTO users (temp_key, user_id, bearer_token)</span></div><div class='line' id='LC127'><span class="s1">      VALUES (:tempKey, :userId, :bearerToken)</span></div><div class='line' id='LC128'><span class="s1">      ON DUPLICATE KEY UPDATE temp_key = :tempKey, bearer_token = :bearerToken&#39;</span><span class="p">);</span></div><div class='line' id='LC129'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$varArray</span> <span class="o">=</span> <span class="k">array</span><span class="p">(</span><span class="s1">&#39;:tempKey&#39;</span><span class="o">=&gt;</span><span class="nv">$tempKey</span><span class="p">,</span> <span class="s1">&#39;:userId&#39;</span><span class="o">=&gt;</span><span class="nv">$playerId</span><span class="p">,</span> <span class="s1">&#39;:bearerToken&#39;</span><span class="o">=&gt;</span><span class="nv">$accessToken</span><span class="p">);</span></div><div class='line' id='LC130'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$statement</span><span class="o">-&gt;</span><span class="na">execute</span><span class="p">(</span><span class="nv">$varArray</span><span class="p">);</span></div><div class='line' id='LC131'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$rowsAffected</span> <span class="o">=</span> <span class="nv">$statement</span><span class="o">-&gt;</span><span class="na">rowCount</span><span class="p">();</span></div><div class='line' id='LC132'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">if</span> <span class="p">(</span><span class="nv">$rowsAffected</span> <span class="o">&gt;</span> <span class="mi">0</span><span class="p">)</span> <span class="p">{</span></div><div class='line' id='LC133'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">return</span> <span class="nv">$tempKey</span><span class="p">;</span></div><div class='line' id='LC134'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="p">}</span></div><div class='line' id='LC135'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">return</span> <span class="s1">&#39;&#39;</span><span class="p">;</span></div><div class='line' id='LC136'>&nbsp;&nbsp;<span class="p">}</span></div><div class='line' id='LC137'><br/></div><div class='line' id='LC138'>&nbsp;&nbsp;<span class="sd">/**</span></div><div class='line' id='LC139'><span class="sd">   * Grabs our bearer token for this user from our database, assuming everything</span></div><div class='line' id='LC140'><span class="sd">   * looks kosher</span></div><div class='line' id='LC141'><span class="sd">   *</span></div><div class='line' id='LC142'><span class="sd">   * @param $userId - The player&#39;s userID from a players/me call</span></div><div class='line' id='LC143'><span class="sd">   * @param $tempKey - The big random string we&#39;re using to verify the user</span></div><div class='line' id='LC144'><span class="sd">   * @return string - The bearer token we can use to auth the API Client</span></div><div class='line' id='LC145'><span class="sd">   */</span></div><div class='line' id='LC146'>&nbsp;&nbsp;<span class="k">private</span> <span class="k">function</span> <span class="nf">getBearerTokenForTempKey</span><span class="p">(</span><span class="nv">$userId</span><span class="p">,</span> <span class="nv">$tempKey</span><span class="p">)</span> <span class="p">{</span></div><div class='line' id='LC147'><br/></div><div class='line' id='LC148'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="c1">// Query the database</span></div><div class='line' id='LC149'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$statement</span> <span class="o">=</span> <span class="nv">$this</span><span class="o">-&gt;</span><span class="na">pdo</span><span class="o">-&gt;</span><span class="na">prepare</span><span class="p">(</span><span class="s1">&#39;</span></div><div class='line' id='LC150'><span class="s1">      SELECT * FROM users</span></div><div class='line' id='LC151'><span class="s1">      WHERE user_id = :userId AND temp_key = :tempKey AND last_modified &gt; NOW() - :expiration</span></div><div class='line' id='LC152'><span class="s1">    &#39;</span><span class="p">);</span></div><div class='line' id='LC153'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$varArray</span> <span class="o">=</span> <span class="k">array</span><span class="p">(</span><span class="s1">&#39;:userId&#39;</span> <span class="o">=&gt;</span> <span class="nv">$userId</span><span class="p">,</span> <span class="s1">&#39;:tempKey&#39;</span> <span class="o">=&gt;</span> <span class="nv">$tempKey</span><span class="p">,</span> <span class="s1">&#39;:expiration&#39;</span> <span class="o">=&gt;</span> <span class="mi">3600</span><span class="p">);</span></div><div class='line' id='LC154'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$statement</span><span class="o">-&gt;</span><span class="na">execute</span><span class="p">(</span><span class="nv">$varArray</span><span class="p">);</span></div><div class='line' id='LC155'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$result</span> <span class="o">=</span> <span class="nv">$statement</span><span class="o">-&gt;</span><span class="na">fetch</span><span class="p">(</span><span class="nx">PDO</span><span class="o">::</span><span class="na">FETCH_ASSOC</span><span class="p">);</span></div><div class='line' id='LC156'><br/></div><div class='line' id='LC157'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">if</span> <span class="p">(</span><span class="nv">$result</span><span class="p">)</span> <span class="p">{</span></div><div class='line' id='LC158'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">return</span> <span class="nv">$result</span><span class="p">[</span><span class="s1">&#39;bearer_token&#39;</span><span class="p">];</span></div><div class='line' id='LC159'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="p">}</span></div><div class='line' id='LC160'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">return</span> <span class="s1">&#39;&#39;</span><span class="p">;</span></div><div class='line' id='LC161'>&nbsp;&nbsp;<span class="p">}</span></div><div class='line' id='LC162'><br/></div><div class='line' id='LC163'>&nbsp;&nbsp;<span class="sd">/**</span></div><div class='line' id='LC164'><span class="sd">   *</span></div><div class='line' id='LC165'><span class="sd">   * Given the userID and a tempKey, get an authorized API Client that we can</span></div><div class='line' id='LC166'><span class="sd">   * use to query the service</span></div><div class='line' id='LC167'><span class="sd">   *</span></div><div class='line' id='LC168'><span class="sd">   * @param $userId - The player&#39;s userID from a players/me call</span></div><div class='line' id='LC169'><span class="sd">   * @param $tempKey - The big random string we&#39;re using to verify the user</span></div><div class='line' id='LC170'><span class="sd">   * @throws Exception -- Throws an exception if the user can&#39;t be found</span></div><div class='line' id='LC171'><span class="sd">   */</span></div><div class='line' id='LC172'>&nbsp;&nbsp;<span class="k">private</span> <span class="k">function</span> <span class="nf">setupApiClientForUser</span><span class="p">(</span><span class="nv">$userId</span><span class="p">,</span> <span class="nv">$tempKey</span><span class="p">)</span></div><div class='line' id='LC173'>&nbsp;&nbsp;<span class="p">{</span></div><div class='line' id='LC174'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$bearerToken</span> <span class="o">=</span> <span class="nv">$this</span><span class="o">-&gt;</span><span class="na">getBearerTokenForTempKey</span><span class="p">(</span><span class="nv">$userId</span><span class="p">,</span> <span class="nv">$tempKey</span><span class="p">);</span></div><div class='line' id='LC175'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">if</span> <span class="p">(</span><span class="nv">$bearerToken</span> <span class="o">!=</span> <span class="s1">&#39;&#39;</span><span class="p">)</span> <span class="p">{</span></div><div class='line' id='LC176'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$this</span><span class="o">-&gt;</span><span class="na">setupApiClient</span><span class="p">();</span></div><div class='line' id='LC177'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$this</span><span class="o">-&gt;</span><span class="na">client</span><span class="o">-&gt;</span><span class="na">setAccessToken</span><span class="p">(</span><span class="nv">$bearerToken</span><span class="p">);</span></div><div class='line' id='LC178'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$this</span><span class="o">-&gt;</span><span class="na">clientIsAuthed</span> <span class="o">=</span> <span class="k">true</span><span class="p">;</span></div><div class='line' id='LC179'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="p">}</span> <span class="k">else</span> <span class="p">{</span></div><div class='line' id='LC180'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">throw</span> <span class="k">new</span> <span class="nx">Exception</span><span class="p">(</span><span class="s1">&#39;Couldn\&#39;t get auth token for this temp key!&#39;</span><span class="p">);</span></div><div class='line' id='LC181'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="p">}</span></div><div class='line' id='LC182'>&nbsp;&nbsp;<span class="p">}</span></div><div class='line' id='LC183'><br/></div><div class='line' id='LC184'><br/></div><div class='line' id='LC185'>&nbsp;&nbsp;<span class="sd">/**</span></div><div class='line' id='LC186'><span class="sd">   * Verifies a score value here on the server</span></div><div class='line' id='LC187'><span class="sd">   *</span></div><div class='line' id='LC188'><span class="sd">   * @param $scoreVal - The user submitted score</span></div><div class='line' id='LC189'><span class="sd">   * @return int - The verified user score</span></div><div class='line' id='LC190'><span class="sd">   * @throws InvalidArgumentException if the score is outside of 0-9999. Or</span></div><div class='line' id='LC191'><span class="sd">   * not an integer</span></div><div class='line' id='LC192'><span class="sd">   */</span></div><div class='line' id='LC193'>&nbsp;&nbsp;<span class="k">private</span> <span class="k">function</span> <span class="nf">getVerifiedScore</span><span class="p">(</span><span class="nv">$scoreVal</span><span class="p">)</span></div><div class='line' id='LC194'>&nbsp;&nbsp;<span class="p">{</span></div><div class='line' id='LC195'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="c1">// Is this overkill for testing an int range? Perhaps, but the filter_var</span></div><div class='line' id='LC196'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="c1">// function is useful</span></div><div class='line' id='LC197'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$optionsAndFlags</span> <span class="o">=</span> <span class="k">array</span><span class="p">(</span></div><div class='line' id='LC198'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="s1">&#39;options&#39;</span> <span class="o">=&gt;</span> <span class="k">array</span><span class="p">(</span></div><div class='line' id='LC199'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="s1">&#39;min_range&#39;</span> <span class="o">=&gt;</span> <span class="mi">0</span><span class="p">,</span></div><div class='line' id='LC200'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="s1">&#39;max_range&#39;</span> <span class="o">=&gt;</span> <span class="mi">9999</span></div><div class='line' id='LC201'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="p">),</span></div><div class='line' id='LC202'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="s1">&#39;flags&#39;</span> <span class="o">=&gt;</span> <span class="nx">FILTER_NULL_ON_FAILURE</span><span class="p">,</span></div><div class='line' id='LC203'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="p">);</span></div><div class='line' id='LC204'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$verifiedScore</span> <span class="o">=</span> <span class="nb">filter_var</span><span class="p">(</span><span class="nv">$scoreVal</span><span class="p">,</span><span class="nx">FILTER_VALIDATE_INT</span><span class="p">,</span> <span class="nv">$optionsAndFlags</span><span class="p">);</span></div><div class='line' id='LC205'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">if</span> <span class="p">(</span><span class="nb">is_null</span><span class="p">(</span><span class="nv">$verifiedScore</span><span class="p">))</span> <span class="p">{</span></div><div class='line' id='LC206'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">throw</span> <span class="k">new</span> <span class="nx">InvalidArgumentException</span><span class="p">(</span><span class="s1">&#39;Was expecting score between 0 and 9999. Got &#39;</span> <span class="o">.</span><span class="nv">$scoreVal</span><span class="p">);</span></div><div class='line' id='LC207'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="p">}</span></div><div class='line' id='LC208'><br/></div><div class='line' id='LC209'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">return</span> <span class="nv">$verifiedScore</span><span class="p">;</span></div><div class='line' id='LC210'><br/></div><div class='line' id='LC211'>&nbsp;&nbsp;<span class="p">}</span></div><div class='line' id='LC212'><br/></div><div class='line' id='LC213'>&nbsp;&nbsp;<span class="sd">/**</span></div><div class='line' id='LC214'><span class="sd">   * Get a list of high scores from the games service</span></div><div class='line' id='LC215'><span class="sd">   *</span></div><div class='line' id='LC216'><span class="sd">   * @return array - An array of score objects</span></div><div class='line' id='LC217'><span class="sd">   */</span></div><div class='line' id='LC218'>&nbsp;&nbsp;<span class="k">public</span> <span class="k">function</span> <span class="nf">getHighScores</span><span class="p">()</span> <span class="p">{</span></div><div class='line' id='LC219'><br/></div><div class='line' id='LC220'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$this</span><span class="o">-&gt;</span><span class="na">verifyClientIsReady</span><span class="p">();</span></div><div class='line' id='LC221'><br/></div><div class='line' id='LC222'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$response</span> <span class="o">=</span> <span class="nv">$this</span><span class="o">-&gt;</span><span class="na">games</span><span class="o">-&gt;</span><span class="na">scores</span><span class="o">-&gt;</span><span class="na">listScores</span><span class="p">(</span><span class="nv">$this</span><span class="o">-&gt;</span><span class="na">appVals</span><span class="p">[</span><span class="s1">&#39;game&#39;</span><span class="p">][</span><span class="s1">&#39;leaderboardId&#39;</span><span class="p">],</span></div><div class='line' id='LC223'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="s1">&#39;social&#39;</span><span class="p">,</span></div><div class='line' id='LC224'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="s1">&#39;daily&#39;</span><span class="p">);</span></div><div class='line' id='LC225'><br/></div><div class='line' id='LC226'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">return</span> <span class="k">array</span><span class="p">(</span><span class="s1">&#39;data&#39;</span> <span class="o">=&gt;</span> <span class="nv">$response</span><span class="p">);</span></div><div class='line' id='LC227'>&nbsp;&nbsp;<span class="p">}</span></div><div class='line' id='LC228'><br/></div><div class='line' id='LC229'>&nbsp;&nbsp;<span class="sd">/**</span></div><div class='line' id='LC230'><span class="sd">   * Submit the user&#39;s score to a high score list</span></div><div class='line' id='LC231'><span class="sd">   *</span></div><div class='line' id='LC232'><span class="sd">   * @param $scoreVal integer - The user-submitted score</span></div><div class='line' id='LC233'><span class="sd">   * @return array - A response object</span></div><div class='line' id='LC234'><span class="sd">   */</span></div><div class='line' id='LC235'>&nbsp;&nbsp;<span class="k">public</span> <span class="k">function</span> <span class="nf">submitScore</span><span class="p">(</span><span class="nv">$scoreVal</span><span class="p">)</span> <span class="p">{</span></div><div class='line' id='LC236'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$scoreVal</span> <span class="o">=</span> <span class="nv">$this</span><span class="o">-&gt;</span><span class="na">getVerifiedScore</span><span class="p">(</span><span class="nv">$scoreVal</span><span class="p">);</span></div><div class='line' id='LC237'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$this</span><span class="o">-&gt;</span><span class="na">verifyClientIsReady</span><span class="p">();</span></div><div class='line' id='LC238'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$response</span> <span class="o">=</span> <span class="nv">$this</span><span class="o">-&gt;</span><span class="na">games</span><span class="o">-&gt;</span><span class="na">scores</span><span class="o">-&gt;</span><span class="na">submit</span><span class="p">(</span><span class="nv">$this</span><span class="o">-&gt;</span><span class="na">appVals</span><span class="p">[</span><span class="s1">&#39;game&#39;</span><span class="p">][</span><span class="s1">&#39;leaderboardId&#39;</span><span class="p">],</span></div><div class='line' id='LC239'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$scoreVal</span><span class="p">);</span></div><div class='line' id='LC240'><br/></div><div class='line' id='LC241'><br/></div><div class='line' id='LC242'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">return</span> <span class="k">array</span><span class="p">(</span><span class="s1">&#39;data&#39;</span> <span class="o">=&gt;</span> <span class="nv">$response</span><span class="p">);</span></div><div class='line' id='LC243'><br/></div><div class='line' id='LC244'>&nbsp;&nbsp;<span class="p">}</span></div><div class='line' id='LC245'><br/></div><div class='line' id='LC246'>&nbsp;&nbsp;<span class="sd">/**</span></div><div class='line' id='LC247'><span class="sd">   * Signs in the user, given an OAuth 2.0 single-use code</span></div><div class='line' id='LC248'><span class="sd">   *</span></div><div class='line' id='LC249'><span class="sd">   * @param $authCode - The single-use code</span></div><div class='line' id='LC250'><span class="sd">   * @param string $redirectUri - The redirect URI we&#39;re using for our</span></div><div class='line' id='LC251'><span class="sd">   * application. Defaults to &#39;postmessage&#39; to handle client-side flows</span></div><div class='line' id='LC252'><span class="sd">   * @throws Exception</span></div><div class='line' id='LC253'><span class="sd">   * @return array - A response object that will probably include the player</span></div><div class='line' id='LC254'><span class="sd">   */</span></div><div class='line' id='LC255'>&nbsp;&nbsp;<span class="k">public</span> <span class="k">function</span> <span class="nf">loginUser</span><span class="p">(</span><span class="nv">$authCode</span><span class="p">,</span> <span class="nv">$redirectUri</span> <span class="o">=</span> <span class="s1">&#39;postmessage&#39;</span><span class="p">)</span> <span class="p">{</span></div><div class='line' id='LC256'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$this</span><span class="o">-&gt;</span><span class="na">setupApiClient</span><span class="p">(</span><span class="nv">$redirectUri</span><span class="p">);</span></div><div class='line' id='LC257'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$this</span><span class="o">-&gt;</span><span class="na">client</span><span class="o">-&gt;</span><span class="na">authenticate</span><span class="p">(</span><span class="nv">$authCode</span><span class="p">);</span></div><div class='line' id='LC258'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">if</span> <span class="p">(</span><span class="nv">$this</span><span class="o">-&gt;</span><span class="na">client</span><span class="o">-&gt;</span><span class="na">getAccessToken</span><span class="p">())</span> <span class="p">{</span></div><div class='line' id='LC259'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$this</span><span class="o">-&gt;</span><span class="na">clientIsAuthed</span> <span class="o">=</span> <span class="k">true</span><span class="p">;</span></div><div class='line' id='LC260'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="c1">// By default, $response is an associative array. If you want to make</span></div><div class='line' id='LC261'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="c1">// it an object (which I prefer), change &#39;use_objects&#39; in config.php</span></div><div class='line' id='LC262'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$response</span> <span class="o">=</span> <span class="nv">$this</span><span class="o">-&gt;</span><span class="na">games</span><span class="o">-&gt;</span><span class="na">players</span><span class="o">-&gt;</span><span class="na">get</span><span class="p">(</span><span class="s1">&#39;me&#39;</span><span class="p">);</span></div><div class='line' id='LC263'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$tempKey</span> <span class="o">=</span> <span class="nv">$this</span><span class="o">-&gt;</span><span class="na">addUserToDatabase</span><span class="p">(</span><span class="nv">$response</span><span class="p">[</span><span class="s1">&#39;playerId&#39;</span><span class="p">],</span> <span class="nv">$this</span><span class="o">-&gt;</span><span class="na">client</span><span class="o">-&gt;</span><span class="na">getAccessToken</span><span class="p">());</span></div><div class='line' id='LC264'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">return</span> <span class="k">array</span><span class="p">(</span><span class="s1">&#39;player&#39;</span> <span class="o">=&gt;</span> <span class="nv">$response</span><span class="p">,</span> <span class="s1">&#39;tempKey&#39;</span> <span class="o">=&gt;</span> <span class="nv">$tempKey</span><span class="p">);</span></div><div class='line' id='LC265'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="p">}</span></div><div class='line' id='LC266'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">throw</span> <span class="k">new</span> <span class="nx">Exception</span><span class="p">(</span><span class="s1">&#39;Sorry. Wasn\&#39;t able to log you in with this auth code.&#39;</span><span class="p">);</span></div><div class='line' id='LC267'>&nbsp;&nbsp;<span class="p">}</span></div><div class='line' id='LC268'><br/></div><div class='line' id='LC269'>&nbsp;&nbsp;<span class="sd">/**</span></div><div class='line' id='LC270'><span class="sd">   * In the case of server-side login, gets an Auth URL from the client</span></div><div class='line' id='LC271'><span class="sd">   */</span></div><div class='line' id='LC272'>&nbsp;&nbsp;<span class="k">public</span> <span class="k">function</span> <span class="nf">createAuthUrlForServerSide</span><span class="p">(</span><span class="nv">$redirectPage</span><span class="p">)</span> <span class="p">{</span></div><div class='line' id='LC273'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$this</span><span class="o">-&gt;</span><span class="na">setupApiClient</span><span class="p">(</span><span class="nv">$redirectPage</span><span class="p">);</span></div><div class='line' id='LC274'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$this</span><span class="o">-&gt;</span><span class="na">client</span><span class="o">-&gt;</span><span class="na">setScopes</span><span class="p">(</span><span class="k">array</span><span class="p">(</span><span class="s1">&#39;https://www.googleapis.com/auth/games&#39;</span><span class="p">));</span></div><div class='line' id='LC275'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">return</span> <span class="nv">$this</span><span class="o">-&gt;</span><span class="na">client</span><span class="o">-&gt;</span><span class="na">createAuthUrl</span><span class="p">();</span></div><div class='line' id='LC276'><br/></div><div class='line' id='LC277'>&nbsp;&nbsp;<span class="p">}</span></div><div class='line' id='LC278'><br/></div><div class='line' id='LC279'>&nbsp;&nbsp;<span class="sd">/**</span></div><div class='line' id='LC280'><span class="sd">   * Verifies that our two keys match to prevent any XSRF micheviousness</span></div><div class='line' id='LC281'><span class="sd">   *</span></div><div class='line' id='LC282'><span class="sd">   * @param $sessionKey -- The random key from the session</span></div><div class='line' id='LC283'><span class="sd">   * @param $formkey -- The random key from the form</span></div><div class='line' id='LC284'><span class="sd">   * @return bool -- true if they match</span></div><div class='line' id='LC285'><span class="sd">   * @throws Exception -- Thrown if nothing matches</span></div><div class='line' id='LC286'><span class="sd">   */</span></div><div class='line' id='LC287'>&nbsp;&nbsp;<span class="k">public</span> <span class="k">function</span> <span class="nf">verifyXSToken</span><span class="p">(</span><span class="nv">$sessionKey</span><span class="p">,</span> <span class="nv">$formkey</span><span class="p">)</span></div><div class='line' id='LC288'>&nbsp;&nbsp;<span class="p">{</span></div><div class='line' id='LC289'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">if</span> <span class="p">(</span><span class="nv">$sessionKey</span> <span class="o">==</span> <span class="nv">$formkey</span><span class="p">)</span> <span class="k">return</span> <span class="k">true</span><span class="p">;</span></div><div class='line' id='LC290'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">throw</span> <span class="k">new</span> <span class="nx">Exception</span><span class="p">(</span><span class="s1">&#39;Cross-site forgery token doesn\&#39;t match:&#39;</span> <span class="o">.</span> <span class="nv">$sessionKey</span> <span class="o">.</span> <span class="s1">&#39; and &#39;</span> <span class="o">.</span> <span class="nv">$formkey</span><span class="p">);</span></div><div class='line' id='LC291'>&nbsp;&nbsp;<span class="p">}</span></div><div class='line' id='LC292'><br/></div><div class='line' id='LC293'><br/></div><div class='line' id='LC294'><br/></div><div class='line' id='LC295'><span class="p">}</span></div><div class='line' id='LC296'><br/></div></pre></div></td>
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
      <li>&copy; 2014 <span title="0.02977s from github-fe131-cp1-prd.iad.github.net">GitHub</span>, Inc.</li>
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

