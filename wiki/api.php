<!DOCTYPE html>
<html class="client-nojs" lang="en" dir="ltr">
<head>
<meta charset="UTF-8">
<title>MediaWiki API help - Tulsi Bhagat</title>
<script>document.documentElement.className="client-js";RLCONF={"wgBreakFrames":true,"wgSeparatorTransformTable":["",""],"wgDigitTransformTable":["",""],"wgDefaultDateFormat":"dmy","wgMonthNames":["","January","February","March","April","May","June","July","August","September","October","November","December"],"wgRequestId":"4401dabdcf69cdfc102845f5","wgCSPNonce":false,"wgCanonicalNamespace":"Special","wgCanonicalSpecialPageName":"ApiHelp","wgNamespaceNumber":-1,"wgPageName":"Special:ApiHelp","wgTitle":"ApiHelp","wgCurRevisionId":0,"wgRevisionId":0,"wgArticleId":0,"wgIsArticle":false,"wgIsRedirect":false,"wgAction":"view","wgUserName":null,"wgUserGroups":["*"],"wgCategories":[],"wgPageContentLanguage":"en","wgPageContentModel":"wikitext","wgRelevantPageName":"Special:ApiHelp","wgRelevantArticleId":0,"wgIsProbablyEditable":false,"wgRelevantPageIsProbablyEditable":false};RLSTATE={"site.styles":"ready","user.styles":"ready","user":"ready","user.options":"loading","mediawiki.hlist":"ready",
"mediawiki.apipretty":"ready","mediawiki.skinning.interface":"ready"};RLPAGEMODULES=["site","mediawiki.page.ready"];</script>
<script>(RLQ=window.RLQ||[]).push(function(){mw.loader.implement("user.options@1i9g4",function($,jQuery,require,module){mw.user.tokens.set({"patrolToken":"+\\","watchToken":"+\\","csrfToken":"+\\"});});});</script>
<link rel="stylesheet" href="/wiki/load.php?lang=en&amp;modules=mediawiki.apipretty%2Chlist%7Cmediawiki.skinning.interface&amp;only=styles&amp;skin=apioutput">
<script async="" src="/wiki/load.php?lang=en&amp;modules=startup&amp;only=scripts&amp;raw=1&amp;skin=apioutput"></script>
<meta name="ResourceLoaderDynamicStyles" content="">
<link rel="stylesheet" href="/wiki/load.php?lang=en&amp;modules=site.styles&amp;only=styles&amp;skin=apioutput">
<meta name="generator" content="MediaWiki 1.38.1">
<meta name="robots" content="noindex,nofollow">
<meta name="format-detection" content="telephone=no">
<link rel="shortcut icon" href="/wiki/resources/assets/favicon.ico">
<link rel="search" type="application/opensearchdescription+xml" href="/wiki/opensearch_desc.php" title="Tulsi Bhagat (en)">
<link rel="EditURI" type="application/rsd+xml" href="/wiki/api.php?action=rsd">
<link rel="license" href="https://www.mediawiki.org/wiki/Special:MyLanguage/Copyright">
<link rel="alternate" type="application/atom+xml" title="Tulsi Bhagat Atom feed" href="/wiki/index.php?title=Special:RecentChanges&amp;feed=atom">
</head>
<body class="mediawiki ltr sitedir-ltr mw-hide-empty-elt ns--1 ns-special mw-special-ApiHelp page-Special_ApiHelp rootpage-Special_ApiHelp skin-apioutput action-view">
<div class="mw-body" role="main">
<h1 id="firstHeading">MediaWiki API help</h1>
<div class="mw-body-content">
<div id="mw-content-text" class="mw-body-content">
<p>This is an auto-generated MediaWiki API documentation page.
</p>
<p>Documentation and examples: <a class="external free" href="https://www.mediawiki.org/wiki/Special:MyLanguage/API:Main_page">https://www.mediawiki.org/wiki/Special:MyLanguage/API:Main_page</a>
</p>
<h2 class="apihelp-header" id="main">Main module</h2>
<div class="apihelp-block apihelp-flags"><ul>
<li><span class="apihelp-source">Source: <span dir="ltr" lang="en">MediaWiki</span></span></li>
<li><span class="apihelp-license">License: <a href="/wiki/Special:Version/License/MediaWiki" title="Special:Version/License/MediaWiki"><span dir="ltr" lang="en">GPL-2.0-or-later</span></a></span></li>
</ul></div>
<div class="hlist plainlinks api-main-links">
<ul>
<li><a href="https://www.mediawiki.org/wiki/Special:MyLanguage/API:Main_page" class="extiw" title="mw:Special:MyLanguage/API:Main page">Documentation</a></li>
<li><a href="https://www.mediawiki.org/wiki/Special:MyLanguage/API:Etiquette" class="extiw" title="mw:Special:MyLanguage/API:Etiquette">Etiquette &amp; usage guidelines</a></li>
<li><a href="https://www.mediawiki.org/wiki/Special:MyLanguage/API:FAQ" class="extiw" title="mw:Special:MyLanguage/API:FAQ">FAQ</a></li>
<li><a rel="nofollow" class="external text" href="https://lists.wikimedia.org/postorius/lists/mediawiki-api.lists.wikimedia.org/">Mailing list</a></li>
<li><a rel="nofollow" class="external text" href="https://lists.wikimedia.org/postorius/lists/mediawiki-api-announce.lists.wikimedia.org/">API Announcements</a></li>
<li><a rel="nofollow" class="external text" href="https://phabricator.wikimedia.org/maniphest/query/GebfyV4uCaLd/#R">Bugs &amp; requests</a></li>
</ul>
</div>
<p><strong>Status:</strong> The MediaWiki API is a mature and stable interface that is actively supported and improved. While we try to avoid it, we may occasionally need to make breaking changes; subscribe to <a rel="nofollow" class="external text" href="https://lists.wikimedia.org/hyperkitty/list/mediawiki-api-announce@lists.wikimedia.org/">the mediawiki-api-announce mailing list</a> for notice of updates.
</p>
<p><strong>Erroneous requests:</strong> When erroneous requests are sent to the API, an HTTP header will be sent with the key "MediaWiki-API-Error" and then both the value of the header and the error code sent back will be set to the same value. For more information see <a href="https://www.mediawiki.org/wiki/Special:MyLanguage/API:Errors_and_warnings" class="extiw" title="mw:Special:MyLanguage/API:Errors and warnings">API: Errors and warnings</a>.
</p>
<p class="mw-apisandbox-link"><strong>Testing:</strong> For ease of testing API requests, see <a href="/wiki/Special:ApiSandbox" title="Special:ApiSandbox">Special:ApiSandbox</a>.</p>
<div class="apihelp-block apihelp-parameters">
<div class="apihelp-block-head">Parameters:</div>
<dl>
<dt><span dir="ltr" lang="en">action</span></dt>
<dd class="description">
<p>Which action to perform.
</p>
<dl>
<dt><span dir="ltr" lang="en"><a href="/wiki/api.php?action=help&amp;modules=block">block</a></span></dt>
<dd>Block a user.</dd>
<dt><span dir="ltr" lang="en"><a href="/wiki/api.php?action=help&amp;modules=changeauthenticationdata">changeauthenticationdata</a></span></dt>
<dd>Change authentication data for the current user.</dd>
<dt><span dir="ltr" lang="en"><a href="/wiki/api.php?action=help&amp;modules=changecontentmodel">changecontentmodel</a></span></dt>
<dd>Change the content model of a page</dd>
<dt><span dir="ltr" lang="en"><a href="/wiki/api.php?action=help&amp;modules=checktoken">checktoken</a></span></dt>
<dd>Check the validity of a token from <kbd><a href="/wiki/api.php?action=help&amp;modules=query%2Btokens">action=query&amp;meta=tokens</a></kbd>.</dd>
<dt><span dir="ltr" lang="en"><a href="/wiki/api.php?action=help&amp;modules=clearhasmsg">clearhasmsg</a></span></dt>
<dd>Clears the <code>hasmsg</code> flag for the current user.</dd>
<dt><span dir="ltr" lang="en"><a href="/wiki/api.php?action=help&amp;modules=clientlogin">clientlogin</a></span></dt>
<dd>Log in to the wiki using the interactive flow.</dd>
<dt><span dir="ltr" lang="en"><a href="/wiki/api.php?action=help&amp;modules=compare">compare</a></span></dt>
<dd>Get the difference between two pages.</dd>
<dt><span dir="ltr" lang="en"><a href="/wiki/api.php?action=help&amp;modules=createaccount">createaccount</a></span></dt>
<dd>Create a new user account.</dd>
<dt><span dir="ltr" lang="en"><a href="/wiki/api.php?action=help&amp;modules=delete">delete</a></span></dt>
<dd>Delete a page.</dd>
<dt><span dir="ltr" lang="en"><a href="/wiki/api.php?action=help&amp;modules=edit">edit</a></span></dt>
<dd>Create and edit pages.</dd>
<dt><span dir="ltr" lang="en"><a href="/wiki/api.php?action=help&amp;modules=emailuser">emailuser</a></span></dt>
<dd>Email a user.</dd>
<dt><span dir="ltr" lang="en"><a href="/wiki/api.php?action=help&amp;modules=expandtemplates">expandtemplates</a></span></dt>
<dd>Expands all templates within wikitext.</dd>
<dt><span dir="ltr" lang="en"><a href="/wiki/api.php?action=help&amp;modules=feedcontributions">feedcontributions</a></span></dt>
<dd>Returns a user's contributions feed.</dd>
<dt><span dir="ltr" lang="en"><a href="/wiki/api.php?action=help&amp;modules=feedrecentchanges">feedrecentchanges</a></span></dt>
<dd>Returns a recent changes feed.</dd>
<dt><span dir="ltr" lang="en"><a href="/wiki/api.php?action=help&amp;modules=feedwatchlist">feedwatchlist</a></span></dt>
<dd>Returns a watchlist feed.</dd>
<dt><span dir="ltr" lang="en"><a href="/wiki/api.php?action=help&amp;modules=filerevert">filerevert</a></span></dt>
<dd>Revert a file to an old version.</dd>
<dt><span dir="ltr" lang="en"><a href="/wiki/api.php?action=help&amp;modules=help">help</a></span></dt>
<dd>Display help for the specified modules.</dd>
<dt><span dir="ltr" lang="en"><a href="/wiki/api.php?action=help&amp;modules=imagerotate">imagerotate</a></span></dt>
<dd>Rotate one or more images.</dd>
<dt><span dir="ltr" lang="en"><a href="/wiki/api.php?action=help&amp;modules=import">import</a></span></dt>
<dd>Import a page from another wiki, or from an XML file.</dd>
<dt><span dir="ltr" lang="en"><a href="/wiki/api.php?action=help&amp;modules=linkaccount">linkaccount</a></span></dt>
<dd>Link an account from a third-party provider to the current user.</dd>
<dt><span dir="ltr" lang="en"><a href="/wiki/api.php?action=help&amp;modules=login">login</a></span></dt>
<dd>Log in and get authentication cookies.</dd>
<dt><span dir="ltr" lang="en"><a href="/wiki/api.php?action=help&amp;modules=logout">logout</a></span></dt>
<dd>Log out and clear session data.</dd>
<dt><span dir="ltr" lang="en"><a href="/wiki/api.php?action=help&amp;modules=managetags">managetags</a></span></dt>
<dd>Perform management tasks relating to change tags.</dd>
<dt><span dir="ltr" lang="en"><a href="/wiki/api.php?action=help&amp;modules=mergehistory">mergehistory</a></span></dt>
<dd>Merge page histories.</dd>
<dt><span dir="ltr" lang="en"><a href="/wiki/api.php?action=help&amp;modules=move">move</a></span></dt>
<dd>Move a page.</dd>
<dt><span dir="ltr" lang="en"><a href="/wiki/api.php?action=help&amp;modules=opensearch">opensearch</a></span></dt>
<dd>Search the wiki using the OpenSearch protocol.</dd>
<dt><span dir="ltr" lang="en"><a href="/wiki/api.php?action=help&amp;modules=options">options</a></span></dt>
<dd>Change preferences of the current user.</dd>
<dt><span dir="ltr" lang="en"><a href="/wiki/api.php?action=help&amp;modules=paraminfo">paraminfo</a></span></dt>
<dd>Obtain information about API modules.</dd>
<dt><span dir="ltr" lang="en"><a href="/wiki/api.php?action=help&amp;modules=parse">parse</a></span></dt>
<dd>Parses content and returns parser output.</dd>
<dt><span dir="ltr" lang="en"><a href="/wiki/api.php?action=help&amp;modules=patrol">patrol</a></span></dt>
<dd>Patrol a page or revision.</dd>
<dt><span dir="ltr" lang="en"><a href="/wiki/api.php?action=help&amp;modules=protect">protect</a></span></dt>
<dd>Change the protection level of a page.</dd>
<dt><span dir="ltr" lang="en"><a href="/wiki/api.php?action=help&amp;modules=purge">purge</a></span></dt>
<dd>Purge the cache for the given titles.</dd>
<dt><span dir="ltr" lang="en"><a href="/wiki/api.php?action=help&amp;modules=query">query</a></span></dt>
<dd>Fetch data from and about MediaWiki.</dd>
<dt><span dir="ltr" lang="en"><a href="/wiki/api.php?action=help&amp;modules=removeauthenticationdata">removeauthenticationdata</a></span></dt>
<dd>Remove authentication data for the current user.</dd>
<dt><span dir="ltr" lang="en"><a href="/wiki/api.php?action=help&amp;modules=resetpassword">resetpassword</a></span></dt>
<dd>Send a password reset email to a user.</dd>
<dt><span dir="ltr" lang="en"><a href="/wiki/api.php?action=help&amp;modules=revisiondelete">revisiondelete</a></span></dt>
<dd>Delete and undelete revisions.</dd>
<dt><span dir="ltr" lang="en"><a href="/wiki/api.php?action=help&amp;modules=rollback">rollback</a></span></dt>
<dd>Undo the last edit to the page.</dd>
<dt><span dir="ltr" lang="en"><a href="/wiki/api.php?action=help&amp;modules=rsd">rsd</a></span></dt>
<dd>Export an RSD (Really Simple Discovery) schema.</dd>
<dt><span dir="ltr" lang="en"><a href="/wiki/api.php?action=help&amp;modules=setnotificationtimestamp">setnotificationtimestamp</a></span></dt>
<dd>Update the notification timestamp for watched pages.</dd>
<dt><span dir="ltr" lang="en"><a href="/wiki/api.php?action=help&amp;modules=setpagelanguage">setpagelanguage</a></span></dt>
<dd>Change the language of a page.</dd>
<dt><span dir="ltr" lang="en"><a href="/wiki/api.php?action=help&amp;modules=tag">tag</a></span></dt>
<dd>Add or remove change tags from individual revisions or log entries.</dd>
<dt><span dir="ltr" lang="en"><a href="/wiki/api.php?action=help&amp;modules=unblock">unblock</a></span></dt>
<dd>Unblock a user.</dd>
<dt><span dir="ltr" lang="en"><a href="/wiki/api.php?action=help&amp;modules=undelete">undelete</a></span></dt>
<dd>Restore revisions of a deleted page.</dd>
<dt><span dir="ltr" lang="en"><a href="/wiki/api.php?action=help&amp;modules=unlinkaccount">unlinkaccount</a></span></dt>
<dd>Remove a linked third-party account from the current user.</dd>
<dt><span dir="ltr" lang="en"><a href="/wiki/api.php?action=help&amp;modules=upload">upload</a></span></dt>
<dd>Upload a file, or get the status of pending uploads.</dd>
<dt><span dir="ltr" lang="en"><a href="/wiki/api.php?action=help&amp;modules=userrights">userrights</a></span></dt>
<dd>Change a user's group membership.</dd>
<dt><span dir="ltr" lang="en"><a href="/wiki/api.php?action=help&amp;modules=validatepassword">validatepassword</a></span></dt>
<dd>Validate a password against the wiki's password policies.</dd>
<dt><span dir="ltr" lang="en"><a href="/wiki/api.php?action=help&amp;modules=watch">watch</a></span></dt>
<dd>Add or remove pages from the current user's watchlist.</dd>
<dt><span dir="ltr" lang="en"><a href="/wiki/api.php?action=help&amp;modules=cspreport">cspreport</a></span></dt>
<dd>
<span class="apihelp-internal">Internal.</span> Used by browsers to report violations of the Content Security Policy. This module should never be used, except when used automatically by a CSP compliant web browser.</dd>
<dt><span dir="ltr" lang="en"><a href="/wiki/api.php?action=help&amp;modules=stashedit">stashedit</a></span></dt>
<dd>
<span class="apihelp-internal">Internal.</span> Prepare an edit in shared cache.</dd>
</dl>
</dd>
<dd class="info">One of the following values: <a href="/wiki/api.php?action=help&amp;modules=block"><span dir="ltr" lang="en">block</span></a>, <a href="/wiki/api.php?action=help&amp;modules=changeauthenticationdata"><span dir="ltr" lang="en">changeauthenticationdata</span></a>, <a href="/wiki/api.php?action=help&amp;modules=changecontentmodel"><span dir="ltr" lang="en">changecontentmodel</span></a>, <a href="/wiki/api.php?action=help&amp;modules=checktoken"><span dir="ltr" lang="en">checktoken</span></a>, <a href="/wiki/api.php?action=help&amp;modules=clearhasmsg"><span dir="ltr" lang="en">clearhasmsg</span></a>, <a href="/wiki/api.php?action=help&amp;modules=clientlogin"><span dir="ltr" lang="en">clientlogin</span></a>, <a href="/wiki/api.php?action=help&amp;modules=compare"><span dir="ltr" lang="en">compare</span></a>, <a href="/wiki/api.php?action=help&amp;modules=createaccount"><span dir="ltr" lang="en">createaccount</span></a>, <a href="/wiki/api.php?action=help&amp;modules=delete"><span dir="ltr" lang="en">delete</span></a>, <a href="/wiki/api.php?action=help&amp;modules=edit"><span dir="ltr" lang="en">edit</span></a>, <a href="/wiki/api.php?action=help&amp;modules=emailuser"><span dir="ltr" lang="en">emailuser</span></a>, <a href="/wiki/api.php?action=help&amp;modules=expandtemplates"><span dir="ltr" lang="en">expandtemplates</span></a>, <a href="/wiki/api.php?action=help&amp;modules=feedcontributions"><span dir="ltr" lang="en">feedcontributions</span></a>, <a href="/wiki/api.php?action=help&amp;modules=feedrecentchanges"><span dir="ltr" lang="en">feedrecentchanges</span></a>, <a href="/wiki/api.php?action=help&amp;modules=feedwatchlist"><span dir="ltr" lang="en">feedwatchlist</span></a>, <a href="/wiki/api.php?action=help&amp;modules=filerevert"><span dir="ltr" lang="en">filerevert</span></a>, <a href="/wiki/api.php?action=help&amp;modules=help"><span dir="ltr" lang="en">help</span></a>, <a href="/wiki/api.php?action=help&amp;modules=imagerotate"><span dir="ltr" lang="en">imagerotate</span></a>, <a href="/wiki/api.php?action=help&amp;modules=import"><span dir="ltr" lang="en">import</span></a>, <a href="/wiki/api.php?action=help&amp;modules=linkaccount"><span dir="ltr" lang="en">linkaccount</span></a>, <a href="/wiki/api.php?action=help&amp;modules=login"><span dir="ltr" lang="en">login</span></a>, <a href="/wiki/api.php?action=help&amp;modules=logout"><span dir="ltr" lang="en">logout</span></a>, <a href="/wiki/api.php?action=help&amp;modules=managetags"><span dir="ltr" lang="en">managetags</span></a>, <a href="/wiki/api.php?action=help&amp;modules=mergehistory"><span dir="ltr" lang="en">mergehistory</span></a>, <a href="/wiki/api.php?action=help&amp;modules=move"><span dir="ltr" lang="en">move</span></a>, <a href="/wiki/api.php?action=help&amp;modules=opensearch"><span dir="ltr" lang="en">opensearch</span></a>, <a href="/wiki/api.php?action=help&amp;modules=options"><span dir="ltr" lang="en">options</span></a>, <a href="/wiki/api.php?action=help&amp;modules=paraminfo"><span dir="ltr" lang="en">paraminfo</span></a>, <a href="/wiki/api.php?action=help&amp;modules=parse"><span dir="ltr" lang="en">parse</span></a>, <a href="/wiki/api.php?action=help&amp;modules=patrol"><span dir="ltr" lang="en">patrol</span></a>, <a href="/wiki/api.php?action=help&amp;modules=protect"><span dir="ltr" lang="en">protect</span></a>, <a href="/wiki/api.php?action=help&amp;modules=purge"><span dir="ltr" lang="en">purge</span></a>, <a href="/wiki/api.php?action=help&amp;modules=query"><span dir="ltr" lang="en">query</span></a>, <a href="/wiki/api.php?action=help&amp;modules=removeauthenticationdata"><span dir="ltr" lang="en">removeauthenticationdata</span></a>, <a href="/wiki/api.php?action=help&amp;modules=resetpassword"><span dir="ltr" lang="en">resetpassword</span></a>, <a href="/wiki/api.php?action=help&amp;modules=revisiondelete"><span dir="ltr" lang="en">revisiondelete</span></a>, <a href="/wiki/api.php?action=help&amp;modules=rollback"><span dir="ltr" lang="en">rollback</span></a>, <a href="/wiki/api.php?action=help&amp;modules=rsd"><span dir="ltr" lang="en">rsd</span></a>, <a href="/wiki/api.php?action=help&amp;modules=setnotificationtimestamp"><span dir="ltr" lang="en">setnotificationtimestamp</span></a>, <a href="/wiki/api.php?action=help&amp;modules=setpagelanguage"><span dir="ltr" lang="en">setpagelanguage</span></a>, <a href="/wiki/api.php?action=help&amp;modules=tag"><span dir="ltr" lang="en">tag</span></a>, <a href="/wiki/api.php?action=help&amp;modules=unblock"><span dir="ltr" lang="en">unblock</span></a>, <a href="/wiki/api.php?action=help&amp;modules=undelete"><span dir="ltr" lang="en">undelete</span></a>, <a href="/wiki/api.php?action=help&amp;modules=unlinkaccount"><span dir="ltr" lang="en">unlinkaccount</span></a>, <a href="/wiki/api.php?action=help&amp;modules=upload"><span dir="ltr" lang="en">upload</span></a>, <a href="/wiki/api.php?action=help&amp;modules=userrights"><span dir="ltr" lang="en">userrights</span></a>, <a href="/wiki/api.php?action=help&amp;modules=validatepassword"><span dir="ltr" lang="en">validatepassword</span></a>, <a href="/wiki/api.php?action=help&amp;modules=watch"><span dir="ltr" lang="en">watch</span></a>, <a href="/wiki/api.php?action=help&amp;modules=cspreport"><span dir="ltr" lang="en" class="apihelp-internal-value">cspreport</span></a>, <a href="/wiki/api.php?action=help&amp;modules=stashedit"><span dir="ltr" lang="en" class="apihelp-internal-value">stashedit</span></a>
</dd>
<dd class="info">Default: help</dd>
<dt><span dir="ltr" lang="en">format</span></dt>
<dd class="description">
<p>The format of the output.
</p>
<dl>
<dt><span dir="ltr" lang="en"><a href="/wiki/api.php?action=help&amp;modules=json">json</a></span></dt>
<dd>Output data in JSON format.</dd>
<dt><span dir="ltr" lang="en"><a href="/wiki/api.php?action=help&amp;modules=jsonfm">jsonfm</a></span></dt>
<dd>Output data in JSON format (pretty-print in HTML).</dd>
<dt><span dir="ltr" lang="en"><a href="/wiki/api.php?action=help&amp;modules=none">none</a></span></dt>
<dd>Output nothing.</dd>
<dt><span dir="ltr" lang="en"><a href="/wiki/api.php?action=help&amp;modules=php">php</a></span></dt>
<dd>Output data in serialized PHP format.</dd>
<dt><span dir="ltr" lang="en"><a href="/wiki/api.php?action=help&amp;modules=phpfm">phpfm</a></span></dt>
<dd>Output data in serialized PHP format (pretty-print in HTML).</dd>
<dt><span dir="ltr" lang="en"><a href="/wiki/api.php?action=help&amp;modules=rawfm">rawfm</a></span></dt>
<dd>Output data, including debugging elements, in JSON format (pretty-print in HTML).</dd>
<dt><span dir="ltr" lang="en"><a href="/wiki/api.php?action=help&amp;modules=xml">xml</a></span></dt>
<dd>Output data in XML format.</dd>
<dt><span dir="ltr" lang="en"><a href="/wiki/api.php?action=help&amp;modules=xmlfm">xmlfm</a></span></dt>
<dd>Output data in XML format (pretty-print in HTML).</dd>
</dl>
</dd>
<dd class="info">One of the following values: <a href="/wiki/api.php?action=help&amp;modules=json"><span dir="ltr" lang="en">json</span></a>, <a href="/wiki/api.php?action=help&amp;modules=jsonfm"><span dir="ltr" lang="en">jsonfm</span></a>, <a href="/wiki/api.php?action=help&amp;modules=none"><span dir="ltr" lang="en">none</span></a>, <a href="/wiki/api.php?action=help&amp;modules=php"><span dir="ltr" lang="en">php</span></a>, <a href="/wiki/api.php?action=help&amp;modules=phpfm"><span dir="ltr" lang="en">phpfm</span></a>, <a href="/wiki/api.php?action=help&amp;modules=rawfm"><span dir="ltr" lang="en">rawfm</span></a>, <a href="/wiki/api.php?action=help&amp;modules=xml"><span dir="ltr" lang="en">xml</span></a>, <a href="/wiki/api.php?action=help&amp;modules=xmlfm"><span dir="ltr" lang="en">xmlfm</span></a>
</dd>
<dd class="info">Default: jsonfm</dd>
<dt><span dir="ltr" lang="en">maxlag</span></dt>
<dd class="description"><p>Maximum lag can be used when MediaWiki is installed on a database replicated cluster. To save actions causing any more site replication lag, this parameter can make the client wait until the replication lag is less than the specified value. In case of excessive lag, error code <samp>maxlag</samp> is returned with a message like <samp>Waiting for $host: $lag seconds lagged</samp>.<br>See <a href="https://www.mediawiki.org/wiki/Special:MyLanguage/Manual:Maxlag_parameter" class="extiw" title="mw:Special:MyLanguage/Manual:Maxlag parameter">Manual: Maxlag parameter</a> for more information.
</p></dd>
<dd class="info">Type: integer</dd>
<dt><span dir="ltr" lang="en">smaxage</span></dt>
<dd class="description"><p>Set the <code>s-maxage</code> HTTP cache control header to this many seconds. Errors are never cached.
</p></dd>
<dd class="info">Type: integer</dd>
<dd class="info">Default: 0</dd>
<dt><span dir="ltr" lang="en">maxage</span></dt>
<dd class="description"><p>Set the <code>max-age</code> HTTP cache control header to this many seconds. Errors are never cached.
</p></dd>
<dd class="info">Type: integer</dd>
<dd class="info">Default: 0</dd>
<dt><span dir="ltr" lang="en">assert</span></dt>
<dd class="description"><p>Verify that the user is logged in if set to <kbd>user</kbd>, <em>not</em> logged in if set to <kbd>anon</kbd>, or has the bot user right if <kbd>bot</kbd>.
</p></dd>
<dd class="info">One of the following values: anon, bot, user</dd>
<dt><span dir="ltr" lang="en">assertuser</span></dt>
<dd class="description"><p>Verify the current user is the named user.
</p></dd>
<dd class="info">Type: user, by user name</dd>
<dt><span dir="ltr" lang="en">requestid</span></dt>
<dd class="description"><p>Any value given here will be included in the response. May be used to distinguish requests.
</p></dd>
<dt><span dir="ltr" lang="en">servedby</span></dt>
<dd class="description"><p>Include the hostname that served the request in the results.
</p></dd>
<dd class="info">Type: boolean (<a href="#main/datatype/boolean">details</a>)</dd>
<dt><span dir="ltr" lang="en">curtimestamp</span></dt>
<dd class="description"><p>Include the current timestamp in the result.
</p></dd>
<dd class="info">Type: boolean (<a href="#main/datatype/boolean">details</a>)</dd>
<dt><span dir="ltr" lang="en">responselanginfo</span></dt>
<dd class="description"><p>Include the languages used for <var>uselang</var> and <var>errorlang</var> in the result.
</p></dd>
<dd class="info">Type: boolean (<a href="#main/datatype/boolean">details</a>)</dd>
<dt><span dir="ltr" lang="en">origin</span></dt>
<dd class="description">
<p>When accessing the API using a cross-domain AJAX request (CORS), set this to the originating domain. This must be included in any pre-flight request, and therefore must be part of the request URI (not the POST body).
</p>
<p>For authenticated requests, this must match one of the origins in the <code>Origin</code> header exactly, so it has to be set to something like <kbd><a rel="nofollow" class="external free" href="https://en.wikipedia.org/">https://en.wikipedia.org</a></kbd> or <kbd><a rel="nofollow" class="external free" href="https://meta.wikimedia.org/">https://meta.wikimedia.org</a></kbd>. If this parameter does not match the <code>Origin</code> header, a 403 response will be returned. If this parameter matches the <code>Origin</code> header and the origin is allowed, the <code>Access-Control-Allow-Origin</code> and <code>Access-Control-Allow-Credentials</code> headers will be set.
</p>
<p>For non-authenticated requests, specify the value <kbd>*</kbd>. This will cause the <code>Access-Control-Allow-Origin</code> header to be set, but <code>Access-Control-Allow-Credentials</code> will be <code>false</code> and all user-specific data will be restricted.
</p>
</dd>
<dt><span dir="ltr" lang="en">uselang</span></dt>
<dd class="description"><p>Language to use for message translations. <kbd><a href="/wiki/api.php?action=help&amp;modules=query%2Bsiteinfo">action=query&amp;meta=siteinfo</a></kbd> with <kbd>siprop=languages</kbd> returns a list of language codes, or specify <kbd>user</kbd> to use the current user's language preference, or specify <kbd>content</kbd> to use this wiki's content language.
</p></dd>
<dd class="info">Default: user</dd>
<dt><span dir="ltr" lang="en">variant</span></dt>
<dd class="description"><p>Variant of the language. Only works if the base language supports variant conversion.
</p></dd>
<dt><span dir="ltr" lang="en">errorformat</span></dt>
<dd class="description">
<p>Format to use for warning and error text output
</p>
<dl>
<dt><span dir="ltr" lang="en">plaintext</span></dt>
<dd>Wikitext with HTML tags removed and entities replaced.</dd>
<dt><span dir="ltr" lang="en">wikitext</span></dt>
<dd>Unparsed wikitext.</dd>
<dt><span dir="ltr" lang="en">html</span></dt>
<dd>HTML</dd>
<dt><span dir="ltr" lang="en">raw</span></dt>
<dd>Message key and parameters.</dd>
<dt><span dir="ltr" lang="en">none</span></dt>
<dd>No text output, only the error codes.</dd>
<dt><span dir="ltr" lang="en">bc</span></dt>
<dd>Format used prior to MediaWiki 1.29. <var>errorlang</var> and <var>errorsuselocal</var> are ignored.</dd>
</dl>
</dd>
<dd class="info">One of the following values: bc, html, none, plaintext, raw, wikitext</dd>
<dd class="info">Default: bc</dd>
<dt><span dir="ltr" lang="en">errorlang</span></dt>
<dd class="description"><p>Language to use for warnings and errors. <kbd><a href="/wiki/api.php?action=help&amp;modules=query%2Bsiteinfo">action=query&amp;meta=siteinfo</a></kbd> with <kbd>siprop=languages</kbd> returns a list of language codes, or specify <kbd>content</kbd> to use this wiki's content language, or specify <kbd>uselang</kbd> to use the same value as the <var>uselang</var> parameter.
</p></dd>
<dd class="info">Default: uselang</dd>
<dt><span dir="ltr" lang="en">errorsuselocal</span></dt>
<dd class="description"><p>If given, error texts will use locally-customized messages from the MediaWiki namespace.
</p></dd>
<dd class="info">Type: boolean (<a href="#main/datatype/boolean">details</a>)</dd>
</dl>
</div>
<div class="apihelp-block apihelp-examples">
<div class="apihelp-block-head">Examples:</div>
<dl>
<dt>Help for the main module.</dt>
<dd>
<a href="/wiki/api.php?action=help" dir="ltr">api.php?action=help</a> <a href="/wiki/Special:ApiSandbox#action=help"><small>[open in sandbox]</small></a>
</dd>
<dt>All help in one page.</dt>
<dd>
<a href="/wiki/api.php?action=help&amp;recursivesubmodules=1" dir="ltr">api.php?action=help&amp;recursivesubmodules=1</a> <a href="/wiki/Special:ApiSandbox#action=help&amp;recursivesubmodules=1"><small>[open in sandbox]</small></a>
</dd>
</dl>
</div>
<div class="apihelp-block apihelp-permissions">
<div class="apihelp-block-head">Permissions:</div>
<dl>
<dt>writeapi</dt>
<dd>Use of the write API</dd>
<dd>Granted to: all, user and bot</dd>
<dt>apihighlimits</dt>
<dd>Use higher limits in API queries (slow queries: 500; fast queries: 5000). The limits for slow queries also apply to multivalue parameters.</dd>
<dd>Granted to: bot and sysop</dd>
</dl>
</div>
<h3 class="apihelp-header">
<span id="main.2Fdatatypes"></span><span class="mw-headline" id="main/datatypes">Data types</span>
</h3>
<p>Input to MediaWiki should be NFC-normalized UTF-8. MediaWiki may attempt to convert other input, but this may cause some operations (such as <a href="/wiki/api.php?action=help&amp;modules=edit">edits</a> with MD5 checks) to fail.
</p>
<p>Parameters that take multiple values are normally submitted with the values separated using the pipe character, e.g. <kbd>param=value1|value2</kbd> or <kbd>param=value1%7Cvalue2</kbd>. If a value must contain the pipe character, use U+001F (Unit Separator) as the separator <i>and</i> prefix the value with U+001F, e.g. <kbd>param=%1Fvalue1%1Fvalue2</kbd>.
</p>
<p>Some parameter types in API requests need further explanation:
</p>
<dl>
<dt id="main/datatype/boolean">
<span id="main.2Fdatatype.2Fboolean"></span>boolean</dt>
<dd><p>Boolean parameters work like HTML checkboxes: if the parameter is specified, regardless of value, it is considered true. For a false value, omit the parameter entirely.
</p></dd>
<dt id="main/datatype/expiry">
<span id="main.2Fdatatype.2Fexpiry"></span>expiry</dt>
<dd><p>Expiry values be relative (e.g. <kbd>5 months</kbd> or <kbd>2 weeks</kbd>) or absolute (e.g. <kbd>2014-09-18T12:34:56Z</kbd>). For no expiry, use <kbd>infinite</kbd>, <kbd>indefinite</kbd>, <kbd>infinity</kbd> or <kbd>never</kbd>.
</p></dd>
<dt id="main/datatype/timestamp">
<span id="main.2Fdatatype.2Ftimestamp"></span>timestamp</dt>
<dd><p>Timestamps may be specified in several formats, see <a href="https://www.mediawiki.org/wiki/Special:MyLanguage/Timestamp" class="extiw" title="mw:Special:MyLanguage/Timestamp">the Timestamp library input formats documented on mediawiki.org</a> for details. ISO 8601 date and time is recommended: <kbd><var>2001</var>-<var>01</var>-<var>15</var>T<var>14</var>:<var>56</var>:<var>00</var>Z</kbd>. Additionally, the string <kbd>now</kbd> may be used to specify the current timestamp.
</p></dd>
</dl>
<h3 class="apihelp-header">
<span id="main.2Ftemplatedparams"></span><span class="mw-headline" id="main/templatedparams">Templated parameters</span>
</h3>
<p>Templated parameters support cases where an API module needs a value for each value of some other parameter. For example, if there were an API module to request fruit, it might have a parameter <var>fruits</var> to specify which fruits are being requested and a templated parameter <var>{fruit}-quantity</var> to specify how many of each fruit to request. An API client that wants 1 apple, 5 bananas, and 20 strawberries could then make a request like <kbd>fruits=apples|bananas|strawberries&amp;apples-quantity=1&amp;bananas-quantity=5&amp;strawberries-quantity=20</kbd>.
</p>
<h3 class="apihelp-header">
<span id="main.2Fcredits"></span><span class="mw-headline" id="main/credits">Credits</span>
</h3>
<p>API developers:
</p>
<ul>
<li>Yuri Astrakhan (creator, lead developer Sep 2006–Sep 2007)</li>
<li>Roan Kattouw (lead developer Sep 2007–2009)</li>
<li>Victor Vasiliev</li>
<li>Bryan Tong Minh</li>
<li>Sam Reed</li>
<li>Brad Jorsch (lead developer 2013–present)</li>
</ul>
<p>Please send your comments, suggestions and questions to <a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="dcb1b9b8b5bdabb5b7b5f1bdacb59cb0b5afa8aff2abb5b7b5b1b9b8b5bdf2b3aebb">[email&#160;protected]</a>
or file a bug report at <a rel="nofollow" class="external free" href="https://phabricator.wikimedia.org/">https://phabricator.wikimedia.org/</a>.
</p>
<div class="printfooter">Retrieved from "<a dir="ltr" href="/wiki/Special:ApiHelp">httpstulsibhagat.com.np/wiki/Special:ApiHelp</a>"</div>
</div>
</div>
</div>
<script data-cfasync="false" src="/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script>(RLQ=window.RLQ||[]).push(function(){mw.log.warn("This page is using the deprecated ResourceLoader module \"mediawiki.skinning.interface\".\n[1.37] The use of the `content` feature with ResourceLoaderSkinModule is deprecated. Use `content-media` instead. [1.37] The use of the `legacy` feature with ResourceLoaderSkinModule is deprecated(T89981). More information can be found at [[mw:Manual:ResourceLoaderSkinModule]]. ");mw.config.set({"wgBackendResponseTime":626});});</script>
<script defer src="https://static.cloudflareinsights.com/beacon.min.js/v652eace1692a40cfa3763df669d7439c1639079717194" integrity="sha512-Gi7xpJR8tSkrpF7aordPZQlW2DLtzUlZcumS8dMQjwDHEnw9I7ZLyiOj/6tZStRBGtGgN6ceN6cMH8z7etPGlw==" data-cf-beacon='{"rayId":"723db7d23feb7488","version":"2022.6.0","r":1,"token":"c5079c55f66a42488808b15d40db26bc","si":100}' crossorigin="anonymous"></script>
</body>
</html>