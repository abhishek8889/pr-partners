@extends('admin_layout.master')
@section('content')
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<link type="text/css" rel="stylesheet" href="resources/sheet.css">
<style type="text/css">
    .ritz .waffle a {
        color: inherit;
    }

    .ritz .waffle .s0 {
        background-color: #ffffff;
        text-align: left;
        text-decoration: underline;
        -webkit-text-decoration-skip: none;
        text-decoration-skip-ink: none;
        color: #1155cc;
        font-family: 'Arial';
        font-size: 11pt;
        vertical-align: bottom;
        white-space: nowrap;
        direction: ltr;
        padding: 2px 3px 2px 3px;
    }

    .ritz .waffle .s4 {
        background-color: #ffffff;
        text-align: left;
        text-decoration: underline;
        -webkit-text-decoration-skip: none;
        text-decoration-skip-ink: none;
        color: #1155cc;
        font-family: 'docs-Helvetica Neue', Arial;
        font-size: 11pt;
        vertical-align: bottom;
        white-space: nowrap;
        direction: ltr;
        padding: 2px 3px 2px 3px;
    }

    .ritz .waffle .s7 {
        background-color: #ffffff;
        text-align: left;
        font-weight: bold;
        color: #000000;
        font-family: 'Arial';
        font-size: 11pt;
        vertical-align: bottom;
        white-space: nowrap;
        direction: ltr;
        padding: 2px 3px 2px 3px;
    }

    .ritz .waffle .s1 {
        background-color: #ffffff;
        text-align: center;
        color: #000000;
        font-family: 'Arial';
        font-size: 11pt;
        vertical-align: bottom;
        white-space: nowrap;
        direction: ltr;
        padding: 2px 3px 2px 3px;
    }

    .ritz .waffle .s2 {
        background-color: #ffffff;
        text-align: center;
        font-weight: bold;
        color: #000000;
        font-family: 'Arial';
        font-size: 11pt;
        vertical-align: bottom;
        white-space: nowrap;
        direction: ltr;
        padding: 2px 3px 2px 3px;
    }

    .ritz .waffle .s3 {
        background-color: #ffffff;
        text-align: left;
        color: #000000;
        font-family: 'Arial';
        font-size: 11pt;
        vertical-align: bottom;
        white-space: nowrap;
        direction: ltr;
        padding: 2px 3px 2px 3px;
    }

    .ritz .waffle .s6 {
        background-color: #ffffff;
        text-align: center;
        font-weight: bold;
        color: #000000;
        font-family: 'Verdana';
        font-size: 10pt;
        vertical-align: bottom;
        white-space: nowrap;
        direction: ltr;
        padding: 2px 3px 2px 3px;
    }

    .ritz .waffle .s5 {
        background-color: #ffffff;
        text-align: left;
        color: #000000;
        font-family: 'Arial';
        font-size: 10pt;
        vertical-align: bottom;
        white-space: nowrap;
        direction: ltr;
        padding: 2px 3px 2px 3px;
    }
</style>
<div class="ritz grid-container" dir="ltr">
    <table class="waffle" cellspacing="0" cellpadding="0">
        <thead>
            <tr>
                <th class="row-header freezebar-origin-ltr"></th>
                <th id="0C0" style="width:131px;" class="column-headers-background">A</th>
                <th id="0C1" style="width:320px;" class="column-headers-background">B</th>
                <th id="0C2" style="width:100px;" class="column-headers-background">C</th>
                <th id="0C3" style="width:163px;" class="column-headers-background">D</th>
                <th id="0C4" style="width:141px;" class="column-headers-background">E</th>
                <th id="0C5" style="width:734px;" class="column-headers-background">F</th>
                <th id="0C6" style="width:218px;" class="column-headers-background">G</th>
                <th id="0C7" style="width:138px;" class="column-headers-background">H</th>
            </tr>
        </thead>
        <tbody>
            <tr style="height: 20px">
                <th id="0R0" style="height: 20px;" class="row-headers-background">
                    <div class="row-header-wrapper" style="line-height: 20px">1</div>
                </th>
                <td class="s0"></td>
                <td class="s0"><a target="_blank" href="https://www.entertainmentpaper.com/">Entertainment Paper</a>
                </td>
                <td class="s1">$150</td>
                <td class="s2">5</td>
                <td class="s3">1 Week</td>
                <td class="s3" dir="ltr">Entertainment / Movies &amp; TV / Lifestyle / Music / Business</td>
                <td class="s3" dir="ltr">Organic Placement</td>
                <td class="s3">Global</td>
            </tr>
            <tr style="height: 20px">
                <th id="0R1" style="height: 20px;" class="row-headers-background">
                    <div class="row-header-wrapper" style="line-height: 20px">2</div>
                </th>
                <td class="s0"></td>
                <td class="s0"><a target="_blank" href="https://www.allnewsbuzz.com/">All news Buzz </a></td>
                <td class="s1">$150</td>
                <td class="s2">14</td>
                <td class="s3">1 Week</td>
                <td class="s3" dir="ltr">News / Business / Entertainment / Sports / Tech / Health / Science</td>
                <td class="s3" dir="ltr">Organic Placement</td>
                <td class="s3">Global</td>
            </tr>
            <tr style="height: 20px">
                <th id="0R2" style="height: 20px;" class="row-headers-background">
                    <div class="row-header-wrapper" style="line-height: 20px">3</div>
                </th>
                <td class="s0"></td>
                <td class="s0"><a target="_blank" href="https://www.bigtimedaily.com/">Big Time Daily </a></td>
                <td class="s1">$150</td>
                <td class="s2" dir="ltr">55</td>
                <td class="s3">1 Week</td>
                <td class="s3" dir="ltr">News / Business / Entertainment / Sports / Tech / Health / Science / Lifestyle
                </td>
                <td class="s3" dir="ltr">Organic Placement</td>
                <td class="s3">Global</td>
            </tr>
            <tr style="height: 20px">
                <th id="0R3" style="height: 20px;" class="row-headers-background">
                    <div class="row-header-wrapper" style="line-height: 20px">4</div>
                </th>
                <td class="s4"></td>
                <td class="s4"><a target="_blank" href="https://www.openthenews.com/">Open The News</a></td>
                <td class="s1">$150</td>
                <td class="s2" dir="ltr">53</td>
                <td class="s3">1 Week</td>
                <td class="s3" dir="ltr">News / Business / Lifestyle / Sports / Magazine</td>
                <td class="s3" dir="ltr">Organic Placement</td>
                <td class="s3">Global</td>
            </tr>
            <tr style="height: 20px">
                <th id="0R4" style="height: 20px;" class="row-headers-background">
                    <div class="row-header-wrapper" style="line-height: 20px">5</div>
                </th>
                <td class="s0"></td>
                <td class="s0"><a target="_blank" href="https://maxedhiphop.com/">Maxed HipHop</a></td>
                <td class="s1">$150</td>
                <td class="s2">6</td>
                <td class="s3">1 Week</td>
                <td class="s3" dir="ltr">Music / Magazine / Lifestyle</td>
                <td class="s3" dir="ltr">Organic Placement</td>
                <td class="s3">Global</td>
            </tr>
            <tr style="height: 20px">
                <th id="0R5" style="height: 20px;" class="row-headers-background">
                    <div class="row-header-wrapper" style="line-height: 20px">6</div>
                </th>
                <td class="s0"></td>
                <td class="s0"><a target="_blank" href="https://provemagazine.com/">Prove</a></td>
                <td class="s1">$150</td>
                <td class="s2">8</td>
                <td class="s3">1 Week</td>
                <td class="s3" dir="ltr">Music / News / Entertainment </td>
                <td class="s3" dir="ltr">Organic Placement</td>
                <td class="s3">Global</td>
            </tr>
            <tr style="height: 20px">
                <th id="0R6" style="height: 20px;" class="row-headers-background">
                    <div class="row-header-wrapper" style="line-height: 20px">7</div>
                </th>
                <td class="s0"></td>
                <td class="s0"><a target="_blank" href="http://www.residentweekly.com/">Resident Weekly</a></td>
                <td class="s1">$150</td>
                <td class="s2" dir="ltr">63</td>
                <td class="s3">1 Week</td>
                <td class="s3" dir="ltr">News / Business / Tech / Health / Sports / Entertainment</td>
                <td class="s3" dir="ltr">Organic Placement</td>
                <td class="s3">Global</td>
            </tr>
            <tr style="height: 20px">
                <th id="0R7" style="height: 20px;" class="row-headers-background">
                    <div class="row-header-wrapper" style="line-height: 20px">8</div>
                </th>
                <td class="s0"></td>
                <td class="s0"><a target="_blank" href="http://www.statsglobe.com/">Stats Globe</a></td>
                <td class="s1">$150</td>
                <td class="s2" dir="ltr">64</td>
                <td class="s3">1 Week</td>
                <td class="s3" dir="ltr">News / Business / Lifestyle / Entertainment / Health / Sports / Tech</td>
                <td class="s3" dir="ltr">Organic Placement</td>
                <td class="s3">Global</td>
            </tr>
            <tr style="height: 20px">
                <th id="0R8" style="height: 20px;" class="row-headers-background">
                    <div class="row-header-wrapper" style="line-height: 20px">9</div>
                </th>
                <td class="s0"></td>
                <td class="s0"><a target="_blank" href="https://1stdayfresh.com/">1stDayFresh</a></td>
                <td class="s1">$150</td>
                <td class="s2">12</td>
                <td class="s3">1 Week</td>
                <td class="s3" dir="ltr">Music / News / Magazines </td>
                <td class="s3" dir="ltr">Organic Placement</td>
                <td class="s3">Global</td>
            </tr>
            <tr style="height: 20px">
                <th id="0R9" style="height: 20px;" class="row-headers-background">
                    <div class="row-header-wrapper" style="line-height: 20px">10</div>
                </th>
                <td class="s0"></td>
                <td class="s0"><a target="_blank" href="https://tricitydaily.com/">Tricity Daily </a></td>
                <td class="s1">$150</td>
                <td class="s2" dir="ltr">36</td>
                <td class="s3">1 Week</td>
                <td class="s3" dir="ltr">News / Business / Tech</td>
                <td class="s3" dir="ltr">Organic Placement</td>
                <td class="s3">Global</td>
            </tr>
            <tr style="height: 20px">
                <th id="0R10" style="height: 20px;" class="row-headers-background">
                    <div class="row-header-wrapper" style="line-height: 20px">11</div>
                </th>
                <td class="s0"></td>
                <td class="s0"><a target="_blank" href="http://businessdeccan.com/">Business Deccan </a></td>
                <td class="s1">$150</td>
                <td class="s2" dir="ltr">53</td>
                <td class="s3">1 Week</td>
                <td class="s3" dir="ltr">Business / Real Estate / Stock Market / Enterpreneurs / Economy / E-Commerce
                </td>
                <td class="s3" dir="ltr">Organic Placement</td>
                <td class="s3">Global</td>
            </tr>
            <tr style="height: 20px">
                <th id="0R11" style="height: 20px;" class="row-headers-background">
                    <div class="row-header-wrapper" style="line-height: 20px">12</div>
                </th>
                <td class="s0"></td>
                <td class="s0" dir="ltr"><a target="_blank" href="https://www.sportzweekly.com/">Sportsz Weekly</a></td>
                <td class="s1">$150</td>
                <td class="s2">14</td>
                <td class="s3">1 Week</td>
                <td class="s3" dir="ltr">Sports / Entertainment</td>
                <td class="s3" dir="ltr">Organic Placement</td>
                <td class="s3">Global</td>
            </tr>
            <tr style="height: 20px">
                <th id="0R12" style="height: 20px;" class="row-headers-background">
                    <div class="row-header-wrapper" style="line-height: 20px">13</div>
                </th>
                <td class="s0"></td>
                <td class="s0"><a target="_blank" href="http://www.technewsvision.com/">Tech News Vision</a></td>
                <td class="s1">$150</td>
                <td class="s2" dir="ltr">25</td>
                <td class="s3">1 Week</td>
                <td class="s3" dir="ltr">Tech / Science / Lifestyle / Entertainment / Sports</td>
                <td class="s3" dir="ltr">Organic Placement</td>
                <td class="s3">Global</td>
            </tr>
            <tr style="height: 20px">
                <th id="0R13" style="height: 20px;" class="row-headers-background">
                    <div class="row-header-wrapper" style="line-height: 20px">14</div>
                </th>
                <td class="s0"></td>
                <td class="s0"><a target="_blank" href="https://www.vernamagazine.com/">Verna Magazine</a></td>
                <td class="s1">$150</td>
                <td class="s2" dir="ltr">55</td>
                <td class="s3">1 Week</td>
                <td class="s3" dir="ltr">Entertainment / Fashion / Lifestyle / News / Magazine / Science</td>
                <td class="s3" dir="ltr">Organic Placement</td>
                <td class="s3">Global</td>
            </tr>
            <tr style="height: 20px">
                <th id="0R14" style="height: 20px;" class="row-headers-background">
                    <div class="row-header-wrapper" style="line-height: 20px">15</div>
                </th>
                <td class="s0"></td>
                <td class="s0"><a target="_blank" href="https://www.globestats.com/">Globe Stats</a></td>
                <td class="s1">$150</td>
                <td class="s2" dir="ltr">65</td>
                <td class="s3">1 Week</td>
                <td class="s3" dir="ltr">News / Sports / Health / Travel / Lifestyle / Entertainment / Business / Tech
                </td>
                <td class="s3" dir="ltr">Organic Placement</td>
                <td class="s3">Global</td>
            </tr>
            <tr style="height: 20px">
                <th id="0R15" style="height: 20px;" class="row-headers-background">
                    <div class="row-header-wrapper" style="line-height: 20px">16</div>
                </th>
                <td class="s0"></td>
                <td class="s0"><a target="_blank" href="http://instabulletin.com/">Insta Bulletin</a></td>
                <td class="s1">$150</td>
                <td class="s2" dir="ltr">51</td>
                <td class="s3">1 Week</td>
                <td class="s3" dir="ltr">News / Business / Health / Science / Tech</td>
                <td class="s3" dir="ltr">Organic Placement</td>
                <td class="s3">Global</td>
            </tr>
            <tr style="height: 20px">
                <th id="0R16" style="height: 20px;" class="row-headers-background">
                    <div class="row-header-wrapper" style="line-height: 20px">17</div>
                </th>
                <td class="s0"></td>
                <td class="s0"><a target="_blank" href="http://seekerstime.com/">Seekers Time</a></td>
                <td class="s1">$150</td>
                <td class="s2" dir="ltr">52</td>
                <td class="s3">1 Week</td>
                <td class="s3" dir="ltr">News / Business / Entertainment / Health / </td>
                <td class="s3" dir="ltr">Organic Placement</td>
                <td class="s3">Global</td>
            </tr>
            <tr style="height: 20px">
                <th id="0R17" style="height: 20px;" class="row-headers-background">
                    <div class="row-header-wrapper" style="line-height: 20px">18</div>
                </th>
                <td class="s0"></td>
                <td class="s0"><a target="_blank" href="https://24hip-hop.com/">24 Hip Hop</a></td>
                <td class="s1">$150</td>
                <td class="s2">27</td>
                <td class="s3">1 Week</td>
                <td class="s3" dir="ltr">Music / Sports </td>
                <td class="s3" dir="ltr">Organic Placement</td>
                <td class="s3">Global</td>
            </tr>
            <tr style="height: 20px">
                <th id="0R18" style="height: 20px;" class="row-headers-background">
                    <div class="row-header-wrapper" style="line-height: 20px">19</div>
                </th>
                <td class="s0"></td>
                <td class="s0"><a target="_blank" href="https://the-wrap-up-magazine.business.site/">TheWrapUp
                        Magazine</a></td>
                <td class="s1">$150</td>
                <td class="s2">27</td>
                <td class="s3">1 Week</td>
                <td class="s3" dir="ltr">Music / Magazine</td>
                <td class="s3" dir="ltr">Organic Placement</td>
                <td class="s3">Global</td>
            </tr>
            <tr style="height: 20px">
                <th id="0R19" style="height: 20px;" class="row-headers-background">
                    <div class="row-header-wrapper" style="line-height: 20px">20</div>
                </th>
                <td class="s0"></td>
                <td class="s0"><a target="_blank" href="http://oneworldherald.com/">One World Herald</a></td>
                <td class="s1">$150</td>
                <td class="s2" dir="ltr">53</td>
                <td class="s3">1 Week</td>
                <td class="s3" dir="ltr">News / Business / Entertainment / Health / Science / Tech / Lifestyle </td>
                <td class="s3" dir="ltr">Organic Placement</td>
                <td class="s3">Global</td>
            </tr>
            <tr style="height: 20px">
                <th id="0R20" style="height: 20px;" class="row-headers-background">
                    <div class="row-header-wrapper" style="line-height: 20px">21</div>
                </th>
                <td class="s4"></td>
                <td class="s4"><a target="_blank" href="https://rebuttalmagazine.com/">Rebuttal Mag</a></td>
                <td class="s1">$150</td>
                <td class="s2">48</td>
                <td class="s3">1 Week</td>
                <td class="s3" dir="ltr">Music / Entertainment / Business </td>
                <td class="s3" dir="ltr">Organic Placement</td>
                <td class="s3">Global</td>
            </tr>
            <tr style="height: 20px">
                <th id="0R21" style="height: 20px;" class="row-headers-background">
                    <div class="row-header-wrapper" style="line-height: 20px">22</div>
                </th>
                <td class="s0"></td>
                <td class="s0"><a target="_blank" href="https://kazimagazine.com/">Kazi Magazine</a></td>
                <td class="s1">$150</td>
                <td class="s2">52</td>
                <td class="s3">1 Week</td>
                <td class="s3" dir="ltr">Music</td>
                <td class="s3" dir="ltr">Organic Placement</td>
                <td class="s3">Global</td>
            </tr>
            <tr style="height: 20px">
                <th id="0R22" style="height: 20px;" class="row-headers-background">
                    <div class="row-header-wrapper" style="line-height: 20px">23</div>
                </th>
                <td class="s0"></td>
                <td class="s0"><a target="_blank" href="https://www.influencive.com/">Influencive </a></td>
                <td class="s1">$150</td>
                <td class="s2">53</td>
                <td class="s3">2 Weeks</td>
                <td class="s3" dir="ltr">Business / Crypto / Tech</td>
                <td class="s3" dir="ltr">Organic Placement</td>
                <td class="s3">Global</td>
            </tr>
            <tr style="height: 20px">
                <th id="0R23" style="height: 20px;" class="row-headers-background">
                    <div class="row-header-wrapper" style="line-height: 20px">24</div>
                </th>
                <td class="s4"></td>
                <td class="s4"><a target="_blank" href="https://theinscribermag.com/">Inscriber Mag </a></td>
                <td class="s1">$150</td>
                <td class="s2">54</td>
                <td class="s3">1 Week</td>
                <td class="s3" dir="ltr">News / Sports / Entertainment / Lifestyle / Tech</td>
                <td class="s3" dir="ltr">Organic Placement</td>
                <td class="s3">Global</td>
            </tr>
            <tr style="height: 20px">
                <th id="0R24" style="height: 20px;" class="row-headers-background">
                    <div class="row-header-wrapper" style="line-height: 20px">25</div>
                </th>
                <td class="s0"></td>
                <td class="s0"><a target="_blank" href="https://www.netnewsledger.com/">Net News Ledger</a></td>
                <td class="s1">$150</td>
                <td class="s2">55</td>
                <td class="s3">1 Week</td>
                <td class="s3" dir="ltr">News / Sports / Business</td>
                <td class="s3" dir="ltr">Organic Placement</td>
                <td class="s3">Global</td>
            </tr>
            <tr style="height: 20px">
                <th id="0R25" style="height: 20px;" class="row-headers-background">
                    <div class="row-header-wrapper" style="line-height: 20px">26</div>
                </th>
                <td class="s0"></td>
                <td class="s0"><a target="_blank" href="https://ventsmagazine.com/">Vents Mag</a></td>
                <td class="s1">$150</td>
                <td class="s2" dir="ltr">63</td>
                <td class="s3">1 Week</td>
                <td class="s3" dir="ltr">Entertainment / Music </td>
                <td class="s3" dir="ltr">Organic Placement</td>
                <td class="s3">Global</td>
            </tr>
            <tr style="height: 20px">
                <th id="0R26" style="height: 20px;" class="row-headers-background">
                    <div class="row-header-wrapper" style="line-height: 20px">27</div>
                </th>
                <td class="s0"></td>
                <td class="s0"><a target="_blank" href="https://theinternetstories.com/">The Internet Stories</a></td>
                <td class="s1">$150</td>
                <td class="s2">56</td>
                <td class="s3">1 Week</td>
                <td class="s3" dir="ltr">Tech / Science / Business / Health</td>
                <td class="s3" dir="ltr">Organic Placement</td>
                <td class="s3">Global</td>
            </tr>
            <tr style="height: 20px">
                <th id="0R27" style="height: 20px;" class="row-headers-background">
                    <div class="row-header-wrapper" style="line-height: 20px">28</div>
                </th>
                <td class="s0"></td>
                <td class="s0"><a target="_blank" href="https://theinternetthings.com/">The Internet Things</a></td>
                <td class="s1">$150</td>
                <td class="s2">56</td>
                <td class="s3">1 Week</td>
                <td class="s3" dir="ltr">Tech / Business / Health / Science </td>
                <td class="s3" dir="ltr">Organic Placement</td>
                <td class="s3">Global</td>
            </tr>
            <tr style="height: 20px">
                <th id="0R28" style="height: 20px;" class="row-headers-background">
                    <div class="row-header-wrapper" style="line-height: 20px">29</div>
                </th>
                <td class="s0"></td>
                <td class="s0"><a target="_blank" href="https://hiphopsince1987.com/">Hip Hop Since 1987</a></td>
                <td class="s1">$150</td>
                <td class="s2">61</td>
                <td class="s3">1 Week</td>
                <td class="s3" dir="ltr">Music / News </td>
                <td class="s3" dir="ltr">Organic Placement</td>
                <td class="s3">Global</td>
            </tr>
            <tr style="height: 20px">
                <th id="0R29" style="height: 20px;" class="row-headers-background">
                    <div class="row-header-wrapper" style="line-height: 20px">30</div>
                </th>
                <td class="s0"></td>
                <td class="s0"><a target="_blank" href="https://techbullion.com/">Tech Bullion</a></td>
                <td class="s1">$150</td>
                <td class="s2">62</td>
                <td class="s3">1 Week</td>
                <td class="s3" dir="ltr">News / Tech</td>
                <td class="s3" dir="ltr">Organic Placement</td>
                <td class="s3">Global</td>
            </tr>
            <tr style="height: 20px">
                <th id="0R30" style="height: 20px;" class="row-headers-background">
                    <div class="row-header-wrapper" style="line-height: 20px">31</div>
                </th>
                <td class="s0"></td>
                <td class="s0"><a target="_blank" href="https://www.fabworldtoday.com/">Fab World Today</a></td>
                <td class="s1">$150</td>
                <td class="s2" dir="ltr">50</td>
                <td class="s3">1 Week</td>
                <td class="s3" dir="ltr">News / Business / Entertainment / Movie &amp; TV / Sports / Tech / Health / Science / Lifestyle / Travel / Fashion</td>
                <td class="s3" dir="ltr">Organic Placement</td>
                <td class="s3" dir="ltr">Global</td>
            </tr>
            <tr style="height: 20px">
                <th id="0R31" style="height: 20px;" class="row-headers-background">
                    <div class="row-header-wrapper" style="line-height: 20px">32</div>
                </th>
                <td class="s0"></td>
                <td class="s0"><a target="_blank" href="https://www.broadcastcover.com/">Broad Cast Cover</a></td>
                <td class="s1">$150</td>
                <td class="s2" dir="ltr">21</td>
                <td class="s3">1 Week</td>
                <td class="s3" dir="ltr">News / Business / Entertainment / Sports / Tech / Health / Lifestyle</td>
                <td class="s3" dir="ltr">Organic Placement</td>
                <td class="s3" dir="ltr">Global</td>
            </tr>
            <tr style="height: 20px">
                <th id="0R32" style="height: 20px;" class="row-headers-background">
                    <div class="row-header-wrapper" style="line-height: 20px">33</div>
                </th>
                <td class="s0"></td>
                <td class="s0"><a target="_blank" href="https://www.coveragelog.com/">Coverage Log</a></td>
                <td class="s1">$150</td>
                <td class="s2" dir="ltr">59</td>
                <td class="s3">1 Week</td>
                <td class="s3" dir="ltr">News / Business / Health / Music / Fashion</td>
                <td class="s3" dir="ltr">Organic Placement</td>
                <td class="s3" dir="ltr">Global</td>
            </tr>
            <tr style="height: 20px">
                <th id="0R33" style="height: 20px;" class="row-headers-background">
                    <div class="row-header-wrapper" style="line-height: 20px">34</div>
                </th>
                <td class="s0"></td>
                <td class="s0"><a target="_blank" href="https://www.datasourcehub.com/">Data Source Hub</a></td>
                <td class="s1">$150</td>
                <td class="s2">11</td>
                <td class="s3">1 Week</td>
                <td class="s3" dir="ltr">Business / Lifestyle / Travel</td>
                <td class="s3" dir="ltr">Organic Placement</td>
                <td class="s3" dir="ltr">Global</td>
            </tr>
            <tr style="height: 20px">
                <th id="0R34" style="height: 20px;" class="row-headers-background">
                    <div class="row-header-wrapper" style="line-height: 20px">35</div>
                </th>
                <td class="s0"></td>
                <td class="s0"><a target="_blank" href="https://www.genzhiphop.com/">Gen Z Hiphop</a></td>
                <td class="s1">$150</td>
                <td class="s2">15</td>
                <td class="s3">1 Week</td>
                <td class="s3" dir="ltr">Music / Fashion / Lifestyle</td>
                <td class="s3" dir="ltr">Organic Placement</td>
                <td class="s3" dir="ltr">Global</td>
            </tr>
            <tr style="height: 20px">
                <th id="0R35" style="height: 20px;" class="row-headers-background">
                    <div class="row-header-wrapper" style="line-height: 20px">36</div>
                </th>
                <td class="s0"></td>
                <td class="s0"><a target="_blank" href="https://giztechmedia.com/">Giz Tech Media </a></td>
                <td class="s1">$150</td>
                <td class="s2">59</td>
                <td class="s3">1 Week</td>
                <td class="s3" dir="ltr">Tech / Business / Science / Health</td>
                <td class="s3" dir="ltr">Organic Placement</td>
                <td class="s3" dir="ltr">Global</td>
            </tr>
            <tr style="height: 20px">
                <th id="0R36" style="height: 20px;" class="row-headers-background">
                    <div class="row-header-wrapper" style="line-height: 20px">37</div>
                </th>
                <td class="s0"></td>
                <td class="s0"><a target="_blank" href="https://calipost.com/">Cali Post</a></td>
                <td class="s1">$150</td>
                <td class="s2" dir="ltr">57</td>
                <td class="s3">1 Week</td>
                <td class="s3" dir="ltr">Music / Entertainment / Business / Lifestyle</td>
                <td class="s3" dir="ltr">Organic Placement</td>
                <td class="s3" dir="ltr">Global</td>
            </tr>
            <tr style="height: 20px">
                <th id="0R37" style="height: 20px;" class="row-headers-background">
                    <div class="row-header-wrapper" style="line-height: 20px">38</div>
                </th>
                <td class="s0"></td>
                <td class="s0" dir="ltr"><a target="_blank" href="https://www.cinetalkers.com/">Cinetalkers</a></td>
                <td class="s1">$150</td>
                <td class="s2">46</td>
                <td class="s3">1 Week</td>
                <td class="s3" dir="ltr">Movies &amp; TV / Lifestyle</td>
                <td class="s3" dir="ltr">Organic Placement</td>
                <td class="s3">India</td>
            </tr>
            <tr style="height: 20px">
                <th id="0R38" style="height: 20px;" class="row-headers-background">
                    <div class="row-header-wrapper" style="line-height: 20px">39</div>
                </th>
                <td class="s0"></td>
                <td class="s0"><a target="_blank" href="https://www.apnnews.com/">APNNews </a></td>
                <td class="s1">$150</td>
                <td class="s2" dir="ltr">53</td>
                <td class="s3">1 Week</td>
                <td class="s3" dir="ltr">News / Business / Entertainment / Sports / Tech / Health </td>
                <td class="s3" dir="ltr">Organic Placement</td>
                <td class="s3">India</td>
            </tr>
            <tr style="height: 20px">
                <th id="0R39" style="height: 20px;" class="row-headers-background">
                    <div class="row-header-wrapper" style="line-height: 20px">40</div>
                </th>
                <td class="s0"></td>
                <td class="s0"><a target="_blank" href="http://northindiadaily.com/">North India Daily </a></td>
                <td class="s1">$150</td>
                <td class="s2" dir="ltr">30</td>
                <td class="s3">1 Week</td>
                <td class="s3" dir="ltr">News / Business / Health / Entertainment / Science / Tech / Sports </td>
                <td class="s3" dir="ltr">Organic Placement</td>
                <td class="s3" dir="ltr">India</td>
            </tr>
            <tr style="height: 20px">
                <th id="0R40" style="height: 20px;" class="row-headers-background">
                    <div class="row-header-wrapper" style="line-height: 20px">41</div>
                </th>
                <td class="s0"></td>
                <td class="s0"><a target="_blank" href="https://nagpuroranges.com/#gsc.tab=0">Nagpur Oranges</a></td>
                <td class="s1">$150</td>
                <td class="s2" dir="ltr">60</td>
                <td class="s3">1 Week</td>
                <td class="s3" dir="ltr">News / Entertainment / Business / Sports / Tech / Lifestyle / Fashion / Health </td>
                <td class="s3" dir="ltr">Organic Placement</td>
                <td class="s3">India</td>
            </tr>
            <tr style="height: 20px">
                <th id="0R41" style="height: 20px;" class="row-headers-background">
                    <div class="row-header-wrapper" style="line-height: 20px">42</div>
                </th>
                <td class="s0"></td>
                <td class="s0"><a target="_blank" href="https://theprimetime.in/">ThePrimeTime </a></td>
                <td class="s1">$150</td>
                <td class="s2" dir="ltr">28</td>
                <td class="s3">1 Week</td>
                <td class="s3" dir="ltr">News / Health / Travel / Sports / Film News</td>
                <td class="s3" dir="ltr">Organic Placement</td>
                <td class="s3">India</td>
            </tr>
            <tr style="height: 20px">
                <th id="0R42" style="height: 20px;" class="row-headers-background">
                    <div class="row-header-wrapper" style="line-height: 20px">43</div>
                </th>
                <td class="s0"></td>
                <td class="s0"><a target="_blank" href="https://newstrack.com/">Newstrack</a></td>
                <td class="s1">$150</td>
                <td class="s2">34</td>
                <td class="s3">1 Week</td>
                <td class="s3" dir="ltr">News / Entertainment / Sports / Lifestyle</td>
                <td class="s3" dir="ltr">Organic Placement</td>
                <td class="s3">India</td>
            </tr>
            <tr style="height: 20px">
                <th id="0R43" style="height: 20px;" class="row-headers-background">
                    <div class="row-header-wrapper" style="line-height: 20px">44</div>
                </th>
                <td class="s0"></td>
                <td class="s0"><a target="_blank" href="https://newslivetv.com/live_tv/">NewsLiveTV</a></td>
                <td class="s1">$150</td>
                <td class="s2" dir="ltr">41</td>
                <td class="s3">1 Week</td>
                <td class="s3" dir="ltr">News / Business / Sports / Entertainment / Lifestyle / Music / Health / Tech
                </td>
                <td class="s3" dir="ltr">Organic Placement</td>
                <td class="s3">India</td>
            </tr>
            <tr style="height: 20px">
                <th id="0R44" style="height: 20px;" class="row-headers-background">
                    <div class="row-header-wrapper" style="line-height: 20px">45</div>
                </th>
                <td class="s0"></td>
                <td class="s0"><a target="_blank" href="https://www.inventiva.co.in/">Inventiva </a></td>
                <td class="s1">$150</td>
                <td class="s2" dir="ltr">64</td>
                <td class="s3">1 Week</td>
                <td class="s3" dir="ltr">Business / News</td>
                <td class="s3" dir="ltr">Organic Placement</td>
                <td class="s3">India</td>
            </tr>
            <tr style="height: 20px">
                <th id="0R45" style="height: 20px;" class="row-headers-background">
                    <div class="row-header-wrapper" style="line-height: 20px">46</div>
                </th>
                <td class="s0"></td>
                <td class="s0"><a target="_blank" href="https://www.newsheads.in/">Newsheads</a></td>
                <td class="s1">$150</td>
                <td class="s2">44</td>
                <td class="s3">1 Week</td>
                <td class="s3" dir="ltr">News / Sports / Entertainment / Business / Lifestyle / Tech / Science</td>
                <td class="s3" dir="ltr">Organic Placement</td>
                <td class="s3">India</td>
            </tr>
            <tr style="height: 20px">
                <th id="0R46" style="height: 20px;" class="row-headers-background">
                    <div class="row-header-wrapper" style="line-height: 20px">47</div>
                </th>
                <td class="s0"></td>
                <td class="s0"><a target="_blank" href="https://theubj.com/">TheUBJ</a></td>
                <td class="s1">$150</td>
                <td class="s2">63</td>
                <td class="s3">1 Week</td>
                <td class="s3" dir="ltr">News / Business / Sports </td>
                <td class="s3" dir="ltr">Organic Placement</td>
                <td class="s3">India</td>
            </tr>
            <tr style="height: 20px">
                <th id="0R47" style="height: 20px;" class="row-headers-background">
                    <div class="row-header-wrapper" style="line-height: 20px">48</div>
                </th>
                <td class="s0"></td>
                <td class="s0"><a target="_blank" href="http://www.uniindia.com/">UNI India </a></td>
                <td class="s1">$150</td>
                <td class="s2">64</td>
                <td class="s3">1 Week</td>
                <td class="s3" dir="ltr">News / Business / Sports / Entertainment</td>
                <td class="s3" dir="ltr">Organic Placement</td>
                <td class="s3">India</td>
            </tr>
            <tr style="height: 20px">
                <th id="0R48" style="height: 20px;" class="row-headers-background">
                    <div class="row-header-wrapper" style="line-height: 20px">49</div>
                </th>
                <td class="s0"></td>
                <td class="s0"><a target="_blank" href="https://www.dailypioneer.com/">The Pioneer</a></td>
                <td class="s1">$150</td>
                <td class="s2">80</td>
                <td class="s3">1 Week</td>
                <td class="s3" dir="ltr">News / Business / Sports </td>
                <td class="s3" dir="ltr">Organic Placement</td>
                <td class="s3">India</td>
            </tr>
            <tr style="height: 20px">
                <th id="0R49" style="height: 20px;" class="row-headers-background">
                    <div class="row-header-wrapper" style="line-height: 20px">50</div>
                </th>
                <td class="s0"></td>
                <td class="s0"><a target="_blank" href="https://nationaldailyng.com/">National Daily</a></td>
                <td class="s1">$150</td>
                <td class="s2">39</td>
                <td class="s3">1 Week</td>
                <td class="s3" dir="ltr">News / Business / Sports </td>
                <td class="s3" dir="ltr">Organic Placement</td>
                <td class="s3">Nigeria</td>
            </tr>
            <tr style="height: 20px">
                <th id="0R50" style="height: 20px;" class="row-headers-background">
                    <div class="row-header-wrapper" style="line-height: 20px">51</div>
                </th>
                <td class="s0"></td>
                <td class="s0"><a target="_blank" href="https://dailytrust.com/">Daily Trust</a></td>
                <td class="s1">$150</td>
                <td class="s2">59</td>
                <td class="s3">1 Week</td>
                <td class="s3" dir="ltr">News / Business / Entertainment / Sports</td>
                <td class="s3" dir="ltr">Organic Placement</td>
                <td class="s3">Nigeria</td>
            </tr>
            <tr style="height: 20px">
                <th id="0R51" style="height: 20px;" class="row-headers-background">
                    <div class="row-header-wrapper" style="line-height: 20px">52</div>
                </th>
                <td class="s0"></td>
                <td class="s0"><a target="_blank" href="https://www.newtelegraphng.com/">New Telegraph</a></td>
                <td class="s1">$150</td>
                <td class="s2">60</td>
                <td class="s3">1 Week</td>
                <td class="s3" dir="ltr">News / Business / Sports / Magazine</td>
                <td class="s3" dir="ltr">Organic Placement</td>
                <td class="s3">Nigeria</td>
            </tr>
            <tr style="height: 20px">
                <th id="0R52" style="height: 20px;" class="row-headers-background">
                    <div class="row-header-wrapper" style="line-height: 20px">53</div>
                </th>
                <td class="s0"></td>
                <td class="s0"><a target="_blank" href="https://leadership.ng/">Leadership</a></td>
                <td class="s1">$150</td>
                <td class="s2">73</td>
                <td class="s3">1 Week</td>
                <td class="s3" dir="ltr">News / Business / Sports / Health / Entertainment</td>
                <td class="s3" dir="ltr">Organic Placement</td>
                <td class="s3">Nigeria</td>
            </tr>
            <tr style="height: 20px">
                <th id="0R53" style="height: 20px;" class="row-headers-background">
                    <div class="row-header-wrapper" style="line-height: 20px">54</div>
                </th>
                <td class="s0"></td>
                <td class="s0"><a target="_blank" href="https://www.sunnewsonline.com/">The Sun</a></td>
                <td class="s1">$150</td>
                <td class="s2">78</td>
                <td class="s3">1 Week</td>
                <td class="s3" dir="ltr">News / Business / Entertainment / TV</td>
                <td class="s3" dir="ltr">Organic Placement</td>
                <td class="s3">Nigeria</td>
            </tr>
            <tr style="height: 20px">
                <th id="0R54" style="height: 20px;" class="row-headers-background">
                    <div class="row-header-wrapper" style="line-height: 20px">55</div>
                </th>
                <td class="s0"></td>
                <td class="s0"><a target="_blank" href="https://thenationonlineng.net/">The Nation</a></td>
                <td class="s1">$150</td>
                <td class="s2">83</td>
                <td class="s3">1 Week</td>
                <td class="s3" dir="ltr">News / News / Entertainment / Business / Sports</td>
                <td class="s3" dir="ltr">Organic Placement</td>
                <td class="s3">Nigeria</td>
            </tr>
            <tr style="height: 20px">
                <th id="0R55" style="height: 20px;" class="row-headers-background">
                    <div class="row-header-wrapper" style="line-height: 20px">56</div>
                </th>
                <td class="s0"></td>
                <td class="s0"><a target="_blank" href="https://www.thisdaylive.com/">This Day</a></td>
                <td class="s1">$150</td>
                <td class="s2">83</td>
                <td class="s3">1 Week</td>
                <td class="s3" dir="ltr">News / Business / Health / Lifestyle / Sports </td>
                <td class="s3" dir="ltr">Organic Placement</td>
                <td class="s3">Nigeria</td>
            </tr>
            <tr style="height: 20px">
                <th id="0R56" style="height: 20px;" class="row-headers-background">
                    <div class="row-header-wrapper" style="line-height: 20px">57</div>
                </th>
                <td class="s0"></td>
                <td class="s0"><a target="_blank" href="https://www.vanguardngr.com/">Vanguard</a></td>
                <td class="s1">$150</td>
                <td class="s2">86</td>
                <td class="s3">1 Week</td>
                <td class="s3" dir="ltr">News / Business / Sports </td>
                <td class="s3" dir="ltr">Organic Placement</td>
                <td class="s3">Nigeria</td>
            </tr>
            <tr style="height: 20px">
                <th id="0R57" style="height: 20px;" class="row-headers-background">
                    <div class="row-header-wrapper" style="line-height: 20px">58</div>
                </th>
                <td class="s4"></td>
                <td class="s4"><a target="_blank" href="https://www.americadailypost.com/">America Daily Post </a></td>
                <td class="s1">$150</td>
                <td class="s2">23</td>
                <td class="s3">1 Week</td>
                <td class="s3" dir="ltr">News / Business / Entertainment / Sports / Tech / Health / Science / Lifestyle
                </td>
                <td class="s3" dir="ltr">Organic Placement</td>
                <td class="s3">US</td>
            </tr>
            <tr style="height: 20px">
                <th id="0R58" style="height: 20px;" class="row-headers-background">
                    <div class="row-header-wrapper" style="line-height: 20px">59</div>
                </th>
                <td class="s0"></td>
                <td class="s0"><a target="_blank" href="http://www.ustimesnow.com/">USTimes Now</a></td>
                <td class="s1">$150</td>
                <td class="s2" dir="ltr">49</td>
                <td class="s3">1 Week</td>
                <td class="s3" dir="ltr">Entertainment / Health / Lifestyle / Sports / Science / Tech / Magazine </td>
                <td class="s3" dir="ltr">Organic Placement</td>
                <td class="s3">US</td>
            </tr>
            <tr style="height: 20px">
                <th id="0R59" style="height: 20px;" class="row-headers-background">
                    <div class="row-header-wrapper" style="line-height: 20px">60</div>
                </th>
                <td class="s0"></td>
                <td class="s0"><a target="_blank" href="https://www.theamericanreporter.com/">The American Reporter </a>
                </td>
                <td class="s1">$150</td>
                <td class="s2" dir="ltr">56</td>
                <td class="s3">1 Week</td>
                <td class="s3" dir="ltr">News / Science / Business / Health / Lifestyle / Entertainment / Sports / Tech
                </td>
                <td class="s3" dir="ltr">Organic Placement</td>
                <td class="s3">US</td>
            </tr>
            <tr style="height: 20px">
                <th id="0R60" style="height: 20px;" class="row-headers-background">
                    <div class="row-header-wrapper" style="line-height: 20px">61</div>
                </th>
                <td class="s0"></td>
                <td class="s0"><a target="_blank" href="https://www.thechicagoweeklynews.com/">Chicago Weekly News</a>
                </td>
                <td class="s1">$150</td>
                <td class="s2">55</td>
                <td class="s3">1 Week</td>
                <td class="s3" dir="ltr">News / Business</td>
                <td class="s3" dir="ltr">Organic Placement</td>
                <td class="s3">US</td>
            </tr>
            <tr style="height: 20px">
                <th id="0R61" style="height: 20px;" class="row-headers-background">
                    <div class="row-header-wrapper" style="line-height: 20px">62</div>
                </th>
                <td class="s0"></td>
                <td class="s0"><a target="_blank" href="https://thenewyorkguardian.com/">The New York Guardian </a></td>
                <td class="s1">$150</td>
                <td class="s2">9</td>
                <td class="s3">1 Week</td>
                <td class="s3" dir="ltr">News / Business / Entertainment</td>
                <td class="s3" dir="ltr">Organic Placement</td>
                <td class="s3">US</td>
            </tr>
            <tr style="height: 20px">
                <th id="0R62" style="height: 20px;" class="row-headers-background">
                    <div class="row-header-wrapper" style="line-height: 20px">63</div>
                </th>
                <td class="s0"></td>
                <td class="s0"><a target="_blank" href="https://hoodcriticmagazine.com/">Hood Critic</a></td>
                <td class="s1">$160</td>
                <td class="s2">10</td>
                <td class="s3">1 Week</td>
                <td class="s3" dir="ltr">Music / Magazine</td>
                <td class="s3" dir="ltr">Organic Placement</td>
                <td class="s3">Global</td>
            </tr>
            <tr style="height: 20px">
                <th id="0R63" style="height: 20px;" class="row-headers-background">
                    <div class="row-header-wrapper" style="line-height: 20px">64</div>
                </th>
                <td class="s0"></td>
                <td class="s0"><a target="_blank" href="https://disruptmagazine.com/">Disrupt Magazine </a></td>
                <td class="s1">$160</td>
                <td class="s2" dir="ltr">40</td>
                <td class="s3">1 Week</td>
                <td class="s3" dir="ltr"> Lifestyle / Business / Health / Music / Entertainment / Real State  </td>
                <td class="s3" dir="ltr">Organic Placement</td>
                <td class="s3">Global</td>
            </tr>
            <tr style="height: 20px">
                <th id="0R64" style="height: 20px;" class="row-headers-background">
                    <div class="row-header-wrapper" style="line-height: 20px">65</div>
                </th>
                <td class="s0"></td>
                <td class="s0"><a target="_blank" href="https://www.selfgrowth.com/">Self Growth</a></td>
                <td class="s1">$160</td>
                <td class="s2">60</td>
                <td class="s3">1 Week</td>
                <td class="s3" dir="ltr">Health</td>
                <td class="s3" dir="ltr">Organic Placement</td>
                <td class="s3">Global</td>
            </tr>
            <tr style="height: 20px">
                <th id="0R65" style="height: 20px;" class="row-headers-background">
                    <div class="row-header-wrapper" style="line-height: 20px">66</div>
                </th>
                <td class="s0"></td>
                <td class="s0"><a target="_blank" href="https://ventsmagazine.com/">Vents Magazine</a></td>
                <td class="s1">$160</td>
                <td class="s2">63</td>
                <td class="s3">1 Week</td>
                <td class="s3" dir="ltr"> Lifestyle / Music / Entertainment </td>
                <td class="s3" dir="ltr">Organic Placement</td>
                <td class="s3">Global</td>
            </tr>
            <tr style="height: 20px">
                <th id="0R66" style="height: 20px;" class="row-headers-background">
                    <div class="row-header-wrapper" style="line-height: 20px">67</div>
                </th>
                <td class="s0"></td>
                <td class="s0"><a target="_blank" href="https://filmdaily.co/">Film Daily</a></td>
                <td class="s1">$160</td>
                <td class="s2">64</td>
                <td class="s3">1 Week</td>
                <td class="s3" dir="ltr"> Lifestyle / News / Movies &amp; TV </td>
                <td class="s3" dir="ltr">Organic Placement</td>
                <td class="s3">Global</td>
            </tr>
            <tr style="height: 20px">
                <th id="0R67" style="height: 20px;" class="row-headers-background">
                    <div class="row-header-wrapper" style="line-height: 20px">68</div>
                </th>
                <td class="s2" dir="ltr"></td>
                <td class="s0"><a target="_blank" href="https://medium.com/">Medium </a></td>
                <td class="s1">$160</td>
                <td class="s2">95</td>
                <td class="s3">1 Week</td>
                <td class="s3" dir="ltr">New</td>
                <td class="s3" dir="ltr">Organic Placement</td>
                <td class="s3">Global</td>
            </tr>
            <tr style="height: 20px">
                <th id="0R68" style="height: 20px;" class="row-headers-background">
                    <div class="row-header-wrapper" style="line-height: 20px">69</div>
                </th>
                <td class="s0"></td>
                <td class="s0"><a target="_blank" href="https://www.unorthodoxreviews.com/?u=1">Unothrodox Reviews</a>
                </td>
                <td class="s1">$160</td>
                <td class="s2">26</td>
                <td class="s3">1 Week</td>
                <td class="s3" dir="ltr">Music / News / </td>
                <td class="s3" dir="ltr">Organic Placement</td>
                <td class="s3">West Africa</td>
            </tr>
            <tr style="height: 20px">
                <th id="0R69" style="height: 20px;" class="row-headers-background">
                    <div class="row-header-wrapper" style="line-height: 20px">70</div>
                </th>
                <td class="s0"></td>
                <td class="s0"><a target="_blank" href="https://londondailypost.com/">London Daily Post </a></td>
                <td class="s1">$162</td>
                <td class="s2" dir="ltr">54</td>
                <td class="s3">1 Week</td>
                <td class="s3" dir="ltr">News / Health / Business / Science / Tech / Entertainment / Lifestyle / Travel
                </td>
                <td class="s3" dir="ltr">Organic Placement</td>
                <td class="s3">UK</td>
            </tr>
            <tr style="height: 20px">
                <th id="0R70" style="height: 20px;" class="row-headers-background">
                    <div class="row-header-wrapper" style="line-height: 20px">71</div>
                </th>
                <td class="s0"></td>
                <td class="s0"><a target="_blank" href="https://www.thespectatoronline.com/">Spectator Online</a></td>
                <td class="s1">$180</td>
                <td class="s2">13</td>
                <td class="s3">1 Week</td>
                <td class="s3" dir="ltr">News / Entertainment</td>
                <td class="s3" dir="ltr">Organic Placement</td>
                <td class="s3">Ghana</td>
            </tr>
            <tr style="height: 20px">
                <th id="0R71" style="height: 20px;" class="row-headers-background">
                    <div class="row-header-wrapper" style="line-height: 20px">72</div>
                </th>
                <td class="s0"></td>
                <td class="s0"><a target="_blank" href="http://businessdayghana.com/">Businessday Ghana</a></td>
                <td class="s1">$180</td>
                <td class="s2">36</td>
                <td class="s3">1 Week</td>
                <td class="s3" dir="ltr">Business / News / Tech</td>
                <td class="s3" dir="ltr">Organic Placement</td>
                <td class="s3">Ghana</td>
            </tr>
            <tr style="height: 20px">
                <th id="0R72" style="height: 20px;" class="row-headers-background">
                    <div class="row-header-wrapper" style="line-height: 20px">73</div>
                </th>
                <td class="s0"></td>
                <td class="s0"><a target="_blank" href="https://starrfm.com.gh/">Star Fm Online</a></td>
                <td class="s1">$180</td>
                <td class="s2">38</td>
                <td class="s3">1 Week</td>
                <td class="s3" dir="ltr">News / Business / Entertainment / Tech / Sports </td>
                <td class="s3" dir="ltr">Organic Placement</td>
                <td class="s3">Ghana</td>
            </tr>
            <tr style="height: 20px">
                <th id="0R73" style="height: 20px;" class="row-headers-background">
                    <div class="row-header-wrapper" style="line-height: 20px">74</div>
                </th>
                <td class="s0"></td>
                <td class="s0"><a target="_blank" href="https://www.ghanaiantimes.com.gh/">Ghanaian Times</a></td>
                <td class="s1">$180</td>
                <td class="s2">51</td>
                <td class="s3">1 Week</td>
                <td class="s3" dir="ltr">News / Business / Sports / Lifestyle </td>
                <td class="s3" dir="ltr">Organic Placement</td>
                <td class="s3">Ghana</td>
            </tr>
            <tr style="height: 20px">
                <th id="0R74" style="height: 20px;" class="row-headers-background">
                    <div class="row-header-wrapper" style="line-height: 20px">75</div>
                </th>
                <td class="s0"></td>
                <td class="s0"><a target="_blank" href="https://peacefmonline.com/">Peace Fm Online</a></td>
                <td class="s1">$180</td>
                <td class="s2">74</td>
                <td class="s3">1 Week</td>
                <td class="s3" dir="ltr">News / Sports / Business</td>
                <td class="s3" dir="ltr">Organic Placement</td>
                <td class="s3">Ghana</td>
            </tr>
            <tr style="height: 20px">
                <th id="0R75" style="height: 20px;" class="row-headers-background">
                    <div class="row-header-wrapper" style="line-height: 20px">76</div>
                </th>
                <td class="s0"></td>
                <td class="s0"><a target="_blank" href="https://newsghana.com.gh/">News Ghana</a></td>
                <td class="s1">$180</td>
                <td class="s2">77</td>
                <td class="s3">1 Week</td>
                <td class="s3" dir="ltr">News / Sports / Business / Entertainment / Health</td>
                <td class="s3" dir="ltr">Organic Placement</td>
                <td class="s3">Ghana</td>
            </tr>
            <tr style="height: 20px">
                <th id="0R76" style="height: 20px;" class="row-headers-background">
                    <div class="row-header-wrapper" style="line-height: 20px">77</div>
                </th>
                <td class="s0"></td>
                <td class="s0"><a target="_blank" href="https://www.pulse.com.gh/">Pulse Ghana</a></td>
                <td class="s1">$180</td>
                <td class="s2">81</td>
                <td class="s3">1 Week</td>
                <td class="s3" dir="ltr">News / Entertainment / Lifestyle / Sports / Business </td>
                <td class="s3" dir="ltr">Organic Placement</td>
                <td class="s3">Ghana</td>
            </tr>
            <tr style="height: 20px">
                <th id="0R77" style="height: 20px;" class="row-headers-background">
                    <div class="row-header-wrapper" style="line-height: 20px">78</div>
                </th>
                <td class="s0"></td>
                <td class="s0"><a target="_blank" href="https://trotons.com/">Trotons</a></td>
                <td class="s1">$180</td>
                <td class="s2">55</td>
                <td class="s3">1 Week</td>
                <td class="s3" dir="ltr">Tech / Business / Science / Health </td>
                <td class="s3" dir="ltr">Organic Placement</td>
                <td class="s3">Global</td>
            </tr>
            <tr style="height: 20px">
                <th id="0R78" style="height: 20px;" class="row-headers-background">
                    <div class="row-header-wrapper" style="line-height: 20px">79</div>
                </th>
                <td class="s0"></td>
                <td class="s0"><a target="_blank" href="https://business2news.com/">Business2News</a></td>
                <td class="s1">$180</td>
                <td class="s2">56</td>
                <td class="s3">1 Week</td>
                <td class="s3" dir="ltr">Business / News / Tech / Health / Sports / Entertainment</td>
                <td class="s3" dir="ltr">Organic Placement</td>
                <td class="s3">Global</td>
            </tr>
            <tr style="height: 20px">
                <th id="0R79" style="height: 20px;" class="row-headers-background">
                    <div class="row-header-wrapper" style="line-height: 20px">80</div>
                </th>
                <td class="s0"></td>
                <td class="s0"><a target="_blank" href="https://gizmosreport.com/">Gizmos Report </a></td>
                <td class="s1">$180</td>
                <td class="s2">58</td>
                <td class="s3">1 Week</td>
                <td class="s3" dir="ltr">Tech / Business / Science / Health</td>
                <td class="s3" dir="ltr">Organic Placement</td>
                <td class="s3">Global</td>
            </tr>
            <tr style="height: 20px">
                <th id="0R80" style="height: 20px;" class="row-headers-background">
                    <div class="row-header-wrapper" style="line-height: 20px">81</div>
                </th>
                <td class="s0"></td>
                <td class="s0" dir="ltr"><a target="_blank" href="https://digitallifestylemag.com/">Digital Lifestyle
                        Magazine</a></td>
                <td class="s1">$180</td>
                <td class="s2">61</td>
                <td class="s3">1 Week</td>
                <td class="s3" dir="ltr">Tech / Business / Tech / Entertainment / Lifestyle</td>
                <td class="s3" dir="ltr">Organic Placement</td>
                <td class="s3">Global</td>
            </tr>
            <tr style="height: 20px">
                <th id="0R81" style="height: 20px;" class="row-headers-background">
                    <div class="row-header-wrapper" style="line-height: 20px">82</div>
                </th>
                <td class="s0"></td>
                <td class="s0"><a target="_blank" href="https://thefrisky.com/">The Frisky</a></td>
                <td class="s1">$180</td>
                <td class="s2">83</td>
                <td class="s3">1 Week</td>
                <td class="s3" dir="ltr">News / Health / Lifestyle / Entertainment </td>
                <td class="s3" dir="ltr">Organic Placement</td>
                <td class="s3">Global</td>
            </tr>
            <tr style="height: 20px">
                <th id="0R82" style="height: 20px;" class="row-headers-background">
                    <div class="row-header-wrapper" style="line-height: 20px">83</div>
                </th>
                <td class="s0"></td>
                <td class="s0"><a target="_blank" href="https://www.mynation.com/">Mynation</a></td>
                <td class="s1">$180</td>
                <td class="s2">41</td>
                <td class="s3">1 Week</td>
                <td class="s3" dir="ltr">News / Sports / Lifestyle / Entertainment </td>
                <td class="s3" dir="ltr">Organic Placement</td>
                <td class="s3">India</td>
            </tr>
            <tr style="height: 20px">
                <th id="0R83" style="height: 20px;" class="row-headers-background">
                    <div class="row-header-wrapper" style="line-height: 20px">84</div>
                </th>
                <td class="s0"></td>
                <td class="s0" dir="ltr"><a target="_blank" href="https://www.chavesdigital.com.ar/">Chaves Digital</a>
                </td>
                <td class="s1">$180</td>
                <td class="s2">20</td>
                <td class="s3">1 Week</td>
                <td class="s3" dir="ltr">News / Health </td>
                <td class="s3" dir="ltr">Organic with small disclaimer</td>
                <td class="s3">Spain</td>
            </tr>
            <tr style="height: 20px">
                <th id="0R84" style="height: 20px;" class="row-headers-background">
                    <div class="row-header-wrapper" style="line-height: 20px">85</div>
                </th>
                <td class="s0"></td>
                <td class="s0"><a target="_blank" href="https://riocoloradoinforma.com.ar/">Rio Colorado Informia</a>
                </td>
                <td class="s1">$180</td>
                <td class="s2">21</td>
                <td class="s3">1 Week</td>
                <td class="s3" dir="ltr">News</td>
                <td class="s3" dir="ltr">Organic with small disclaimer</td>
                <td class="s3">Spain</td>
            </tr>
            <tr style="height: 20px">
                <th id="0R85" style="height: 20px;" class="row-headers-background">
                    <div class="row-header-wrapper" style="line-height: 20px">86</div>
                </th>
                <td class="s0"></td>
                <td class="s0"><a target="_blank" href="http://dechivilcoy.com.ar/">Dechivilcoy</a></td>
                <td class="s1">$180</td>
                <td class="s2">34</td>
                <td class="s3">1 Week</td>
                <td class="s3" dir="ltr">News</td>
                <td class="s3" dir="ltr">Organic with small disclaimer</td>
                <td class="s3">Spain</td>
            </tr>
            <tr style="height: 20px">
                <th id="0R86" style="height: 20px;" class="row-headers-background">
                    <div class="row-header-wrapper" style="line-height: 20px">87</div>
                </th>
                <td class="s0"></td>
                <td class="s0"><a target="_blank" href="https://baltimorepostexaminer.com/">Baltimore Post Examiner</a>
                </td>
                <td class="s1">$180</td>
                <td class="s2">60</td>
                <td class="s3">1 Week</td>
                <td class="s3" dir="ltr">News</td>
                <td class="s3" dir="ltr">Sponsored article</td>
                <td class="s3">US</td>
            </tr>
            <tr style="height: 20px">
                <th id="0R87" style="height: 20px;" class="row-headers-background">
                    <div class="row-header-wrapper" style="line-height: 20px">88</div>
                </th>
                <td class="s0"></td>
                <td class="s0"><a target="_blank" href="https://thetechheadlines.com/">The Tech Headlines</a></td>
                <td class="s1">$198</td>
                <td class="s2">55</td>
                <td class="s3">1 Week</td>
                <td class="s3" dir="ltr">Tech / Business / Science / Tech / Entertainment</td>
                <td class="s3" dir="ltr">Organic Placement</td>
                <td class="s3">Global</td>
            </tr>
            <tr style="height: 20px">
                <th id="0R88" style="height: 20px;" class="row-headers-background">
                    <div class="row-header-wrapper" style="line-height: 20px">89</div>
                </th>
                <td class="s0"></td>
                <td class="s0"><a target="_blank" href="https://huffmag.com/">Huff Mag</a></td>
                <td class="s1">$200</td>
                <td class="s2" dir="ltr">62</td>
                <td class="s3">1 Week</td>
                <td class="s3" dir="ltr">News / Business / Tech / Sports / Lifestyle</td>
                <td class="s3" dir="ltr">Organic Placement</td>
                <td class="s3">Global</td>
            </tr>
            <tr style="height: 20px">
                <th id="0R89" style="height: 20px;" class="row-headers-background">
                    <div class="row-header-wrapper" style="line-height: 20px">90</div>
                </th>
                <td class="s0"></td>
                <td class="s0"><a target="_blank" href="https://flauntweekly.com/">Flaunt Weekly</a></td>
                <td class="s1">$200</td>
                <td class="s2" dir="ltr">56</td>
                <td class="s3">1 Week</td>
                <td class="s3" dir="ltr">Lifestyle / Music / Entertainment / Tech / Crypto</td>
                <td class="s3" dir="ltr">Organic Placement</td>
                <td class="s3">Global</td>
            </tr>
            <tr style="height: 20px">
                <th id="0R90" style="height: 20px;" class="row-headers-background">
                    <div class="row-header-wrapper" style="line-height: 20px">91</div>
                </th>
                <td class="s0"></td>
                <td class="s0"><a target="_blank" href="https://brokeandchic.com/">Broke &amp; Chic</a></td>
                <td class="s1">$200</td>
                <td class="s2">34</td>
                <td class="s3">1 Week</td>
                <td class="s3" dir="ltr">Lifestyle / Fashion / Health</td>
                <td class="s3" dir="ltr">Organic Placement</td>
                <td class="s3">Global</td>
            </tr>
            <tr style="height: 20px">
                <th id="0R91" style="height: 20px;" class="row-headers-background">
                    <div class="row-header-wrapper" style="line-height: 20px">92</div>
                </th>
                <td class="s0"></td>
                <td class="s0"><a target="_blank" href="https://www.the-influential.com/">The Influential</a></td>
                <td class="s1">$200</td>
                <td class="s2">38</td>
                <td class="s3">2 Weeks</td>
                <td class="s3" dir="ltr">Lifestyle / News</td>
                <td class="s3" dir="ltr">Organic Placement</td>
                <td class="s3">Global</td>
            </tr>
            <tr style="height: 20px">
                <th id="0R92" style="height: 20px;" class="row-headers-background">
                    <div class="row-header-wrapper" style="line-height: 20px">93</div>
                </th>
                <td class="s0"></td>
                <td class="s0"><a target="_blank" href="https://www.eliteluxurynews.com/">Elite Luxury News</a></td>
                <td class="s1">$200</td>
                <td class="s2">38</td>
                <td class="s3">1 Week</td>
                <td class="s3" dir="ltr">Lifestyle / Luxury / Travel</td>
                <td class="s3" dir="ltr">Organic Placement</td>
                <td class="s3">Global</td>
            </tr>
            <tr style="height: 20px">
                <th id="0R93" style="height: 20px;" class="row-headers-background">
                    <div class="row-header-wrapper" style="line-height: 20px">94</div>
                </th>
                <td class="s0"></td>
                <td class="s0"><a target="_blank" href="https://www.elitemusicnews.com/">Elite Music News</a></td>
                <td class="s1">$200</td>
                <td class="s2">38</td>
                <td class="s3">2 Weeks</td>
                <td class="s3" dir="ltr">Music / Fashion / Entertainment / Business</td>
                <td class="s3" dir="ltr">Organic Placement</td>
                <td class="s3">Global</td>
            </tr>
            <tr style="height: 20px">
                <th id="0R94" style="height: 20px;" class="row-headers-background">
                    <div class="row-header-wrapper" style="line-height: 20px">95</div>
                </th>
                <td class="s0"></td>
                <td class="s0"><a target="_blank" href="https://muziquemagazine.com/">Muzique Magazine</a></td>
                <td class="s1">$200</td>
                <td class="s2">56</td>
                <td class="s3">1 Week</td>
                <td class="s3" dir="ltr">Music / Lifestyle</td>
                <td class="s3" dir="ltr">Organic Placement</td>
                <td class="s3">Global</td>
            </tr>
            <tr style="height: 20px">
                <th id="0R95" style="height: 20px;" class="row-headers-background">
                    <div class="row-header-wrapper" style="line-height: 20px">96</div>
                </th>
                <td class="s5"></td>
                <td class="s0"><a target="_blank" href="https://www.elitepropertynews.com/">Elite Property News</a></td>
                <td class="s1">$200</td>
                <td class="s2">61</td>
                <td class="s3">1 Week</td>
                <td class="s3" dir="ltr">Real Estate / Lifestyle</td>
                <td class="s3" dir="ltr">Organic Placement</td>
                <td class="s3">Global</td>
            </tr>
            <tr style="height: 20px">
                <th id="0R96" style="height: 20px;" class="row-headers-background">
                    <div class="row-header-wrapper" style="line-height: 20px">97</div>
                </th>
                <td class="s0"></td>
                <td class="s0"><a target="_blank" href="http://foxinterviewer.com/">Fox Interviewer</a></td>
                <td class="s1">$200</td>
                <td class="s2">62</td>
                <td class="s3">1 Week</td>
                <td class="s3" dir="ltr">News / Business / Tech / Sports / Lifestyle</td>
                <td class="s3" dir="ltr">Organic Placement</td>
                <td class="s3">Global</td>
            </tr>
            <tr style="height: 20px">
                <th id="0R97" style="height: 20px;" class="row-headers-background">
                    <div class="row-header-wrapper" style="line-height: 20px">98</div>
                </th>
                <td class="s0"></td>
                <td class="s0"><a target="_blank" href="https://hiphopsince1987.com/">HipHopSince1987</a></td>
                <td class="s1">$200</td>
                <td class="s2">67</td>
                <td class="s3">1 Week</td>
                <td class="s3" dir="ltr">Music</td>
                <td class="s3" dir="ltr">Organic Placement</td>
                <td class="s3">Global</td>
            </tr>
            <tr style="height: 20px">
                <th id="0R98" style="height: 20px;" class="row-headers-background">
                    <div class="row-header-wrapper" style="line-height: 20px">99</div>
                </th>
                <td class="s5"></td>
                <td class="s0"><a target="_blank" href="https://www.westhollywoodweekly.com/">West Hollywood Weekly</a>
                </td>
                <td class="s1">$200</td>
                <td class="s2">58</td>
                <td class="s3">1 Week</td>
                <td class="s3" dir="ltr">Entertainment / Lifestyle / Business / Luxury</td>
                <td class="s3" dir="ltr">Organic Placement</td>
                <td class="s3">US</td>
            </tr>
            <tr style="height: 20px">
                <th id="0R99" style="height: 20px;" class="row-headers-background">
                    <div class="row-header-wrapper" style="line-height: 20px">100</div>
                </th>
                <td class="s5"></td>
                <td class="s0"><a target="_blank" href="https://www.beverlyweekly.com/">The Beverly Weekly</a></td>
                <td class="s1">$200</td>
                <td class="s2">58</td>
                <td class="s3">1 Week</td>
                <td class="s3" dir="ltr">Entertainment / Lifestyle / Business / Luxury</td>
                <td class="s3" dir="ltr">Organic Placement</td>
                <td class="s3">US</td>
            </tr>
            <tr style="height: 20px">
                <th id="0R100" style="height: 20px;" class="row-headers-background">
                    <div class="row-header-wrapper" style="line-height: 20px">101</div>
                </th>
                <td class="s0"></td>
                <td class="s0"><a target="_blank" href="https://laentertainmentweekly.com/">LA Entertainment Weekly</a>
                </td>
                <td class="s1">$200</td>
                <td class="s2">65</td>
                <td class="s3">1 Week</td>
                <td class="s3" dir="ltr">Business / Entertainment / Sports / Lifestyle</td>
                <td class="s3" dir="ltr">Organic Placement</td>
                <td class="s3">US</td>
            </tr>
            <tr style="height: 20px">
                <th id="0R101" style="height: 20px;" class="row-headers-background">
                    <div class="row-header-wrapper" style="line-height: 20px">102</div>
                </th>
                <td class="s0"></td>
                <td class="s0"><a target="_blank" href="https://elcorreografico.com.ar/">El Correografico</a></td>
                <td class="s1">$210</td>
                <td class="s2">25</td>
                <td class="s3">1 Week</td>
                <td class="s3" dir="ltr">News </td>
                <td class="s3" dir="ltr">Organic with small disclaimer</td>
                <td class="s3">Spain</td>
            </tr>
            <tr style="height: 20px">
                <th id="0R102" style="height: 20px;" class="row-headers-background">
                    <div class="row-header-wrapper" style="line-height: 20px">103</div>
                </th>
                <td class="s0"></td>
                <td class="s0"><a target="_blank" href="https://esdiario.com.mx/">Es Diario </a></td>
                <td class="s1">$210</td>
                <td class="s2">33</td>
                <td class="s3">1 Week</td>
                <td class="s3" dir="ltr">News</td>
                <td class="s3" dir="ltr">Organic with small disclaimer</td>
                <td class="s3">Spain</td>
            </tr>
            <tr style="height: 20px">
                <th id="0R103" style="height: 20px;" class="row-headers-background">
                    <div class="row-header-wrapper" style="line-height: 20px">104</div>
                </th>
                <td class="s0"></td>
                <td class="s0"><a target="_blank" href="https://www.matanzadigital.com.ar/">Mantanza Digital </a></td>
                <td class="s1">$210</td>
                <td class="s2">33</td>
                <td class="s3">1 Week</td>
                <td class="s3" dir="ltr">News / Sports</td>
                <td class="s3" dir="ltr">Organic with small disclaimer</td>
                <td class="s3">Spain</td>
            </tr>
            <tr style="height: 20px">
                <th id="0R104" style="height: 20px;" class="row-headers-background">
                    <div class="row-header-wrapper" style="line-height: 20px">105</div>
                </th>
                <td class="s0"></td>
                <td class="s0"><a target="_blank" href="http://infosurdiario.com.ar/">Info Sur Diario</a></td>
                <td class="s1">$210</td>
                <td class="s2">34</td>
                <td class="s3">1 Week</td>
                <td class="s3" dir="ltr">News / Sports / Movies &amp; TV </td>
                <td class="s3" dir="ltr">Organic with small disclaimer</td>
                <td class="s3">Spain</td>
            </tr>
            <tr style="height: 20px">
                <th id="0R105" style="height: 20px;" class="row-headers-background">
                    <div class="row-header-wrapper" style="line-height: 20px">106</div>
                </th>
                <td class="s0"></td>
                <td class="s0"><a target="_blank" href="https://www.asianetnews.com/">Asianet News</a></td>
                <td class="s1">$240</td>
                <td class="s2">51</td>
                <td class="s3">1 Week</td>
                <td class="s3" dir="ltr">News / Entertainment / Sports / Tech</td>
                <td class="s3" dir="ltr">Organic Placement</td>
                <td class="s3">India</td>
            </tr>
            <tr style="height: 20px">
                <th id="0R106" style="height: 20px;" class="row-headers-background">
                    <div class="row-header-wrapper" style="line-height: 20px">107</div>
                </th>
                <td class="s0"></td>
                <td class="s0"><a target="_blank" href="https://www.mid-day.com/">Midday</a></td>
                <td class="s1">$240</td>
                <td class="s2">84</td>
                <td class="s3">1 Week</td>
                <td class="s3" dir="ltr">News / Entertainment / Lifestyle</td>
                <td class="s3" dir="ltr">Organic Placement</td>
                <td class="s3">India</td>
            </tr>
            <tr style="height: 20px">
                <th id="0R107" style="height: 20px;" class="row-headers-background">
                    <div class="row-header-wrapper" style="line-height: 20px">108</div>
                </th>
                <td class="s0"></td>
                <td class="s0"><a target="_blank" href="https://www.deccanherald.com/">Deccan Herald </a></td>
                <td class="s1">$240</td>
                <td class="s2">79</td>
                <td class="s3">1 Week</td>
                <td class="s3" dir="ltr">News / Sports / Business</td>
                <td class="s3" dir="ltr">Sponsored article</td>
                <td class="s3">India</td>
            </tr>
            <tr style="height: 20px">
                <th id="0R108" style="height: 20px;" class="row-headers-background">
                    <div class="row-header-wrapper" style="line-height: 20px">109</div>
                </th>
                <td class="s0"></td>
                <td class="s0"><a target="_blank" href="https://www.tribuneindia.com/">TheTribune</a></td>
                <td class="s1">$240</td>
                <td class="s2">84</td>
                <td class="s3">1 Week</td>
                <td class="s3" dir="ltr">News / Health / Entertainment / Tech</td>
                <td class="s3" dir="ltr">Sponsored article</td>
                <td class="s3">India</td>
            </tr>
            <tr style="height: 20px">
                <th id="0R109" style="height: 20px;" class="row-headers-background">
                    <div class="row-header-wrapper" style="line-height: 20px">110</div>
                </th>
                <td class="s0"></td>
                <td class="s0"><a target="_blank" href="https://www.oneindia.com/">One India</a></td>
                <td class="s1">$240</td>
                <td class="s2">85</td>
                <td class="s3">1 Week</td>
                <td class="s3" dir="ltr">News / Sports / Lifestyle</td>
                <td class="s3" dir="ltr">Sponsored article</td>
                <td class="s3">India</td>
            </tr>
            <tr style="height: 20px">
                <th id="0R110" style="height: 20px;" class="row-headers-background">
                    <div class="row-header-wrapper" style="line-height: 20px">111</div>
                </th>
                <td class="s0"></td>
                <td class="s0"><a target="_blank" href="https://ceoweekly.com/">CEO Weekly</a></td>
                <td class="s1">$250</td>
                <td class="s2">23</td>
                <td class="s3">1 Week</td>
                <td class="s3" dir="ltr">News / Business / News / Entertainment / Lifestyle</td>
                <td class="s3" dir="ltr">Organic Placement</td>
                <td class="s3">Global</td>
            </tr>
            <tr style="height: 20px">
                <th id="0R111" style="height: 20px;" class="row-headers-background">
                    <div class="row-header-wrapper" style="line-height: 20px">112</div>
                </th>
                <td class="s0"></td>
                <td class="s0"><a target="_blank" href="https://kivodaily.com/">Kivo Daily</a></td>
                <td class="s1">$250</td>
                <td class="s2">39</td>
                <td class="s3">1 Week</td>
                <td class="s3" dir="ltr">News / Business / Tech</td>
                <td class="s3" dir="ltr">Organic Placement</td>
                <td class="s3">Global</td>
            </tr>
            <tr style="height: 20px">
                <th id="0R112" style="height: 20px;" class="row-headers-background">
                    <div class="row-header-wrapper" style="line-height: 20px">113</div>
                </th>
                <td class="s0"></td>
                <td class="s0"><a target="_blank" href="https://famoustimes.com/">FamoUSTimes</a></td>
                <td class="s1">$250</td>
                <td class="s2">57</td>
                <td class="s3">1 Week</td>
                <td class="s3" dir="ltr">News / Music / Business</td>
                <td class="s3" dir="ltr">Organic Placement</td>
                <td class="s3">Global</td>
            </tr>
            <tr style="height: 20px">
                <th id="0R113" style="height: 20px;" class="row-headers-background">
                    <div class="row-header-wrapper" style="line-height: 20px">114</div>
                </th>
                <td class="s0"></td>
                <td class="s0"><a target="_blank" href="https://musicobserver.com/">Music Observer</a></td>
                <td class="s1">$250</td>
                <td class="s2">57</td>
                <td class="s3">1 Week</td>
                <td class="s3" dir="ltr">Music</td>
                <td class="s3" dir="ltr">Organic Placement</td>
                <td class="s3">Global</td>
            </tr>
            <tr style="height: 20px">
                <th id="0R114" style="height: 20px;" class="row-headers-background">
                    <div class="row-header-wrapper" style="line-height: 20px">115</div>
                </th>
                <td class="s0"></td>
                <td class="s0" dir="ltr"><a target="_blank" href="https://emonthlynews.com/">Entertainment Monthly
                        News</a></td>
                <td class="s1">$250</td>
                <td class="s2">60</td>
                <td class="s3">1 Week</td>
                <td class="s3" dir="ltr">Movies &amp; TV / Music / Entertainment</td>
                <td class="s3" dir="ltr">Organic Placement</td>
                <td class="s3">Global</td>
            </tr>
            <tr style="height: 20px">
                <th id="0R115" style="height: 20px;" class="row-headers-background">
                    <div class="row-header-wrapper" style="line-height: 20px">116</div>
                </th>
                <td class="s0"></td>
                <td class="s0"><a target="_blank" href="https://influencerdaily.com/">Influencer Daily</a></td>
                <td class="s1">$250</td>
                <td class="s2">61</td>
                <td class="s3">1 Week</td>
                <td class="s3" dir="ltr">News / Business</td>
                <td class="s3" dir="ltr">Organic Placement</td>
                <td class="s3">Global</td>
            </tr>
            <tr style="height: 20px">
                <th id="0R116" style="height: 20px;" class="row-headers-background">
                    <div class="row-header-wrapper" style="line-height: 20px">117</div>
                </th>
                <td class="s0"></td>
                <td class="s0"><a target="_blank" href="https://sfpost.com/">SF Post</a></td>
                <td class="s1">$250</td>
                <td class="s2">7</td>
                <td class="s3">1 Week</td>
                <td class="s3" dir="ltr">News / Sports / Business</td>
                <td class="s3" dir="ltr">Organic Placement</td>
                <td class="s3">US</td>
            </tr>
            <tr style="height: 20px">
                <th id="0R117" style="height: 20px;" class="row-headers-background">
                    <div class="row-header-wrapper" style="line-height: 20px">118</div>
                </th>
                <td class="s0"></td>
                <td class="s0"><a target="_blank" href="https://miamiwire.com/">Miami Wire</a></td>
                <td class="s1">$250</td>
                <td class="s2">15</td>
                <td class="s3">1 Week</td>
                <td class="s3" dir="ltr">News / Business / Entertainment / Tech</td>
                <td class="s3" dir="ltr">Organic Placement</td>
                <td class="s3">US</td>
            </tr>
            <tr style="height: 20px">
                <th id="0R118" style="height: 20px;" class="row-headers-background">
                    <div class="row-header-wrapper" style="line-height: 20px">119</div>
                </th>
                <td class="s0"></td>
                <td class="s0"><a target="_blank" href="https://www.nowhiphop.com/">Now Hip Hop</a></td>
                <td class="s1">$300</td>
                <td class="s2">19</td>
                <td class="s3">1 Week</td>
                <td class="s3" dir="ltr">Music</td>
                <td class="s3" dir="ltr">Organic Placement</td>
                <td class="s3">Global</td>
            </tr>
            <tr style="height: 20px">
                <th id="0R119" style="height: 20px;" class="row-headers-background">
                    <div class="row-header-wrapper" style="line-height: 20px">120</div>
                </th>
                <td class="s0"></td>
                <td class="s0" dir="ltr"><a target="_blank" href="https://theubj.com/">The UBJ </a></td>
                <td class="s1" dir="ltr">$300</td>
                <td class="s2">57</td>
                <td class="s3">1 Week</td>
                <td class="s3" dir="ltr">News / Business / Entertainment</td>
                <td class="s3" dir="ltr">Organic Placement</td>
                <td class="s3">Global</td>
            </tr>
            <tr style="height: 20px">
                <th id="0R120" style="height: 20px;" class="row-headers-background">
                    <div class="row-header-wrapper" style="line-height: 20px">121</div>
                </th>
                <td class="s0"></td>
                <td class="s0"><a target="_blank" href="https://timebusinessnews.com/">Time Business News </a></td>
                <td class="s1">$300</td>
                <td class="s2">36</td>
                <td class="s3">1 Week</td>
                <td class="s3" dir="ltr">News / Business / Tech / Health / Lifestyle / Real Estate </td>
                <td class="s3" dir="ltr">Organic Placement</td>
                <td class="s3">Global</td>
            </tr>
            <tr style="height: 20px">
                <th id="0R121" style="height: 20px;" class="row-headers-background">
                    <div class="row-header-wrapper" style="line-height: 20px">122</div>
                </th>
                <td class="s5"></td>
                <td class="s0"><a target="_blank" href="https://blocktelegraph.io/">Block Telegraph</a></td>
                <td class="s1">$300</td>
                <td class="s2">38</td>
                <td class="s3">2 Weeks</td>
                <td class="s3" dir="ltr">Crypto / Tech</td>
                <td class="s3" dir="ltr">Organic Placement</td>
                <td class="s3">Global</td>
            </tr>
            <tr style="height: 20px">
                <th id="0R122" style="height: 20px;" class="row-headers-background">
                    <div class="row-header-wrapper" style="line-height: 20px">123</div>
                </th>
                <td class="s0"></td>
                <td class="s0"><a target="_blank" href="https://www.explosion.com/">Explosion </a></td>
                <td class="s1">$300</td>
                <td class="s2">56</td>
                <td class="s3">1 Week</td>
                <td class="s3" dir="ltr">News / Business / Entertainment / Tech / Health </td>
                <td class="s3" dir="ltr">Organic Placement</td>
                <td class="s3">Global</td>
            </tr>
            <tr style="height: 20px">
                <th id="0R123" style="height: 20px;" class="row-headers-background">
                    <div class="row-header-wrapper" style="line-height: 20px">124</div>
                </th>
                <td class="s0"></td>
                <td class="s0"><a target="_blank" href="https://www.thehypemagazine.com/">Hype Magazine</a></td>
                <td class="s1">$300</td>
                <td class="s2">60</td>
                <td class="s3">1 Week</td>
                <td class="s3" dir="ltr">Lifestyle / Music</td>
                <td class="s3" dir="ltr">Organic Placement</td>
                <td class="s3">Global</td>
            </tr>
            <tr style="height: 20px">
                <th id="0R124" style="height: 20px;" class="row-headers-background">
                    <div class="row-header-wrapper" style="line-height: 20px">125</div>
                </th>
                <td class="s0"></td>
                <td class="s0"><a target="_blank" href="https://www.dailyscanner.com/">Daily Scanner</a></td>
                <td class="s1">$300</td>
                <td class="s2">67</td>
                <td class="s3">1 Week</td>
                <td class="s3" dir="ltr">News / Business / Lifestyle / Tech / Crypto </td>
                <td class="s3" dir="ltr">Organic Placement</td>
                <td class="s3">Global</td>
            </tr>
            <tr style="height: 20px">
                <th id="0R125" style="height: 20px;" class="row-headers-background">
                    <div class="row-header-wrapper" style="line-height: 20px">126</div>
                </th>
                <td class="s0"></td>
                <td class="s0"><a target="_blank" href="https://thisis50.com/">This Is 50</a></td>
                <td class="s1">$300</td>
                <td class="s2">68</td>
                <td class="s3">1 Week</td>
                <td class="s3" dir="ltr">Music</td>
                <td class="s3" dir="ltr">Organic Placement</td>
                <td class="s3">Global</td>
            </tr>
            <tr style="height: 20px">
                <th id="0R126" style="height: 20px;" class="row-headers-background">
                    <div class="row-header-wrapper" style="line-height: 20px">127</div>
                </th>
                <td class="s0"></td>
                <td class="s0"><a target="_blank" href="https://omegaunderground.com/">Omega Underground</a></td>
                <td class="s1">$300</td>
                <td class="s2">83</td>
                <td class="s3">1 Week</td>
                <td class="s3" dir="ltr">Tech / Lifestyle / News / Tech / Business / Entertainment / Science / Health
                </td>
                <td class="s3" dir="ltr">Organic Placement</td>
                <td class="s3">Global</td>
            </tr>
            <tr style="height: 20px">
                <th id="0R127" style="height: 20px;" class="row-headers-background">
                    <div class="row-header-wrapper" style="line-height: 20px">128</div>
                </th>
                <td class="s0"></td>
                <td class="s0"><a target="_blank" href="https://cryptomode.com/category/press-releases/">Crypto Mode
                        Sponsored</a></td>
                <td class="s1">$300</td>
                <td class="s2">36</td>
                <td class="s3">1 Week</td>
                <td class="s3" dir="ltr">Crypto / Business / Tech</td>
                <td class="s3" dir="ltr">Sponsored article</td>
                <td class="s3">Global</td>
            </tr>
            <tr style="height: 20px">
                <th id="0R128" style="height: 20px;" class="row-headers-background">
                    <div class="row-header-wrapper" style="line-height: 20px">129</div>
                </th>
                <td class="s0"></td>
                <td class="s0"><a target="_blank" href="https://www.publish0x.com/">Publish0x.com</a></td>
                <td class="s1">$300</td>
                <td class="s2">48</td>
                <td class="s3">1 Week</td>
                <td class="s3" dir="ltr">Crypto</td>
                <td class="s3" dir="ltr">Sponsored article</td>
                <td class="s3">Global</td>
            </tr>
            <tr style="height: 20px">
                <th id="0R129" style="height: 20px;" class="row-headers-background">
                    <div class="row-header-wrapper" style="line-height: 20px">130</div>
                </th>
                <td class="s0"></td>
                <td class="s0"><a target="_blank" href="https://thriveglobal.com/">Thrive Global</a></td>
                <td class="s1">$300</td>
                <td class="s2">80</td>
                <td class="s3">1 Week</td>
                <td class="s3" dir="ltr">Tech / Science</td>
                <td class="s3" dir="ltr">Sponsored article</td>
                <td class="s3">Global</td>
            </tr>
            <tr style="height: 20px">
                <th id="0R130" style="height: 20px;" class="row-headers-background">
                    <div class="row-header-wrapper" style="line-height: 20px">131</div>
                </th>
                <td class="s0"></td>
                <td class="s0"><a target="_blank" href="https://www.iwmbuzz.com/">IWM Buzz</a></td>
                <td class="s1">$300</td>
                <td class="s2">43</td>
                <td class="s3">1 Week</td>
                <td class="s3" dir="ltr">News / Music / Lifestyle / Tech</td>
                <td class="s3" dir="ltr">Organic Placement</td>
                <td class="s3">India</td>
            </tr>
            <tr style="height: 20px">
                <th id="0R131" style="height: 20px;" class="row-headers-background">
                    <div class="row-header-wrapper" style="line-height: 20px">132</div>
                </th>
                <td class="s0"></td>
                <td class="s0"><a target="_blank" href="https://theprint.in/">ThePrint </a></td>
                <td class="s1">$300</td>
                <td class="s2">77</td>
                <td class="s3">1 Week</td>
                <td class="s3" dir="ltr">News / Entertainment / Health / Sports </td>
                <td class="s3" dir="ltr">Organic Placement</td>
                <td class="s3">India</td>
            </tr>
            <tr style="height: 20px">
                <th id="0R132" style="height: 20px;" class="row-headers-background">
                    <div class="row-header-wrapper" style="line-height: 20px">133</div>
                </th>
                <td class="s0"></td>
                <td class="s0" dir="ltr"><a target="_blank" href="https://www.ibtimes.co.in/">IB Times</a></td>
                <td class="s1">$300</td>
                <td class="s2">87</td>
                <td class="s3">1 Week</td>
                <td class="s3" dir="ltr">News / Business / Tech / Science / Sports / Entertainment / Lifestyle</td>
                <td class="s3" dir="ltr">Organic Placement</td>
                <td class="s3">India</td>
            </tr>
            <tr style="height: 20px">
                <th id="0R133" style="height: 20px;" class="row-headers-background">
                    <div class="row-header-wrapper" style="line-height: 20px">134</div>
                </th>
                <td class="s0"></td>
                <td class="s0"><a target="_blank" href="https://www.tuparadadigital.com/">Tu Parada Digital</a></td>
                <td class="s1">$300</td>
                <td class="s2">19</td>
                <td class="s3">1 Week</td>
                <td class="s3" dir="ltr">News / Tech / Business / Sports / Entertainment</td>
                <td class="s3" dir="ltr">Organic Placement</td>
                <td class="s3">Spain</td>
            </tr>
            <tr style="height: 20px">
                <th id="0R134" style="height: 20px;" class="row-headers-background">
                    <div class="row-header-wrapper" style="line-height: 20px">135</div>
                </th>
                <td class="s0"></td>
                <td class="s0"><a target="_blank" href="https://noti-america.com/site/principal/">Noti America</a></td>
                <td class="s1">$300</td>
                <td class="s2">29</td>
                <td class="s3">1 Week</td>
                <td class="s3" dir="ltr">News</td>
                <td class="s3" dir="ltr">Organic Placement</td>
                <td class="s3">Spain</td>
            </tr>
            <tr style="height: 20px">
                <th id="0R135" style="height: 20px;" class="row-headers-background">
                    <div class="row-header-wrapper" style="line-height: 20px">136</div>
                </th>
                <td class="s0"></td>
                <td class="s0"><a target="_blank" href="https://thelosangelestribune.com/">Los Angeles Tribune</a></td>
                <td class="s1">$300</td>
                <td class="s2" dir="ltr">29</td>
                <td class="s3">1 Week</td>
                <td class="s3" dir="ltr">News / Tech / Business / Sports / Science</td>
                <td class="s3" dir="ltr">Organic Placement</td>
                <td class="s3">US</td>
            </tr>
            <tr style="height: 20px">
                <th id="0R136" style="height: 20px;" class="row-headers-background">
                    <div class="row-header-wrapper" style="line-height: 20px">137</div>
                </th>
                <td class="s0"></td>
                <td class="s0"><a target="_blank" href="https://laguestlist.com/">LA Guest List</a></td>
                <td class="s1">$300</td>
                <td class="s2">40</td>
                <td class="s3">1 Week</td>
                <td class="s3" dir="ltr">News / Entertainment / Health / Sports / Tech </td>
                <td class="s3" dir="ltr">Organic Placement</td>
                <td class="s3">US</td>
            </tr>
            <tr style="height: 20px">
                <th id="0R137" style="height: 20px;" class="row-headers-background">
                    <div class="row-header-wrapper" style="line-height: 20px">138</div>
                </th>
                <td class="s0"></td>
                <td class="s0"><a target="_blank" href="https://www.booksnreview.com/">Books n Review</a></td>
                <td class="s1">$330</td>
                <td class="s2">42</td>
                <td class="s3">1 Week</td>
                <td class="s3" dir="ltr">Entertainment</td>
                <td class="s3" dir="ltr">Organic Placement</td>
                <td class="s3">Global</td>
            </tr>
            <tr style="height: 20px">
                <th id="0R138" style="height: 20px;" class="row-headers-background">
                    <div class="row-header-wrapper" style="line-height: 20px">139</div>
                </th>
                <td class="s0"></td>
                <td class="s0"><a target="_blank" href="https://www.droidreport.com/">Droid Report </a></td>
                <td class="s1">$330</td>
                <td class="s2">44</td>
                <td class="s3">1 Week</td>
                <td class="s3" dir="ltr">Tech</td>
                <td class="s3" dir="ltr">Organic Placement</td>
                <td class="s3">Global</td>
            </tr>
            <tr style="height: 20px">
                <th id="0R139" style="height: 20px;" class="row-headers-background">
                    <div class="row-header-wrapper" style="line-height: 20px">140</div>
                </th>
                <td class="s0"></td>
                <td class="s0"><a target="_blank" href="https://www.latinoshealth.com/">Latinos Health </a></td>
                <td class="s1">$330</td>
                <td class="s2">51</td>
                <td class="s3">1 Week</td>
                <td class="s3" dir="ltr">Lifestyle / Health / Science</td>
                <td class="s3" dir="ltr">Organic Placement</td>
                <td class="s3">Global</td>
            </tr>
            <tr style="height: 20px">
                <th id="0R140" style="height: 20px;" class="row-headers-background">
                    <div class="row-header-wrapper" style="line-height: 20px">141</div>
                </th>
                <td class="s0"></td>
                <td class="s0"><a target="_blank" href="https://www.side-line.com/">Side-Line Magazine</a></td>
                <td class="s1">$330</td>
                <td class="s2">54</td>
                <td class="s3">1 Week</td>
                <td class="s3" dir="ltr">Lifestyle / News</td>
                <td class="s3" dir="ltr">Organic Placement</td>
                <td class="s3">Global</td>
            </tr>
            <tr style="height: 20px">
                <th id="0R141" style="height: 20px;" class="row-headers-background">
                    <div class="row-header-wrapper" style="line-height: 20px">142</div>
                </th>
                <td class="s0"></td>
                <td class="s0"><a target="_blank" href="https://www.beautyworldnews.com/">Beauty World News</a></td>
                <td class="s1">$330</td>
                <td class="s2">55</td>
                <td class="s3">1 Week</td>
                <td class="s3" dir="ltr">News / Lifestyle</td>
                <td class="s3" dir="ltr">Organic Placement</td>
                <td class="s3">Global</td>
            </tr>
            <tr style="height: 20px">
                <th id="0R142" style="height: 20px;" class="row-headers-background">
                    <div class="row-header-wrapper" style="line-height: 20px">143</div>
                </th>
                <td class="s0"></td>
                <td class="s0"><a target="_blank" href="https://www.autoworldnews.com/">Auto World News</a></td>
                <td class="s1">$330</td>
                <td class="s2">57</td>
                <td class="s3">1 Week</td>
                <td class="s3" dir="ltr">Entertainment / Tech</td>
                <td class="s3" dir="ltr">Organic Placement</td>
                <td class="s3">Global</td>
            </tr>
            <tr style="height: 20px">
                <th id="0R143" style="height: 20px;" class="row-headers-background">
                    <div class="row-header-wrapper" style="line-height: 20px">144</div>
                </th>
                <td class="s0"></td>
                <td class="s0"><a target="_blank" href="https://www.franchiseherald.com/">Franchise Herald </a></td>
                <td class="s1">$330</td>
                <td class="s2">58</td>
                <td class="s3">1 Week</td>
                <td class="s3" dir="ltr">News / Tech</td>
                <td class="s3" dir="ltr">Organic Placement</td>
                <td class="s3">Global</td>
            </tr>
            <tr style="height: 20px">
                <th id="0R144" style="height: 20px;" class="row-headers-background">
                    <div class="row-header-wrapper" style="line-height: 20px">145</div>
                </th>
                <td class="s0"></td>
                <td class="s0"><a target="_blank" href="https://www.lawyerherald.com/">Lawyer Herald</a></td>
                <td class="s1">$330</td>
                <td class="s2">59</td>
                <td class="s3">1 Week</td>
                <td class="s3" dir="ltr">News / Business </td>
                <td class="s3" dir="ltr">Organic Placement</td>
                <td class="s3">Global</td>
            </tr>
            <tr style="height: 20px">
                <th id="0R145" style="height: 20px;" class="row-headers-background">
                    <div class="row-header-wrapper" style="line-height: 20px">146</div>
                </th>
                <td class="s0"></td>
                <td class="s0"><a target="_blank" href="http://classicalite.com/">Classical Lite </a></td>
                <td class="s1">$330</td>
                <td class="s2">60</td>
                <td class="s3">1 Week</td>
                <td class="s3" dir="ltr">Entertainment / Music </td>
                <td class="s3" dir="ltr">Organic Placement</td>
                <td class="s3">Global</td>
            </tr>
            <tr style="height: 20px">
                <th id="0R146" style="height: 20px;" class="row-headers-background">
                    <div class="row-header-wrapper" style="line-height: 20px">147</div>
                </th>
                <td class="s0"></td>
                <td class="s0"><a target="_blank" href="http://youthhealthmag.com/">Youth Health Mag</a></td>
                <td class="s1">$330</td>
                <td class="s2">60</td>
                <td class="s3">1 Week</td>
                <td class="s3" dir="ltr">Health</td>
                <td class="s3" dir="ltr">Organic Placement</td>
                <td class="s3">Global</td>
            </tr>
            <tr style="height: 20px">
                <th id="0R147" style="height: 20px;" class="row-headers-background">
                    <div class="row-header-wrapper" style="line-height: 20px">148</div>
                </th>
                <td class="s0"></td>
                <td class="s0"><a target="_blank" href="https://www.newseveryday.com/">News Everyday </a></td>
                <td class="s1">$330</td>
                <td class="s2">62</td>
                <td class="s3">1 Week</td>
                <td class="s3" dir="ltr">News / Entertainment / Fashion / Tech</td>
                <td class="s3" dir="ltr">Organic Placement</td>
                <td class="s3">Global</td>
            </tr>
            <tr style="height: 20px">
                <th id="0R148" style="height: 20px;" class="row-headers-background">
                    <div class="row-header-wrapper" style="line-height: 20px">149</div>
                </th>
                <td class="s0"></td>
                <td class="s0"><a target="_blank" href="https://www.mstarsnews.com/">Mstarz</a></td>
                <td class="s1">$330</td>
                <td class="s2">63</td>
                <td class="s3">1 Week</td>
                <td class="s3" dir="ltr">Entertainment / Sports / Movies &amp; TV </td>
                <td class="s3" dir="ltr">Organic Placement</td>
                <td class="s3">Global</td>
            </tr>
            <tr style="height: 20px">
                <th id="0R149" style="height: 20px;" class="row-headers-background">
                    <div class="row-header-wrapper" style="line-height: 20px">150</div>
                </th>
                <td class="s0"></td>
                <td class="s0" dir="ltr"><a target="_blank" href="https://www.sportsworldnews.com/">Sports World
                        News</a></td>
                <td class="s1">$330</td>
                <td class="s2">64</td>
                <td class="s3">1 Week</td>
                <td class="s3" dir="ltr">Sports</td>
                <td class="s3" dir="ltr">Organic Placement</td>
                <td class="s3">Global</td>
            </tr>
            <tr style="height: 20px">
                <th id="0R150" style="height: 20px;" class="row-headers-background">
                    <div class="row-header-wrapper" style="line-height: 20px">151</div>
                </th>
                <td class="s0"></td>
                <td class="s0" dir="ltr"><a target="_blank" href="https://www.sportsworldreport.com/">Sports World
                        Report </a></td>
                <td class="s1">$330</td>
                <td class="s2">64</td>
                <td class="s3">1 Week</td>
                <td class="s3" dir="ltr">Sports</td>
                <td class="s3" dir="ltr">Organic Placement</td>
                <td class="s3">Global</td>
            </tr>
            <tr style="height: 20px">
                <th id="0R151" style="height: 20px;" class="row-headers-background">
                    <div class="row-header-wrapper" style="line-height: 20px">152</div>
                </th>
                <td class="s0"></td>
                <td class="s0"><a target="_blank" href="https://www.travelerstoday.com/">Travelers Today </a></td>
                <td class="s1">$330</td>
                <td class="s2">64</td>
                <td class="s3">1 Week</td>
                <td class="s3" dir="ltr">Travel</td>
                <td class="s3" dir="ltr">Organic Placement</td>
                <td class="s3">Global</td>
            </tr>
            <tr style="height: 20px">
                <th id="0R152" style="height: 20px;" class="row-headers-background">
                    <div class="row-header-wrapper" style="line-height: 20px">153</div>
                </th>
                <td class="s0"></td>
                <td class="s0"><a target="_blank" href="https://www.realtytoday.com/">Realty Today </a></td>
                <td class="s1">$330</td>
                <td class="s2">65</td>
                <td class="s3">1 Week</td>
                <td class="s3" dir="ltr">Real Estate</td>
                <td class="s3" dir="ltr">Organic Placement</td>
                <td class="s3">Global</td>
            </tr>
            <tr style="height: 20px">
                <th id="0R153" style="height: 20px;" class="row-headers-background">
                    <div class="row-header-wrapper" style="line-height: 20px">154</div>
                </th>
                <td class="s0"></td>
                <td class="s0"><a target="_blank" href="https://www.foodworldnews.com/">Food World News</a></td>
                <td class="s1">$330</td>
                <td class="s2">66</td>
                <td class="s3">1 Week</td>
                <td class="s3" dir="ltr">Lifestyle / Health</td>
                <td class="s3" dir="ltr">Organic Placement</td>
                <td class="s3">Global</td>
            </tr>
            <tr style="height: 20px">
                <th id="0R154" style="height: 20px;" class="row-headers-background">
                    <div class="row-header-wrapper" style="line-height: 20px">155</div>
                </th>
                <td class="s0"></td>
                <td class="s0"><a target="_blank" href="https://www.mobilenapps.com/">Mobile N Apps</a></td>
                <td class="s1">$330</td>
                <td class="s2">66</td>
                <td class="s3">1 Week</td>
                <td class="s3" dir="ltr">Tech</td>
                <td class="s3" dir="ltr">Organic Placement</td>
                <td class="s3">Global</td>
            </tr>
            <tr style="height: 20px">
                <th id="0R155" style="height: 20px;" class="row-headers-background">
                    <div class="row-header-wrapper" style="line-height: 20px">156</div>
                </th>
                <td class="s0"></td>
                <td class="s0"><a target="_blank" href="https://www.sciencetimes.com/">Science Times</a></td>
                <td class="s1">$330</td>
                <td class="s2">66</td>
                <td class="s3">1 Week</td>
                <td class="s3" dir="ltr">Tech / Health / Science</td>
                <td class="s3" dir="ltr">Organic Placement</td>
                <td class="s3">Global</td>
            </tr>
            <tr style="height: 20px">
                <th id="0R156" style="height: 20px;" class="row-headers-background">
                    <div class="row-header-wrapper" style="line-height: 20px">157</div>
                </th>
                <td class="s0"></td>
                <td class="s0"><a target="_blank" href="https://www.jobsnhire.com/">Jobsnhire</a></td>
                <td class="s1">$330</td>
                <td class="s2">68</td>
                <td class="s3">1 Week</td>
                <td class="s3" dir="ltr">Business / Lifestyle / Tech</td>
                <td class="s3" dir="ltr">Organic Placement</td>
                <td class="s3">Global</td>
            </tr>
            <tr style="height: 20px">
                <th id="0R157" style="height: 20px;" class="row-headers-background">
                    <div class="row-header-wrapper" style="line-height: 20px">158</div>
                </th>
                <td class="s0"></td>
                <td class="s0"><a target="_blank" href="https://www.counselheal.com/">Counselheal</a></td>
                <td class="s1">$330</td>
                <td class="s2">68</td>
                <td class="s3">1 Week</td>
                <td class="s3" dir="ltr">Health / Science / Tech</td>
                <td class="s3" dir="ltr">Organic Placement</td>
                <td class="s3">Global</td>
            </tr>
            <tr style="height: 20px">
                <th id="0R158" style="height: 20px;" class="row-headers-background">
                    <div class="row-header-wrapper" style="line-height: 20px">159</div>
                </th>
                <td class="s0"></td>
                <td class="s0"><a target="_blank" href="https://www.parentherald.com/">Parent Herald </a></td>
                <td class="s1">$330</td>
                <td class="s2">68</td>
                <td class="s3">1 Week</td>
                <td class="s3" dir="ltr">News</td>
                <td class="s3" dir="ltr">Organic Placement</td>
                <td class="s3">Global</td>
            </tr>
            <tr style="height: 20px">
                <th id="0R159" style="height: 20px;" class="row-headers-background">
                    <div class="row-header-wrapper" style="line-height: 20px">160</div>
                </th>
                <td class="s0"></td>
                <td class="s0"><a target="_blank" href="https://www.gamenguide.com/">Gamenguide</a></td>
                <td class="s1">$330</td>
                <td class="s2">69</td>
                <td class="s3">1 Week</td>
                <td class="s3" dir="ltr">Tech</td>
                <td class="s3" dir="ltr">Organic Placement</td>
                <td class="s3">Global</td>
            </tr>
            <tr style="height: 20px">
                <th id="0R160" style="height: 20px;" class="row-headers-background">
                    <div class="row-header-wrapper" style="line-height: 20px">161</div>
                </th>
                <td class="s0"></td>
                <td class="s0"><a target="_blank" href="https://www.bollywoodlife.com/">Bollywood Life</a></td>
                <td class="s1">$330</td>
                <td class="s2">85</td>
                <td class="s3">1 Week</td>
                <td class="s3" dir="ltr">Entertainment / Movies &amp; TV </td>
                <td class="s3" dir="ltr">Organic Placement</td>
                <td class="s3">India</td>
            </tr>
            <tr style="height: 20px">
                <th id="0R161" style="height: 20px;" class="row-headers-background">
                    <div class="row-header-wrapper" style="line-height: 20px">162</div>
                </th>
                <td class="s0"></td>
                <td class="s0"><a target="_blank" href="https://www.hypefresh.co/">Hypefresh</a></td>
                <td class="s1">$400</td>
                <td class="s2">46</td>
                <td class="s3">2 Weeks</td>
                <td class="s3" dir="ltr">Music / Sports / Entertainment / Health</td>
                <td class="s3" dir="ltr">Organic Placement</td>
                <td class="s3">Global</td>
            </tr>
            <tr style="height: 20px">
                <th id="0R162" style="height: 20px;" class="row-headers-background">
                    <div class="row-header-wrapper" style="line-height: 20px">163</div>
                </th>
                <td class="s0"></td>
                <td class="s0"><a target="_blank" href="https://ritzherald.com/">Ritz Herald News</a></td>
                <td class="s1">$400</td>
                <td class="s2">56</td>
                <td class="s3">1 Week</td>
                <td class="s3" dir="ltr">News / Business / Science</td>
                <td class="s3" dir="ltr">Organic Placement</td>
                <td class="s3">Global</td>
            </tr>
            <tr style="height: 20px">
                <th id="0R163" style="height: 20px;" class="row-headers-background">
                    <div class="row-header-wrapper" style="line-height: 20px">164</div>
                </th>
                <td class="s0"></td>
                <td class="s0"><a target="_blank" href="https://www.musictimes.com/">Music Times</a></td>
                <td class="s1">$400</td>
                <td class="s2">60</td>
                <td class="s3">1 Week</td>
                <td class="s3" dir="ltr">Music</td>
                <td class="s3" dir="ltr">Organic Placement</td>
                <td class="s3">Global</td>
            </tr>
            <tr style="height: 20px">
                <th id="0R164" style="height: 20px;" class="row-headers-background">
                    <div class="row-header-wrapper" style="line-height: 20px">165</div>
                </th>
                <td class="s0"></td>
                <td class="s0"><a target="_blank" href="https://www.edmtunes.com/">EDM Tunes</a></td>
                <td class="s1">$400</td>
                <td class="s2">65</td>
                <td class="s3">1 Week</td>
                <td class="s3" dir="ltr">Music / Tech</td>
                <td class="s3" dir="ltr">Organic Placement</td>
                <td class="s3">Global</td>
            </tr>
            <tr style="height: 20px">
                <th id="0R165" style="height: 20px;" class="row-headers-background">
                    <div class="row-header-wrapper" style="line-height: 20px">166</div>
                </th>
                <td class="s0"></td>
                <td class="s0"><a target="_blank" href="https://www.music-news.com/">Music News</a></td>
                <td class="s1">$400</td>
                <td class="s2">66</td>
                <td class="s3">1 Week</td>
                <td class="s3" dir="ltr">Music / News</td>
                <td class="s3" dir="ltr">Organic Placement</td>
                <td class="s3">Global</td>
            </tr>
            <tr style="height: 20px">
                <th id="0R166" style="height: 20px;" class="row-headers-background">
                    <div class="row-header-wrapper" style="line-height: 20px">167</div>
                </th>
                <td class="s0"></td>
                <td class="s0"><a target="_blank" href="http://www.vcpost.com/">VC Post</a></td>
                <td class="s1">$400</td>
                <td class="s2">66</td>
                <td class="s3">1 Week</td>
                <td class="s3" dir="ltr">News / Tech / Health</td>
                <td class="s3" dir="ltr">Organic Placement</td>
                <td class="s3">Global</td>
            </tr>
            <tr style="height: 20px">
                <th id="0R167" style="height: 20px;" class="row-headers-background">
                    <div class="row-header-wrapper" style="line-height: 20px">168</div>
                </th>
                <td class="s0"></td>
                <td class="s0"><a target="_blank" href="https://www.latinpost.com/">Latin Post</a></td>
                <td class="s1">$400</td>
                <td class="s2">66</td>
                <td class="s3">1 Week</td>
                <td class="s3" dir="ltr">News / Business / Entertainment / Sports</td>
                <td class="s3" dir="ltr">Organic Placement</td>
                <td class="s3">Global</td>
            </tr>
            <tr style="height: 20px">
                <th id="0R168" style="height: 20px;" class="row-headers-background">
                    <div class="row-header-wrapper" style="line-height: 20px">169</div>
                </th>
                <td class="s0"></td>
                <td class="s0"><a target="_blank" href="https://www.magneticmag.com/">Magnetic Mag</a></td>
                <td class="s1">$400</td>
                <td class="s2">74</td>
                <td class="s3">1 Week</td>
                <td class="s3" dir="ltr">Music </td>
                <td class="s3" dir="ltr">Organic Placement</td>
                <td class="s3">Global</td>
            </tr>
            <tr style="height: 20px">
                <th id="0R169" style="height: 20px;" class="row-headers-background">
                    <div class="row-header-wrapper" style="line-height: 20px">170</div>
                </th>
                <td class="s0"></td>
                <td class="s0"><a target="_blank" href="http://edmsauce.com/">EDM Sauce</a></td>
                <td class="s1">$400</td>
                <td class="s2">75</td>
                <td class="s3">1 Week</td>
                <td class="s3" dir="ltr">Music</td>
                <td class="s3" dir="ltr">Organic Placement</td>
                <td class="s3">Global</td>
            </tr>
            <tr style="height: 20px">
                <th id="0R170" style="height: 20px;" class="row-headers-background">
                    <div class="row-header-wrapper" style="line-height: 20px">171</div>
                </th>
                <td class="s0"></td>
                <td class="s0" dir="ltr"><a target="_blank" href="https://www.ibtimes.sg/">IB Times</a></td>
                <td class="s1">$400</td>
                <td class="s2">70</td>
                <td class="s3">1 Week</td>
                <td class="s3" dir="ltr">News / Business / Tech / Science / Sports / Entertainment / Lifestyle </td>
                <td class="s3" dir="ltr">Organic Placement</td>
                <td class="s3">Singapore</td>
            </tr>
            <tr style="height: 20px">
                <th id="0R171" style="height: 20px;" class="row-headers-background">
                    <div class="row-header-wrapper" style="line-height: 20px">172</div>
                </th>
                <td class="s0"></td>
                <td class="s0"><a target="_blank" href="https://www.chiangraitimes.com/">Chiang Rai Times</a></td>
                <td class="s1">$400</td>
                <td class="s2">79</td>
                <td class="s3">1 Week</td>
                <td class="s3" dir="ltr">News / Health / Business / Entertainment / Lifestyle / Sports</td>
                <td class="s3" dir="ltr">Organic Placement</td>
                <td class="s3">Thailand</td>
            </tr>
            <tr style="height: 20px">
                <th id="0R172" style="height: 20px;" class="row-headers-background">
                    <div class="row-header-wrapper" style="line-height: 20px">173</div>
                </th>
                <td class="s0"></td>
                <td class="s0" dir="ltr"><a target="_blank" href="https://www.deadlinenews.co.uk/">Deadline News</a>
                </td>
                <td class="s1">$400</td>
                <td class="s2">75</td>
                <td class="s3">1 Week</td>
                <td class="s3" dir="ltr">News / Sports / Entertainment / Business </td>
                <td class="s3" dir="ltr">Organic Placement</td>
                <td class="s3" dir="ltr">UK</td>
            </tr>
            <tr style="height: 20px">
                <th id="0R173" style="height: 20px;" class="row-headers-background">
                    <div class="row-header-wrapper" style="line-height: 20px">174</div>
                </th>
                <td class="s0"></td>
                <td class="s0"><a target="_blank" href="http://www.deccanchronicle.com/">Deccan Chronicle </a></td>
                <td class="s1">$420</td>
                <td class="s2">86</td>
                <td class="s3">1 Week</td>
                <td class="s3" dir="ltr">News / Sports / Entertainment </td>
                <td class="s3" dir="ltr">Organic Placement</td>
                <td class="s3">India</td>
            </tr>
            <tr style="height: 20px">
                <th id="0R174" style="height: 20px;" class="row-headers-background">
                    <div class="row-header-wrapper" style="line-height: 20px">175</div>
                </th>
                <td class="s0"></td>
                <td class="s0"><a target="_blank" href="https://www.cultr.com/">CULTR Magazine</a></td>
                <td class="s1">$450</td>
                <td class="s2">37</td>
                <td class="s3">1 Week</td>
                <td class="s3" dir="ltr">Music </td>
                <td class="s3" dir="ltr">Organic Placement</td>
                <td class="s3">Australia</td>
            </tr>
            <tr style="height: 20px">
                <th id="0R175" style="height: 20px;" class="row-headers-background">
                    <div class="row-header-wrapper" style="line-height: 20px">176</div>
                </th>
                <td class="s0"></td>
                <td class="s0"><a target="_blank" href="https://diarioandaluz.com/">Diario Andaluz</a></td>
                <td class="s1">$450</td>
                <td class="s2">31</td>
                <td class="s3">1 Week</td>
                <td class="s3" dir="ltr">News / Tech</td>
                <td class="s3" dir="ltr">Organic Placement</td>
                <td class="s3">Bolivia</td>
            </tr>
            <tr style="height: 20px">
                <th id="0R176" style="height: 20px;" class="row-headers-background">
                    <div class="row-header-wrapper" style="line-height: 20px">177</div>
                </th>
                <td class="s0"></td>
                <td class="s0"><a target="_blank" href="https://rcbolivia.com/">RC Bolivia</a></td>
                <td class="s1">$450</td>
                <td class="s2">31</td>
                <td class="s3">1 Week</td>
                <td class="s3" dir="ltr">News / Tech </td>
                <td class="s3" dir="ltr">Organic Placement</td>
                <td class="s3">Bolivia</td>
            </tr>
            <tr style="height: 20px">
                <th id="0R177" style="height: 20px;" class="row-headers-background">
                    <div class="row-header-wrapper" style="line-height: 20px">178</div>
                </th>
                <td class="s0"></td>
                <td class="s0"><a target="_blank" href="https://www.aninews.in/">ANI</a></td>
                <td class="s1">$450</td>
                <td class="s2">78</td>
                <td class="s3">1 Week</td>
                <td class="s3" dir="ltr">News / Business / Sports / Lifestyle / Entertainment / Health / Science / Tech
                </td>
                <td class="s3" dir="ltr">Organic Placement</td>
                <td class="s3">India</td>
            </tr>
            <tr style="height: 20px">
                <th id="0R178" style="height: 20px;" class="row-headers-background">
                    <div class="row-header-wrapper" style="line-height: 20px">179</div>
                </th>
                <td class="s0"></td>
                <td class="s0"><a target="_blank" href="https://www.mipuntodevista.com.mx/">Mi Punto de Vista
                        México </a></td>
                <td class="s1">$450</td>
                <td class="s2">46</td>
                <td class="s3">1 Week</td>
                <td class="s3" dir="ltr">News</td>
                <td class="s3" dir="ltr">Organic Placement</td>
                <td class="s3">Mexico</td>
            </tr>
            <tr style="height: 20px">
                <th id="0R179" style="height: 20px;" class="row-headers-background">
                    <div class="row-header-wrapper" style="line-height: 20px">180</div>
                </th>
                <td class="s0"></td>
                <td class="s0"><a target="_blank" href="https://www.outlookindia.com/">Outlook India</a></td>
                <td class="s1">$480</td>
                <td class="s2">84</td>
                <td class="s3">1 Week</td>
                <td class="s3" dir="ltr">News / Business / Entertainment / Sports</td>
                <td class="s3" dir="ltr">Organic Placement</td>
                <td class="s3">India</td>
            </tr>
            <tr style="height: 20px">
                <th id="0R180" style="height: 20px;" class="row-headers-background">
                    <div class="row-header-wrapper" style="line-height: 20px">181</div>
                </th>
                <td class="s0"></td>
                <td class="s0"><a target="_blank" href="https://outlookmoney.com/">Outlook Money</a></td>
                <td class="s1">$480</td>
                <td class="s2">84</td>
                <td class="s3">1 Week</td>
                <td class="s3" dir="ltr">News / Health / Tech</td>
                <td class="s3" dir="ltr">Organic Placement</td>
                <td class="s3">India</td>
            </tr>
            <tr style="height: 20px">
                <th id="0R181" style="height: 20px;" class="row-headers-background">
                    <div class="row-header-wrapper" style="line-height: 20px">182</div>
                </th>
                <td class="s0"></td>
                <td class="s0"><a target="_blank" href="https://www.business-standard.com/">Business Standard</a></td>
                <td class="s1">$480</td>
                <td class="s2">89</td>
                <td class="s3">1 Week</td>
                <td class="s3" dir="ltr">Business / Entertainment / Lifestyle / Health</td>
                <td class="s3" dir="ltr">Sponsored article</td>
                <td class="s3">India</td>
            </tr>
            <tr style="height: 20px">
                <th id="0R182" style="height: 20px;" class="row-headers-background">
                    <div class="row-header-wrapper" style="line-height: 20px">183</div>
                </th>
                <td class="s0"></td>
                <td class="s0"><a target="_blank" href="https://www.dnaindia.com/">DNA India</a></td>
                <td class="s1">$480</td>
                <td class="s2">90</td>
                <td class="s3">1 Week</td>
                <td class="s3" dir="ltr">News / Business / Lifestyle / Entertainment</td>
                <td class="s3" dir="ltr">Sponsored article</td>
                <td class="s3">India</td>
            </tr>
            <tr style="height: 20px">
                <th id="0R183" style="height: 20px;" class="row-headers-background">
                    <div class="row-header-wrapper" style="line-height: 20px">184</div>
                </th>
                <td class="s0"></td>
                <td class="s0" dir="ltr"><a target="_blank"
                        href="https://www.australiantimes.co.uk/">AustralianTimes</a></td>
                <td class="s1">$480</td>
                <td class="s2">62</td>
                <td class="s3">1 Week</td>
                <td class="s3" dir="ltr">News / Lifestyle</td>
                <td class="s3" dir="ltr">Organic Placement</td>
                <td class="s3">UK</td>
            </tr>
            <tr style="height: 20px">
                <th id="0R184" style="height: 20px;" class="row-headers-background">
                    <div class="row-header-wrapper" style="line-height: 20px">185</div>
                </th>
                <td class="s0"></td>
                <td class="s0"><a target="_blank" href="https://realestatetoday.com/">Real Estate Today</a></td>
                <td class="s1">$500</td>
                <td class="s2">14</td>
                <td class="s3">1 Week</td>
                <td class="s3" dir="ltr">Real Estate / Business</td>
                <td class="s3" dir="ltr">Organic Placement</td>
                <td class="s3">Global</td>
            </tr>
            <tr style="height: 20px">
                <th id="0R185" style="height: 20px;" class="row-headers-background">
                    <div class="row-header-wrapper" style="line-height: 20px">186</div>
                </th>
                <td class="s0"></td>
                <td class="s0"><a target="_blank" href="https://www.rapreviews.com/">Rap Reviews</a></td>
                <td class="s1">$500</td>
                <td class="s2">50</td>
                <td class="s3">1 Week</td>
                <td class="s3" dir="ltr">Music</td>
                <td class="s3" dir="ltr">Organic Placement</td>
                <td class="s3">Global</td>
            </tr>
            <tr style="height: 20px">
                <th id="0R186" style="height: 20px;" class="row-headers-background">
                    <div class="row-header-wrapper" style="line-height: 20px">187</div>
                </th>
                <td class="s5"></td>
                <td class="s0"><a target="_blank" href="https://celebmix.com/">CelebMix</a></td>
                <td class="s1">$500</td>
                <td class="s2"><a target="_blank" href="https://celebmix.com/">64</a></td>
                <td class="s3">1 Week</td>
                <td class="s3" dir="ltr">Entertainment / News</td>
                <td class="s3" dir="ltr">Organic Placement</td>
                <td class="s3" dir="ltr">Global</td>
            </tr>
            <tr style="height: 20px">
                <th id="0R187" style="height: 20px;" class="row-headers-background">
                    <div class="row-header-wrapper" style="line-height: 20px">188</div>
                </th>
                <td class="s0"></td>
                <td class="s0"><a target="_blank" href="https://www.nowentertainment.net/">Now Entertainment </a></td>
                <td class="s1">$500</td>
                <td class="s2">68</td>
                <td class="s3">1 Week</td>
                <td class="s3" dir="ltr">Music</td>
                <td class="s3" dir="ltr">Organic Placement</td>
                <td class="s3">Global</td>
            </tr>
            <tr style="height: 20px">
                <th id="0R188" style="height: 20px;" class="row-headers-background">
                    <div class="row-header-wrapper" style="line-height: 20px">189</div>
                </th>
                <td class="s0"></td>
                <td class="s0"><a target="_blank" href="https://bust.com/">Bust Magazine</a></td>
                <td class="s1">$500</td>
                <td class="s2">72</td>
                <td class="s3">1 Week</td>
                <td class="s3" dir="ltr">News</td>
                <td class="s3" dir="ltr">Organic Placement</td>
                <td class="s3">Global</td>
            </tr>
            <tr style="height: 20px">
                <th id="0R189" style="height: 20px;" class="row-headers-background">
                    <div class="row-header-wrapper" style="line-height: 20px">190</div>
                </th>
                <td class="s0"></td>
                <td class="s0"><a target="_blank" href="https://www.youredm.com/">Your EDM</a></td>
                <td class="s1">$500</td>
                <td class="s2">82</td>
                <td class="s3">1 Week</td>
                <td class="s3" dir="ltr">Music </td>
                <td class="s3" dir="ltr">Organic Placement</td>
                <td class="s3">Global</td>
            </tr>
            <tr style="height: 20px">
                <th id="0R190" style="height: 20px;" class="row-headers-background">
                    <div class="row-header-wrapper" style="line-height: 20px">191</div>
                </th>
                <td class="s0"></td>
                <td class="s0"><a target="_blank" href="https://weraveyou.com/">We Rave You</a></td>
                <td class="s1">$500</td>
                <td class="s2">92</td>
                <td class="s3">1 Week</td>
                <td class="s3" dir="ltr">Music</td>
                <td class="s3" dir="ltr">Organic Placement</td>
                <td class="s3">Global</td>
            </tr>
            <tr style="height: 20px">
                <th id="0R191" style="height: 20px;" class="row-headers-background">
                    <div class="row-header-wrapper" style="line-height: 20px">192</div>
                </th>
                <td class="s0"></td>
                <td class="s0"><a target="_blank" href="https://irvineweekly.com/">Irvine Weekly</a></td>
                <td class="s1">$500</td>
                <td class="s2">33</td>
                <td class="s3">1 Week</td>
                <td class="s3" dir="ltr">News / Music / Entertainment / CBD</td>
                <td class="s3" dir="ltr">Organic with small disclaimer</td>
                <td class="s3">Global</td>
            </tr>
            <tr style="height: 20px">
                <th id="0R192" style="height: 20px;" class="row-headers-background">
                    <div class="row-header-wrapper" style="line-height: 20px">193</div>
                </th>
                <td class="s0"></td>
                <td class="s0"><a target="_blank" href="https://allhiphop.com/">AllHipHop</a></td>
                <td class="s1">$500</td>
                <td class="s2">70</td>
                <td class="s3">1 Week</td>
                <td class="s3" dir="ltr">Music</td>
                <td class="s3" dir="ltr">Sponsored article</td>
                <td class="s3">Global</td>
            </tr>
            <tr style="height: 20px">
                <th id="0R193" style="height: 20px;" class="row-headers-background">
                    <div class="row-header-wrapper" style="line-height: 20px">194</div>
                </th>
                <td class="s0"></td>
                <td class="s0"><a target="_blank" href="https://thechicagojournal.com/">The Chicago Journal</a></td>
                <td class="s1">$500</td>
                <td class="s2">44</td>
                <td class="s3">1 Week</td>
                <td class="s3" dir="ltr">News / Business / Entertainment / Health / Sports / Tech</td>
                <td class="s3" dir="ltr">Organic Placement</td>
                <td class="s3">US</td>
            </tr>
            <tr style="height: 20px">
                <th id="0R194" style="height: 20px;" class="row-headers-background">
                    <div class="row-header-wrapper" style="line-height: 20px">195</div>
                </th>
                <td class="s0"></td>
                <td class="s0"><a target="_blank" href="https://nyweekly.com/">NY Weekly</a></td>
                <td class="s1">$500</td>
                <td class="s2">54</td>
                <td class="s3">1 Week</td>
                <td class="s3" dir="ltr">News / Entertainment / Business / Science / Health / Tech</td>
                <td class="s3" dir="ltr">Organic Placement</td>
                <td class="s3">US</td>
            </tr>
            <tr style="height: 20px">
                <th id="0R195" style="height: 20px;" class="row-headers-background">
                    <div class="row-header-wrapper" style="line-height: 20px">196</div>
                </th>
                <td class="s0"></td>
                <td class="s0"><a target="_blank" href="https://lawire.com/">LA Wire</a></td>
                <td class="s1">$500</td>
                <td class="s2">56</td>
                <td class="s3">1 Week</td>
                <td class="s3" dir="ltr">News / Business / Entertainment / Health / Lifestyle </td>
                <td class="s3" dir="ltr">Organic Placement</td>
                <td class="s3">US</td>
            </tr>
            <tr style="height: 20px">
                <th id="0R196" style="height: 20px;" class="row-headers-background">
                    <div class="row-header-wrapper" style="line-height: 20px">197</div>
                </th>
                <td class="s0"></td>
                <td class="s0"><a target="_blank" href="https://usreporter.com/">USReporter</a></td>
                <td class="s1">$500</td>
                <td class="s2">56</td>
                <td class="s3">1 Week</td>
                <td class="s3" dir="ltr">News / Business / Entertainment / Lifestyle / Sports / Tech</td>
                <td class="s3" dir="ltr">Organic Placement</td>
                <td class="s3">US</td>
            </tr>
            <tr style="height: 20px">
                <th id="0R197" style="height: 20px;" class="row-headers-background">
                    <div class="row-header-wrapper" style="line-height: 20px">198</div>
                </th>
                <td class="s0"></td>
                <td class="s0"><a target="_blank" href="https://nywire.com/">NY Wire</a></td>
                <td class="s1">$500</td>
                <td class="s2">57</td>
                <td class="s3">1 Week</td>
                <td class="s3" dir="ltr">News / Business / Health / Entertainment / Lifestyle</td>
                <td class="s3" dir="ltr">Organic Placement</td>
                <td class="s3">US</td>
            </tr>
            <tr style="height: 20px">
                <th id="0R198" style="height: 20px;" class="row-headers-background">
                    <div class="row-header-wrapper" style="line-height: 20px">199</div>
                </th>
                <td class="s0"></td>
                <td class="s0"><a target="_blank" href="https://usinsider.com/">USInsider</a></td>
                <td class="s1">$500</td>
                <td class="s2">60</td>
                <td class="s3">1 Week</td>
                <td class="s3" dir="ltr">News / Business / Lifestyle / Sports</td>
                <td class="s3" dir="ltr">Organic Placement</td>
                <td class="s3">US</td>
            </tr>
            <tr style="height: 20px">
                <th id="0R199" style="height: 20px;" class="row-headers-background">
                    <div class="row-header-wrapper" style="line-height: 20px">200</div>
                </th>
                <td class="s0"></td>
                <td class="s0"><a target="_blank" href="https://voyageny.com/">Voyage New York</a></td>
                <td class="s1">$500</td>
                <td class="s2">61</td>
                <td class="s3">1 Week</td>
                <td class="s3" dir="ltr">News / Entertainment / Fashion / Lifestyle</td>
                <td class="s3" dir="ltr">Organic Placement</td>
                <td class="s3">US</td>
            </tr>
            <tr style="height: 20px">
                <th id="0R200" style="height: 20px;" class="row-headers-background">
                    <div class="row-header-wrapper" style="line-height: 20px">201</div>
                </th>
                <td class="s0"></td>
                <td class="s0"><a target="_blank" href="https://www.laweekly.com/">LA Weekly</a></td>
                <td class="s1">$500</td>
                <td class="s2">77</td>
                <td class="s3">1 Week</td>
                <td class="s3" dir="ltr">News / Business / Music / Entertainment / Tech / CBD / Crypto</td>
                <td class="s3" dir="ltr">Organic with small disclaimer</td>
                <td class="s3">US</td>
            </tr>
            <tr style="height: 20px">
                <th id="0R201" style="height: 20px;" class="row-headers-background">
                    <div class="row-header-wrapper" style="line-height: 20px">202</div>
                </th>
                <td class="s0"></td>
                <td class="s0"><a target="_blank" href="https://www.theweek.in/home.html">The Week</a></td>
                <td class="s1">$520</td>
                <td class="s2">77</td>
                <td class="s3">1 Week</td>
                <td class="s3" dir="ltr">News / Business / Sports / Science / Tech / Entertainment / Health</td>
                <td class="s3" dir="ltr">Organic Placement</td>
                <td class="s3">India</td>
            </tr>
            <tr style="height: 20px">
                <th id="0R202" style="height: 20px;" class="row-headers-background">
                    <div class="row-header-wrapper" style="line-height: 20px">203</div>
                </th>
                <td class="s0"></td>
                <td class="s0" dir="ltr"><a target="_blank" href="http://www.india.com/">India.com</a></td>
                <td class="s1">$540</td>
                <td class="s2">90</td>
                <td class="s3">1 Week</td>
                <td class="s3" dir="ltr">News / Sports / Entertainment / Health / Tech / Business </td>
                <td class="s3" dir="ltr">Sponsored article</td>
                <td class="s3">India</td>
            </tr>
            <tr style="height: 20px">
                <th id="0R203" style="height: 20px;" class="row-headers-background">
                    <div class="row-header-wrapper" style="line-height: 20px">204</div>
                </th>
                <td class="s0"></td>
                <td class="s0"><a target="_blank" href="https://www.hindustantimes.com/">Hindustan Times</a></td>
                <td class="s1">$540</td>
                <td class="s2">91</td>
                <td class="s3">1 Week</td>
                <td class="s3" dir="ltr">News / Entertainment / Lifestyle / Tech / Business</td>
                <td class="s3" dir="ltr">Sponsored article</td>
                <td class="s3">India</td>
            </tr>
            <tr style="height: 20px">
                <th id="0R204" style="height: 20px;" class="row-headers-background">
                    <div class="row-header-wrapper" style="line-height: 20px">205</div>
                </th>
                <td class="s0"></td>
                <td class="s0"><a target="_blank" href="https://ontarioindependent.com/">Ontario Independent</a></td>
                <td class="s1">$600</td>
                <td class="s2">30</td>
                <td class="s3">1 Week</td>
                <td class="s3" dir="ltr">News / Tech / Lifestyle / Business / Music / Sports</td>
                <td class="s3" dir="ltr">Sponsored article</td>
                <td class="s3">Canada</td>
            </tr>
            <tr style="height: 20px">
                <th id="0R205" style="height: 20px;" class="row-headers-background">
                    <div class="row-header-wrapper" style="line-height: 20px">206</div>
                </th>
                <td class="s0"></td>
                <td class="s0"><a target="_blank" href="https://nunavutpost.com/">Nunavut Post</a></td>
                <td class="s1">$600</td>
                <td class="s2">31</td>
                <td class="s3">1 Week</td>
                <td class="s3" dir="ltr">News / Tech / Lifestyle / Business / Music / Sports</td>
                <td class="s3" dir="ltr">Sponsored article</td>
                <td class="s3">Canada</td>
            </tr>
            <tr style="height: 20px">
                <th id="0R206" style="height: 20px;" class="row-headers-background">
                    <div class="row-header-wrapper" style="line-height: 20px">207</div>
                </th>
                <td class="s0"></td>
                <td class="s0"><a target="_blank" href="https://peledger.com/">PE Ledger</a></td>
                <td class="s1">$600</td>
                <td class="s2">31</td>
                <td class="s3">1 Week</td>
                <td class="s3" dir="ltr">News / Tech / Lifestyle / Business / Music / Sports </td>
                <td class="s3" dir="ltr">Sponsored article</td>
                <td class="s3">Canada</td>
            </tr>
            <tr style="height: 20px">
                <th id="0R207" style="height: 20px;" class="row-headers-background">
                    <div class="row-header-wrapper" style="line-height: 20px">208</div>
                </th>
                <td class="s0"></td>
                <td class="s0" dir="ltr"><a target="_blank" href="https://novascotiajournal.com/">Nova Scotia
                        Journal</a></td>
                <td class="s1">$600</td>
                <td class="s2">32</td>
                <td class="s3">1 Week</td>
                <td class="s3" dir="ltr">News / Tech / Lifestyle / Business / Music / Sports </td>
                <td class="s3" dir="ltr">Sponsored article</td>
                <td class="s3">Canada</td>
            </tr>
            <tr style="height: 20px">
                <th id="0R208" style="height: 20px;" class="row-headers-background">
                    <div class="row-header-wrapper" style="line-height: 20px">209</div>
                </th>
                <td class="s0"></td>
                <td class="s0"><a target="_blank" href="https://quebecstandard.com/">Quebec Standard</a></td>
                <td class="s1">$600</td>
                <td class="s2">32</td>
                <td class="s3">1 Week</td>
                <td class="s3" dir="ltr">News / Tech / Lifestyle / Business / Music / Sports</td>
                <td class="s3" dir="ltr">Sponsored article</td>
                <td class="s3">Canada</td>
            </tr>
            <tr style="height: 20px">
                <th id="0R209" style="height: 20px;" class="row-headers-background">
                    <div class="row-header-wrapper" style="line-height: 20px">210</div>
                </th>
                <td class="s0"></td>
                <td class="s0"><a target="_blank" href="https://saskatchewanexaminer.com/">Saskatchewan Examiner</a>
                </td>
                <td class="s1">$600</td>
                <td class="s2">32</td>
                <td class="s3">1 Week</td>
                <td class="s3" dir="ltr">News / Tech / Lifestyle / Business / Music / Sports</td>
                <td class="s3" dir="ltr">Sponsored article</td>
                <td class="s3">Canada</td>
            </tr>
            <tr style="height: 20px">
                <th id="0R210" style="height: 20px;" class="row-headers-background">
                    <div class="row-header-wrapper" style="line-height: 20px">211</div>
                </th>
                <td class="s0"></td>
                <td class="s0"><a target="_blank" href="https://manitobadaily.com/">Manitoba Daily</a></td>
                <td class="s1">$600</td>
                <td class="s2">33</td>
                <td class="s3">1 Week</td>
                <td class="s3" dir="ltr">News / Tech / Lifestyle / Business / Music / Sports</td>
                <td class="s3" dir="ltr">Sponsored article</td>
                <td class="s3">Canada</td>
            </tr>
            <tr style="height: 20px">
                <th id="0R211" style="height: 20px;" class="row-headers-background">
                    <div class="row-header-wrapper" style="line-height: 20px">212</div>
                </th>
                <td class="s0"></td>
                <td class="s0"><a target="_blank" href="https://newbrunswicktribune.com/">New Brunswick Tribune</a></td>
                <td class="s1">$600</td>
                <td class="s2">33</td>
                <td class="s3">1 Week</td>
                <td class="s3" dir="ltr">News / Tech / Lifestyle / Business / Music / Sports</td>
                <td class="s3" dir="ltr">Sponsored article</td>
                <td class="s3">Canada</td>
            </tr>
            <tr style="height: 20px">
                <th id="0R212" style="height: 20px;" class="row-headers-background">
                    <div class="row-header-wrapper" style="line-height: 20px">213</div>
                </th>
                <td class="s0"></td>
                <td class="s0"><a target="_blank" href="https://nlgazette.com/">NL Gazette</a></td>
                <td class="s1">$600</td>
                <td class="s2">33</td>
                <td class="s3">1 Week</td>
                <td class="s3" dir="ltr">News / Tech / Lifestyle / Business / Music / Sports</td>
                <td class="s3" dir="ltr">Sponsored article</td>
                <td class="s3">Canada</td>
            </tr>
            <tr style="height: 20px">
                <th id="0R213" style="height: 20px;" class="row-headers-background">
                    <div class="row-header-wrapper" style="line-height: 20px">214</div>
                </th>
                <td class="s0"></td>
                <td class="s0"><a target="_blank" href="https://yukonweekly.com/">Yukon Weekly</a></td>
                <td class="s1">$600</td>
                <td class="s2">33</td>
                <td class="s3">1 Week</td>
                <td class="s3" dir="ltr">News / Tech / Lifestyle / Business / Music / Sports</td>
                <td class="s3" dir="ltr">Sponsored article</td>
                <td class="s3">Canada</td>
            </tr>
            <tr style="height: 20px">
                <th id="0R214" style="height: 20px;" class="row-headers-background">
                    <div class="row-header-wrapper" style="line-height: 20px">215</div>
                </th>
                <td class="s0"></td>
                <td class="s0"><a target="_blank" href="https://britishcolumbiasun.com/">British Columbia Sun</a></td>
                <td class="s1">$600</td>
                <td class="s2">34</td>
                <td class="s3">1 Week</td>
                <td class="s3" dir="ltr">News / Tech / Lifestyle / Business / Music / Sports</td>
                <td class="s3" dir="ltr">Sponsored article</td>
                <td class="s3">Canada</td>
            </tr>
            <tr style="height: 20px">
                <th id="0R215" style="height: 20px;" class="row-headers-background">
                    <div class="row-header-wrapper" style="line-height: 20px">216</div>
                </th>
                <td class="s0"></td>
                <td class="s0"><a target="_blank" href="https://albertamirror.com/">Alberta Mirror</a></td>
                <td class="s1">$600</td>
                <td class="s2">34</td>
                <td class="s3">1 Week</td>
                <td class="s3" dir="ltr">News / Tech / Lifestyle / Business / Music / Sports</td>
                <td class="s3" dir="ltr">Sponsored article</td>
                <td class="s3">Canada</td>
            </tr>
            <tr style="height: 20px">
                <th id="0R216" style="height: 20px;" class="row-headers-background">
                    <div class="row-header-wrapper" style="line-height: 20px">217</div>
                </th>
                <td class="s0"></td>
                <td class="s0"><a target="_blank" href="https://nwweek.com/">NW Week</a></td>
                <td class="s1">$600</td>
                <td class="s2">34</td>
                <td class="s3">1 Week</td>
                <td class="s3" dir="ltr">News / Tech / Lifestyle</td>
                <td class="s3" dir="ltr">Sponsored article</td>
                <td class="s3">Canada</td>
            </tr>
            <tr style="height: 20px">
                <th id="0R217" style="height: 20px;" class="row-headers-background">
                    <div class="row-header-wrapper" style="line-height: 20px">218</div>
                </th>
                <td class="s0"></td>
                <td class="s0"><a target="_blank" href="https://www.elevatormag.com/">Elevator</a></td>
                <td class="s1">$600</td>
                <td class="s2">51</td>
                <td class="s3">1 Week</td>
                <td class="s3" dir="ltr">Music / Lifestyle</td>
                <td class="s3" dir="ltr">Organic Placement</td>
                <td class="s3">Global</td>
            </tr>
            <tr style="height: 20px">
                <th id="0R218" style="height: 20px;" class="row-headers-background">
                    <div class="row-header-wrapper" style="line-height: 20px">219</div>
                </th>
                <td class="s0"></td>
                <td class="s0"><a target="_blank" href="https://respect-mag.com/">Respect Magazine </a></td>
                <td class="s1">$600</td>
                <td class="s2">61</td>
                <td class="s3">1 Week</td>
                <td class="s3" dir="ltr">Entertainment / Lifestyle / Music / News </td>
                <td class="s3" dir="ltr">Organic Placement</td>
                <td class="s3">Global</td>
            </tr>
            <tr style="height: 20px">
                <th id="0R219" style="height: 20px;" class="row-headers-background">
                    <div class="row-header-wrapper" style="line-height: 20px">220</div>
                </th>
                <td class="s0"></td>
                <td class="s0"><a target="_blank" href="https://neonmusic.co.uk/">Neon Music</a></td>
                <td class="s1">$600</td>
                <td class="s2">61</td>
                <td class="s3">1 Week</td>
                <td class="s3" dir="ltr">Music / News / Lifestyle</td>
                <td class="s3" dir="ltr">Organic Placement</td>
                <td class="s3">Global</td>
            </tr>
            <tr style="height: 20px">
                <th id="0R220" style="height: 20px;" class="row-headers-background">
                    <div class="row-header-wrapper" style="line-height: 20px">221</div>
                </th>
                <td class="s0"></td>
                <td class="s0"><a target="_blank" href="https://www.digitalmusicnews.com/">Digital Music News</a></td>
                <td class="s1">$600</td>
                <td class="s2">76</td>
                <td class="s3">3 Weeks</td>
                <td class="s3" dir="ltr">Music </td>
                <td class="s3" dir="ltr">Organic Placement</td>
                <td class="s3">Global</td>
            </tr>
            <tr style="height: 20px">
                <th id="0R221" style="height: 20px;" class="row-headers-background">
                    <div class="row-header-wrapper" style="line-height: 20px">222</div>
                </th>
                <td class="s0"></td>
                <td class="s0"><a target="_blank" href="https://thesource.com/">The Source</a></td>
                <td class="s1">$600</td>
                <td class="s2">82</td>
                <td class="s3">2 Weeks</td>
                <td class="s3" dir="ltr">Music / News / Music / Entertainment / </td>
                <td class="s3" dir="ltr">Organic Placement</td>
                <td class="s3">Global</td>
            </tr>
            <tr style="height: 20px">
                <th id="0R222" style="height: 20px;" class="row-headers-background">
                    <div class="row-header-wrapper" style="line-height: 20px">223</div>
                </th>
                <td class="s0"></td>
                <td class="s0"><a target="_blank" href="https://www.cryptopolitan.com/">Cryptopolitan</a></td>
                <td class="s1">$600</td>
                <td class="s2">49</td>
                <td class="s3">1 Week</td>
                <td class="s3" dir="ltr">Crypto / Tech</td>
                <td class="s3" dir="ltr">Organic with small disclaimer</td>
                <td class="s3">Global</td>
            </tr>
            <tr style="height: 20px">
                <th id="0R223" style="height: 20px;" class="row-headers-background">
                    <div class="row-header-wrapper" style="line-height: 20px">224</div>
                </th>
                <td class="s0"></td>
                <td class="s0"><a target="_blank" href="https://goodmenproject.com/">Good Men Project</a></td>
                <td class="s1">$600</td>
                <td class="s2">82</td>
                <td class="s3">1 Week</td>
                <td class="s3" dir="ltr">News / Sports / Business / Health</td>
                <td class="s3" dir="ltr">Sponsored article</td>
                <td class="s3">Global</td>
            </tr>
            <tr style="height: 20px">
                <th id="0R224" style="height: 20px;" class="row-headers-background">
                    <div class="row-header-wrapper" style="line-height: 20px">225</div>
                </th>
                <td class="s0"></td>
                <td class="s0"><a target="_blank" href="https://spacecoastdaily.com/">Space Coast Daily </a></td>
                <td class="s1">$600</td>
                <td class="s2">63</td>
                <td class="s3">1 Week</td>
                <td class="s3" dir="ltr">News / Sports / Health / Business / Entertainment</td>
                <td class="s3" dir="ltr">Sponsored article</td>
                <td class="s3">US</td>
            </tr>
            <tr style="height: 20px">
                <th id="0R225" style="height: 20px;" class="row-headers-background">
                    <div class="row-header-wrapper" style="line-height: 20px">226</div>
                </th>
                <td class="s0"></td>
                <td class="s0"><a target="_blank" href="https://epmundo.com/">EP Mundo</a></td>
                <td class="s1">$600</td>
                <td class="s2">50</td>
                <td class="s3">1 Week</td>
                <td class="s3" dir="ltr">Entertainment / Tech</td>
                <td class="s3" dir="ltr">Organic Placement</td>
                <td class="s3">Venezuela</td>
            </tr>
            <tr style="height: 20px">
                <th id="0R226" style="height: 20px;" class="row-headers-background">
                    <div class="row-header-wrapper" style="line-height: 20px">227</div>
                </th>
                <td class="s0"></td>
                <td class="s0"><a target="_blank" href="https://www.venevision.com/">Venevision V</a></td>
                <td class="s1">$600</td>
                <td class="s2">59</td>
                <td class="s3">1 Week</td>
                <td class="s3" dir="ltr">News / Lifestyle / Sports </td>
                <td class="s3" dir="ltr">Organic Placement</td>
                <td class="s3">Venezuela</td>
            </tr>
            <tr style="height: 20px">
                <th id="0R227" style="height: 20px;" class="row-headers-background">
                    <div class="row-header-wrapper" style="line-height: 20px">228</div>
                </th>
                <td class="s0"></td>
                <td class="s0"><a target="_blank" href="https://futuresharks.com/">Future Sharks</a></td>
                <td class="s1">$660</td>
                <td class="s2">30</td>
                <td class="s3">1 Week</td>
                <td class="s3" dir="ltr">Business / News</td>
                <td class="s3" dir="ltr">Organic with small disclaimer</td>
                <td class="s3">Global</td>
            </tr>
            <tr style="height: 20px">
                <th id="0R228" style="height: 20px;" class="row-headers-background">
                    <div class="row-header-wrapper" style="line-height: 20px">229</div>
                </th>
                <td class="s0"></td>
                <td class="s0"><a target="_blank" href="https://dailyhodl.com/">Daily Hodl</a></td>
                <td class="s1">$660</td>
                <td class="s2">56</td>
                <td class="s3">1 Week</td>
                <td class="s3" dir="ltr">Crypto / Tech</td>
                <td class="s3" dir="ltr">Organic with small disclaimer</td>
                <td class="s3">Global</td>
            </tr>
            <tr style="height: 20px">
                <th id="0R229" style="height: 20px;" class="row-headers-background">
                    <div class="row-header-wrapper" style="line-height: 20px">230</div>
                </th>
                <td class="s0"></td>
                <td class="s0"><a target="_blank" href="https://www.businessworld.in/">Business World </a></td>
                <td class="s1">$660</td>
                <td class="s2">76</td>
                <td class="s3">1 Week</td>
                <td class="s3" dir="ltr">Business / News / Movies &amp; TV </td>
                <td class="s3" dir="ltr">Organic Placement</td>
                <td class="s3">India</td>
            </tr>
            <tr style="height: 20px">
                <th id="0R230" style="height: 20px;" class="row-headers-background">
                    <div class="row-header-wrapper" style="line-height: 20px">231</div>
                </th>
                <td class="s0"></td>
                <td class="s0"><a target="_blank" href="https://notion.online/">Notion Online</a></td>
                <td class="s1">$700</td>
                <td class="s2">44</td>
                <td class="s3">1 Week</td>
                <td class="s3" dir="ltr">News</td>
                <td class="s3" dir="ltr">Organic Placement</td>
                <td class="s3">Global</td>
            </tr>
            <tr style="height: 20px">
                <th id="0R231" style="height: 20px;" class="row-headers-background">
                    <div class="row-header-wrapper" style="line-height: 20px">232</div>
                </th>
                <td class="s0"></td>
                <td class="s0"><a target="_blank" href="https://power1051.iheart.com/">Breakfast Club</a></td>
                <td class="s1">$700</td>
                <td class="s2">64</td>
                <td class="s3">2 Weeks</td>
                <td class="s3" dir="ltr">Music</td>
                <td class="s3" dir="ltr">Organic Placement</td>
                <td class="s3">Global</td>
            </tr>
            <tr style="height: 20px">
                <th id="0R232" style="height: 20px;" class="row-headers-background">
                    <div class="row-header-wrapper" style="line-height: 20px">233</div>
                </th>
                <td class="s0"></td>
                <td class="s0"><a target="_blank" href="https://earmilk.com/">EarMilk</a></td>
                <td class="s1">$700</td>
                <td class="s2">69</td>
                <td class="s3">2 Week</td>
                <td class="s3" dir="ltr">Music / Tech / Lifestyle / Fashion </td>
                <td class="s3" dir="ltr">Organic Placement</td>
                <td class="s3">Global</td>
            </tr>
            <tr style="height: 20px">
                <th id="0R233" style="height: 20px;" class="row-headers-background">
                    <div class="row-header-wrapper" style="line-height: 20px">234</div>
                </th>
                <td class="s0"></td>
                <td class="s0"><a target="_blank" href="https://hiphopdx.com/">Hip Hop DX Mention</a></td>
                <td class="s1">$700</td>
                <td class="s2">81</td>
                <td class="s3">2 Weeks</td>
                <td class="s3" dir="ltr">Music / News</td>
                <td class="s3" dir="ltr">Organic Placement</td>
                <td class="s3">Global</td>
            </tr>
            <tr style="height: 20px">
                <th id="0R234" style="height: 20px;" class="row-headers-background">
                    <div class="row-header-wrapper" style="line-height: 20px">235</div>
                </th>
                <td class="s0"></td>
                <td class="s0"><a target="_blank" href="https://www.diarioellibertador.com.ar/">Diario El Libertador</a>
                </td>
                <td class="s1">$720</td>
                <td class="s2">38</td>
                <td class="s3">1 Week</td>
                <td class="s3" dir="ltr">News / Sports</td>
                <td class="s3" dir="ltr">Organic Placement</td>
                <td class="s3">Argentina</td>
            </tr>
            <tr style="height: 20px">
                <th id="0R235" style="height: 20px;" class="row-headers-background">
                    <div class="row-header-wrapper" style="line-height: 20px">236</div>
                </th>
                <td class="s0"></td>
                <td class="s0"><a target="_blank" href="https://cloutnews.com/">Clout News</a></td>
                <td class="s1">$720</td>
                <td class="s2">47</td>
                <td class="s3">1 Week</td>
                <td class="s3" dir="ltr">News / Fashion / Lifestyle / Sports</td>
                <td class="s3" dir="ltr">Organic Placement</td>
                <td class="s3">Global</td>
            </tr>
            <tr style="height: 20px">
                <th id="0R236" style="height: 20px;" class="row-headers-background">
                    <div class="row-header-wrapper" style="line-height: 20px">237</div>
                </th>
                <td class="s0"></td>
                <td class="s0" dir="ltr"><a target="_blank"
                        href="https://blockmanity.com/category/sponsored-content/">Block Manity</a></td>
                <td class="s1">$720</td>
                <td class="s2">40</td>
                <td class="s3">1 Week</td>
                <td class="s3" dir="ltr">Crypto / Tech</td>
                <td class="s3" dir="ltr">Sponsored</td>
                <td class="s3">Global</td>
            </tr>
            <tr style="height: 20px">
                <th id="0R237" style="height: 20px;" class="row-headers-background">
                    <div class="row-header-wrapper" style="line-height: 20px">238</div>
                </th>
                <td class="s0"></td>
                <td class="s0" dir="ltr"><a target="_blank" href="https://www.indiatoday.in/">India Today</a></td>
                <td class="s1">$720</td>
                <td class="s2">90</td>
                <td class="s3">1 Week</td>
                <td class="s3" dir="ltr">News / Movies &amp; TV </td>
                <td class="s3" dir="ltr">Feature</td>
                <td class="s3">India</td>
            </tr>
            <tr style="height: 20px">
                <th id="0R238" style="height: 20px;" class="row-headers-background">
                    <div class="row-header-wrapper" style="line-height: 20px">239</div>
                </th>
                <td class="s0"></td>
                <td class="s0"><a target="_blank" href="https://zeenews.india.com/tags/english.html">Zee News
                        English</a></td>
                <td class="s1">$720</td>
                <td class="s2">90</td>
                <td class="s3">1 Week</td>
                <td class="s3" dir="ltr">News / Entertainment / Sports / Lifestyle / Business / Tech / Movies &amp; TV
                </td>
                <td class="s3" dir="ltr">Organic Placement</td>
                <td class="s3">India</td>
            </tr>
            <tr style="height: 20px">
                <th id="0R239" style="height: 20px;" class="row-headers-background">
                    <div class="row-header-wrapper" style="line-height: 20px">240</div>
                </th>
                <td class="s0"></td>
                <td class="s0"><a target="_blank" href="http://peopleonthenews.com/">People On The News </a></td>
                <td class="s1">$750</td>
                <td class="s2">14</td>
                <td class="s3">1 Week</td>
                <td class="s3" dir="ltr">Lifestyle / Music / Fashion / Sports / Entertainment</td>
                <td class="s3" dir="ltr">Organic Placement</td>
                <td class="s3">Spain</td>
            </tr>
            <tr style="height: 20px">
                <th id="0R240" style="height: 20px;" class="row-headers-background">
                    <div class="row-header-wrapper" style="line-height: 20px">241</div>
                </th>
                <td class="s0"></td>
                <td class="s0"><a target="_blank" href="https://www.republica.com/">La República</a></td>
                <td class="s1">$750</td>
                <td class="s2">82</td>
                <td class="s3">1 Week</td>
                <td class="s3" dir="ltr">News / Sports / Science </td>
                <td class="s3" dir="ltr">Organic Placement</td>
                <td class="s3">Spain</td>
            </tr>
            <tr style="height: 20px">
                <th id="0R241" style="height: 20px;" class="row-headers-background">
                    <div class="row-header-wrapper" style="line-height: 20px">242</div>
                </th>
                <td class="s0"></td>
                <td class="s0"><a target="_blank" href="https://elsiglo.com.ve/">El Siglo</a></td>
                <td class="s1">$750</td>
                <td class="s2">77</td>
                <td class="s3">1 Week</td>
                <td class="s3" dir="ltr">News / Sports / Tech </td>
                <td class="s3" dir="ltr">Organic Placement</td>
                <td class="s3">Venezuela</td>
            </tr>
            <tr style="height: 20px">
                <th id="0R242" style="height: 20px;" class="row-headers-background">
                    <div class="row-header-wrapper" style="line-height: 20px">243</div>
                </th>
                <td class="s0"></td>
                <td class="s0"><a target="_blank" href="https://www.eluniversal.com/">El Universal </a></td>
                <td class="s1">$750</td>
                <td class="s2">83</td>
                <td class="s3">1 Week</td>
                <td class="s3" dir="ltr">News / Sports / Entertainment </td>
                <td class="s3" dir="ltr">Organic Placement</td>
                <td class="s3">Venezuela</td>
            </tr>
            <tr style="height: 20px">
                <th id="0R243" style="height: 20px;" class="row-headers-background">
                    <div class="row-header-wrapper" style="line-height: 20px">244</div>
                </th>
                <td class="s0"></td>
                <td class="s0"><a target="_blank" href="https://lyricallemonade.com/">Lyrical Lemonade</a></td>
                <td class="s1">$800</td>
                <td class="s2">49</td>
                <td class="s3">1 Week</td>
                <td class="s3" dir="ltr">Music </td>
                <td class="s3" dir="ltr">Organic Placement</td>
                <td class="s3">Global</td>
            </tr>
            <tr style="height: 20px">
                <th id="0R244" style="height: 20px;" class="row-headers-background">
                    <div class="row-header-wrapper" style="line-height: 20px">245</div>
                </th>
                <td class="s0"></td>
                <td class="s0"><a target="_blank" href="https://dancingastronaut.com/">Dancing Astronaut</a></td>
                <td class="s1">$800</td>
                <td class="s2">61</td>
                <td class="s3">1 Week</td>
                <td class="s3" dir="ltr">Music</td>
                <td class="s3" dir="ltr">Organic Placement</td>
                <td class="s3">Global</td>
            </tr>
            <tr style="height: 20px">
                <th id="0R245" style="height: 20px;" class="row-headers-background">
                    <div class="row-header-wrapper" style="line-height: 20px">246</div>
                </th>
                <td class="s0"></td>
                <td class="s0"><a target="_blank" href="https://www.geekextreme.com/">Geek Extreme</a></td>
                <td class="s1">$800</td>
                <td class="s2">70</td>
                <td class="s3">1 Week</td>
                <td class="s3" dir="ltr">Lifestyle / Movies &amp; TV / Tech</td>
                <td class="s3" dir="ltr">Organic Placement</td>
                <td class="s3">Global</td>
            </tr>
            <tr style="height: 20px">
                <th id="0R246" style="height: 20px;" class="row-headers-background">
                    <div class="row-header-wrapper" style="line-height: 20px">247</div>
                </th>
                <td class="s0"></td>
                <td class="s0"><a target="_blank" href="https://www.unfinishedman.com/">Unfinished Man</a></td>
                <td class="s1">$800</td>
                <td class="s2">72</td>
                <td class="s3">1 Week</td>
                <td class="s3" dir="ltr">Entertainment / Lifestyle / Movies &amp; TV / Health / Luxury</td>
                <td class="s3" dir="ltr">Organic Placement</td>
                <td class="s3">Global</td>
            </tr>
            <tr style="height: 20px">
                <th id="0R247" style="height: 20px;" class="row-headers-background">
                    <div class="row-header-wrapper" style="line-height: 20px">248</div>
                </th>
                <td class="s0"></td>
                <td class="s0"><a target="_blank" href="https://www.supercryptonews.com/">Super Crypto News</a></td>
                <td class="s1">$800</td>
                <td class="s2">37</td>
                <td class="s3">1 Week</td>
                <td class="s3" dir="ltr">Crypto / News / Tech</td>
                <td class="s3" dir="ltr">Organic with small disclaimer</td>
                <td class="s3">Global</td>
            </tr>
            <tr style="height: 20px">
                <th id="0R248" style="height: 20px;" class="row-headers-background">
                    <div class="row-header-wrapper" style="line-height: 20px">249</div>
                </th>
                <td class="s0"></td>
                <td class="s0"><a target="_blank" href="https://coinpedia.org/">CoinPedia</a></td>
                <td class="s1">$800</td>
                <td class="s2">45</td>
                <td class="s3">1 Week</td>
                <td class="s3" dir="ltr">Crypto / Tech</td>
                <td class="s3" dir="ltr">Organic with small disclaimer</td>
                <td class="s3">Global</td>
            </tr>
            <tr style="height: 20px">
                <th id="0R249" style="height: 20px;" class="row-headers-background">
                    <div class="row-header-wrapper" style="line-height: 20px">250</div>
                </th>
                <td class="s0"></td>
                <td class="s0"><a target="_blank" href="http://cryptonews.com/">Crypto News</a></td>
                <td class="s1">$800</td>
                <td class="s2">60</td>
                <td class="s3">1 Week</td>
                <td class="s3" dir="ltr">Crypto / Tech</td>
                <td class="s3" dir="ltr">Organic with small disclaimer</td>
                <td class="s3">Global</td>
            </tr>
            <tr style="height: 20px">
                <th id="0R250" style="height: 20px;" class="row-headers-background">
                    <div class="row-header-wrapper" style="line-height: 20px">251</div>
                </th>
                <td class="s0"></td>
                <td class="s0"><a target="_blank" href="https://www.livemint.com/">Live Mint</a></td>
                <td class="s1">$800</td>
                <td class="s2">91</td>
                <td class="s3">1 Week</td>
                <td class="s3" dir="ltr">News / Tech / Sports / Business</td>
                <td class="s3" dir="ltr">Sponsored article</td>
                <td class="s3" dir="ltr">India</td>
            </tr>
            <tr style="height: 20px">
                <th id="0R251" style="height: 20px;" class="row-headers-background">
                    <div class="row-header-wrapper" style="line-height: 20px">252</div>
                </th>
                <td class="s0"></td>
                <td class="s0"><a target="_blank" href="https://www.thearabianstories.com/">The Arabian Stories</a></td>
                <td class="s1">$840</td>
                <td class="s2">33</td>
                <td class="s3">1 Week</td>
                <td class="s3" dir="ltr">News / Business / Sports / Health / Tech</td>
                <td class="s3" dir="ltr">Organic Placement</td>
                <td class="s3">Middle East</td>
            </tr>
            <tr style="height: 20px">
                <th id="0R252" style="height: 20px;" class="row-headers-background">
                    <div class="row-header-wrapper" style="line-height: 20px">253</div>
                </th>
                <td class="s5"></td>
                <td class="s0"><a target="_blank" href="https://www.nobhillgazette.com/">Nob Hill Gazette</a></td>
                <td class="s1">$900</td>
                <td class="s2">45</td>
                <td class="s3">2 Weeks</td>
                <td class="s3" dir="ltr">News / Real Estate / Lifestyle</td>
                <td class="s3" dir="ltr">Organic Placement</td>
                <td class="s3">Global</td>
            </tr>
            <tr style="height: 20px">
                <th id="0R253" style="height: 20px;" class="row-headers-background">
                    <div class="row-header-wrapper" style="line-height: 20px">254</div>
                </th>
                <td class="s0"></td>
                <td class="s0"><a target="_blank" href="https://www.celebeat.com/">Celebeat </a></td>
                <td class="s1">$900</td>
                <td class="s2">47</td>
                <td class="s3">1 Week</td>
                <td class="s3" dir="ltr">Entertainment / Fashion / Lifestyle / Health </td>
                <td class="s3" dir="ltr">Organic Placement</td>
                <td class="s3">Global</td>
            </tr>
            <tr style="height: 20px">
                <th id="0R254" style="height: 20px;" class="row-headers-background">
                    <div class="row-header-wrapper" style="line-height: 20px">255</div>
                </th>
                <td class="s0"></td>
                <td class="s0"><a target="_blank" href="https://gritdaily.com/">Grit Daily</a></td>
                <td class="s1">$900</td>
                <td class="s2">58</td>
                <td class="s3">1 Week</td>
                <td class="s3" dir="ltr">News / Tech / Entertainment / Real Estate</td>
                <td class="s3" dir="ltr">Organic Placement</td>
                <td class="s3">Global</td>
            </tr>
            <tr style="height: 20px">
                <th id="0R255" style="height: 20px;" class="row-headers-background">
                    <div class="row-header-wrapper" style="line-height: 20px">256</div>
                </th>
                <td class="s0"></td>
                <td class="s0"><a target="_blank" href="https://fashionweekdaily.com/">Fashion Week Daily</a></td>
                <td class="s1">$900</td>
                <td class="s2">69</td>
                <td class="s3">1 Week</td>
                <td class="s3" dir="ltr">Fashion / Lifestyle / News </td>
                <td class="s3" dir="ltr">Organic Placement</td>
                <td class="s3">Global</td>
            </tr>
            <tr style="height: 20px">
                <th id="0R256" style="height: 20px;" class="row-headers-background">
                    <div class="row-header-wrapper" style="line-height: 20px">257</div>
                </th>
                <td class="s0"></td>
                <td class="s0"><a target="_blank" href="http://boomsbeat.com/">Boomsbeat</a></td>
                <td class="s1">$900</td>
                <td class="s2">70</td>
                <td class="s3">1 Week</td>
                <td class="s3" dir="ltr">News / Lifestyle </td>
                <td class="s3" dir="ltr">Organic Placement</td>
                <td class="s3">Global</td>
            </tr>
            <tr style="height: 20px">
                <th id="0R257" style="height: 20px;" class="row-headers-background">
                    <div class="row-header-wrapper" style="line-height: 20px">258</div>
                </th>
                <td class="s0"></td>
                <td class="s0"><a target="_blank" href="https://www.techtimes.com/">Tech Times</a></td>
                <td class="s1">$900</td>
                <td class="s2">83</td>
                <td class="s3">1 Week</td>
                <td class="s3" dir="ltr">Tech / Science / Business / Health / Culture</td>
                <td class="s3" dir="ltr">Organic Placement</td>
                <td class="s3">Global</td>
            </tr>
            <tr style="height: 20px">
                <th id="0R258" style="height: 20px;" class="row-headers-background">
                    <div class="row-header-wrapper" style="line-height: 20px">259</div>
                </th>
                <td class="s0"></td>
                <td class="s0"><a target="_blank" href="https://www.am.com.mx/">Periodico AM</a></td>
                <td class="s1">$900</td>
                <td class="s2">77</td>
                <td class="s3">1 Week</td>
                <td class="s3" dir="ltr">News / Science / Health / Tech </td>
                <td class="s3" dir="ltr">Organic Placement</td>
                <td class="s3">Mexico</td>
            </tr>
            <tr style="height: 20px">
                <th id="0R259" style="height: 20px;" class="row-headers-background">
                    <div class="row-header-wrapper" style="line-height: 20px">260</div>
                </th>
                <td class="s0"></td>
                <td class="s0"><a target="_blank" href="https://www.khaleejtimes.com/">Khaleej Times</a></td>
                <td class="s1">$900</td>
                <td class="s2">86</td>
                <td class="s3">1 Week</td>
                <td class="s3" dir="ltr">News / Business / Sports / Entertainment / Lifestyle </td>
                <td class="s3" dir="ltr">Organic with small disclaimer</td>
                <td class="s3">Middle East</td>
            </tr>
            <tr style="height: 20px">
                <th id="0R260" style="height: 20px;" class="row-headers-background">
                    <div class="row-header-wrapper" style="line-height: 20px">261</div>
                </th>
                <td class="s0"></td>
                <td class="s0"><a target="_blank" href="https://www.thesouthafrican.com/">The South African </a></td>
                <td class="s1">$900</td>
                <td class="s2">82</td>
                <td class="s3">1 Week</td>
                <td class="s3" dir="ltr">News / Sports / Lifestyle / Business </td>
                <td class="s3" dir="ltr">Organic Placement</td>
                <td class="s3">South Africa</td>
            </tr>
            <tr style="height: 20px">
                <th id="0R261" style="height: 20px;" class="row-headers-background">
                    <div class="row-header-wrapper" style="line-height: 20px">262</div>
                </th>
                <td class="s0"></td>
                <td class="s0"><a target="_blank" href="http://wowlarevista.com/">Wow La Revista</a></td>
                <td class="s1">$900</td>
                <td class="s2">29</td>
                <td class="s3">1 Week</td>
                <td class="s3" dir="ltr">News / Fashion / Music / Lifestyle</td>
                <td class="s3" dir="ltr">Organic Placement</td>
                <td class="s3">Spain</td>
            </tr>
            <tr style="height: 20px">
                <th id="0R262" style="height: 20px;" class="row-headers-background">
                    <div class="row-header-wrapper" style="line-height: 20px">263</div>
                </th>
                <td class="s0"></td>
                <td class="s0"><a target="_blank" href="https://ensegundos.do/">En Segundos</a></td>
                <td class="s1">$900</td>
                <td class="s2">46</td>
                <td class="s3">1 Week</td>
                <td class="s3" dir="ltr">News / Entertainment / Science / Tech / Sports</td>
                <td class="s3" dir="ltr">Organic Placement</td>
                <td class="s3">Spain</td>
            </tr>
            <tr style="height: 20px">
                <th id="0R263" style="height: 20px;" class="row-headers-background">
                    <div class="row-header-wrapper" style="line-height: 20px">264</div>
                </th>
                <td class="s0"></td>
                <td class="s0"><a target="_blank" href="https://www.elcaribe.com.do/">El Caribe</a></td>
                <td class="s1">$900</td>
                <td class="s2">67</td>
                <td class="s3">1 Week</td>
                <td class="s3" dir="ltr">News / Sports</td>
                <td class="s3" dir="ltr">Organic Placement</td>
                <td class="s3">Spain</td>
            </tr>
            <tr style="height: 20px">
                <th id="0R264" style="height: 20px;" class="row-headers-background">
                    <div class="row-header-wrapper" style="line-height: 20px">265</div>
                </th>
                <td class="s0"></td>
                <td class="s0"><a target="_blank" href="https://elnacional.com.do/">El Nacional</a></td>
                <td class="s1">$900</td>
                <td class="s2">71</td>
                <td class="s3">1 Week</td>
                <td class="s3" dir="ltr">News / Health / Sports</td>
                <td class="s3" dir="ltr">Organic Placement</td>
                <td class="s3">Spain</td>
            </tr>
            <tr style="height: 20px">
                <th id="0R265" style="height: 20px;" class="row-headers-background">
                    <div class="row-header-wrapper" style="line-height: 20px">266</div>
                </th>
                <td class="s0"></td>
                <td class="s0"><a target="_blank" href="https://elnuevodiario.com.do/">El Nuevo Diario</a></td>
                <td class="s1">$900</td>
                <td class="s2">71</td>
                <td class="s3">1 Week</td>
                <td class="s3" dir="ltr">News / Movies &amp; TV </td>
                <td class="s3" dir="ltr">Organic Placement</td>
                <td class="s3">Spain</td>
            </tr>
            <tr style="height: 20px">
                <th id="0R266" style="height: 20px;" class="row-headers-background">
                    <div class="row-header-wrapper" style="line-height: 20px">267</div>
                </th>
                <td class="s0"></td>
                <td class="s0"><a target="_blank" href="https://www.diariolibre.com/">Diario Libre</a></td>
                <td class="s1">$900</td>
                <td class="s2">79</td>
                <td class="s3">1 Week</td>
                <td class="s3" dir="ltr">News / Health</td>
                <td class="s3" dir="ltr">Organic Placement</td>
                <td class="s3">Spain</td>
            </tr>
            <tr style="height: 20px">
                <th id="0R267" style="height: 20px;" class="row-headers-background">
                    <div class="row-header-wrapper" style="line-height: 20px">268</div>
                </th>
                <td class="s0"></td>
                <td class="s0"><a target="_blank" href="http://www.laverdad.com/">La Verdad</a></td>
                <td class="s1">$900</td>
                <td class="s2">67</td>
                <td class="s3">1 Week</td>
                <td class="s3" dir="ltr">News / Sports / Tech </td>
                <td class="s3" dir="ltr">Organic Placement</td>
                <td class="s3">Venezuela</td>
            </tr>
            <tr style="height: 20px">
                <th id="0R268" style="height: 20px;" class="row-headers-background">
                    <div class="row-header-wrapper" style="line-height: 20px">269</div>
                </th>
                <td class="s0"></td>
                <td class="s0" dir="ltr"><a target="_blank" href="https://modernluxurymedia.com/">Modern Luxury
                        Media</a></td>
                <td class="s1">$960</td>
                <td class="s2">67</td>
                <td class="s3">1 Week</td>
                <td class="s3" dir="ltr">Luxury</td>
                <td class="s3" dir="ltr">Organic Placement</td>
                <td class="s3">Global</td>
            </tr>
            <tr style="height: 20px">
                <th id="0R269" style="height: 20px;" class="row-headers-background">
                    <div class="row-header-wrapper" style="line-height: 20px">270</div>
                </th>
                <td class="s0"></td>
                <td class="s0"><a target="_blank" href="https://capitolfile.com/">Capitol File </a></td>
                <td class="s1">$960</td>
                <td class="s2">55</td>
                <td class="s3">1 Week</td>
                <td class="s3" dir="ltr">News / Real Estate </td>
                <td class="s3" dir="ltr">Sponsored article</td>
                <td class="s3">Global</td>
            </tr>
            <tr style="height: 20px">
                <th id="0R270" style="height: 20px;" class="row-headers-background">
                    <div class="row-header-wrapper" style="line-height: 20px">271</div>
                </th>
                <td class="s0"></td>
                <td class="s0"><a target="_blank" href="https://www.newsofbahrain.com/">The Daily Tribune</a></td>
                <td class="s1">$960</td>
                <td class="s2">53</td>
                <td class="s3">2 Weeks</td>
                <td class="s3" dir="ltr">News / Business / Sports</td>
                <td class="s3" dir="ltr">Organic Placement</td>
                <td class="s3">Middle East</td>
            </tr>
            <tr style="height: 20px">
                <th id="0R271" style="height: 20px;" class="row-headers-background">
                    <div class="row-header-wrapper" style="line-height: 20px">272</div>
                </th>
                <td class="s0"></td>
                <td class="s0"><a target="_blank" href="http://www.tradearabia.com/">Trade Arabia</a></td>
                <td class="s1">$960</td>
                <td class="s2">70</td>
                <td class="s3">1 Week</td>
                <td class="s3" dir="ltr">News / Business </td>
                <td class="s3" dir="ltr">Organic Placement</td>
                <td class="s3">Middle East</td>
            </tr>
            <tr style="height: 20px">
                <th id="0R272" style="height: 20px;" class="row-headers-background">
                    <div class="row-header-wrapper" style="line-height: 20px">273</div>
                </th>
                <td class="s0"></td>
                <td class="s0"><a target="_blank" href="https://mlhoustonmagazine.com/">ML Houston</a></td>
                <td class="s1">$960</td>
                <td class="s2">14</td>
                <td class="s3">1 Week</td>
                <td class="s3" dir="ltr">Real Estate / Lifestyle</td>
                <td class="s3" dir="ltr">Sponsored article</td>
                <td class="s3">US</td>
            </tr>
            <tr style="height: 20px">
                <th id="0R273" style="height: 20px;" class="row-headers-background">
                    <div class="row-header-wrapper" style="line-height: 20px">274</div>
                </th>
                <td class="s0"></td>
                <td class="s0"><a target="_blank" href="https://mlmanhattan.com/">ML Manhattan </a></td>
                <td class="s1">$960</td>
                <td class="s2">22</td>
                <td class="s3">1 Week</td>
                <td class="s3" dir="ltr">Real Estate / Lifestyle</td>
                <td class="s3" dir="ltr">Sponsored article</td>
                <td class="s3">US</td>
            </tr>
            <tr style="height: 20px">
                <th id="0R274" style="height: 20px;" class="row-headers-background">
                    <div class="row-header-wrapper" style="line-height: 20px">275</div>
                </th>
                <td class="s0"></td>
                <td class="s0"><a target="_blank" href="https://mlmiamimag.com/">ML Miami Mag </a></td>
                <td class="s1">$960</td>
                <td class="s2">24</td>
                <td class="s3">1 Week</td>
                <td class="s3" dir="ltr">Luxury / Real Estate / Lifestyle</td>
                <td class="s3" dir="ltr">Sponsored article</td>
                <td class="s3">US</td>
            </tr>
            <tr style="height: 20px">
                <th id="0R275" style="height: 20px;" class="row-headers-background">
                    <div class="row-header-wrapper" style="line-height: 20px">276</div>
                </th>
                <td class="s0"></td>
                <td class="s0"><a target="_blank" href="https://phillystylemag.com/">Philly Style Mag </a></td>
                <td class="s1">$960</td>
                <td class="s2">55</td>
                <td class="s3">1 Week</td>
                <td class="s3" dir="ltr">Lifestyle / Real Estate / Luxury</td>
                <td class="s3" dir="ltr">Sponsored article</td>
                <td class="s3">US</td>
            </tr>
            <tr style="height: 20px">
                <th id="0R276" style="height: 20px;" class="row-headers-background">
                    <div class="row-header-wrapper" style="line-height: 20px">277</div>
                </th>
                <td class="s0"></td>
                <td class="s0"><a target="_blank"
                        href="https://www.billboard.com/charts/billboard-argentina-hot-100/">Billboard Argentina</a>
                </td>
                <td class="s1">$1,000</td>
                <td class="s2">53</td>
                <td class="s3">2 Weeks</td>
                <td class="s3" dir="ltr">Music / Business</td>
                <td class="s3" dir="ltr">Organic Placement</td>
                <td class="s3" dir="ltr">Argentina</td>
            </tr>
            <tr style="height: 20px">
                <th id="0R277" style="height: 20px;" class="row-headers-background">
                    <div class="row-header-wrapper" style="line-height: 20px">278</div>
                </th>
                <td class="s0"></td>
                <td class="s0"><a target="_blank" href="https://www.morninghoney.com/">Morning Honey</a></td>
                <td class="s1">$1,000</td>
                <td class="s2">28</td>
                <td class="s3">1 Week</td>
                <td class="s3" dir="ltr">News / Lifestyle / Health </td>
                <td class="s3" dir="ltr">Organic Placement</td>
                <td class="s3">Global</td>
            </tr>
            <tr style="height: 20px">
                <th id="0R278" style="height: 20px;" class="row-headers-background">
                    <div class="row-header-wrapper" style="line-height: 20px">279</div>
                </th>
                <td class="s0"></td>
                <td class="s0"><a target="_blank" href="https://womensgolfjournal.com/">Womens Golf Journal</a></td>
                <td class="s1">$1,000</td>
                <td class="s2">29</td>
                <td class="s3">1 Week</td>
                <td class="s3" dir="ltr">News </td>
                <td class="s3" dir="ltr">Organic Placement</td>
                <td class="s3">Global</td>
            </tr>
            <tr style="height: 20px">
                <th id="0R279" style="height: 20px;" class="row-headers-background">
                    <div class="row-header-wrapper" style="line-height: 20px">280</div>
                </th>
                <td class="s0"></td>
                <td class="s0"><a target="_blank" href="https://www.frontpagedetectives.com/">Front Page Detectives</a>
                </td>
                <td class="s1">$1,000</td>
                <td class="s2">30</td>
                <td class="s3">1 Week</td>
                <td class="s3" dir="ltr">News / Lifestyle</td>
                <td class="s3" dir="ltr">Organic Placement</td>
                <td class="s3">Global</td>
            </tr>
            <tr style="height: 20px">
                <th id="0R280" style="height: 20px;" class="row-headers-background">
                    <div class="row-header-wrapper" style="line-height: 20px">281</div>
                </th>
                <td class="s0"></td>
                <td class="s0"><a target="_blank" href="https://www.swaggermagazine.com/">Swagger Magazine</a></td>
                <td class="s1">$1,000</td>
                <td class="s2">61</td>
                <td class="s3">2 Weeks</td>
                <td class="s3" dir="ltr">News / Business / Tech / Health / Sports / Entertainment </td>
                <td class="s3" dir="ltr">Organic with small disclaimer</td>
                <td class="s3">Global</td>
            </tr>
            <tr style="height: 20px">
                <th id="0R281" style="height: 20px;" class="row-headers-background">
                    <div class="row-header-wrapper" style="line-height: 20px">282</div>
                </th>
                <td class="s0"></td>
                <td class="s0"><a target="_blank" href="https://www.fxstreet.com/">FXStreet</a></td>
                <td class="s1">$1,000</td>
                <td class="s2">76</td>
                <td class="s3">1 Week</td>
                <td class="s3" dir="ltr">Crypto / Tech </td>
                <td class="s3" dir="ltr">Organic with small disclaimer</td>
                <td class="s3">Global</td>
            </tr>
            <tr style="height: 20px">
                <th id="0R282" style="height: 20px;" class="row-headers-background">
                    <div class="row-header-wrapper" style="line-height: 20px">283</div>
                </th>
                <td class="s0"></td>
                <td class="s0"><a target="_blank" href="https://www.theroyalobserver.com/">The Royal Observer</a></td>
                <td class="s1">$1,000</td>
                <td class="s2">32</td>
                <td class="s3">1 Week</td>
                <td class="s3" dir="ltr">News / Lifestyle</td>
                <td class="s3" dir="ltr">Organic Placement</td>
                <td class="s3">UK</td>
            </tr>
            <tr style="height: 20px">
                <th id="0R283" style="height: 20px;" class="row-headers-background">
                    <div class="row-header-wrapper" style="line-height: 20px">284</div>
                </th>
                <td class="s0"></td>
                <td class="s0"><a target="_blank" href="https://www.femalefirst.co.uk/">Female First</a></td>
                <td class="s1">$1,000</td>
                <td class="s2">78</td>
                <td class="s3">1 Week</td>
                <td class="s3" dir="ltr">News / Entertainment / Lifestyle </td>
                <td class="s3" dir="ltr">Organic Placement</td>
                <td class="s3">UK</td>
            </tr>
            <tr style="height: 20px">
                <th id="0R284" style="height: 20px;" class="row-headers-background">
                    <div class="row-header-wrapper" style="line-height: 20px">285</div>
                </th>
                <td class="s0"></td>
                <td class="s0" dir="ltr"><a target="_blank" href="https://jezebelmagazine.com/">Jezebel Magazine</a>
                </td>
                <td class="s1">$1,050</td>
                <td class="s2">28</td>
                <td class="s3">2 Weeks</td>
                <td class="s3" dir="ltr">Luxury / Lifestyle / Real Estate</td>
                <td class="s3" dir="ltr">Organic Placement</td>
                <td class="s3">Global</td>
            </tr>
            <tr style="height: 20px">
                <th id="0R285" style="height: 20px;" class="row-headers-background">
                    <div class="row-header-wrapper" style="line-height: 20px">286</div>
                </th>
                <td class="s0"></td>
                <td class="s0"><a target="_blank" href="https://mensbook.com/">Mensbook</a></td>
                <td class="s1">$1,050</td>
                <td class="s2">27</td>
                <td class="s3">1 Week</td>
                <td class="s3" dir="ltr">Lifestyle / Health </td>
                <td class="s3" dir="ltr">Sponsored article</td>
                <td class="s3">Global</td>
            </tr>
            <tr style="height: 20px">
                <th id="0R286" style="height: 20px;" class="row-headers-background">
                    <div class="row-header-wrapper" style="line-height: 20px">287</div>
                </th>
                <td class="s0"></td>
                <td class="s0"><a target="_blank" href="https://www.elsoldechiapas.com/">El Sol de Chiapas</a></td>
                <td class="s1">$1,050</td>
                <td class="s2">34</td>
                <td class="s3">1 Week</td>
                <td class="s3" dir="ltr">News / Sports</td>
                <td class="s3" dir="ltr">Organic Placement</td>
                <td class="s3">Mexico</td>
            </tr>
            <tr style="height: 20px">
                <th id="0R287" style="height: 20px;" class="row-headers-background">
                    <div class="row-header-wrapper" style="line-height: 20px">288</div>
                </th>
                <td class="s0"></td>
                <td class="s0"><a target="_blank" href="https://mlaspen.com/">Aspen Magazine</a></td>
                <td class="s1">$1,050</td>
                <td class="s2">20</td>
                <td class="s3">2 Weeks</td>
                <td class="s3" dir="ltr">Luxury / Magazine</td>
                <td class="s3" dir="ltr">Organic Placement</td>
                <td class="s3">US</td>
            </tr>
            <tr style="height: 20px">
                <th id="0R288" style="height: 20px;" class="row-headers-background">
                    <div class="row-header-wrapper" style="line-height: 20px">289</div>
                </th>
                <td class="s0"></td>
                <td class="s0" dir="ltr"><a target="_blank" href="https://mlmiamimag.com/">Modern Luxury Miami</a></td>
                <td class="s1">$1,050</td>
                <td class="s2">28</td>
                <td class="s3">2 Weeks</td>
                <td class="s3" dir="ltr">Luxury / Real Estate </td>
                <td class="s3" dir="ltr">Organic Placement</td>
                <td class="s3">US</td>
            </tr>
            <tr style="height: 20px">
                <th id="0R289" style="height: 20px;" class="row-headers-background">
                    <div class="row-header-wrapper" style="line-height: 20px">290</div>
                </th>
                <td class="s0"></td>
                <td class="s0"><a target="_blank" href="https://mlhamptons.com/">Hamptons Magazine</a></td>
                <td class="s1">$1,050</td>
                <td class="s2">56</td>
                <td class="s3">2 Weeks</td>
                <td class="s3" dir="ltr">Luxury / Real Estate</td>
                <td class="s3" dir="ltr">Organic Placement</td>
                <td class="s3">US</td>
            </tr>
            <tr style="height: 20px">
                <th id="0R290" style="height: 20px;" class="row-headers-background">
                    <div class="row-header-wrapper" style="line-height: 20px">291</div>
                </th>
                <td class="s5"></td>
                <td class="s0"><a target="_blank" href="https://mlsiliconvalley.com/">Modern Luxury Silicon Valley</a>
                </td>
                <td class="s1">$1,050</td>
                <td class="s2">19</td>
                <td class="s3">2 Weeks</td>
                <td class="s3" dir="ltr">News / Luxury</td>
                <td class="s3" dir="ltr">Organic with small disclaimer</td>
                <td class="s3">US</td>
            </tr>
            <tr style="height: 20px">
                <th id="0R291" style="height: 20px;" class="row-headers-background">
                    <div class="row-header-wrapper" style="line-height: 20px">292</div>
                </th>
                <td class="s5"></td>
                <td class="s0"><a target="_blank" href="https://mldallasmagazine.com/">Dallas Magazine</a></td>
                <td class="s1">$1,050</td>
                <td class="s2">19</td>
                <td class="s3">2 Weeks</td>
                <td class="s3" dir="ltr">News / Luxury</td>
                <td class="s3" dir="ltr">Organic with small disclaimer</td>
                <td class="s3">US</td>
            </tr>
            <tr style="height: 20px">
                <th id="0R292" style="height: 20px;" class="row-headers-background">
                    <div class="row-header-wrapper" style="line-height: 20px">293</div>
                </th>
                <td class="s5"></td>
                <td class="s0"><a target="_blank" href="https://mlsandiegomag.com/">San Diego Magazine</a></td>
                <td class="s1">$1,050</td>
                <td class="s2">23</td>
                <td class="s3">2 Weeks</td>
                <td class="s3" dir="ltr">News / Luxury / Lifestyle / Real Estate</td>
                <td class="s3" dir="ltr">Organic with small disclaimer</td>
                <td class="s3">US</td>
            </tr>
            <tr style="height: 20px">
                <th id="0R293" style="height: 20px;" class="row-headers-background">
                    <div class="row-header-wrapper" style="line-height: 20px">294</div>
                </th>
                <td class="s5"></td>
                <td class="s0"><a target="_blank" href="https://mlmanhattan.com/">Manhattan Magazine</a></td>
                <td class="s1">$1,050</td>
                <td class="s2">25</td>
                <td class="s3">2 Weeks</td>
                <td class="s3" dir="ltr">News / Luxury / Real Estate / Lifestyle</td>
                <td class="s3" dir="ltr">Organic with small disclaimer</td>
                <td class="s3">US</td>
            </tr>
            <tr style="height: 20px">
                <th id="0R294" style="height: 20px;" class="row-headers-background">
                    <div class="row-header-wrapper" style="line-height: 20px">295</div>
                </th>
                <td class="s5"></td>
                <td class="s0"><a target="_blank" href="https://mlangeleno.com/">Modern Luxury Angeleno</a></td>
                <td class="s1">$1,050</td>
                <td class="s2">28</td>
                <td class="s3">2 Weeks</td>
                <td class="s3" dir="ltr">News / Luxury / Lifestyle</td>
                <td class="s3" dir="ltr">Organic with small disclaimer</td>
                <td class="s3">US</td>
            </tr>
            <tr style="height: 20px">
                <th id="0R295" style="height: 20px;" class="row-headers-background">
                    <div class="row-header-wrapper" style="line-height: 20px">296</div>
                </th>
                <td class="s0"></td>
                <td class="s0"><a target="_blank" href="https://sanfran.com/">San Francisco Magazine</a></td>
                <td class="s1">$1,050</td>
                <td class="s2">38</td>
                <td class="s3">1 Week</td>
                <td class="s3" dir="ltr">Lifestyle / Real Estate</td>
                <td class="s3" dir="ltr">Sponsored article</td>
                <td class="s3">US</td>
            </tr>
            <tr style="height: 20px">
                <th id="0R296" style="height: 20px;" class="row-headers-background">
                    <div class="row-header-wrapper" style="line-height: 20px">297</div>
                </th>
                <td class="s0"></td>
                <td class="s0"><a target="_blank" href="https://vegasmagazine.com/">Vegas Magazine </a></td>
                <td class="s1">$1,050</td>
                <td class="s2">56</td>
                <td class="s3">1 Week</td>
                <td class="s3" dir="ltr">Lifestyle / Real Estate</td>
                <td class="s3" dir="ltr">Sponsored article</td>
                <td class="s3">US</td>
            </tr>
            <tr style="height: 20px">
                <th id="0R297" style="height: 20px;" class="row-headers-background">
                    <div class="row-header-wrapper" style="line-height: 20px">298</div>
                </th>
                <td class="s0"></td>
                <td class="s0"><a target="_blank" href="https://laconfidentialmag.com/">LA Confidential</a></td>
                <td class="s1">$1,050</td>
                <td class="s2">58</td>
                <td class="s3">1 Week</td>
                <td class="s3" dir="ltr">Lifestyle / Movies &amp; TV </td>
                <td class="s3" dir="ltr">Sponsored article</td>
                <td class="s3">US</td>
            </tr>
            <tr style="height: 20px">
                <th id="0R298" style="height: 20px;" class="row-headers-background">
                    <div class="row-header-wrapper" style="line-height: 20px">299</div>
                </th>
                <td class="s0"></td>
                <td class="s0"><a target="_blank" href="https://gothammag.com/">Gotham Magazine </a></td>
                <td class="s1">$1,050</td>
                <td class="s2">61</td>
                <td class="s3">1 Week</td>
                <td class="s3" dir="ltr">Lifestyle / Real Estate / Luxury</td>
                <td class="s3" dir="ltr">Sponsored article</td>
                <td class="s3">US</td>
            </tr>
            <tr style="height: 20px">
                <th id="0R299" style="height: 20px;" class="row-headers-background">
                    <div class="row-header-wrapper" style="line-height: 20px">300</div>
                </th>
                <td class="s0"></td>
                <td class="s0"><a target="_blank" href="https://oceandrive.com/">Ocean Drive </a></td>
                <td class="s1">$1,050</td>
                <td class="s2">68</td>
                <td class="s3">1 Week</td>
                <td class="s3" dir="ltr">Lifestyle / Real Estate / Luxury</td>
                <td class="s3" dir="ltr">Sponsored article</td>
                <td class="s3">US</td>
            </tr>
            <tr style="height: 20px">
                <th id="0R300" style="height: 20px;" class="row-headers-background">
                    <div class="row-header-wrapper" style="line-height: 20px">301</div>
                </th>
                <td class="s0"></td>
                <td class="s0"><a target="_blank" href="https://www.coinspeaker.com/">CoinSpeaker</a></td>
                <td class="s1">$1,100</td>
                <td class="s2">70</td>
                <td class="s3">1 Week</td>
                <td class="s3" dir="ltr">Crypto / Business / Tech </td>
                <td class="s3" dir="ltr">Organic with small disclaimer</td>
                <td class="s3">Global</td>
            </tr>
            <tr style="height: 20px">
                <th id="0R301" style="height: 20px;" class="row-headers-background">
                    <div class="row-header-wrapper" style="line-height: 20px">302</div>
                </th>
                <td class="s0"></td>
                <td class="s0"><a target="_blank" href="https://www.gulf-times.com/">Gulf Times</a></td>
                <td class="s1">$1,100</td>
                <td class="s2">73</td>
                <td class="s3">1 Week</td>
                <td class="s3" dir="ltr">News / Business / Sports</td>
                <td class="s3" dir="ltr">Organic with small disclaimer</td>
                <td class="s3">Middle East</td>
            </tr>
            <tr style="height: 20px">
                <th id="0R302" style="height: 20px;" class="row-headers-background">
                    <div class="row-header-wrapper" style="line-height: 20px">303</div>
                </th>
                <td class="s0"></td>
                <td class="s0"><a target="_blank" href="https://www.fastcompany.co.za/">Fast Company Africa</a></td>
                <td class="s1">$1,100</td>
                <td class="s2">37</td>
                <td class="s3">1 Week</td>
                <td class="s3" dir="ltr">News / Business / Tech </td>
                <td class="s3" dir="ltr">Organic with small disclaimer</td>
                <td class="s3">South Africa</td>
            </tr>
            <tr style="height: 20px">
                <th id="0R303" style="height: 20px;" class="row-headers-background">
                    <div class="row-header-wrapper" style="line-height: 20px">304</div>
                </th>
                <td class="s0"></td>
                <td class="s0"><a target="_blank" href="https://lalibertad.com.co/">Diario la libertad</a></td>
                <td class="s1">$1,200</td>
                <td class="s2">42</td>
                <td class="s3">1 Week</td>
                <td class="s3" dir="ltr">Sports</td>
                <td class="s3" dir="ltr">Organic Placement</td>
                <td class="s3">Colombia</td>
            </tr>
            <tr style="height: 20px">
                <th id="0R304" style="height: 20px;" class="row-headers-background">
                    <div class="row-header-wrapper" style="line-height: 20px">305</div>
                </th>
                <td class="s0"></td>
                <td class="s0"><a target="_blank" href="https://www.eluniversal.com.co/">Universal </a></td>
                <td class="s1">$1,200</td>
                <td class="s2">81</td>
                <td class="s3">1 Week</td>
                <td class="s3" dir="ltr">News / Sports / Entertainment</td>
                <td class="s3" dir="ltr">Organic Placement</td>
                <td class="s3">Colombia</td>
            </tr>
            <tr style="height: 20px">
                <th id="0R305" style="height: 20px;" class="row-headers-background">
                    <div class="row-header-wrapper" style="line-height: 20px">306</div>
                </th>
                <td class="s0"></td>
                <td class="s0"><a target="_blank" href="https://www.hautetime.com/">Haute Time</a></td>
                <td class="s1">$1,200</td>
                <td class="s2">59</td>
                <td class="s3">1 Week</td>
                <td class="s3" dir="ltr">Luxury</td>
                <td class="s3" dir="ltr">Organic with small disclaimer</td>
                <td class="s3">Global</td>
            </tr>
            <tr style="height: 20px">
                <th id="0R306" style="height: 20px;" class="row-headers-background">
                    <div class="row-header-wrapper" style="line-height: 20px">307</div>
                </th>
                <td class="s0"></td>
                <td class="s0"><a target="_blank" href="https://hauteliving.com/hautebeauty/">Haute Beauty</a></td>
                <td class="s1">$1,200</td>
                <td class="s2">73</td>
                <td class="s3">1 Week</td>
                <td class="s3" dir="ltr">Lifestyle / Fashion / Luxury</td>
                <td class="s3" dir="ltr">Organic with small disclaimer</td>
                <td class="s3">Global</td>
            </tr>
            <tr style="height: 20px">
                <th id="0R307" style="height: 20px;" class="row-headers-background">
                    <div class="row-header-wrapper" style="line-height: 20px">308</div>
                </th>
                <td class="s0"></td>
                <td class="s0"><a target="_blank" href="https://hauteliving.com/">Haute Living</a></td>
                <td class="s1">$1,200</td>
                <td class="s2">73</td>
                <td class="s3">1 Week</td>
                <td class="s3" dir="ltr">News / Lifestyle / Fashion / Luxury</td>
                <td class="s3" dir="ltr">Organic with small disclaimer</td>
                <td class="s3">Global</td>
            </tr>
            <tr style="height: 20px">
                <th id="0R308" style="height: 20px;" class="row-headers-background">
                    <div class="row-header-wrapper" style="line-height: 20px">309</div>
                </th>
                <td class="s0"></td>
                <td class="s0"><a target="_blank" href="https://www.villagevoice.com/">Village Voice </a></td>
                <td class="s1">$1,200</td>
                <td class="s2">85</td>
                <td class="s3">1 Week</td>
                <td class="s3" dir="ltr">News</td>
                <td class="s3" dir="ltr">Organic with small disclaimer</td>
                <td class="s3">Global</td>
            </tr>
            <tr style="height: 20px">
                <th id="0R309" style="height: 20px;" class="row-headers-background">
                    <div class="row-header-wrapper" style="line-height: 20px">310</div>
                </th>
                <td class="s0"></td>
                <td class="s0"><a target="_blank" href="https://www.jpost.com/">JPost</a></td>
                <td class="s1">$1,200</td>
                <td class="s2">91</td>
                <td class="s3">1 Week</td>
                <td class="s3" dir="ltr">News / Health / Science / Business</td>
                <td class="s3" dir="ltr">Organic with small disclaimer</td>
                <td class="s3">Israel</td>
            </tr>
            <tr style="height: 20px">
                <th id="0R310" style="height: 20px;" class="row-headers-background">
                    <div class="row-header-wrapper" style="line-height: 20px">311</div>
                </th>
                <td class="s0"></td>
                <td class="s0"><a target="_blank" href="https://diariodechiapas.com/">Chiapas México </a></td>
                <td class="s1">$1,200</td>
                <td class="s2">43</td>
                <td class="s3">1 Week</td>
                <td class="s3" dir="ltr">News / Sports</td>
                <td class="s3" dir="ltr">Organic Placement</td>
                <td class="s3">Mexico</td>
            </tr>
            <tr style="height: 20px">
                <th id="0R311" style="height: 20px;" class="row-headers-background">
                    <div class="row-header-wrapper" style="line-height: 20px">312</div>
                </th>
                <td class="s0"></td>
                <td class="s0"><a target="_blank" href="https://www.gdnonline.com/index.html">Gulf Daily News</a></td>
                <td class="s1">$1,200</td>
                <td class="s2">68</td>
                <td class="s3">1 Week</td>
                <td class="s3" dir="ltr">News / Business / Sports / Entertainment / Tech / Health</td>
                <td class="s3" dir="ltr">Organic Placement</td>
                <td class="s3">Middle East</td>
            </tr>
            <tr style="height: 20px">
                <th id="0R312" style="height: 20px;" class="row-headers-background">
                    <div class="row-header-wrapper" style="line-height: 20px">313</div>
                </th>
                <td class="s0"></td>
                <td class="s0"><a target="_blank" href="https://www.regiondigital.com/">Región Digital</a></td>
                <td class="s1">$1,200</td>
                <td class="s2">54</td>
                <td class="s3">1 Week</td>
                <td class="s3" dir="ltr">News / Sports / Tech</td>
                <td class="s3" dir="ltr">Organic Placement</td>
                <td class="s3">Spain</td>
            </tr>
            <tr style="height: 20px">
                <th id="0R313" style="height: 20px;" class="row-headers-background">
                    <div class="row-header-wrapper" style="line-height: 20px">314</div>
                </th>
                <td class="s0"></td>
                <td class="s0"><a target="_blank" href="https://www.mediterraneodigital.com/">Mediterraneo Digital</a>
                </td>
                <td class="s1">$1,200</td>
                <td class="s2">57</td>
                <td class="s3">1 week</td>
                <td class="s3" dir="ltr">News / Sports</td>
                <td class="s3" dir="ltr">Organic Placement</td>
                <td class="s3">Spain</td>
            </tr>
            <tr style="height: 20px">
                <th id="0R314" style="height: 20px;" class="row-headers-background">
                    <div class="row-header-wrapper" style="line-height: 20px">315</div>
                </th>
                <td class="s0"></td>
                <td class="s0"><a target="_blank" href="https://estrelladigital.es/">Estrella Digital </a></td>
                <td class="s1">$1,200</td>
                <td class="s2">66</td>
                <td class="s3">1 Week</td>
                <td class="s3" dir="ltr">News / Lifestyle / Sports </td>
                <td class="s3" dir="ltr">Organic Placement</td>
                <td class="s3">Spain</td>
            </tr>
            <tr style="height: 20px">
                <th id="0R315" style="height: 20px;" class="row-headers-background">
                    <div class="row-header-wrapper" style="line-height: 20px">316</div>
                </th>
                <td class="s0"></td>
                <td class="s0"><a target="_blank" href="https://cdn.com.do/">CDN </a></td>
                <td class="s1">$1,200</td>
                <td class="s2">72</td>
                <td class="s3">1 Week</td>
                <td class="s3" dir="ltr">News / Health / Science / Tech</td>
                <td class="s3" dir="ltr">Organic Placement</td>
                <td class="s3">Spain</td>
            </tr>
            <tr style="height: 20px">
                <th id="0R316" style="height: 20px;" class="row-headers-background">
                    <div class="row-header-wrapper" style="line-height: 20px">317</div>
                </th>
                <td class="s0"></td>
                <td class="s0"><a target="_blank" href="https://www.bangkokpost.com/">Bangkok Post </a></td>
                <td class="s1">$1,200</td>
                <td class="s2">87</td>
                <td class="s3">1 Week</td>
                <td class="s3" dir="ltr">News / Business / Lifestyle / Tech</td>
                <td class="s3" dir="ltr">Organic Placement</td>
                <td class="s3">Thailand</td>
            </tr>
            <tr style="height: 20px">
                <th id="0R317" style="height: 20px;" class="row-headers-background">
                    <div class="row-header-wrapper" style="line-height: 20px">318</div>
                </th>
                <td class="s0"></td>
                <td class="s0"><a target="_blank" href="https://www.sfweekly.com/">SF Weekly</a></td>
                <td class="s1">$1,200</td>
                <td class="s2">73</td>
                <td class="s3">1 Week</td>
                <td class="s3" dir="ltr">News</td>
                <td class="s3" dir="ltr">Organic Placement</td>
                <td class="s3">US</td>
            </tr>
            <tr style="height: 20px">
                <th id="0R318" style="height: 20px;" class="row-headers-background">
                    <div class="row-header-wrapper" style="line-height: 20px">319</div>
                </th>
                <td class="s0"></td>
                <td class="s0"><a target="_blank" href="https://www.hauteresidence.com/">Haute Residence</a></td>
                <td class="s1">$1,200</td>
                <td class="s2">48</td>
                <td class="s3">1 Week</td>
                <td class="s3" dir="ltr">Luxury / Real Estate</td>
                <td class="s3" dir="ltr">Organic with small disclaimer</td>
                <td class="s3">US</td>
            </tr>
            <tr style="height: 20px">
                <th id="0R319" style="height: 20px;" class="row-headers-background">
                    <div class="row-header-wrapper" style="line-height: 20px">320</div>
                </th>
                <td class="s0"></td>
                <td class="s0"><a target="_blank" href="https://www.phillyvoice.com/">PhillyVoice</a></td>
                <td class="s1">$1,200</td>
                <td class="s2">79</td>
                <td class="s3">2 Weeks</td>
                <td class="s3" dir="ltr">News / Health / Sports</td>
                <td class="s3" dir="ltr">Organic with small disclaimer</td>
                <td class="s3">US</td>
            </tr>
            <tr style="height: 20px">
                <th id="0R320" style="height: 20px;" class="row-headers-background">
                    <div class="row-header-wrapper" style="line-height: 20px">321</div>
                </th>
                <td class="s0"></td>
                <td class="s0"><a target="_blank" href="https://www.phoenixnewtimes.com/">Phoenix New Times</a></td>
                <td class="s1">$1,200</td>
                <td class="s2">74</td>
                <td class="s3">1 Week</td>
                <td class="s3" dir="ltr">News</td>
                <td class="s3" dir="ltr">Sponsored article</td>
                <td class="s3">US</td>
            </tr>
            <tr style="height: 20px">
                <th id="0R321" style="height: 20px;" class="row-headers-background">
                    <div class="row-header-wrapper" style="line-height: 20px">322</div>
                </th>
                <td class="s0"></td>
                <td class="s0"><a target="_blank" href="https://www.westword.com/">West Word</a></td>
                <td class="s1">$1,200</td>
                <td class="s2">77</td>
                <td class="s3">1 Week</td>
                <td class="s3" dir="ltr">News</td>
                <td class="s3" dir="ltr">Sponsored article</td>
                <td class="s3">US</td>
            </tr>
            <tr style="height: 20px">
                <th id="0R322" style="height: 20px;" class="row-headers-background">
                    <div class="row-header-wrapper" style="line-height: 20px">323</div>
                </th>
                <td class="s0"></td>
                <td class="s0" dir="ltr"><a target="_blank" href="https://www.dallasobserver.com/">Dallas Observer</a>
                </td>
                <td class="s1">$1,200</td>
                <td class="s2">78</td>
                <td class="s3">1 Week</td>
                <td class="s3" dir="ltr">News / Business</td>
                <td class="s3" dir="ltr">Sponsored article</td>
                <td class="s3">US</td>
            </tr>
            <tr style="height: 20px">
                <th id="0R323" style="height: 20px;" class="row-headers-background">
                    <div class="row-header-wrapper" style="line-height: 20px">324</div>
                </th>
                <td class="s0"></td>
                <td class="s0"><a target="_blank" href="https://www.miaminewtimes.com/">Miami New Times</a></td>
                <td class="s1">$1,200</td>
                <td class="s2">79</td>
                <td class="s3">1 Week</td>
                <td class="s3" dir="ltr">News / Business</td>
                <td class="s3" dir="ltr">Sponsored article</td>
                <td class="s3">US</td>
            </tr>
            <tr style="height: 20px">
                <th id="0R324" style="height: 20px;" class="row-headers-background">
                    <div class="row-header-wrapper" style="line-height: 20px">325</div>
                </th>
                <td class="s0"></td>
                <td class="s0"><a target="_blank" href="https://flaunt.com/">Flaunt Magazine</a></td>
                <td class="s1">$1,250</td>
                <td class="s2">68</td>
                <td class="s3">2 Weeks</td>
                <td class="s3" dir="ltr">Music / Fashion / Lifestyle / Luxury</td>
                <td class="s3" dir="ltr">Organic Placement</td>
                <td class="s3">Global</td>
            </tr>
            <tr style="height: 20px">
                <th id="0R325" style="height: 20px;" class="row-headers-background">
                    <div class="row-header-wrapper" style="line-height: 20px">326</div>
                </th>
                <td class="s0"></td>
                <td class="s0"><a target="_blank" href="https://www.gulftoday.ae/">Gulf Today</a></td>
                <td class="s1">$1,250</td>
                <td class="s2">66</td>
                <td class="s3">1 Week</td>
                <td class="s3" dir="ltr">News / News / Lifestyle / Business</td>
                <td class="s3" dir="ltr">Sponsored article</td>
                <td class="s3">Middle East</td>
            </tr>
            <tr style="height: 20px">
                <th id="0R326" style="height: 20px;" class="row-headers-background">
                    <div class="row-header-wrapper" style="line-height: 20px">327</div>
                </th>
                <td class="s0"></td>
                <td class="s0" dir="ltr"><a target="_blank" href="https://www.fortuneindia.com/">Fortune India</a></td>
                <td class="s1">$1,260</td>
                <td class="s2">48</td>
                <td class="s3">2 Weeks</td>
                <td class="s3" dir="ltr">News / Tech </td>
                <td class="s3" dir="ltr">Organic with small disclaimer</td>
                <td class="s3">India</td>
            </tr>
            <tr style="height: 20px">
                <th id="0R327" style="height: 20px;" class="row-headers-background">
                    <div class="row-header-wrapper" style="line-height: 20px">328</div>
                </th>
                <td class="s0"></td>
                <td class="s0"><a target="_blank" href="https://timesofoman.com/">Times of Oman</a></td>
                <td class="s1">$1,260</td>
                <td class="s2">81</td>
                <td class="s3">1 Week</td>
                <td class="s3" dir="ltr">News / Movies &amp; TV / Business / Sports / Tech</td>
                <td class="s3" dir="ltr">Organic Placement</td>
                <td class="s3">Middle East</td>
            </tr>
            <tr style="height: 20px">
                <th id="0R328" style="height: 20px;" class="row-headers-background">
                    <div class="row-header-wrapper" style="line-height: 20px">329</div>
                </th>
                <td class="s0"></td>
                <td class="s0"><a target="_blank" href="https://www.alkhaleej.ae/">Al Khaleej</a></td>
                <td class="s1">$1,260</td>
                <td class="s2">87</td>
                <td class="s3">1 Week</td>
                <td class="s3" dir="ltr">News / Health / Sports / Tech</td>
                <td class="s3" dir="ltr">Organic Placement</td>
                <td class="s3">Middle East</td>
            </tr>
            <tr style="height: 20px">
                <th id="0R329" style="height: 20px;" class="row-headers-background">
                    <div class="row-header-wrapper" style="line-height: 20px">330</div>
                </th>
                <td class="s0"></td>
                <td class="s0"><a target="_blank" href="https://www.broadwayworld.com/">Broadway World</a></td>
                <td class="s1">$1,300</td>
                <td class="s2">86</td>
                <td class="s3">1 Week</td>
                <td class="s3" dir="ltr">Music / News</td>
                <td class="s3" dir="ltr">Organic Placement</td>
                <td class="s3">US</td>
            </tr>
            <tr style="height: 20px">
                <th id="0R330" style="height: 20px;" class="row-headers-background">
                    <div class="row-header-wrapper" style="line-height: 20px">331</div>
                </th>
                <td class="s0"></td>
                <td class="s0"><a target="_blank" href="https://shabiba.com/">Al Shabiba</a></td>
                <td class="s1">$1,320</td>
                <td class="s2">43</td>
                <td class="s3">1 Week</td>
                <td class="s3" dir="ltr">News / Tech</td>
                <td class="s3" dir="ltr">Organic Placement</td>
                <td class="s3">Middle East</td>
            </tr>
            <tr style="height: 20px">
                <th id="0R331" style="height: 20px;" class="row-headers-background">
                    <div class="row-header-wrapper" style="line-height: 20px">332</div>
                </th>
                <td class="s0"></td>
                <td class="s0"><a target="_blank" href="https://www.raya.com/">Raya</a></td>
                <td class="s1">$1,320</td>
                <td class="s2">54</td>
                <td class="s3">1 Week</td>
                <td class="s3" dir="ltr">News / Sports</td>
                <td class="s3" dir="ltr">Organic Placement</td>
                <td class="s3">Middle East</td>
            </tr>
            <tr style="height: 20px">
                <th id="0R332" style="height: 20px;" class="row-headers-background">
                    <div class="row-header-wrapper" style="line-height: 20px">333</div>
                </th>
                <td class="s0"></td>
                <td class="s0"><a target="_blank" href="https://www.muscatdaily.com/">Muscat Daily</a></td>
                <td class="s1">$1,320</td>
                <td class="s2">58</td>
                <td class="s3">2 Weeks</td>
                <td class="s3" dir="ltr">News / Business / Sports </td>
                <td class="s3" dir="ltr">Organic Placement</td>
                <td class="s3">Middle East</td>
            </tr>
            <tr style="height: 20px">
                <th id="0R333" style="height: 20px;" class="row-headers-background">
                    <div class="row-header-wrapper" style="line-height: 20px">334</div>
                </th>
                <td class="s0"></td>
                <td class="s0"><a target="_blank" href="https://elpais.com/noticias/bolivia/">El País</a></td>
                <td class="s1">$1,350</td>
                <td class="s2">94</td>
                <td class="s3">1 Week</td>
                <td class="s3" dir="ltr">News</td>
                <td class="s3" dir="ltr">Organic Placement</td>
                <td class="s3">Bolivia</td>
            </tr>
            <tr style="height: 20px">
                <th id="0R334" style="height: 20px;" class="row-headers-background">
                    <div class="row-header-wrapper" style="line-height: 20px">335</div>
                </th>
                <td class="s0"></td>
                <td class="s0"><a target="_blank" href="https://www.eluniversalpuebla.com.mx/">EL Universal Puebla</a>
                </td>
                <td class="s1">$1,350</td>
                <td class="s2">44</td>
                <td class="s3">1 Week</td>
                <td class="s3" dir="ltr">News / Business </td>
                <td class="s3" dir="ltr">Organic Placement</td>
                <td class="s3">Mexico</td>
            </tr>
            <tr style="height: 20px">
                <th id="0R335" style="height: 20px;" class="row-headers-background">
                    <div class="row-header-wrapper" style="line-height: 20px">336</div>
                </th>
                <td class="s0"></td>
                <td class="s0"><a target="_blank" href="https://heraldodemexico.com.mx/">El Heraldo</a></td>
                <td class="s1">$1,350</td>
                <td class="s2">83</td>
                <td class="s3">1 Week</td>
                <td class="s3" dir="ltr">Entertainment / Sports / Lifestyle / Tech</td>
                <td class="s3" dir="ltr">Organic Placement</td>
                <td class="s3">Mexico</td>
            </tr>
            <tr style="height: 20px">
                <th id="0R336" style="height: 20px;" class="row-headers-background">
                    <div class="row-header-wrapper" style="line-height: 20px">337</div>
                </th>
                <td class="s0"></td>
                <td class="s0"><a target="_blank" href="https://www.vidamoderna.com.br/">Vida Moderna</a></td>
                <td class="s1">$1,350</td>
                <td class="s2">42</td>
                <td class="s3">1 Week</td>
                <td class="s3" dir="ltr">Crypto / Tech </td>
                <td class="s3" dir="ltr">Organic Placement</td>
                <td class="s3">Spain</td>
            </tr>
            <tr style="height: 20px">
                <th id="0R337" style="height: 20px;" class="row-headers-background">
                    <div class="row-header-wrapper" style="line-height: 20px">338</div>
                </th>
                <td class="s0"></td>
                <td class="s0"><a target="_blank" href="https://www.diariolasamericas.com/">Diario Las Américas</a></td>
                <td class="s1">$1,350</td>
                <td class="s2">77</td>
                <td class="s3">1 Week</td>
                <td class="s3" dir="ltr">News / Entertainment / Sports</td>
                <td class="s3" dir="ltr">Organic Placement</td>
                <td class="s3">Spain</td>
            </tr>
            <tr style="height: 20px">
                <th id="0R338" style="height: 20px;" class="row-headers-background">
                    <div class="row-header-wrapper" style="line-height: 20px">339</div>
                </th>
                <td class="s0"></td>
                <td class="s0"><a target="_blank" href="https://blockonomi.com/advertise/">Blockonomi Sponsored</a></td>
                <td class="s1">$1,380</td>
                <td class="s2">52</td>
                <td class="s3">1 Week</td>
                <td class="s3" dir="ltr">Crypto / Tech </td>
                <td class="s3" dir="ltr">Sponsored article</td>
                <td class="s3">Global</td>
            </tr>
            <tr style="height: 20px">
                <th id="0R339" style="height: 20px;" class="row-headers-background">
                    <div class="row-header-wrapper" style="line-height: 20px">340</div>
                </th>
                <td class="s0"></td>
                <td class="s0"><a target="_blank" href="http://africa.businessinsider.com/">Business Insider Africa</a>
                </td>
                <td class="s1">$1,400</td>
                <td class="s2">94</td>
                <td class="s3">1 Week</td>
                <td class="s3" dir="ltr">News / Lifestyle</td>
                <td class="s3" dir="ltr">Organic Placement</td>
                <td class="s3">Africa</td>
            </tr>
            <tr style="height: 20px">
                <th id="0R340" style="height: 20px;" class="row-headers-background">
                    <div class="row-header-wrapper" style="line-height: 20px">341</div>
                </th>
                <td class="s0"></td>
                <td class="s0"><a target="_blank" href="https://www.digitaljournal.com/">Digital Journal</a></td>
                <td class="s1">$1,500</td>
                <td class="s2">88</td>
                <td class="s3">1 Week</td>
                <td class="s3" dir="ltr">News / Tech / Science / Entertainment / Business</td>
                <td class="s3" dir="ltr">Organic Placement</td>
                <td class="s3">Canada</td>
            </tr>
            <tr style="height: 20px">
                <th id="0R341" style="height: 20px;" class="row-headers-background">
                    <div class="row-header-wrapper" style="line-height: 20px">342</div>
                </th>
                <td class="s0"></td>
                <td class="s0"><a target="_blank" href="https://www.makeuseof.com/">Make Use Of </a></td>
                <td class="s1">$1,500</td>
                <td class="s2">91</td>
                <td class="s3">2 Weeks</td>
                <td class="s3" dir="ltr">Tech / Lifestyle</td>
                <td class="s3" dir="ltr">Organic Placement</td>
                <td class="s3">Canada</td>
            </tr>
            <tr style="height: 20px">
                <th id="0R342" style="height: 20px;" class="row-headers-background">
                    <div class="row-header-wrapper" style="line-height: 20px">343</div>
                </th>
                <td class="s0"></td>
                <td class="s0"><a target="_blank" href="https://knewz.com/">KNewz</a></td>
                <td class="s1">$1,500</td>
                <td class="s2">51</td>
                <td class="s3">1 Week</td>
                <td class="s3" dir="ltr">News / Lifestyle / Business / Sports</td>
                <td class="s3" dir="ltr">Organic Placement</td>
                <td class="s3">Global</td>
            </tr>
            <tr style="height: 20px">
                <th id="0R343" style="height: 20px;" class="row-headers-background">
                    <div class="row-header-wrapper" style="line-height: 20px">344</div>
                </th>
                <td class="s0"></td>
                <td class="s0"><a target="_blank" href="https://graziamagazine.com/us/">Grazia Magazine </a></td>
                <td class="s1">$1,500</td>
                <td class="s2">65</td>
                <td class="s3">1 Week</td>
                <td class="s3" dir="ltr">Entertainment / Fashion</td>
                <td class="s3" dir="ltr">Organic Placement</td>
                <td class="s3">Global</td>
            </tr>
            <tr style="height: 20px">
                <th id="0R344" style="height: 20px;" class="row-headers-background">
                    <div class="row-header-wrapper" style="line-height: 20px">345</div>
                </th>
                <td class="s0"></td>
                <td class="s0"><a target="_blank" href="http://edm.com/">EDM.com</a></td>
                <td class="s1">$1,500</td>
                <td class="s2">72</td>
                <td class="s3">1 Week</td>
                <td class="s3" dir="ltr">Music / Lifestyle</td>
                <td class="s3" dir="ltr">Organic Placement</td>
                <td class="s3">Global</td>
            </tr>
            <tr style="height: 20px">
                <th id="0R345" style="height: 20px;" class="row-headers-background">
                    <div class="row-header-wrapper" style="line-height: 20px">346</div>
                </th>
                <td class="s0"></td>
                <td class="s0"><a target="_blank" href="https://www.benzinga.com/">Benzinga</a></td>
                <td class="s1">$1,500</td>
                <td class="s2">85</td>
                <td class="s3">1 Week</td>
                <td class="s3" dir="ltr">News / Business / Crypto / Tech / CBD</td>
                <td class="s3" dir="ltr">Organic Placement</td>
                <td class="s3">Global</td>
            </tr>
            <tr style="height: 20px">
                <th id="0R346" style="height: 20px;" class="row-headers-background">
                    <div class="row-header-wrapper" style="line-height: 20px">347</div>
                </th>
                <td class="s0"></td>
                <td class="s0"><a target="_blank" href="https://screenrant.com/">Screen Rant</a></td>
                <td class="s1">$1,500</td>
                <td class="s2">86</td>
                <td class="s3">2 Weeks</td>
                <td class="s3" dir="ltr">Entertainment / Movies &amp; TV / Tech</td>
                <td class="s3" dir="ltr">Organic Placement</td>
                <td class="s3">Global</td>
            </tr>
            <tr style="height: 20px">
                <th id="0R347" style="height: 20px;" class="row-headers-background">
                    <div class="row-header-wrapper" style="line-height: 20px">348</div>
                </th>
                <td class="s0"></td>
                <td class="s0"><a target="_blank" href="https://collider.com/">Collider</a></td>
                <td class="s1">$1,500</td>
                <td class="s2">88</td>
                <td class="s3">2 Weeks</td>
                <td class="s3" dir="ltr">Entertainment / Movies &amp; TV </td>
                <td class="s3" dir="ltr">Organic Placement</td>
                <td class="s3">Global</td>
            </tr>
            <tr style="height: 20px">
                <th id="0R348" style="height: 20px;" class="row-headers-background">
                    <div class="row-header-wrapper" style="line-height: 20px">349</div>
                </th>
                <td class="s0"></td>
                <td class="s0"><a target="_blank" href="https://www.cbr.com/">CBR</a></td>
                <td class="s1">$1,500</td>
                <td class="s2">89</td>
                <td class="s3">2 Weeks</td>
                <td class="s3" dir="ltr">Entertainment / Movies &amp; TV</td>
                <td class="s3" dir="ltr">Organic Placement</td>
                <td class="s3">Global</td>
            </tr>
            <tr style="height: 20px">
                <th id="0R349" style="height: 20px;" class="row-headers-background">
                    <div class="row-header-wrapper" style="line-height: 20px">350</div>
                </th>
                <td class="s0"></td>
                <td class="s0"><a target="_blank" href="https://www.mercurynews.com/">Mercury News</a></td>
                <td class="s1">$1,500</td>
                <td class="s2">92</td>
                <td class="s3">1 Week</td>
                <td class="s3" dir="ltr">News / Sports / Business / Real Estate </td>
                <td class="s3" dir="ltr">Sponsored article</td>
                <td class="s3">Global</td>
            </tr>
            <tr style="height: 20px">
                <th id="0R350" style="height: 20px;" class="row-headers-background">
                    <div class="row-header-wrapper" style="line-height: 20px">351</div>
                </th>
                <td class="s0"></td>
                <td class="s0"><a target="_blank" href="https://cryptocurrency.news/">Cryptocurrency News</a></td>
                <td class="s1">$1,500</td>
                <td class="s2">24</td>
                <td class="s3">1 Week</td>
                <td class="s3" dir="ltr">Crypto / Real Estate / Tech</td>
                <td class="s3" dir="ltr">Organic with small disclaimer</td>
                <td class="s3">India</td>
            </tr>
            <tr style="height: 20px">
                <th id="0R351" style="height: 20px;" class="row-headers-background">
                    <div class="row-header-wrapper" style="line-height: 20px">352</div>
                </th>
                <td class="s0"></td>
                <td class="s0"><a target="_blank" href="https://coingape.com/">Coingape</a></td>
                <td class="s1">$1,500</td>
                <td class="s2">54</td>
                <td class="s3">1 Week</td>
                <td class="s3" dir="ltr">Crypto / Tech</td>
                <td class="s3" dir="ltr">Organic with small disclaimer</td>
                <td class="s3">India</td>
            </tr>
            <tr style="height: 20px">
                <th id="0R352" style="height: 20px;" class="row-headers-background">
                    <div class="row-header-wrapper" style="line-height: 20px">353</div>
                </th>
                <td class="s0"></td>
                <td class="s0"><a target="_blank" href="https://www.inquirer.net/">Inquirer</a></td>
                <td class="s1">$1,500</td>
                <td class="s2">89</td>
                <td class="s3">1 Week</td>
                <td class="s3" dir="ltr">News / Business / Entertainment / Sports / Tech / Lifestyle</td>
                <td class="s3" dir="ltr">Organic with small disclaimer</td>
                <td class="s3">Philippines</td>
            </tr>
            <tr style="height: 20px">
                <th id="0R353" style="height: 20px;" class="row-headers-background">
                    <div class="row-header-wrapper" style="line-height: 20px">354</div>
                </th>
                <td class="s0"></td>
                <td class="s0"><a target="_blank" href="https://www.miamihispano.com/">Miami Hispano</a></td>
                <td class="s1">$1,500</td>
                <td class="s2">27</td>
                <td class="s3">1 Week</td>
                <td class="s3" dir="ltr">News / Business</td>
                <td class="s3" dir="ltr">Organic Placement</td>
                <td class="s3">Spain</td>
            </tr>
            <tr style="height: 20px">
                <th id="0R354" style="height: 20px;" class="row-headers-background">
                    <div class="row-header-wrapper" style="line-height: 20px">355</div>
                </th>
                <td class="s0"></td>
                <td class="s0"><a target="_blank" href="https://miamidiario.com/">Miami Diario</a></td>
                <td class="s1">$1,500</td>
                <td class="s2">60</td>
                <td class="s3">1 Week</td>
                <td class="s3" dir="ltr">News / Health / Tech</td>
                <td class="s3" dir="ltr">Organic Placement</td>
                <td class="s3">Spain</td>
            </tr>
            <tr style="height: 20px">
                <th id="0R355" style="height: 20px;" class="row-headers-background">
                    <div class="row-header-wrapper" style="line-height: 20px">356</div>
                </th>
                <td class="s0"></td>
                <td class="s0"><a target="_blank" href="https://www.madridiario.es/">Madrid Diario</a></td>
                <td class="s1">$1,500</td>
                <td class="s2">71</td>
                <td class="s3">1 Week</td>
                <td class="s3" dir="ltr">News / Health / Sports</td>
                <td class="s3" dir="ltr">Organic Placement</td>
                <td class="s3">Spain</td>
            </tr>
            <tr style="height: 20px">
                <th id="0R356" style="height: 20px;" class="row-headers-background">
                    <div class="row-header-wrapper" style="line-height: 20px">357</div>
                </th>
                <td class="s0"></td>
                <td class="s0"><a target="_blank" href="https://www.eastbaytimes.com/">East Bay Times</a></td>
                <td class="s1">$1,500</td>
                <td class="s2">74</td>
                <td class="s3">1 Week</td>
                <td class="s3" dir="ltr">News / Sports / Business / Real Estate</td>
                <td class="s3" dir="ltr">Sponsored article</td>
                <td class="s3">US</td>
            </tr>
            <tr style="height: 20px">
                <th id="0R357" style="height: 20px;" class="row-headers-background">
                    <div class="row-header-wrapper" style="line-height: 20px">358</div>
                </th>
                <td class="s0"></td>
                <td class="s0"><a target="_blank" href="https://www.reviewjournal.com/">Review Journal</a></td>
                <td class="s1">$1,500</td>
                <td class="s2">83</td>
                <td class="s3">1 Week</td>
                <td class="s3" dir="ltr">News / Sports / Business / Entertainment </td>
                <td class="s3" dir="ltr">Sponsored article</td>
                <td class="s3">US</td>
            </tr>
            <tr style="height: 20px">
                <th id="0R358" style="height: 20px;" class="row-headers-background">
                    <div class="row-header-wrapper" style="line-height: 20px">359</div>
                </th>
                <td class="s0"></td>
                <td class="s0"><a target="_blank" href="https://www.washingtontimes.com/">Washington Times</a></td>
                <td class="s1">$1,500</td>
                <td class="s2">90</td>
                <td class="s3">1 Week</td>
                <td class="s3" dir="ltr">News / Tech / Science / Sports</td>
                <td class="s3" dir="ltr">Sponsored article</td>
                <td class="s3">US</td>
            </tr>
            <tr style="height: 20px">
                <th id="0R359" style="height: 20px;" class="row-headers-background">
                    <div class="row-header-wrapper" style="line-height: 20px">360</div>
                </th>
                <td class="s0"></td>
                <td class="s0"><a target="_blank" href="https://worldstarhiphop.com/videos/">World Star</a></td>
                <td class="s1">$1,600</td>
                <td class="s2">77</td>
                <td class="s3">1 Week</td>
                <td class="s3" dir="ltr">Music </td>
                <td class="s3" dir="ltr">Organic Placement</td>
                <td class="s3">Global</td>
            </tr>
            <tr style="height: 20px">
                <th id="0R360" style="height: 20px;" class="row-headers-background">
                    <div class="row-header-wrapper" style="line-height: 20px">361</div>
                </th>
                <td class="s0"></td>
                <td class="s0"><a target="_blank" href="http://ambcrypto.com/">Ambcrypto</a></td>
                <td class="s1">$1,600</td>
                <td class="s2">55</td>
                <td class="s3">1 Week</td>
                <td class="s3" dir="ltr">Crypto / News</td>
                <td class="s3" dir="ltr">Organic with small disclaimer</td>
                <td class="s3">International</td>
            </tr>
            <tr style="height: 20px">
                <th id="0R361" style="height: 20px;" class="row-headers-background">
                    <div class="row-header-wrapper" style="line-height: 20px">362</div>
                </th>
                <td class="s0"></td>
                <td class="s0"><a target="_blank" href="https://nl.mashable.com/">Mashable (NL)</a></td>
                <td class="s1">$1,600</td>
                <td class="s2">93</td>
                <td class="s3">1 Week</td>
                <td class="s3" dir="ltr">News / Tech / Science / Entertainment </td>
                <td class="s3" dir="ltr">Organic Placement</td>
                <td class="s3">Netherlands</td>
            </tr>
            <tr style="height: 20px">
                <th id="0R362" style="height: 20px;" class="row-headers-background">
                    <div class="row-header-wrapper" style="line-height: 20px">363</div>
                </th>
                <td class="s0"></td>
                <td class="s0"><a target="_blank" href="https://www.bristolpost.co.uk/">Bristol Post</a></td>
                <td class="s1">$1,600</td>
                <td class="s2">80</td>
                <td class="s3">1 Week</td>
                <td class="s3" dir="ltr">News / Health / Business</td>
                <td class="s3" dir="ltr">Sponsored article</td>
                <td class="s3">UK</td>
            </tr>
            <tr style="height: 20px">
                <th id="0R363" style="height: 20px;" class="row-headers-background">
                    <div class="row-header-wrapper" style="line-height: 20px">364</div>
                </th>
                <td class="s0"></td>
                <td class="s0" dir="ltr"><a target="_blank" href="https://www.dailyrecord.co.uk/">Daily Record</a></td>
                <td class="s1">$1,600</td>
                <td class="s2">85</td>
                <td class="s3">1 Week</td>
                <td class="s3" dir="ltr">News / Sports / Movies &amp; TV / Lifestyle</td>
                <td class="s3" dir="ltr">Sponsored article</td>
                <td class="s3">UK</td>
            </tr>
            <tr style="height: 20px">
                <th id="0R364" style="height: 20px;" class="row-headers-background">
                    <div class="row-header-wrapper" style="line-height: 20px">365</div>
                </th>
                <td class="s0"></td>
                <td class="s0" dir="ltr"><a target="_blank" href="https://www.birminghammail.co.uk/">Birmingham Mail</a>
                </td>
                <td class="s1">$1,600</td>
                <td class="s2">87</td>
                <td class="s3">1 Week</td>
                <td class="s3" dir="ltr">News / Business</td>
                <td class="s3" dir="ltr">Sponsored article</td>
                <td class="s3">UK</td>
            </tr>
            <tr style="height: 20px">
                <th id="0R365" style="height: 20px;" class="row-headers-background">
                    <div class="row-header-wrapper" style="line-height: 20px">366</div>
                </th>
                <td class="s0"></td>
                <td class="s0"><a target="_blank" href="https://www.walesonline.co.uk/">Wales Online</a></td>
                <td class="s1">$1,600</td>
                <td class="s2">89</td>
                <td class="s3">1 Week</td>
                <td class="s3" dir="ltr">News / Health / Business </td>
                <td class="s3" dir="ltr">Sponsored article</td>
                <td class="s3">UK</td>
            </tr>
            <tr style="height: 20px">
                <th id="0R366" style="height: 20px;" class="row-headers-background">
                    <div class="row-header-wrapper" style="line-height: 20px">367</div>
                </th>
                <td class="s0"></td>
                <td class="s0"><a target="_blank" href="https://www.manchestereveningnews.co.uk/">Manchester Evening
                        News</a></td>
                <td class="s1">$1,600</td>
                <td class="s2">90</td>
                <td class="s3">1 Week</td>
                <td class="s3" dir="ltr">News / Sports</td>
                <td class="s3" dir="ltr">Sponsored article</td>
                <td class="s3">UK</td>
            </tr>
            <tr style="height: 20px">
                <th id="0R367" style="height: 20px;" class="row-headers-background">
                    <div class="row-header-wrapper" style="line-height: 20px">368</div>
                </th>
                <td class="s0" dir="ltr"> </td>
                <td class="s0"><a target="_blank" href="https://www.liverpoolecho.co.uk/">LiverPool Echo</a></td>
                <td class="s1">$1,600</td>
                <td class="s2">88</td>
                <td class="s3">1 Week</td>
                <td class="s3" dir="ltr">News / Business / Sports </td>
                <td class="s3" dir="ltr">Sponsored article</td>
                <td class="s3">UK</td>
            </tr>
            <tr style="height: 20px">
                <th id="0R368" style="height: 20px;" class="row-headers-background">
                    <div class="row-header-wrapper" style="line-height: 20px">369</div>
                </th>
                <td class="s0"></td>
                <td class="s0"><a target="_blank" href="https://dailycaller.com/">Daily Caller</a></td>
                <td class="s1">$1,600</td>
                <td class="s2">89</td>
                <td class="s3">1 Week</td>
                <td class="s3" dir="ltr">News / Entertainment / Business / Sports</td>
                <td class="s3" dir="ltr">Organic Placement</td>
                <td class="s3">US</td>
            </tr>
            <tr style="height: 20px">
                <th id="0R369" style="height: 20px;" class="row-headers-background">
                    <div class="row-header-wrapper" style="line-height: 20px">370</div>
                </th>
                <td class="s0"></td>
                <td class="s0"><a target="_blank" href="https://www.footballscotland.co.uk/">Football Scotland</a></td>
                <td class="s1">$1,620</td>
                <td class="s2">46</td>
                <td class="s3">1 Week</td>
                <td class="s3" dir="ltr">Sports</td>
                <td class="s3" dir="ltr">Sponsored article</td>
                <td class="s3">UK</td>
            </tr>
            <tr style="height: 20px">
                <th id="0R370" style="height: 20px;" class="row-headers-background">
                    <div class="row-header-wrapper" style="line-height: 20px">371</div>
                </th>
                <td class="s0"></td>
                <td class="s0"><a target="_blank" href="https://www.corkbeo.ie/">Cork Beo</a></td>
                <td class="s1">$1,620</td>
                <td class="s2">48</td>
                <td class="s3">1 Week</td>
                <td class="s3" dir="ltr">News / Sports / Business </td>
                <td class="s3" dir="ltr">Sponsored article</td>
                <td class="s3">UK</td>
            </tr>
            <tr style="height: 20px">
                <th id="0R371" style="height: 20px;" class="row-headers-background">
                    <div class="row-header-wrapper" style="line-height: 20px">372</div>
                </th>
                <td class="s0"></td>
                <td class="s0"><a target="_blank" href="https://www.liverpool.com/">Liverpool</a></td>
                <td class="s1">$1,620</td>
                <td class="s2">52</td>
                <td class="s3">1 Week</td>
                <td class="s3" dir="ltr">News / Sports</td>
                <td class="s3" dir="ltr">Sponsored article</td>
                <td class="s3">UK</td>
            </tr>
            <tr style="height: 20px">
                <th id="0R372" style="height: 20px;" class="row-headers-background">
                    <div class="row-header-wrapper" style="line-height: 20px">373</div>
                </th>
                <td class="s0"></td>
                <td class="s0"><a target="_blank" href="https://www.rsvplive.ie/">RSVP Live</a></td>
                <td class="s1">$1,620</td>
                <td class="s2">54</td>
                <td class="s3">1 Week</td>
                <td class="s3" dir="ltr">News / Sports</td>
                <td class="s3" dir="ltr">Sponsored article</td>
                <td class="s3">UK</td>
            </tr>
            <tr style="height: 20px">
                <th id="0R373" style="height: 20px;" class="row-headers-background">
                    <div class="row-header-wrapper" style="line-height: 20px">374</div>
                </th>
                <td class="s0"></td>
                <td class="s0" dir="ltr"><a target="_blank" href="https://www.insider.co.uk/">Insider</a></td>
                <td class="s1">$1,620</td>
                <td class="s2">59</td>
                <td class="s3">1 Week</td>
                <td class="s3" dir="ltr">News / Science &amp; Tech </td>
                <td class="s3" dir="ltr">Sponsored article</td>
                <td class="s3">UK</td>
            </tr>
            <tr style="height: 20px">
                <th id="0R374" style="height: 20px;" class="row-headers-background">
                    <div class="row-header-wrapper" style="line-height: 20px">375</div>
                </th>
                <td class="s0"></td>
                <td class="s0"><a target="_blank" href="https://www.edinburghlive.co.uk/">Edinburgh Live</a></td>
                <td class="s1">$1,620</td>
                <td class="s2">62</td>
                <td class="s3">1 Week</td>
                <td class="s3" dir="ltr">News / Sports</td>
                <td class="s3" dir="ltr">Sponsored article</td>
                <td class="s3">UK</td>
            </tr>
            <tr style="height: 20px">
                <th id="0R375" style="height: 20px;" class="row-headers-background">
                    <div class="row-header-wrapper" style="line-height: 20px">376</div>
                </th>
                <td class="s0"></td>
                <td class="s0"><a target="_blank" href="https://www.lancs.live/">Lancs Live</a></td>
                <td class="s1">$1,620</td>
                <td class="s2">62</td>
                <td class="s3">1 Week</td>
                <td class="s3" dir="ltr">News / Media</td>
                <td class="s3" dir="ltr">Sponsored article</td>
                <td class="s3">UK</td>
            </tr>
            <tr style="height: 20px">
                <th id="0R376" style="height: 20px;" class="row-headers-background">
                    <div class="row-header-wrapper" style="line-height: 20px">377</div>
                </th>
                <td class="s0"></td>
                <td class="s0"><a target="_blank" href="https://www.staffordshire-live.co.uk/">Staffordshire Live</a>
                </td>
                <td class="s1">$1,620</td>
                <td class="s2">63</td>
                <td class="s3">1 Week</td>
                <td class="s3" dir="ltr">Media &amp; News / Sports</td>
                <td class="s3" dir="ltr">Sponsored article</td>
                <td class="s3">UK</td>
            </tr>
            <tr style="height: 20px">
                <th id="0R377" style="height: 20px;" class="row-headers-background">
                    <div class="row-header-wrapper" style="line-height: 20px">378</div>
                </th>
                <td class="s0"></td>
                <td class="s0"><a target="_blank" href="https://www.dublinlive.ie/">Dublin Live</a></td>
                <td class="s1">$1,620</td>
                <td class="s2">65</td>
                <td class="s3">1 Week</td>
                <td class="s3" dir="ltr">News / Health / Business</td>
                <td class="s3" dir="ltr">Sponsored article</td>
                <td class="s3">UK</td>
            </tr>
            <tr style="height: 20px">
                <th id="0R378" style="height: 20px;" class="row-headers-background">
                    <div class="row-header-wrapper" style="line-height: 20px">379</div>
                </th>
                <td class="s0"></td>
                <td class="s0"><a target="_blank" href="https://www.lincolnshirelive.co.uk/">Lincolnshire Live</a></td>
                <td class="s1">$1,620</td>
                <td class="s2">66</td>
                <td class="s3">1 Week</td>
                <td class="s3" dir="ltr">News / Sports / Business</td>
                <td class="s3" dir="ltr">Sponsored article</td>
                <td class="s3">UK</td>
            </tr>
            <tr style="height: 20px">
                <th id="0R379" style="height: 20px;" class="row-headers-background">
                    <div class="row-header-wrapper" style="line-height: 20px">380</div>
                </th>
                <td class="s0"></td>
                <td class="s0"><a target="_blank" href="https://www.cheshire-live.co.uk/">Cheshire Live</a></td>
                <td class="s1">$1,620</td>
                <td class="s2">67</td>
                <td class="s3">1 Week</td>
                <td class="s3" dir="ltr">News / Health </td>
                <td class="s3" dir="ltr">Sponsored article</td>
                <td class="s3">UK</td>
            </tr>
            <tr style="height: 20px">
                <th id="0R380" style="height: 20px;" class="row-headers-background">
                    <div class="row-header-wrapper" style="line-height: 20px">381</div>
                </th>
                <td class="s0"></td>
                <td class="s0"><a target="_blank" href="https://www.essexlive.news/">Essex Live</a></td>
                <td class="s1">$1,620</td>
                <td class="s2">67</td>
                <td class="s3">1 Week</td>
                <td class="s3" dir="ltr">News / Health / Business</td>
                <td class="s3" dir="ltr">Sponsored article</td>
                <td class="s3">UK</td>
            </tr>
            <tr style="height: 20px">
                <th id="0R381" style="height: 20px;" class="row-headers-background">
                    <div class="row-header-wrapper" style="line-height: 20px">382</div>
                </th>
                <td class="s0"></td>
                <td class="s0"><a target="_blank" href="https://www.glasgowlive.co.uk/">Glasgow Live</a></td>
                <td class="s1">$1,620</td>
                <td class="s2">68</td>
                <td class="s3">1 Week</td>
                <td class="s3" dir="ltr"> Lifestyle / Health / Business</td>
                <td class="s3" dir="ltr">Sponsored article</td>
                <td class="s3">UK</td>
            </tr>
            <tr style="height: 20px">
                <th id="0R382" style="height: 20px;" class="row-headers-background">
                    <div class="row-header-wrapper" style="line-height: 20px">383</div>
                </th>
                <td class="s0"></td>
                <td class="s0"><a target="_blank" href="https://www.leeds-live.co.uk/">Leeds Live</a></td>
                <td class="s1">$1,620</td>
                <td class="s2">68</td>
                <td class="s3">1 Week</td>
                <td class="s3" dir="ltr">News / Sports / Business</td>
                <td class="s3" dir="ltr">Sponsored article</td>
                <td class="s3">UK</td>
            </tr>
            <tr style="height: 20px">
                <th id="0R383" style="height: 20px;" class="row-headers-background">
                    <div class="row-header-wrapper" style="line-height: 20px">384</div>
                </th>
                <td class="s0"></td>
                <td class="s0"><a target="_blank" href="https://www.business-live.co.uk/">Business Live</a></td>
                <td class="s1">$1,620</td>
                <td class="s2">69</td>
                <td class="s3">1 Week</td>
                <td class="s3" dir="ltr">Business / News </td>
                <td class="s3" dir="ltr">Sponsored article</td>
                <td class="s3">UK</td>
            </tr>
            <tr style="height: 20px">
                <th id="0R384" style="height: 20px;" class="row-headers-background">
                    <div class="row-header-wrapper" style="line-height: 20px">385</div>
                </th>
                <td class="s0"></td>
                <td class="s0" dir="ltr"><a target="_blank" href="https://www.plymouthherald.co.uk/">Plymouth Herald /
                        Plymouth Live</a></td>
                <td class="s1">$1,620</td>
                <td class="s2">70</td>
                <td class="s3">1 Week</td>
                <td class="s3" dir="ltr">News / Business / Health </td>
                <td class="s3" dir="ltr">Sponsored article</td>
                <td class="s3">UK</td>
            </tr>
            <tr style="height: 20px">
                <th id="0R385" style="height: 20px;" class="row-headers-background">
                    <div class="row-header-wrapper" style="line-height: 20px">386</div>
                </th>
                <td class="s0"></td>
                <td class="s0"><a target="_blank" href="https://www.somersetlive.co.uk/">Somerset Live</a></td>
                <td class="s1">$1,620</td>
                <td class="s2">70</td>
                <td class="s3">1 week</td>
                <td class="s3" dir="ltr">News / Health / Business</td>
                <td class="s3" dir="ltr">Sponsored article</td>
                <td class="s3">UK</td>
            </tr>
            <tr style="height: 20px">
                <th id="0R386" style="height: 20px;" class="row-headers-background">
                    <div class="row-header-wrapper" style="line-height: 20px">387</div>
                </th>
                <td class="s0"></td>
                <td class="s0" dir="ltr"><a target="_blank" href="https://www.getreading.co.uk/">Get Reading / Berkshire
                        Live</a></td>
                <td class="s1">$1,620</td>
                <td class="s2">71</td>
                <td class="s3">1 Week</td>
                <td class="s3" dir="ltr">News / Health </td>
                <td class="s3" dir="ltr">Sponsored article</td>
                <td class="s3">UK</td>
            </tr>
            <tr style="height: 20px">
                <th id="0R387" style="height: 20px;" class="row-headers-background">
                    <div class="row-header-wrapper" style="line-height: 20px">388</div>
                </th>
                <td class="s0"></td>
                <td class="s0" dir="ltr"><a target="_blank" href="https://www.stokesentinel.co.uk/">Stoke-on-Trent</a>
                </td>
                <td class="s1">$1,620</td>
                <td class="s2">72</td>
                <td class="s3">1 Week</td>
                <td class="s3" dir="ltr">News / Business / Health</td>
                <td class="s3" dir="ltr">Sponsored article</td>
                <td class="s3">UK</td>
            </tr>
            <tr style="height: 20px">
                <th id="0R388" style="height: 20px;" class="row-headers-background">
                    <div class="row-header-wrapper" style="line-height: 20px">389</div>
                </th>
                <td class="s0"></td>
                <td class="s0" dir="ltr"><a target="_blank" href="https://www.grimsbytelegraph.co.uk/">Grimsby Telegraph
                        / Grimsby Live</a></td>
                <td class="s1">$1,620</td>
                <td class="s2">73</td>
                <td class="s3">1 Week</td>
                <td class="s3" dir="ltr">News </td>
                <td class="s3" dir="ltr">Sponsored article</td>
                <td class="s3">UK</td>
            </tr>
            <tr style="height: 20px">
                <th id="0R389" style="height: 20px;" class="row-headers-background">
                    <div class="row-header-wrapper" style="line-height: 20px">390</div>
                </th>
                <td class="s0"></td>
                <td class="s0"><a target="_blank" href="https://www.cornwalllive.com/">Cornwall Live</a></td>
                <td class="s1">$1,620</td>
                <td class="s2">74</td>
                <td class="s3">1 Week</td>
                <td class="s3" dir="ltr">News / Business / Health</td>
                <td class="s3" dir="ltr">Sponsored article</td>
                <td class="s3">UK</td>
            </tr>
            <tr style="height: 20px">
                <th id="0R390" style="height: 20px;" class="row-headers-background">
                    <div class="row-header-wrapper" style="line-height: 20px">391</div>
                </th>
                <td class="s0"></td>
                <td class="s0"><a target="_blank" href="https://www.gloucestershirelive.co.uk/">Gloucestershire Live</a>
                </td>
                <td class="s1">$1,620</td>
                <td class="s2">74</td>
                <td class="s3">1 Week</td>
                <td class="s3" dir="ltr">News / Business / Health</td>
                <td class="s3" dir="ltr">Sponsored article</td>
                <td class="s3">UK</td>
            </tr>
            <tr style="height: 20px">
                <th id="0R391" style="height: 20px;" class="row-headers-background">
                    <div class="row-header-wrapper" style="line-height: 20px">392</div>
                </th>
                <td class="s0"></td>
                <td class="s0" dir="ltr"><a target="_blank" href="https://www.hertfordshiremercury.co.uk/">Hertfordshire
                        Mercury / Herts Live</a></td>
                <td class="s1">$1,620</td>
                <td class="s2">74</td>
                <td class="s3">1 Week</td>
                <td class="s3" dir="ltr">News </td>
                <td class="s3" dir="ltr">Sponsored article</td>
                <td class="s3">UK</td>
            </tr>
            <tr style="height: 20px">
                <th id="0R392" style="height: 20px;" class="row-headers-background">
                    <div class="row-header-wrapper" style="line-height: 20px">393</div>
                </th>
                <td class="s0"></td>
                <td class="s0" dir="ltr"><a target="_blank" href="https://www.cambridge-news.co.uk/">Cambridge News /
                        Cambridgeshire Live</a></td>
                <td class="s1">$1,620</td>
                <td class="s2">75</td>
                <td class="s3">1 Week</td>
                <td class="s3" dir="ltr">News / Business</td>
                <td class="s3" dir="ltr">Sponsored article</td>
                <td class="s3">UK</td>
            </tr>
            <tr style="height: 20px">
                <th id="0R393" style="height: 20px;" class="row-headers-background">
                    <div class="row-header-wrapper" style="line-height: 20px">394</div>
                </th>
                <td class="s0"></td>
                <td class="s0"><a target="_blank" href="https://www.kentlive.news/">Kent Live</a></td>
                <td class="s1">$1,620</td>
                <td class="s2">75</td>
                <td class="s3">1 Week</td>
                <td class="s3" dir="ltr">News / Business / Health</td>
                <td class="s3" dir="ltr">Sponsored article</td>
                <td class="s3">UK</td>
            </tr>
            <tr style="height: 20px">
                <th id="0R394" style="height: 20px;" class="row-headers-background">
                    <div class="row-header-wrapper" style="line-height: 20px">395</div>
                </th>
                <td class="s0"></td>
                <td class="s0" dir="ltr"><a target="_blank" href="http://www.edinburghlive.co.uk/">Derbyshire Live /
                        Derby Telegraph</a></td>
                <td class="s1">$1,620</td>
                <td class="s2">76</td>
                <td class="s3">1 Week</td>
                <td class="s3" dir="ltr">News</td>
                <td class="s3" dir="ltr">Sponsored article</td>
                <td class="s3">UK</td>
            </tr>
            <tr style="height: 20px">
                <th id="0R395" style="height: 20px;" class="row-headers-background">
                    <div class="row-header-wrapper" style="line-height: 20px">396</div>
                </th>
                <td class="s0"></td>
                <td class="s0"><a target="_blank" href="https://www.leicestermercury.co.uk/">Leicester Mercury /
                        Leicestershire Live</a></td>
                <td class="s1">$1,620</td>
                <td class="s2">76</td>
                <td class="s3">1 Week</td>
                <td class="s3" dir="ltr">News / Business / Health </td>
                <td class="s3" dir="ltr">Sponsored article</td>
                <td class="s3">UK</td>
            </tr>
            <tr style="height: 21px">
                <th id="0R396" style="height: 21px;" class="row-headers-background">
                    <div class="row-header-wrapper" style="line-height: 21px">397</div>
                </th>
                <td class="s0"></td>
                <td class="s0" dir="ltr"><a target="_blank" href="https://www.dailypost.co.uk/">North Wales Live / Daily
                        Post</a></td>
                <td class="s1">$1,620</td>
                <td class="s2">76</td>
                <td class="s3">1 Week</td>
                <td class="s3" dir="ltr">News / Business / Health</td>
                <td class="s3" dir="ltr">Sponsored article</td>
                <td class="s3">UK</td>
            </tr>
            <tr style="height: 20px">
                <th id="0R397" style="height: 20px;" class="row-headers-background">
                    <div class="row-header-wrapper" style="line-height: 20px">398</div>
                </th>
                <td class="s0"></td>
                <td class="s0" dir="ltr"><a target="_blank" href="http://www.essexlive.news/">Teesside Live / Gazette
                        Live</a></td>
                <td class="s1">$1,620</td>
                <td class="s2">76</td>
                <td class="s3">1 Week</td>
                <td class="s3" dir="ltr">News / Business / Health</td>
                <td class="s3" dir="ltr">Sponsored article</td>
                <td class="s3">UK</td>
            </tr>
            <tr style="height: 20px">
                <th id="0R398" style="height: 20px;" class="row-headers-background">
                    <div class="row-header-wrapper" style="line-height: 20px">399</div>
                </th>
                <td class="s0"></td>
                <td class="s0"><a target="_blank" href="https://www.hulldailymail.co.uk/">Hull Daily Mail / Hull
                        Live</a></td>
                <td class="s1">$1,620</td>
                <td class="s2">77</td>
                <td class="s3">1 Week</td>
                <td class="s3" dir="ltr">News / Sports</td>
                <td class="s3" dir="ltr">Sponsored article</td>
                <td class="s3">UK</td>
            </tr>
            <tr style="height: 20px">
                <th id="0R399" style="height: 20px;" class="row-headers-background">
                    <div class="row-header-wrapper" style="line-height: 20px">400</div>
                </th>
                <td class="s0"></td>
                <td class="s0"><a target="_blank" href="https://www.examinerlive.co.uk/">Yorkshire Live / Examiner
                        Live</a></td>
                <td class="s1">$1,620</td>
                <td class="s2">78</td>
                <td class="s3">1 Week</td>
                <td class="s3" dir="ltr">News / Sports </td>
                <td class="s3" dir="ltr">Sponsored article</td>
                <td class="s3">UK</td>
            </tr>
            <tr style="height: 20px">
                <th id="0R400" style="height: 20px;" class="row-headers-background">
                    <div class="row-header-wrapper" style="line-height: 20px">401</div>
                </th>
                <td class="s0"></td>
                <td class="s0"><a target="_blank" href="https://www.devonlive.com/">Devon Live</a></td>
                <td class="s1">$1,620</td>
                <td class="s2">79</td>
                <td class="s3">1 Week</td>
                <td class="s3" dir="ltr">News / Health / Business</td>
                <td class="s3" dir="ltr">Sponsored article</td>
                <td class="s3">UK</td>
            </tr>
            <tr style="height: 20px">
                <th id="0R401" style="height: 20px;" class="row-headers-background">
                    <div class="row-header-wrapper" style="line-height: 20px">402</div>
                </th>
                <td class="s0"></td>
                <td class="s0"><a target="_blank" href="https://www.nottinghampost.com/">Nottingham Post /
                        Nottinghamshire Live</a></td>
                <td class="s1">$1,620</td>
                <td class="s2">79</td>
                <td class="s3">1 Week</td>
                <td class="s3" dir="ltr">News / Health / Business </td>
                <td class="s3" dir="ltr">Sponsored article</td>
                <td class="s3">UK</td>
            </tr>
            <tr style="height: 20px">
                <th id="0R402" style="height: 20px;" class="row-headers-background">
                    <div class="row-header-wrapper" style="line-height: 20px">403</div>
                </th>
                <td class="s0"></td>
                <td class="s0"><a target="_blank" href="https://www.football.london/">Football London</a></td>
                <td class="s1">$1,620</td>
                <td class="s2">79</td>
                <td class="s3">1 Week</td>
                <td class="s3" dir="ltr">Sports </td>
                <td class="s3" dir="ltr">Sponsored article</td>
                <td class="s3">UK</td>
            </tr>
            <tr style="height: 20px">
                <th id="0R403" style="height: 20px;" class="row-headers-background">
                    <div class="row-header-wrapper" style="line-height: 20px">404</div>
                </th>
                <td class="s0"></td>
                <td class="s0"><a target="_blank" href="https://www.mylondon.news/">My London News</a></td>
                <td class="s1">$1,620</td>
                <td class="s2">80</td>
                <td class="s3">1 Week</td>
                <td class="s3" dir="ltr">News / Lifestyle / Health </td>
                <td class="s3" dir="ltr">Sponsored article</td>
                <td class="s3">UK</td>
            </tr>
            <tr style="height: 20px">
                <th id="0R404" style="height: 20px;" class="row-headers-background">
                    <div class="row-header-wrapper" style="line-height: 20px">405</div>
                </th>
                <td class="s0"></td>
                <td class="s0" dir="ltr"><a target="_blank" href="https://www.getsurrey.co.uk/">Surrey Live / Get
                        Surrey</a></td>
                <td class="s1">$1,620</td>
                <td class="s2">80</td>
                <td class="s3">1 Week</td>
                <td class="s3" dir="ltr">News / Business</td>
                <td class="s3" dir="ltr">Sponsored article</td>
                <td class="s3">UK</td>
            </tr>
            <tr style="height: 20px">
                <th id="0R405" style="height: 20px;" class="row-headers-background">
                    <div class="row-header-wrapper" style="line-height: 20px">406</div>
                </th>
                <td class="s0"></td>
                <td class="s0"><a target="_blank" href="https://www.belfastlive.co.uk/">Belfast Live</a></td>
                <td class="s1">$1,620</td>
                <td class="s2">81</td>
                <td class="s3">1 Week</td>
                <td class="s3" dir="ltr">News / Business / Health</td>
                <td class="s3" dir="ltr">Sponsored article</td>
                <td class="s3">UK</td>
            </tr>
            <tr style="height: 20px">
                <th id="0R406" style="height: 20px;" class="row-headers-background">
                    <div class="row-header-wrapper" style="line-height: 20px">407</div>
                </th>
                <td class="s0"></td>
                <td class="s0"><a target="_blank" href="https://www.coventrytelegraph.net/">Coventry Telegraph</a></td>
                <td class="s1">$1,620</td>
                <td class="s2">82</td>
                <td class="s3">1 Week</td>
                <td class="s3" dir="ltr">News / Health </td>
                <td class="s3" dir="ltr">Sponsored article</td>
                <td class="s3">UK</td>
            </tr>
            <tr style="height: 20px">
                <th id="0R407" style="height: 20px;" class="row-headers-background">
                    <div class="row-header-wrapper" style="line-height: 20px">408</div>
                </th>
                <td class="s0"></td>
                <td class="s0"><a target="_blank" href="https://www.chroniclelive.co.uk/">Chronicle Live</a></td>
                <td class="s1">$1,620</td>
                <td class="s2">86</td>
                <td class="s3">1 Week</td>
                <td class="s3" dir="ltr">News / Movies &amp; TV </td>
                <td class="s3" dir="ltr">Sponsored article</td>
                <td class="s3">UK</td>
            </tr>
            <tr style="height: 20px">
                <th id="0R408" style="height: 20px;" class="row-headers-background">
                    <div class="row-header-wrapper" style="line-height: 20px">409</div>
                </th>
                <td class="s0"></td>
                <td class="s0"><a target="_blank" href="https://www.wonderlandmagazine.com/">Wonderland Magazine</a>
                </td>
                <td class="s1">$1,700</td>
                <td class="s2">69</td>
                <td class="s3">1 Week</td>
                <td class="s3" dir="ltr">News </td>
                <td class="s3" dir="ltr">Organic Placement</td>
                <td class="s3" dir="ltr">UK</td>
            </tr>
            <tr style="height: 20px">
                <th id="0R409" style="height: 20px;" class="row-headers-background">
                    <div class="row-header-wrapper" style="line-height: 20px">410</div>
                </th>
                <td class="s0"></td>
                <td class="s0"><a target="_blank" href="https://u.today/">U.Today</a></td>
                <td class="s1">$1,700</td>
                <td class="s2">53</td>
                <td class="s3">2 Weeks</td>
                <td class="s3" dir="ltr">Tech / Crypto / News</td>
                <td class="s3" dir="ltr">Organic with small disclaimer</td>
                <td class="s3">US</td>
            </tr>
            <tr style="height: 20px">
                <th id="0R410" style="height: 20px;" class="row-headers-background">
                    <div class="row-header-wrapper" style="line-height: 20px">411</div>
                </th>
                <td class="s0"></td>
                <td class="s0" dir="ltr"><a target="_blank" href="https://www.ibtimes.com.au/">IB Times</a></td>
                <td class="s1">$1,800</td>
                <td class="s2">72</td>
                <td class="s3">1 Week</td>
                <td class="s3" dir="ltr">News / Business / Tech / Science / Sports / Entertainment / Lifestyle</td>
                <td class="s3" dir="ltr">Organic Placement</td>
                <td class="s3">Australia</td>
            </tr>
            <tr style="height: 20px">
                <th id="0R411" style="height: 20px;" class="row-headers-background">
                    <div class="row-header-wrapper" style="line-height: 20px">412</div>
                </th>
                <td class="s0"></td>
                <td class="s0"><a target="_blank" href="https://www.timesofisrael.com/">Times of Isreal</a></td>
                <td class="s1">$1,800</td>
                <td class="s2">91</td>
                <td class="s3">1 Week</td>
                <td class="s3" dir="ltr">News Tech / Real Estate</td>
                <td class="s3" dir="ltr">Sponsored article</td>
                <td class="s3">Israel</td>
            </tr>
            <tr style="height: 20px">
                <th id="0R412" style="height: 20px;" class="row-headers-background">
                    <div class="row-header-wrapper" style="line-height: 20px">413</div>
                </th>
                <td class="s0"></td>
                <td class="s0"><a target="_blank" href="https://www.reforma.com/">Reforma </a></td>
                <td class="s1">$1,800</td>
                <td class="s2">74</td>
                <td class="s3">1 Week</td>
                <td class="s3" dir="ltr">News </td>
                <td class="s3" dir="ltr">Organic Placement</td>
                <td class="s3">Mexico</td>
            </tr>
            <tr style="height: 20px">
                <th id="0R413" style="height: 20px;" class="row-headers-background">
                    <div class="row-header-wrapper" style="line-height: 20px">414</div>
                </th>
                <td class="s0"></td>
                <td class="s0"><a target="_blank" href="https://www.milenio.com/">Milenio</a></td>
                <td class="s1">$1,800</td>
                <td class="s2">92</td>
                <td class="s3">1 Week</td>
                <td class="s3" dir="ltr">News / Business / Tech / Entertainment / Sports</td>
                <td class="s3" dir="ltr">Organic Placement</td>
                <td class="s3">Mexico</td>
            </tr>
            <tr style="height: 20px">
                <th id="0R414" style="height: 20px;" class="row-headers-background">
                    <div class="row-header-wrapper" style="line-height: 20px">415</div>
                </th>
                <td class="s5"></td>
                <td class="s0"><a target="_blank" href="https://www.houseandgarden.co.za/">House &amp; Garden Africa</a>
                </td>
                <td class="s1">$2,000</td>
                <td class="s2">35</td>
                <td class="s3">2 Weeks</td>
                <td class="s3" dir="ltr">Real Estate</td>
                <td class="s3" dir="ltr">Organic Placement</td>
                <td class="s3" dir="ltr">Africa</td>
            </tr>
            <tr style="height: 20px">
                <th id="0R415" style="height: 20px;" class="row-headers-background">
                    <div class="row-header-wrapper" style="line-height: 20px">416</div>
                </th>
                <td class="s0"></td>
                <td class="s0"><a target="_blank" href="https://radaronline.com/">Radar Online</a></td>
                <td class="s1">$2,000</td>
                <td class="s2">82</td>
                <td class="s3">1 Week</td>
                <td class="s3" dir="ltr">Entertainment / News</td>
                <td class="s3" dir="ltr">Organic Placement</td>
                <td class="s3">Global</td>
            </tr>
            <tr style="height: 20px">
                <th id="0R416" style="height: 20px;" class="row-headers-background">
                    <div class="row-header-wrapper" style="line-height: 20px">417</div>
                </th>
                <td class="s0"></td>
                <td class="s0" dir="ltr"><a target="_blank" href="https://hackernoon.com/">HackerNoon</a></td>
                <td class="s1">$2,000</td>
                <td class="s2">85</td>
                <td class="s3">2 Weeks</td>
                <td class="s3" dir="ltr">Tech / Crypto </td>
                <td class="s3" dir="ltr">Organic Placement</td>
                <td class="s3">Global</td>
            </tr>
            <tr style="height: 20px">
                <th id="0R417" style="height: 20px;" class="row-headers-background">
                    <div class="row-header-wrapper" style="line-height: 20px">418</div>
                </th>
                <td class="s0"></td>
                <td class="s0"><a target="_blank" href="https://coincodex.com/">CoinCodex</a></td>
                <td class="s1">$2,000</td>
                <td class="s2">52</td>
                <td class="s3">1 Week</td>
                <td class="s3" dir="ltr">Crypto / Tech</td>
                <td class="s3" dir="ltr">Organic with small disclaimer</td>
                <td class="s3">Global</td>
            </tr>
            <tr style="height: 20px">
                <th id="0R418" style="height: 20px;" class="row-headers-background">
                    <div class="row-header-wrapper" style="line-height: 20px">419</div>
                </th>
                <td class="s0"></td>
                <td class="s0"><a target="_blank" href="https://foodandwineespanol.com/">Food and Wine Español</a></td>
                <td class="s1">$2,000</td>
                <td class="s2">47</td>
                <td class="s3">2 Weeks</td>
                <td class="s3" dir="ltr">Entertainment</td>
                <td class="s3" dir="ltr">Organic Placement</td>
                <td class="s3">Spain</td>
            </tr>
            <tr style="height: 20px">
                <th id="0R419" style="height: 20px;" class="row-headers-background">
                    <div class="row-header-wrapper" style="line-height: 20px">420</div>
                </th>
                <td class="s0"></td>
                <td class="s0"><a target="_blank" href="https://hollywoodunlocked.com/">Hollywood Unlocked</a></td>
                <td class="s1">$2,000</td>
                <td class="s2">64</td>
                <td class="s3">1 Week</td>
                <td class="s3" dir="ltr">Music / News / Movies &amp; TV</td>
                <td class="s3" dir="ltr">Organic Placement</td>
                <td class="s3">US</td>
            </tr>
            <tr style="height: 20px">
                <th id="0R420" style="height: 20px;" class="row-headers-background">
                    <div class="row-header-wrapper" style="line-height: 20px">421</div>
                </th>
                <td class="s0"></td>
                <td class="s0"><a target="_blank" href="https://www.sfexaminer.com/">SF Examiner </a></td>
                <td class="s1">$2,000</td>
                <td class="s2">78</td>
                <td class="s3">1 Week</td>
                <td class="s3" dir="ltr">News / Sports</td>
                <td class="s3" dir="ltr">Organic Placement</td>
                <td class="s3">US</td>
            </tr>
            <tr style="height: 20px">
                <th id="0R421" style="height: 20px;" class="row-headers-background">
                    <div class="row-header-wrapper" style="line-height: 20px">422</div>
                </th>
                <td class="s0"></td>
                <td class="s0"><a target="_blank" href="https://www.mercedsunstar.com/">Merced Sun-Star</a></td>
                <td class="s1">$2,000</td>
                <td class="s2">66</td>
                <td class="s3">2 Weeks</td>
                <td class="s3" dir="ltr">News / Sports / Entertainment</td>
                <td class="s3" dir="ltr">Organic with small disclaimer</td>
                <td class="s3">US</td>
            </tr>
            <tr style="height: 20px">
                <th id="0R422" style="height: 20px;" class="row-headers-background">
                    <div class="row-header-wrapper" style="line-height: 20px">423</div>
                </th>
                <td class="s0"></td>
                <td class="s0"><a target="_blank" href="https://www.tri-cityherald.com/">Tri-City Herald</a></td>
                <td class="s1">$2,000</td>
                <td class="s2">68</td>
                <td class="s3">2 Weeks</td>
                <td class="s3" dir="ltr">News / Sports / Entertainment</td>
                <td class="s3" dir="ltr">Organic with small disclaimer</td>
                <td class="s3">US</td>
            </tr>
            <tr style="height: 20px">
                <th id="0R423" style="height: 20px;" class="row-headers-background">
                    <div class="row-header-wrapper" style="line-height: 20px">424</div>
                </th>
                <td class="s0"></td>
                <td class="s0"><a target="_blank" href="https://www.bellinghamherald.com/">Bellingham Herald</a></td>
                <td class="s1">$2,000</td>
                <td class="s2">69</td>
                <td class="s3">2 Weeks</td>
                <td class="s3" dir="ltr">News / Sports / Entertainment</td>
                <td class="s3" dir="ltr">Organic with small disclaimer</td>
                <td class="s3">US</td>
            </tr>
            <tr style="height: 20px">
                <th id="0R424" style="height: 20px;" class="row-headers-background">
                    <div class="row-header-wrapper" style="line-height: 20px">425</div>
                </th>
                <td class="s0"></td>
                <td class="s0"><a target="_blank" href="https://www.macon.com/">Macon Telegraph</a></td>
                <td class="s1">$2,000</td>
                <td class="s2">69</td>
                <td class="s3">2 Weeks</td>
                <td class="s3" dir="ltr">News / Sports / Entertainment</td>
                <td class="s3" dir="ltr">Organic with small disclaimer</td>
                <td class="s3">US</td>
            </tr>
            <tr style="height: 20px">
                <th id="0R425" style="height: 20px;" class="row-headers-background">
                    <div class="row-header-wrapper" style="line-height: 20px">426</div>
                </th>
                <td class="s0"></td>
                <td class="s0"><a target="_blank" href="https://www.nydailynews.com/">NY Daily News</a></td>
                <td class="s1">$2,000</td>
                <td class="s2">92</td>
                <td class="s3">1 Week</td>
                <td class="s3" dir="ltr">News / Real Estate / Lifestyle</td>
                <td class="s3" dir="ltr">Sponsored article</td>
                <td class="s3">US</td>
            </tr>
            <tr style="height: 20px">
                <th id="0R426" style="height: 20px;" class="row-headers-background">
                    <div class="row-header-wrapper" style="line-height: 20px">427</div>
                </th>
                <td class="s0"></td>
                <td class="s0"><a target="_blank" href="https://imagenmiami.com/">Imagen Miami</a></td>
                <td class="s1">$2,100</td>
                <td class="s2">25</td>
                <td class="s3">1 Week</td>
                <td class="s3" dir="ltr">Entertainment / Music / Business / Fashion</td>
                <td class="s3" dir="ltr">Organic Placement</td>
                <td class="s3">Spain</td>
            </tr>
            <tr style="height: 20px">
                <th id="0R427" style="height: 20px;" class="row-headers-background">
                    <div class="row-header-wrapper" style="line-height: 20px">428</div>
                </th>
                <td class="s0"></td>
                <td class="s0"><a target="_blank" href="https://www.madridactual.es/">Madrid Actual</a></td>
                <td class="s1">$2,100</td>
                <td class="s2">53</td>
                <td class="s3">1 Week</td>
                <td class="s3" dir="ltr">News</td>
                <td class="s3" dir="ltr">Organic Placement</td>
                <td class="s3">Spain</td>
            </tr>
            <tr style="height: 20px">
                <th id="0R428" style="height: 20px;" class="row-headers-background">
                    <div class="row-header-wrapper" style="line-height: 20px">429</div>
                </th>
                <td class="s0"></td>
                <td class="s0"><a target="_blank" href="https://www.diariosigloxxi.com/">Diario Siglo 21</a></td>
                <td class="s1">$2,100</td>
                <td class="s2">63</td>
                <td class="s3">1 Week</td>
                <td class="s3" dir="ltr">News / Sports / Tech / Science</td>
                <td class="s3" dir="ltr">Organic Placement</td>
                <td class="s3">Spain</td>
            </tr>
            <tr style="height: 20px">
                <th id="0R429" style="height: 20px;" class="row-headers-background">
                    <div class="row-header-wrapper" style="line-height: 20px">430</div>
                </th>
                <td class="s0"></td>
                <td class="s0"><a target="_blank" href="https://www.tercerainformacion.es/">Tercera información</a></td>
                <td class="s1">$2,100</td>
                <td class="s2">65</td>
                <td class="s3">1 Week</td>
                <td class="s3" dir="ltr">News / Tech / Science</td>
                <td class="s3" dir="ltr">Organic Placement</td>
                <td class="s3">Spain</td>
            </tr>
            <tr style="height: 20px">
                <th id="0R430" style="height: 20px;" class="row-headers-background">
                    <div class="row-header-wrapper" style="line-height: 20px">431</div>
                </th>
                <td class="s0"></td>
                <td class="s0"><a target="_blank" href="https://andaluciainformacion.es/">Andalucía Información</a></td>
                <td class="s1">$2,100</td>
                <td class="s2">67</td>
                <td class="s3">1 Week</td>
                <td class="s3" dir="ltr">News / Sports</td>
                <td class="s3" dir="ltr">Organic Placement</td>
                <td class="s3">Spain</td>
            </tr>
            <tr style="height: 20px">
                <th id="0R431" style="height: 20px;" class="row-headers-background">
                    <div class="row-header-wrapper" style="line-height: 20px">432</div>
                </th>
                <td class="s0"></td>
                <td class="s0"><a target="_blank" href="https://www.okaz.com.sa/">Okaz</a></td>
                <td class="s1">$2,400</td>
                <td class="s2">75</td>
                <td class="s3">2 Weeks</td>
                <td class="s3" dir="ltr">News</td>
                <td class="s3" dir="ltr">Organic Placement</td>
                <td class="s3">Middle East</td>
            </tr>
            <tr style="height: 20px">
                <th id="0R432" style="height: 20px;" class="row-headers-background">
                    <div class="row-header-wrapper" style="line-height: 20px">433</div>
                </th>
                <td class="s0"></td>
                <td class="s0"><a target="_blank" href="https://www.univision.com/">Univision</a></td>
                <td class="s1">$2,400</td>
                <td class="s2">88</td>
                <td class="s3">1 Week</td>
                <td class="s3" dir="ltr">News / Lifestyle / Sports </td>
                <td class="s3" dir="ltr">Organic Placement</td>
                <td class="s3">Spain</td>
            </tr>
            <tr style="height: 20px">
                <th id="0R433" style="height: 20px;" class="row-headers-background">
                    <div class="row-header-wrapper" style="line-height: 20px">434</div>
                </th>
                <td class="s6"></td>
                <td class="s0"><a target="_blank" href="https://www.cnbcafrica.com/">CNBC Africa</a></td>
                <td class="s1">$2,500</td>
                <td class="s2">65</td>
                <td class="s3">2 Weeks</td>
                <td class="s3" dir="ltr">News </td>
                <td class="s3" dir="ltr">Sponsored article</td>
                <td class="s3">Africa</td>
            </tr>
            <tr style="height: 20px">
                <th id="0R434" style="height: 20px;" class="row-headers-background">
                    <div class="row-header-wrapper" style="line-height: 20px">435</div>
                </th>
                <td class="s0"></td>
                <td class="s0" dir="ltr"><a target="_blank" href="https://www.medicaldaily.com/">Medical Daily</a></td>
                <td class="s1">$2,500</td>
                <td class="s2">82</td>
                <td class="s3">1 Week</td>
                <td class="s3" dir="ltr">Health</td>
                <td class="s3" dir="ltr">Organic Placement</td>
                <td class="s3">Global</td>
            </tr>
            <tr style="height: 20px">
                <th id="0R435" style="height: 20px;" class="row-headers-background">
                    <div class="row-header-wrapper" style="line-height: 20px">436</div>
                </th>
                <td class="s0"></td>
                <td class="s0"><a target="_blank" href="http://eonline.com/">E! News / E Online</a></td>
                <td class="s1">$2,500</td>
                <td class="s2">92</td>
                <td class="s3">1 Week</td>
                <td class="s3" dir="ltr">News / Movies &amp; TV </td>
                <td class="s3" dir="ltr">Organic with small disclaimer</td>
                <td class="s3">Global</td>
            </tr>
            <tr style="height: 20px">
                <th id="0R436" style="height: 20px;" class="row-headers-background">
                    <div class="row-header-wrapper" style="line-height: 20px">437</div>
                </th>
                <td class="s0"></td>
                <td class="s0"><a target="_blank" href="https://www.ctpost.com/">CT Post</a></td>
                <td class="s1">$2,500</td>
                <td class="s2">79</td>
                <td class="s3">1 Week</td>
                <td class="s3" dir="ltr">News / Sports / Business / Entertainment </td>
                <td class="s3" dir="ltr">Sponsored article</td>
                <td class="s3">Global</td>
            </tr>
            <tr style="height: 20px">
                <th id="0R437" style="height: 20px;" class="row-headers-background">
                    <div class="row-header-wrapper" style="line-height: 20px">438</div>
                </th>
                <td class="s0"></td>
                <td class="s0"><a target="_blank" href="https://instyle.mx/">In Style Mexico</a></td>
                <td class="s1">$2,500</td>
                <td class="s2">56</td>
                <td class="s3">2 Weeks</td>
                <td class="s3" dir="ltr">News / Lifestyle / Fashion / Entertainment</td>
                <td class="s3" dir="ltr">Organic Placement</td>
                <td class="s3">Mexico</td>
            </tr>
            <tr style="height: 20px">
                <th id="0R438" style="height: 20px;" class="row-headers-background">
                    <div class="row-header-wrapper" style="line-height: 20px">439</div>
                </th>
                <td class="s0"></td>
                <td class="s0"><a target="_blank" href="https://robbreport.mx/">Robb Report Mexico</a></td>
                <td class="s1">$2,500</td>
                <td class="s2">42</td>
                <td class="s3">3 Weeks</td>
                <td class="s3" dir="ltr">News / Movies &amp; TV </td>
                <td class="s3" dir="ltr">Organic Placement</td>
                <td class="s3">Mexico</td>
            </tr>
            <tr style="height: 20px">
                <th id="0R439" style="height: 20px;" class="row-headers-background">
                    <div class="row-header-wrapper" style="line-height: 20px">440</div>
                </th>
                <td class="s0"></td>
                <td class="s0"><a target="_blank" href="https://saudigazette.com.sa/">Saudia Gazette</a></td>
                <td class="s1">$2,500</td>
                <td class="s2">77</td>
                <td class="s3">1 Week</td>
                <td class="s3" dir="ltr">News / Sports / Business / Entertainment </td>
                <td class="s3" dir="ltr">Organic with small disclaimer</td>
                <td class="s3">Middle East</td>
            </tr>
            <tr style="height: 20px">
                <th id="0R440" style="height: 20px;" class="row-headers-background">
                    <div class="row-header-wrapper" style="line-height: 20px">441</div>
                </th>
                <td class="s0"></td>
                <td class="s0"><a target="_blank" href="https://www.glamour.co.za/">Glamour South Africa</a></td>
                <td class="s1">$2,500</td>
                <td class="s2">54</td>
                <td class="s3">1 Week</td>
                <td class="s3" dir="ltr">Fashion / Lifestyle</td>
                <td class="s3" dir="ltr">Organic Placement</td>
                <td class="s3">South Africa</td>
            </tr>
            <tr style="height: 20px">
                <th id="0R441" style="height: 20px;" class="row-headers-background">
                    <div class="row-header-wrapper" style="line-height: 20px">442</div>
                </th>
                <td class="s0"></td>
                <td class="s0"><a target="_blank" href="https://www.gq.co.za/">GQ South Africa </a></td>
                <td class="s1">$2,500</td>
                <td class="s2">55</td>
                <td class="s3">1 Week</td>
                <td class="s3" dir="ltr">Fashion / Tech / Entertainment</td>
                <td class="s3" dir="ltr">Organic Placement</td>
                <td class="s3">South Africa</td>
            </tr>
            <tr style="height: 20px">
                <th id="0R442" style="height: 20px;" class="row-headers-background">
                    <div class="row-header-wrapper" style="line-height: 20px">443</div>
                </th>
                <td class="s0"></td>
                <td class="s0"><a target="_blank" href="https://www.thisismoney.co.uk/money/index.html">This is
                        Money</a></td>
                <td class="s1">$2,500</td>
                <td class="s2">81</td>
                <td class="s3">1 Week</td>
                <td class="s3" dir="ltr">News / Business</td>
                <td class="s3" dir="ltr">Organic with small disclaimer</td>
                <td class="s3">UK</td>
            </tr>
            <tr style="height: 20px">
                <th id="0R443" style="height: 20px;" class="row-headers-background">
                    <div class="row-header-wrapper" style="line-height: 20px">444</div>
                </th>
                <td class="s0"></td>
                <td class="s0"><a target="_blank" href="https://inews.co.uk/">iNews</a></td>
                <td class="s1">$2,500</td>
                <td class="s2">82</td>
                <td class="s3">1 Week</td>
                <td class="s3" dir="ltr">News / Business / Sports </td>
                <td class="s3" dir="ltr">Organic with small disclaimer</td>
                <td class="s3">UK</td>
            </tr>
            <tr style="height: 20px">
                <th id="0R444" style="height: 20px;" class="row-headers-background">
                    <div class="row-header-wrapper" style="line-height: 20px">445</div>
                </th>
                <td class="s0"></td>
                <td class="s0"><a target="_blank" href="https://www.heraldonline.com/">Rock Hill Herald</a></td>
                <td class="s1">$2,500</td>
                <td class="s2">71</td>
                <td class="s3">2 Weeks</td>
                <td class="s3" dir="ltr">News / Sports / Entertainment</td>
                <td class="s3" dir="ltr">Organic with small disclaimer</td>
                <td class="s3">US</td>
            </tr>
            <tr style="height: 20px">
                <th id="0R445" style="height: 20px;" class="row-headers-background">
                    <div class="row-header-wrapper" style="line-height: 20px">446</div>
                </th>
                <td class="s0"></td>
                <td class="s0"><a target="_blank" href="https://www.myrtlebeachonline.com/">Myrtle Beach Sun News</a>
                </td>
                <td class="s1">$2,500</td>
                <td class="s2">72</td>
                <td class="s3">2 Weeks</td>
                <td class="s3" dir="ltr">News / Sports / Entertainment</td>
                <td class="s3" dir="ltr">Organic with small disclaimer</td>
                <td class="s3">US</td>
            </tr>
            <tr style="height: 20px">
                <th id="0R446" style="height: 20px;" class="row-headers-background">
                    <div class="row-header-wrapper" style="line-height: 20px">447</div>
                </th>
                <td class="s0"></td>
                <td class="s0"><a target="_blank" href="https://www.centredaily.com/">Centre Daily Times</a></td>
                <td class="s1">$2,500</td>
                <td class="s2">73</td>
                <td class="s3">2 Weeks</td>
                <td class="s3" dir="ltr">News / Sports News</td>
                <td class="s3" dir="ltr">Organic with small disclaimer</td>
                <td class="s3">US</td>
            </tr>
            <tr style="height: 20px">
                <th id="0R447" style="height: 20px;" class="row-headers-background">
                    <div class="row-header-wrapper" style="line-height: 20px">448</div>
                </th>
                <td class="s0"></td>
                <td class="s0"><a target="_blank" href="https://www.heraldsun.com/">Durham Herald Sun</a></td>
                <td class="s1">$2,500</td>
                <td class="s2">75</td>
                <td class="s3">2 Weeks</td>
                <td class="s3" dir="ltr">News / Business / Sports / Entertainment</td>
                <td class="s3" dir="ltr">Organic with small disclaimer</td>
                <td class="s3">US</td>
            </tr>
            <tr style="height: 20px">
                <th id="0R448" style="height: 20px;" class="row-headers-background">
                    <div class="row-header-wrapper" style="line-height: 20px">449</div>
                </th>
                <td class="s0"></td>
                <td class="s0"><a target="_blank" href="https://www.ledger-enquirer.com/">Ledger-Enquirer</a></td>
                <td class="s1">$2,500</td>
                <td class="s2">75</td>
                <td class="s3">2 Weeks</td>
                <td class="s3" dir="ltr">News / Entertainment</td>
                <td class="s3" dir="ltr">Organic with small disclaimer</td>
                <td class="s3">US</td>
            </tr>
            <tr style="height: 20px">
                <th id="0R449" style="height: 20px;" class="row-headers-background">
                    <div class="row-header-wrapper" style="line-height: 20px">450</div>
                </th>
                <td class="s0"></td>
                <td class="s0"><a target="_blank" href="https://www.modbee.com/">Modesto Bee</a></td>
                <td class="s1">$2,500</td>
                <td class="s2">75</td>
                <td class="s3">2 Weeks</td>
                <td class="s3" dir="ltr">News / Sports / Entertainment</td>
                <td class="s3" dir="ltr">Organic with small disclaimer</td>
                <td class="s3">US</td>
            </tr>
            <tr style="height: 20px">
                <th id="0R450" style="height: 20px;" class="row-headers-background">
                    <div class="row-header-wrapper" style="line-height: 20px">451</div>
                </th>
                <td class="s0"></td>
                <td class="s0"><a target="_blank" href="https://www.bnd.com/">Belleville News-Democrat</a></td>
                <td class="s1">$2,500</td>
                <td class="s2">76</td>
                <td class="s3">2 Weeks</td>
                <td class="s3" dir="ltr">News / Sports</td>
                <td class="s3" dir="ltr">Organic with small disclaimer</td>
                <td class="s3">US</td>
            </tr>
            <tr style="height: 20px">
                <th id="0R451" style="height: 20px;" class="row-headers-background">
                    <div class="row-header-wrapper" style="line-height: 20px">452</div>
                </th>
                <td class="s0"></td>
                <td class="s0"><a target="_blank" href="https://www.bradenton.com/">Bradenton Herald</a></td>
                <td class="s1">$2,500</td>
                <td class="s2">76</td>
                <td class="s3">2 Weeks</td>
                <td class="s3" dir="ltr">News / Sports / Business</td>
                <td class="s3" dir="ltr">Organic with small disclaimer</td>
                <td class="s3">US</td>
            </tr>
            <tr style="height: 20px">
                <th id="0R452" style="height: 20px;" class="row-headers-background">
                    <div class="row-header-wrapper" style="line-height: 20px">453</div>
                </th>
                <td class="s0"></td>
                <td class="s0"><a target="_blank" href="https://www.idahostatesman.com/">Idaho Statesman</a></td>
                <td class="s1">$2,500</td>
                <td class="s2">76</td>
                <td class="s3">2 Weeks</td>
                <td class="s3" dir="ltr">News / Sports / Entertainment</td>
                <td class="s3" dir="ltr">Organic with small disclaimer</td>
                <td class="s3">US</td>
            </tr>
            <tr style="height: 20px">
                <th id="0R453" style="height: 20px;" class="row-headers-background">
                    <div class="row-header-wrapper" style="line-height: 20px">454</div>
                </th>
                <td class="s0"></td>
                <td class="s0"><a target="_blank" href="https://www.sanluisobispo.com/">San Luis Obispo Tribune</a></td>
                <td class="s1">$2,500</td>
                <td class="s2">76</td>
                <td class="s3">2 Weeks</td>
                <td class="s3" dir="ltr">News / Sports / Entertainment</td>
                <td class="s3" dir="ltr">Organic with small disclaimer</td>
                <td class="s3">US</td>
            </tr>
            <tr style="height: 20px">
                <th id="0R454" style="height: 20px;" class="row-headers-background">
                    <div class="row-header-wrapper" style="line-height: 20px">455</div>
                </th>
                <td class="s0"></td>
                <td class="s0"><a target="_blank" href="https://www.thenewstribune.com/">Tacoma News Tribune</a></td>
                <td class="s1">$2,500</td>
                <td class="s2">76</td>
                <td class="s3">2 Weeks</td>
                <td class="s3" dir="ltr">News / Business / Entertainment</td>
                <td class="s3" dir="ltr">Organic with small disclaimer</td>
                <td class="s3">US</td>
            </tr>
            <tr style="height: 20px">
                <th id="0R455" style="height: 20px;" class="row-headers-background">
                    <div class="row-header-wrapper" style="line-height: 20px">456</div>
                </th>
                <td class="s0"></td>
                <td class="s0"><a target="_blank" href="https://www.fresnobee.com/">The Fresno Bee</a></td>
                <td class="s1">$2,500</td>
                <td class="s2">78</td>
                <td class="s3">2 Weeks</td>
                <td class="s3" dir="ltr">News / Sports / Entertainment</td>
                <td class="s3" dir="ltr">Organic with small disclaimer</td>
                <td class="s3">US</td>
            </tr>
            <tr style="height: 20px">
                <th id="0R456" style="height: 20px;" class="row-headers-background">
                    <div class="row-header-wrapper" style="line-height: 20px">457</div>
                </th>
                <td class="s0"></td>
                <td class="s0"><a target="_blank" href="https://www.thetelegraph.com/">The Telegraph</a></td>
                <td class="s1">$2,500</td>
                <td class="s2">63</td>
                <td class="s3">1 Week</td>
                <td class="s3" dir="ltr">News / Sports </td>
                <td class="s3" dir="ltr">Sponsored article</td>
                <td class="s3">US</td>
            </tr>
            <tr style="height: 20px">
                <th id="0R457" style="height: 20px;" class="row-headers-background">
                    <div class="row-header-wrapper" style="line-height: 20px">458</div>
                </th>
                <td class="s0"></td>
                <td class="s0"><a target="_blank" href="https://www.thehour.com/">The Hour</a></td>
                <td class="s1">$2,500</td>
                <td class="s2">67</td>
                <td class="s3">1 Week</td>
                <td class="s3" dir="ltr">News / Business / Entertainment </td>
                <td class="s3" dir="ltr">Sponsored article</td>
                <td class="s3">US</td>
            </tr>
            <tr style="height: 20px">
                <th id="0R458" style="height: 20px;" class="row-headers-background">
                    <div class="row-header-wrapper" style="line-height: 20px">459</div>
                </th>
                <td class="s0"></td>
                <td class="s0"><a target="_blank" href="https://www.stamfordadvocate.com/">Stamford Advocate </a></td>
                <td class="s1">$2,500</td>
                <td class="s2">76</td>
                <td class="s3">1 Week</td>
                <td class="s3" dir="ltr">News / Sports / Business / Entertainment </td>
                <td class="s3" dir="ltr">Sponsored article</td>
                <td class="s3">US</td>
            </tr>
            <tr style="height: 20px">
                <th id="0R459" style="height: 20px;" class="row-headers-background">
                    <div class="row-header-wrapper" style="line-height: 20px">460</div>
                </th>
                <td class="s0"></td>
                <td class="s0"><a target="_blank" href="https://www.seattlepi.com/">Seattle Pi</a></td>
                <td class="s1">$2,500</td>
                <td class="s2">81</td>
                <td class="s3">1 Week</td>
                <td class="s3" dir="ltr">News / Real Estate / Entertainment</td>
                <td class="s3" dir="ltr">Sponsored article</td>
                <td class="s3">US</td>
            </tr>
            <tr style="height: 20px">
                <th id="0R460" style="height: 20px;" class="row-headers-background">
                    <div class="row-header-wrapper" style="line-height: 20px">461</div>
                </th>
                <td class="s0"></td>
                <td class="s0"><a target="_blank" href="https://www.dallasnews.com/">Dallas News</a></td>
                <td class="s1">$2,500</td>
                <td class="s2">89</td>
                <td class="s3">1 Week</td>
                <td class="s3" dir="ltr">News / Sports / Entertainment / Business</td>
                <td class="s3" dir="ltr">Sponsored article</td>
                <td class="s3">US</td>
            </tr>
            <tr style="height: 20px">
                <th id="0R461" style="height: 20px;" class="row-headers-background">
                    <div class="row-header-wrapper" style="line-height: 20px">462</div>
                </th>
                <td class="s0"></td>
                <td class="s0"><a target="_blank" href="https://www.theolympian.com/">The Olympian</a></td>
                <td class="s1">$2,500</td>
                <td class="s2">71</td>
                <td class="s3">2 Weeks</td>
                <td class="s3" dir="ltr">News / Sports</td>
                <td class="s3" dir="ltr">Organic with small disclaimer</td>
                <td class="s3">US</td>
            </tr>
            <tr style="height: 20px">
                <th id="0R462" style="height: 20px;" class="row-headers-background">
                    <div class="row-header-wrapper" style="line-height: 20px">463</div>
                </th>
                <td class="s0"></td>
                <td class="s0"><a target="_blank" href="https://cryptopotato.com/">Crypto Potato</a></td>
                <td class="s1">$2,700</td>
                <td class="s2">57</td>
                <td class="s3">1 Week</td>
                <td class="s3" dir="ltr">Crypto / Tech </td>
                <td class="s3" dir="ltr">Organic with small disclaimer</td>
                <td class="s3">Global</td>
            </tr>
            <tr style="height: 20px">
                <th id="0R463" style="height: 20px;" class="row-headers-background">
                    <div class="row-header-wrapper" style="line-height: 20px">464</div>
                </th>
                <td class="s0"></td>
                <td class="s0"><a target="_blank" href="https://www.soapsindepth.com/">Soaps In Depth</a></td>
                <td class="s1">$3,000</td>
                <td class="s2">55</td>
                <td class="s3">1 Week</td>
                <td class="s3" dir="ltr">Movies &amp; TV / Entertainment</td>
                <td class="s3" dir="ltr">Organic Placement</td>
                <td class="s3">Global</td>
            </tr>
            <tr style="height: 20px">
                <th id="0R464" style="height: 20px;" class="row-headers-background">
                    <div class="row-header-wrapper" style="line-height: 20px">465</div>
                </th>
                <td class="s0"></td>
                <td class="s0"><a target="_blank" href="https://www.firstforwomen.com/">First for Women</a></td>
                <td class="s1">$3,000</td>
                <td class="s2">59</td>
                <td class="s3">1 Week</td>
                <td class="s3" dir="ltr">Fashion / Health / Entertainment / Lifestyle / Luxury</td>
                <td class="s3" dir="ltr">Organic Placement</td>
                <td class="s3">Global</td>
            </tr>
            <tr style="height: 20px">
                <th id="0R465" style="height: 20px;" class="row-headers-background">
                    <div class="row-header-wrapper" style="line-height: 20px">466</div>
                </th>
                <td class="s0"></td>
                <td class="s0"><a target="_blank" href="https://www.powder.com/">Powder Magazine</a></td>
                <td class="s1">$3,000</td>
                <td class="s2">60</td>
                <td class="s3">1 Week</td>
                <td class="s3" dir="ltr">Entertainment</td>
                <td class="s3" dir="ltr">Organic Placement</td>
                <td class="s3">Global</td>
            </tr>
            <tr style="height: 20px">
                <th id="0R466" style="height: 20px;" class="row-headers-background">
                    <div class="row-header-wrapper" style="line-height: 20px">467</div>
                </th>
                <td class="s0"></td>
                <td class="s0"><a target="_blank" href="https://www.womansworld.com/">Women&#39;s World </a></td>
                <td class="s1">$3,000</td>
                <td class="s2">63</td>
                <td class="s3">1 Week</td>
                <td class="s3" dir="ltr">Fashion / Health / Entertainment / Lifestyle / Luxury</td>
                <td class="s3" dir="ltr">Organic Placement</td>
                <td class="s3">Global</td>
            </tr>
            <tr style="height: 20px">
                <th id="0R467" style="height: 20px;" class="row-headers-background">
                    <div class="row-header-wrapper" style="line-height: 20px">468</div>
                </th>
                <td class="s5"></td>
                <td class="s0"><a target="_blank" href="https://pethelpful.com/">Pet Helpful</a></td>
                <td class="s1">$3,000</td>
                <td class="s2">63</td>
                <td class="s3">2 Weeks</td>
                <td class="s3" dir="ltr">Entertainment</td>
                <td class="s3" dir="ltr">Organic Placement</td>
                <td class="s3" dir="ltr">Global</td>
            </tr>
            <tr style="height: 20px">
                <th id="0R468" style="height: 20px;" class="row-headers-background">
                    <div class="row-header-wrapper" style="line-height: 20px">469</div>
                </th>
                <td class="s5"></td>
                <td class="s0"><a target="_blank" href="https://dengarden.com/">Dengarden</a></td>
                <td class="s1">$3,000</td>
                <td class="s2">66</td>
                <td class="s3">2 Weeks</td>
                <td class="s3" dir="ltr">Real Estate</td>
                <td class="s3" dir="ltr">Organic Placement</td>
                <td class="s3" dir="ltr">Global</td>
            </tr>
            <tr style="height: 20px">
                <th id="0R469" style="height: 20px;" class="row-headers-background">
                    <div class="row-header-wrapper" style="line-height: 20px">470</div>
                </th>
                <td class="s0"></td>
                <td class="s0"><a target="_blank" href="https://www.surfer.com/">Sufer Magazine</a></td>
                <td class="s1">$3,000</td>
                <td class="s2">67</td>
                <td class="s3">1 Week</td>
                <td class="s3" dir="ltr">Entertainment / Lifestyle</td>
                <td class="s3" dir="ltr">Organic Placement</td>
                <td class="s3">Global</td>
            </tr>
            <tr style="height: 20px">
                <th id="0R470" style="height: 20px;" class="row-headers-background">
                    <div class="row-header-wrapper" style="line-height: 20px">471</div>
                </th>
                <td class="s0"></td>
                <td class="s0"><a target="_blank" href="https://www.soapoperadigest.com/">Soap Opera Digest</a></td>
                <td class="s1">$3,000</td>
                <td class="s2">71</td>
                <td class="s3">1 Week</td>
                <td class="s3" dir="ltr">Entertainment / Movies &amp; TV</td>
                <td class="s3" dir="ltr">Organic Placement</td>
                <td class="s3">Global</td>
            </tr>
            <tr style="height: 20px">
                <th id="0R471" style="height: 20px;" class="row-headers-background">
                    <div class="row-header-wrapper" style="line-height: 20px">472</div>
                </th>
                <td class="s0"></td>
                <td class="s0"><a target="_blank" href="https://www.closerweekly.com/">Closer Weekly</a></td>
                <td class="s1">$3,000</td>
                <td class="s2">78</td>
                <td class="s3">1 Week</td>
                <td class="s3" dir="ltr">Entertainment / Lifestyle</td>
                <td class="s3" dir="ltr">Organic Placement</td>
                <td class="s3">Global</td>
            </tr>
            <tr style="height: 20px">
                <th id="0R472" style="height: 20px;" class="row-headers-background">
                    <div class="row-header-wrapper" style="line-height: 20px">473</div>
                </th>
                <td class="s0"></td>
                <td class="s0"><a target="_blank" href="https://www.j-14.com/">J-14 Magazine</a></td>
                <td class="s1">$3,000</td>
                <td class="s2">79</td>
                <td class="s3">1 Week</td>
                <td class="s3" dir="ltr">Entertainment / Movies &amp; TV</td>
                <td class="s3" dir="ltr">Organic Placement</td>
                <td class="s3">Global</td>
            </tr>
            <tr style="height: 20px">
                <th id="0R473" style="height: 20px;" class="row-headers-background">
                    <div class="row-header-wrapper" style="line-height: 20px">474</div>
                </th>
                <td class="s0"></td>
                <td class="s0"><a target="_blank" href="https://www.lifeandstylemag.com/">Life and Style </a></td>
                <td class="s1">$3,000</td>
                <td class="s2">80</td>
                <td class="s3">1 Week</td>
                <td class="s3" dir="ltr">Lifestyle / Entertainment / Health / Fashion / Luxury</td>
                <td class="s3" dir="ltr">Organic Placement</td>
                <td class="s3">Global</td>
            </tr>
            <tr style="height: 20px">
                <th id="0R474" style="height: 20px;" class="row-headers-background">
                    <div class="row-header-wrapper" style="line-height: 20px">475</div>
                </th>
                <td class="s0"></td>
                <td class="s0"><a target="_blank" href="https://okmagazine.com/">OK Magazine </a></td>
                <td class="s1">$3,000</td>
                <td class="s2">80</td>
                <td class="s3">1 Week</td>
                <td class="s3" dir="ltr">Lifestyle / Entertainment / Health / Fashion / Luxury</td>
                <td class="s3" dir="ltr">Organic Placement</td>
                <td class="s3">Global</td>
            </tr>
            <tr style="height: 20px">
                <th id="0R475" style="height: 20px;" class="row-headers-background">
                    <div class="row-header-wrapper" style="line-height: 20px">476</div>
                </th>
                <td class="s0"></td>
                <td class="s0"><a target="_blank" href="https://www.intouchweekly.com/">In Touch Weekly</a></td>
                <td class="s1">$3,000</td>
                <td class="s2">82</td>
                <td class="s3">1 Week</td>
                <td class="s3" dir="ltr">Lifestyle / Entertainment / Movies &amp; TV</td>
                <td class="s3" dir="ltr">Organic Placement</td>
                <td class="s3">Global</td>
            </tr>
            <tr style="height: 20px">
                <th id="0R476" style="height: 20px;" class="row-headers-background">
                    <div class="row-header-wrapper" style="line-height: 20px">477</div>
                </th>
                <td class="s0"></td>
                <td class="s0"><a target="_blank" href="https://www.latintimes.com/">Latin Times</a></td>
                <td class="s1">$3,000</td>
                <td class="s2">82</td>
                <td class="s3">1 Week</td>
                <td class="s3" dir="ltr">News / Entertainment / Sports / Lifestyle</td>
                <td class="s3" dir="ltr">Organic Placement</td>
                <td class="s3">Global</td>
            </tr>
            <tr style="height: 20px">
                <th id="0R477" style="height: 20px;" class="row-headers-background">
                    <div class="row-header-wrapper" style="line-height: 20px">478</div>
                </th>
                <td class="s0"></td>
                <td class="s0"><a target="_blank" href="https://cryptonomist.ch/">Cryptonomist</a></td>
                <td class="s1">$3,000</td>
                <td class="s2">52</td>
                <td class="s3">1 Week</td>
                <td class="s3" dir="ltr">Crypto / Tech </td>
                <td class="s3" dir="ltr">Organic with small disclaimer</td>
                <td class="s3">Global</td>
            </tr>
            <tr style="height: 20px">
                <th id="0R478" style="height: 20px;" class="row-headers-background">
                    <div class="row-header-wrapper" style="line-height: 20px">479</div>
                </th>
                <td class="s0"></td>
                <td class="s0"><a target="_blank" href="https://nordic.ign.com/">IGN (Nordic)</a></td>
                <td class="s1">$3,000</td>
                <td class="s2">92</td>
                <td class="s3">1 Week</td>
                <td class="s3" dir="ltr">Tech / Entertainment / Movies &amp; TV</td>
                <td class="s3" dir="ltr">Organic with small disclaimer</td>
                <td class="s3">Global</td>
            </tr>
            <tr style="height: 20px">
                <th id="0R479" style="height: 20px;" class="row-headers-background">
                    <div class="row-header-wrapper" style="line-height: 20px">480</div>
                </th>
                <td class="s0"></td>
                <td class="s0"><a target="_blank" href="https://www.dailypress.com/">Daily Press</a></td>
                <td class="s1">$3,000</td>
                <td class="s2">78</td>
                <td class="s3">1 Week</td>
                <td class="s3" dir="ltr">News / Sports / Lifestyle / Business</td>
                <td class="s3" dir="ltr">Sponsored article</td>
                <td class="s3">Global</td>
            </tr>
            <tr style="height: 20px">
                <th id="0R480" style="height: 20px;" class="row-headers-background">
                    <div class="row-header-wrapper" style="line-height: 20px">481</div>
                </th>
                <td class="s0"></td>
                <td class="s0"><a target="_blank" href="https://www.pilotonline.com/">Pilot Online</a></td>
                <td class="s1">$3,000</td>
                <td class="s2">80</td>
                <td class="s3">1 Week</td>
                <td class="s3" dir="ltr">News / Business / Real Estate</td>
                <td class="s3" dir="ltr">Sponsored article</td>
                <td class="s3">Global</td>
            </tr>
            <tr style="height: 20px">
                <th id="0R481" style="height: 20px;" class="row-headers-background">
                    <div class="row-header-wrapper" style="line-height: 20px">482</div>
                </th>
                <td class="s0"></td>
                <td class="s0"><a target="_blank" href="http://newsmax.com/">NewsMax</a></td>
                <td class="s1">$3,000</td>
                <td class="s2">84</td>
                <td class="s3">1 Week</td>
                <td class="s3" dir="ltr">News / Science / Tech </td>
                <td class="s3" dir="ltr">Sponsored article</td>
                <td class="s3">Global</td>
            </tr>
            <tr style="height: 20px">
                <th id="0R482" style="height: 20px;" class="row-headers-background">
                    <div class="row-header-wrapper" style="line-height: 20px">483</div>
                </th>
                <td class="s0"></td>
                <td class="s0"><a target="_blank" href="https://www.irishtimes.com/">Irish Times</a></td>
                <td class="s1">$3,000</td>
                <td class="s2">90</td>
                <td class="s3">1 Week</td>
                <td class="s3" dir="ltr">News / Business / Sports / Lifestyle</td>
                <td class="s3" dir="ltr">Sponsored article</td>
                <td class="s3">Ireland</td>
            </tr>
            <tr style="height: 20px">
                <th id="0R483" style="height: 20px;" class="row-headers-background">
                    <div class="row-header-wrapper" style="line-height: 20px">484</div>
                </th>
                <td class="s0"></td>
                <td class="s0" dir="ltr"><a target="_blank" href="https://www.ibtimes.co.uk/">IB Times</a></td>
                <td class="s1">$3,000</td>
                <td class="s2">90</td>
                <td class="s3">1 Week</td>
                <td class="s3" dir="ltr">News / Business / Tech / Science / Sports / Entertainment / Lifestyle</td>
                <td class="s3" dir="ltr">Organic Placement</td>
                <td class="s3">UK</td>
            </tr>
            <tr style="height: 20px">
                <th id="0R484" style="height: 20px;" class="row-headers-background">
                    <div class="row-header-wrapper" style="line-height: 20px">485</div>
                </th>
                <td class="s0"></td>
                <td class="s0"><a target="_blank" href="https://www.washingtonexaminer.com/">Washington Examiner</a>
                </td>
                <td class="s1">$3,000</td>
                <td class="s2">86</td>
                <td class="s3">2 Weeks</td>
                <td class="s3" dir="ltr">News </td>
                <td class="s3" dir="ltr">Organic Placement</td>
                <td class="s3">US</td>
            </tr>
            <tr style="height: 20px">
                <th id="0R485" style="height: 20px;" class="row-headers-background">
                    <div class="row-header-wrapper" style="line-height: 20px">486</div>
                </th>
                <td class="s0"></td>
                <td class="s0" dir="ltr"><a target="_blank" href="https://www.ibtimes.com/">IB Times</a></td>
                <td class="s1">$3,000</td>
                <td class="s2">91</td>
                <td class="s3">2 Weeks</td>
                <td class="s3" dir="ltr">News / Business / Tech / Science / Sports / Entertainment / Lifestyle / Health
                </td>
                <td class="s3" dir="ltr">Organic Placement</td>
                <td class="s3">US</td>
            </tr>
            <tr style="height: 20px">
                <th id="0R486" style="height: 20px;" class="row-headers-background">
                    <div class="row-header-wrapper" style="line-height: 20px">487</div>
                </th>
                <td class="s0"></td>
                <td class="s0"><a target="_blank" href="https://www.sunherald.com/">Sun Herald</a></td>
                <td class="s1">$3,000</td>
                <td class="s2">73</td>
                <td class="s3">2 Weeks</td>
                <td class="s3" dir="ltr">News / Sports / Entertainment / Business</td>
                <td class="s3" dir="ltr">Organic with small disclaimer</td>
                <td class="s3">US</td>
            </tr>
            <tr style="height: 20px">
                <th id="0R487" style="height: 20px;" class="row-headers-background">
                    <div class="row-header-wrapper" style="line-height: 20px">488</div>
                </th>
                <td class="s0"></td>
                <td class="s0"><a target="_blank" href="https://www.thestate.com/">The State</a></td>
                <td class="s1">$3,000</td>
                <td class="s2">80</td>
                <td class="s3">2 Weeks</td>
                <td class="s3" dir="ltr">News / Sports / Entertainment</td>
                <td class="s3" dir="ltr">Organic with small disclaimer</td>
                <td class="s3">US</td>
            </tr>
            <tr style="height: 20px">
                <th id="0R488" style="height: 20px;" class="row-headers-background">
                    <div class="row-header-wrapper" style="line-height: 20px">489</div>
                </th>
                <td class="s0"></td>
                <td class="s0"><a target="_blank" href="https://www.kansas.com/">The Wichita Eagle</a></td>
                <td class="s1">$3,000</td>
                <td class="s2">80</td>
                <td class="s3">2 Weeks</td>
                <td class="s3" dir="ltr">News / Sports / Business / Entertainment </td>
                <td class="s3" dir="ltr">Organic with small disclaimer</td>
                <td class="s3">US</td>
            </tr>
            <tr style="height: 20px">
                <th id="0R489" style="height: 20px;" class="row-headers-background">
                    <div class="row-header-wrapper" style="line-height: 20px">490</div>
                </th>
                <td class="s0"></td>
                <td class="s0"><a target="_blank" href="https://www.star-telegram.com/">Fort Worth Star-Telegram</a>
                </td>
                <td class="s1">$3,000</td>
                <td class="s2">82</td>
                <td class="s3">2 Weeks</td>
                <td class="s3" dir="ltr">News / Sports / Entertainment </td>
                <td class="s3" dir="ltr">Organic with small disclaimer</td>
                <td class="s3">US</td>
            </tr>
            <tr style="height: 20px">
                <th id="0R490" style="height: 20px;" class="row-headers-background">
                    <div class="row-header-wrapper" style="line-height: 20px">491</div>
                </th>
                <td class="s0"></td>
                <td class="s0"><a target="_blank" href="https://www.kentucky.com/">Lexington Herald Leader</a></td>
                <td class="s1">$3,000</td>
                <td class="s2">85</td>
                <td class="s3">2 Weeks</td>
                <td class="s3" dir="ltr">News / Sports / Entertainment </td>
                <td class="s3" dir="ltr">Organic with small disclaimer</td>
                <td class="s3">US</td>
            </tr>
            <tr style="height: 20px">
                <th id="0R491" style="height: 20px;" class="row-headers-background">
                    <div class="row-header-wrapper" style="line-height: 20px">492</div>
                </th>
                <td class="s0"></td>
                <td class="s0"><a target="_blank" href="https://www.sacbee.com/">The Sacramento Bee</a></td>
                <td class="s1">$3,000</td>
                <td class="s2">85</td>
                <td class="s3">2 Weeks</td>
                <td class="s3" dir="ltr">News / Sports / Entertainment </td>
                <td class="s3" dir="ltr">Organic with small disclaimer</td>
                <td class="s3">US</td>
            </tr>
            <tr style="height: 20px">
                <th id="0R492" style="height: 20px;" class="row-headers-background">
                    <div class="row-header-wrapper" style="line-height: 20px">493</div>
                </th>
                <td class="s0"></td>
                <td class="s0"><a target="_blank" href="https://www.charlotteobserver.com/">Charlotte Observer</a></td>
                <td class="s1">$3,000</td>
                <td class="s2">86</td>
                <td class="s3">2 Weeks</td>
                <td class="s3" dir="ltr">News / Sports / Entertainment </td>
                <td class="s3" dir="ltr">Organic with small disclaimer</td>
                <td class="s3">US</td>
            </tr>
            <tr style="height: 20px">
                <th id="0R493" style="height: 20px;" class="row-headers-background">
                    <div class="row-header-wrapper" style="line-height: 20px">494</div>
                </th>
                <td class="s0"></td>
                <td class="s0"><a target="_blank" href="https://www.elnuevoherald.com/">El Nuevo Herald</a></td>
                <td class="s1">$3,000</td>
                <td class="s2">86</td>
                <td class="s3">2 Weeks</td>
                <td class="s3" dir="ltr">News / Sports / Entertainment </td>
                <td class="s3" dir="ltr">Organic with small disclaimer</td>
                <td class="s3">US</td>
            </tr>
            <tr style="height: 20px">
                <th id="0R494" style="height: 20px;" class="row-headers-background">
                    <div class="row-header-wrapper" style="line-height: 20px">495</div>
                </th>
                <td class="s0"></td>
                <td class="s0"><a target="_blank" href="https://www.kansascity.com/">The Kansas City Star</a></td>
                <td class="s1">$3,000</td>
                <td class="s2">86</td>
                <td class="s3">2 Weeks</td>
                <td class="s3" dir="ltr">News / Business / Entertainment / Sports </td>
                <td class="s3" dir="ltr">Organic with small disclaimer</td>
                <td class="s3">US</td>
            </tr>
            <tr style="height: 20px">
                <th id="0R495" style="height: 20px;" class="row-headers-background">
                    <div class="row-header-wrapper" style="line-height: 20px">496</div>
                </th>
                <td class="s0"></td>
                <td class="s0"><a target="_blank" href="https://www.miamiherald.com/">Miami Herald</a></td>
                <td class="s1">$3,000</td>
                <td class="s2">90</td>
                <td class="s3">2 Weeks</td>
                <td class="s3" dir="ltr">News / Sports / Business / Entertainment </td>
                <td class="s3" dir="ltr">Organic with small disclaimer</td>
                <td class="s3">US</td>
            </tr>
            <tr style="height: 20px">
                <th id="0R496" style="height: 20px;" class="row-headers-background">
                    <div class="row-header-wrapper" style="line-height: 20px">497</div>
                </th>
                <td class="s0"></td>
                <td class="s0"><a target="_blank" href="http://mysanantonio.com/">My San Antonio </a></td>
                <td class="s1">$3,000</td>
                <td class="s2">80</td>
                <td class="s3">1 Week</td>
                <td class="s3" dir="ltr">News / Entertainment / Sports</td>
                <td class="s3" dir="ltr">Sponsored article</td>
                <td class="s3">US</td>
            </tr>
            <tr style="height: 20px">
                <th id="0R497" style="height: 20px;" class="row-headers-background">
                    <div class="row-header-wrapper" style="line-height: 20px">498</div>
                </th>
                <td class="s0"></td>
                <td class="s0"><a target="_blank" href="http://www.timesunion.com/">Times Union</a></td>
                <td class="s1">$3,000</td>
                <td class="s2">82</td>
                <td class="s3">1 Week</td>
                <td class="s3" dir="ltr">News / Entertainment / Sports / Lifestyle / Business</td>
                <td class="s3" dir="ltr">Sponsored article</td>
                <td class="s3">US</td>
            </tr>
            <tr style="height: 20px">
                <th id="0R498" style="height: 20px;" class="row-headers-background">
                    <div class="row-header-wrapper" style="line-height: 20px">499</div>
                </th>
                <td class="s0"></td>
                <td class="s0"><a target="_blank" href="https://www.courant.com/">Courant</a></td>
                <td class="s1">$3,000</td>
                <td class="s2">83</td>
                <td class="s3">1 Week</td>
                <td class="s3" dir="ltr">News / Sports / Business</td>
                <td class="s3" dir="ltr">Sponsored article</td>
                <td class="s3">US</td>
            </tr>
            <tr style="height: 20px">
                <th id="0R499" style="height: 20px;" class="row-headers-background">
                    <div class="row-header-wrapper" style="line-height: 20px">500</div>
                </th>
                <td class="s0"></td>
                <td class="s0"><a target="_blank" href="https://www.houstonchronicle.com/">Houston Chronicle</a></td>
                <td class="s1">$3,000</td>
                <td class="s2">83</td>
                <td class="s3">1 Week</td>
                <td class="s3" dir="ltr">News / Sports / Business / Entertainment </td>
                <td class="s3" dir="ltr">Sponsored article</td>
                <td class="s3">US</td>
            </tr>
            <tr style="height: 20px">
                <th id="0R500" style="height: 20px;" class="row-headers-background">
                    <div class="row-header-wrapper" style="line-height: 20px">501</div>
                </th>
                <td class="s0"></td>
                <td class="s0"><a target="_blank" href="https://www.sfchronicle.com/">SF Chronicle</a></td>
                <td class="s1">$3,000</td>
                <td class="s2">84</td>
                <td class="s3">1 Week</td>
                <td class="s3" dir="ltr">News / Movies &amp; TV / Health / Music</td>
                <td class="s3" dir="ltr">Sponsored article</td>
                <td class="s3">US</td>
            </tr>
            <tr style="height: 20px">
                <th id="0R501" style="height: 20px;" class="row-headers-background">
                    <div class="row-header-wrapper" style="line-height: 20px">502</div>
                </th>
                <td class="s0"></td>
                <td class="s0"><a target="_blank" href="http://www.tampabay.com/">Tampa Bay Times</a></td>
                <td class="s1">$3,000</td>
                <td class="s2">86</td>
                <td class="s3">1 Week</td>
                <td class="s3" dir="ltr">News / Sports / Business</td>
                <td class="s3" dir="ltr">Sponsored article</td>
                <td class="s3">US</td>
            </tr>
            <tr style="height: 20px">
                <th id="0R502" style="height: 20px;" class="row-headers-background">
                    <div class="row-header-wrapper" style="line-height: 20px">503</div>
                </th>
                <td class="s0"></td>
                <td class="s0"><a target="_blank" href="https://www.sun-sentinel.com/">Sun Sentinel</a></td>
                <td class="s1">$3,000</td>
                <td class="s2">87</td>
                <td class="s3">1 Week</td>
                <td class="s3" dir="ltr">News / Health / Real Estate</td>
                <td class="s3" dir="ltr">Sponsored article</td>
                <td class="s3">US</td>
            </tr>
            <tr style="height: 20px">
                <th id="0R503" style="height: 20px;" class="row-headers-background">
                    <div class="row-header-wrapper" style="line-height: 20px">504</div>
                </th>
                <td class="s0"></td>
                <td class="s0"><a target="_blank" href="https://www.orlandosentinel.com/">Orlando Sentinel</a></td>
                <td class="s1">$3,000</td>
                <td class="s2">88</td>
                <td class="s3">1 Week</td>
                <td class="s3" dir="ltr">News / Real Estate / Sports / Entertainment </td>
                <td class="s3" dir="ltr">Sponsored article</td>
                <td class="s3">US</td>
            </tr>
            <tr style="height: 20px">
                <th id="0R504" style="height: 20px;" class="row-headers-background">
                    <div class="row-header-wrapper" style="line-height: 20px">505</div>
                </th>
                <td class="s0"></td>
                <td class="s0"><a target="_blank" href="https://www.baltimoresun.com/">Baltimore Sun</a></td>
                <td class="s1">$3,000</td>
                <td class="s2">90</td>
                <td class="s3">1 Week</td>
                <td class="s3" dir="ltr">News / Health / Entertainment / Sports / Business</td>
                <td class="s3" dir="ltr">Sponsored article</td>
                <td class="s3">US</td>
            </tr>
            <tr style="height: 20px">
                <th id="0R505" style="height: 20px;" class="row-headers-background">
                    <div class="row-header-wrapper" style="line-height: 20px">506</div>
                </th>
                <td class="s0"></td>
                <td class="s0"><a target="_blank" href="https://www.chron.com/">Chron</a></td>
                <td class="s1">$3,000</td>
                <td class="s2">92</td>
                <td class="s3">2 Weeks</td>
                <td class="s3" dir="ltr">News / Business / Real Estate / Sports</td>
                <td class="s3" dir="ltr">Sponsored article</td>
                <td class="s3">US</td>
            </tr>
            <tr style="height: 20px">
                <th id="0R506" style="height: 20px;" class="row-headers-background">
                    <div class="row-header-wrapper" style="line-height: 20px">507</div>
                </th>
                <td class="s0"></td>
                <td class="s0"><a target="_blank" href="https://www.chicagotribune.com/">Chicago Tribune</a></td>
                <td class="s1">$3,000</td>
                <td class="s2">93</td>
                <td class="s3">1 Week</td>
                <td class="s3" dir="ltr">News / Business / Entertainment / Sports </td>
                <td class="s3" dir="ltr">Sponsored article</td>
                <td class="s3">US</td>
            </tr>
            <tr style="height: 20px">
                <th id="0R507" style="height: 20px;" class="row-headers-background">
                    <div class="row-header-wrapper" style="line-height: 20px">508</div>
                </th>
                <td class="s0"></td>
                <td class="s0"><a target="_blank" href="https://www.sfgate.com/">SF Gate</a></td>
                <td class="s1">$3,000</td>
                <td class="s2">93</td>
                <td class="s3">1 Week</td>
                <td class="s3" dir="ltr">News / Sports / Business / Real Estate</td>
                <td class="s3" dir="ltr">Sponsored article</td>
                <td class="s3">US</td>
            </tr>
            <tr style="height: 20px">
                <th id="0R508" style="height: 20px;" class="row-headers-background">
                    <div class="row-header-wrapper" style="line-height: 20px">509</div>
                </th>
                <td class="s0"></td>
                <td class="s0"><a target="_blank" href="https://www.newsobserver.com/">The News &amp; Observer</a></td>
                <td class="s1">$3,000</td>
                <td class="s2">82</td>
                <td class="s3">2 Weeks</td>
                <td class="s3" dir="ltr">News / Business / Sports / Lifestyle</td>
                <td class="s3" dir="ltr">Organic with small disclaimer</td>
                <td class="s3">US</td>
            </tr>
            <tr style="height: 20px">
                <th id="0R509" style="height: 20px;" class="row-headers-background">
                    <div class="row-header-wrapper" style="line-height: 20px">510</div>
                </th>
                <td class="s0"></td>
                <td class="s0"><a target="_blank" href="https://www.mcall.com/">The Morning Call</a></td>
                <td class="s1">$3,000</td>
                <td class="s2">80</td>
                <td class="s3">1 Week</td>
                <td class="s3" dir="ltr">News / Sports / Business / Entertainment </td>
                <td class="s3" dir="ltr">Sponsored article</td>
                <td class="s3">US</td>
            </tr>
            <tr style="height: 20px">
                <th id="0R510" style="height: 20px;" class="row-headers-background">
                    <div class="row-header-wrapper" style="line-height: 20px">511</div>
                </th>
                <td class="s0"></td>
                <td class="s0" dir="ltr"><a target="_blank" href="https://www.maxim.com/">Maxim</a></td>
                <td class="s1">$4,000</td>
                <td class="s2">87</td>
                <td class="s3">1 Week</td>
                <td class="s3" dir="ltr">News / Fashion / Business / Travel / Luxury / Lifestyle</td>
                <td class="s3" dir="ltr">Organic with small disclaimer</td>
                <td class="s3">Global</td>
            </tr>
            <tr style="height: 20px">
                <th id="0R511" style="height: 20px;" class="row-headers-background">
                    <div class="row-header-wrapper" style="line-height: 20px">512</div>
                </th>
                <td class="s0"></td>
                <td class="s0"><a target="_blank" href="http://newsweek.com/">Newsweek</a></td>
                <td class="s1">$4,000</td>
                <td class="s2">93</td>
                <td class="s3">1 Week</td>
                <td class="s3" dir="ltr">News / Tech / Science / Health</td>
                <td class="s3" dir="ltr">Organic with small disclaimer</td>
                <td class="s3">Global</td>
            </tr>
            <tr style="height: 20px">
                <th id="0R512" style="height: 20px;" class="row-headers-background">
                    <div class="row-header-wrapper" style="line-height: 20px">513</div>
                </th>
                <td class="s0"></td>
                <td class="s0"><a target="_blank" href="https://www.theepochtimes.com/">The Epoch Times</a></td>
                <td class="s1">$4,000</td>
                <td class="s2">90</td>
                <td class="s3">2 Weeks</td>
                <td class="s3" dir="ltr">News / Health / Entertainment</td>
                <td class="s3" dir="ltr">Sponsored article</td>
                <td class="s3">Global</td>
            </tr>
            <tr style="height: 20px">
                <th id="0R513" style="height: 20px;" class="row-headers-background">
                    <div class="row-header-wrapper" style="line-height: 20px">514</div>
                </th>
                <td class="s0"></td>
                <td class="s0"><a target="_blank" href="https://gulfbusiness.com/">Gulf Business</a></td>
                <td class="s1">$4,000</td>
                <td class="s2">72</td>
                <td class="s3">1 Week</td>
                <td class="s3" dir="ltr">News / Tech / Lifestyle / Business</td>
                <td class="s3" dir="ltr">Organic with small disclaimer</td>
                <td class="s3" dir="ltr">Middle East</td>
            </tr>
            <tr style="height: 20px">
                <th id="0R514" style="height: 20px;" class="row-headers-background">
                    <div class="row-header-wrapper" style="line-height: 20px">515</div>
                </th>
                <td class="s0"></td>
                <td class="s0" dir="ltr"><a target="_blank" href="https://www.entrepreneur.com/en-au">Entrepreneur</a>
                </td>
                <td class="s1">$4,500</td>
                <td class="s2">92</td>
                <td class="s3">1 Week</td>
                <td class="s3" dir="ltr">News / Business</td>
                <td class="s3" dir="ltr">Organic Placement</td>
                <td class="s3" dir="ltr">Asia Pacific</td>
            </tr>
            <tr style="height: 20px">
                <th id="0R515" style="height: 20px;" class="row-headers-background">
                    <div class="row-header-wrapper" style="line-height: 20px">516</div>
                </th>
                <td class="s3"></td>
                <td class="s0"><a target="_blank" href="https://www.nasdaq.com/">NASDAQ</a></td>
                <td class="s1">$4,500</td>
                <td class="s2">91</td>
                <td class="s3">4 Weeks</td>
                <td class="s3" dir="ltr">News / Business / Tech / Crypto </td>
                <td class="s3" dir="ltr">Organic Placement</td>
                <td class="s3">Global</td>
            </tr>
            <tr style="height: 20px">
                <th id="0R516" style="height: 20px;" class="row-headers-background">
                    <div class="row-header-wrapper" style="line-height: 20px">517</div>
                </th>
                <td class="s0"></td>
                <td class="s0"><a target="_blank" href="https://www.buzzfeed.com/">BuzzFeed</a></td>
                <td class="s1">$4,500</td>
                <td class="s2">93</td>
                <td class="s3">1 Week</td>
                <td class="s3" dir="ltr">Entertainment / Movies &amp; TV </td>
                <td class="s3" dir="ltr">Organic Placement</td>
                <td class="s3">Global</td>
            </tr>
            <tr style="height: 20px">
                <th id="0R517" style="height: 20px;" class="row-headers-background">
                    <div class="row-header-wrapper" style="line-height: 20px">518</div>
                </th>
                <td class="s0"></td>
                <td class="s0" dir="ltr"><a target="_blank" href="https://www.arabianbusiness.com/">Arabian Business
                    </a></td>
                <td class="s1">$4,500</td>
                <td class="s2">84</td>
                <td class="s3">1 Week</td>
                <td class="s3" dir="ltr">News / Health / Tech / Business</td>
                <td class="s3" dir="ltr">Sponsored article</td>
                <td class="s3" dir="ltr">Middle East</td>
            </tr>
            <tr style="height: 20px">
                <th id="0R518" style="height: 20px;" class="row-headers-background">
                    <div class="row-header-wrapper" style="line-height: 20px">519</div>
                </th>
                <td class="s4"></td>
                <td class="s4"><a target="_blank" href="https://www.express.co.uk/">Daily Express</a></td>
                <td class="s1">$4,500</td>
                <td class="s2">93</td>
                <td class="s3">2 Weeks</td>
                <td class="s3" dir="ltr">News / Sports / Travel / Lifestyle / Business / Tech / Health / Entertainment
                </td>
                <td class="s3" dir="ltr">Organic Placement</td>
                <td class="s3" dir="ltr">UK</td>
            </tr>
            <tr style="height: 20px">
                <th id="0R519" style="height: 20px;" class="row-headers-background">
                    <div class="row-header-wrapper" style="line-height: 20px">520</div>
                </th>
                <td class="s4"></td>
                <td class="s4"><a target="_blank" href="https://www.dailystar.co.uk/">Daily Star</a></td>
                <td class="s1">$4,500</td>
                <td class="s2">93</td>
                <td class="s3">2 Weeks</td>
                <td class="s3" dir="ltr">News / Sports / Travel / Lifestyle / Business / Tech / Health / Entertainment
                </td>
                <td class="s3" dir="ltr">Organic Placement</td>
                <td class="s3" dir="ltr">UK</td>
            </tr>
            <tr style="height: 20px">
                <th id="0R520" style="height: 20px;" class="row-headers-background">
                    <div class="row-header-wrapper" style="line-height: 20px">521</div>
                </th>
                <td class="s0"></td>
                <td class="s0"><a target="_blank" href="https://eu.palmbeachpost.com/">Palm Beach Post</a></td>
                <td class="s1">$4,500</td>
                <td class="s2">84</td>
                <td class="s3">2 Weeks</td>
                <td class="s3" dir="ltr">News / Entertainment / Sports / Lifestyle / Business</td>
                <td class="s3" dir="ltr">Sponsored article</td>
                <td class="s3" dir="ltr">US</td>
            </tr>
            <tr style="height: 20px">
                <th id="0R521" style="height: 20px;" class="row-headers-background">
                    <div class="row-header-wrapper" style="line-height: 20px">522</div>
                </th>
                <td class="s0"></td>
                <td class="s0"><a target="_blank" href="https://consequence.net/">Consequence Magazine (STAFF)</a></td>
                <td class="s1">$5,000</td>
                <td class="s2">79</td>
                <td class="s3">3 Weeks</td>
                <td class="s3" dir="ltr">Music / News</td>
                <td class="s3" dir="ltr">Organic Placement</td>
                <td class="s3" dir="ltr">Global</td>
            </tr>
            <tr style="height: 20px">
                <th id="0R522" style="height: 20px;" class="row-headers-background">
                    <div class="row-header-wrapper" style="line-height: 20px">523</div>
                </th>
                <td class="s0"></td>
                <td class="s0" dir="ltr"><span
                        style="text-decoration:underline;-webkit-text-decoration-skip:none;text-decoration-skip-ink:none;color:#1155cc;"><a
                            target="_blank" href="https://www.benzinga.com/">Benzinga</a></span><span
                        style="color:#000000;"> (STAFF)</span></td>
                <td class="s1">$5,000</td>
                <td class="s2">87</td>
                <td class="s3">1 Week</td>
                <td class="s3" dir="ltr">News / Business / Crypto / Tech / CBD</td>
                <td class="s3" dir="ltr">Organic Placement</td>
                <td class="s3" dir="ltr">Global</td>
            </tr>
            <tr style="height: 20px">
                <th id="0R523" style="height: 20px;" class="row-headers-background">
                    <div class="row-header-wrapper" style="line-height: 20px">524</div>
                </th>
                <td class="s0"></td>
                <td class="s0"><a target="_blank" href="https://www.si.edu/">Smithsonian</a></td>
                <td class="s1">$5,000</td>
                <td class="s2">92</td>
                <td class="s3">3 Weeks</td>
                <td class="s3" dir="ltr">News / Science</td>
                <td class="s3" dir="ltr">Organic with small disclaimer</td>
                <td class="s3" dir="ltr">Global</td>
            </tr>
            <tr style="height: 20px">
                <th id="0R524" style="height: 20px;" class="row-headers-background">
                    <div class="row-header-wrapper" style="line-height: 20px">525</div>
                </th>
                <td class="s4"></td>
                <td class="s4"><a target="_blank" href="https://www.thesun.co.uk/news/">The Sun</a></td>
                <td class="s1">$5,000</td>
                <td class="s2">94</td>
                <td class="s3">2 Weeks</td>
                <td class="s3" dir="ltr">News / Sports / Travel / Lifestyle / Business / Tech / Health / Entertainment
                </td>
                <td class="s3" dir="ltr">Organic Placement</td>
                <td class="s3" dir="ltr">UK</td>
            </tr>
            <tr style="height: 20px">
                <th id="0R525" style="height: 20px;" class="row-headers-background">
                    <div class="row-header-wrapper" style="line-height: 20px">526</div>
                </th>
                <td class="s0"></td>
                <td class="s0"><a target="_blank" href="http://rollingstone.com/">Rolling Stone (Pitch)</a></td>
                <td class="s1">$5,500</td>
                <td class="s2">92</td>
                <td class="s3">4 Weeks</td>
                <td class="s3" dir="ltr">Music / Movies &amp; TV </td>
                <td class="s3" dir="ltr">Organic Placement</td>
                <td class="s3" dir="ltr">Global</td>
            </tr>
            <tr style="height: 20px">
                <th id="0R526" style="height: 20px;" class="row-headers-background">
                    <div class="row-header-wrapper" style="line-height: 20px">527</div>
                </th>
                <td class="s0"></td>
                <td class="s0"><a target="_blank" href="https://hightimes.com/">High Times </a></td>
                <td class="s1">$5,500</td>
                <td class="s2">78</td>
                <td class="s3">1 Week</td>
                <td class="s3" dir="ltr">CBD </td>
                <td class="s3" dir="ltr">Sponsored article</td>
                <td class="s3" dir="ltr">Global</td>
            </tr>
            <tr style="height: 20px">
                <th id="0R527" style="height: 20px;" class="row-headers-background">
                    <div class="row-header-wrapper" style="line-height: 20px">528</div>
                </th>
                <td class="s0"></td>
                <td class="s0" dir="ltr"><a target="_blank" href="https://metro.co.uk/">Metro</a></td>
                <td class="s1" dir="ltr">$5,500</td>
                <td class="s2">93</td>
                <td class="s3">1 Week</td>
                <td class="s3" dir="ltr">News / Sports / Travel / Lifestyle / Business / Tech / Health / Entertainment
                </td>
                <td class="s3" dir="ltr">Organic Placement</td>
                <td class="s3" dir="ltr">UK</td>
            </tr>
            <tr style="height: 20px">
                <th id="0R528" style="height: 20px;" class="row-headers-background">
                    <div class="row-header-wrapper" style="line-height: 20px">529</div>
                </th>
                <td class="s4"></td>
                <td class="s4" dir="ltr"><a target="_blank" href="http://mirror.co.uk/">Mirror</a></td>
                <td class="s1">$5,500</td>
                <td class="s2">93</td>
                <td class="s3">2 Weeks</td>
                <td class="s3" dir="ltr">News / Sports / Travel / Lifestyle / Business / Tech / Health / Entertainment
                </td>
                <td class="s3" dir="ltr">Organic Placement</td>
                <td class="s3" dir="ltr">UK</td>
            </tr>
            <tr style="height: 20px">
                <th id="0R529" style="height: 20px;" class="row-headers-background">
                    <div class="row-header-wrapper" style="line-height: 20px">530</div>
                </th>
                <td class="s4"></td>
                <td class="s4"><a target="_blank" href="https://www.dailymail.co.uk/home/index.html">Daily Mail</a></td>
                <td class="s1">$5,500</td>
                <td class="s2">94</td>
                <td class="s3">4 Weeks</td>
                <td class="s3" dir="ltr">News / Sports / Travel / Lifestyle / Business / Tech / Health / Entertainment
                </td>
                <td class="s3" dir="ltr">Organic Placement</td>
                <td class="s3" dir="ltr">UK</td>
            </tr>
            <tr style="height: 20px">
                <th id="0R530" style="height: 20px;" class="row-headers-background">
                    <div class="row-header-wrapper" style="line-height: 20px">531</div>
                </th>
                <td class="s0"></td>
                <td class="s0"><a target="_blank" href="https://eu.thecalifornian.com/">The Californian</a></td>
                <td class="s1">$5,500</td>
                <td class="s2">66</td>
                <td class="s3">3 Weeks</td>
                <td class="s3" dir="ltr">News / Sports</td>
                <td class="s3" dir="ltr">Sponsored article</td>
                <td class="s3" dir="ltr">US</td>
            </tr>
            <tr style="height: 20px">
                <th id="0R531" style="height: 20px;" class="row-headers-background">
                    <div class="row-header-wrapper" style="line-height: 20px">532</div>
                </th>
                <td class="s0"></td>
                <td class="s0"><a target="_blank" href="https://eu.desertsun.com/">The Desert Sun</a></td>
                <td class="s1">$5,500</td>
                <td class="s2">76</td>
                <td class="s3">3 Weeks</td>
                <td class="s3" dir="ltr">News / Business / Real Estate / Sports</td>
                <td class="s3" dir="ltr">Sponsored article</td>
                <td class="s3" dir="ltr">US</td>
            </tr>
            <tr style="height: 20px">
                <th id="0R532" style="height: 20px;" class="row-headers-background">
                    <div class="row-header-wrapper" style="line-height: 20px">533</div>
                </th>
                <td class="s0"></td>
                <td class="s0"><a target="_blank" href="https://eu.caller.com/">Caller Times</a></td>
                <td class="s1">$5,500</td>
                <td class="s2">77</td>
                <td class="s3">3 Weeks</td>
                <td class="s3" dir="ltr">News / Business / Real Estate / Sports</td>
                <td class="s3" dir="ltr">Sponsored article</td>
                <td class="s3" dir="ltr">US</td>
            </tr>
            <tr style="height: 20px">
                <th id="0R533" style="height: 20px;" class="row-headers-background">
                    <div class="row-header-wrapper" style="line-height: 20px">534</div>
                </th>
                <td class="s0"></td>
                <td class="s0" dir="ltr"><a target="_blank" href="https://eu.lohud.com/">The Journal News</a></td>
                <td class="s1">$5,500</td>
                <td class="s2">80</td>
                <td class="s3">3 Weeks</td>
                <td class="s3" dir="ltr">News / Business</td>
                <td class="s3" dir="ltr">Sponsored article</td>
                <td class="s3">US</td>
            </tr>
            <tr style="height: 20px">
                <th id="0R534" style="height: 20px;" class="row-headers-background">
                    <div class="row-header-wrapper" style="line-height: 20px">535</div>
                </th>
                <td class="s0"></td>
                <td class="s0"><a target="_blank" href="https://www.freep.com/">Detriot Free Press</a></td>
                <td class="s1">$5,500</td>
                <td class="s2">89</td>
                <td class="s3">4 Weeks</td>
                <td class="s3" dir="ltr">News / Sports / Entertainment</td>
                <td class="s3" dir="ltr">Sponsored article</td>
                <td class="s3">US</td>
            </tr>
            <tr style="height: 20px">
                <th id="0R535" style="height: 20px;" class="row-headers-background">
                    <div class="row-header-wrapper" style="line-height: 20px">536</div>
                </th>
                <td class="s0"></td>
                <td class="s0"><a target="_blank" href="https://www.azcentral.com/">Arizona Central</a></td>
                <td class="s1">$5,500</td>
                <td class="s2">90</td>
                <td class="s3">4 Weeks</td>
                <td class="s3" dir="ltr">News / Business / Sports</td>
                <td class="s3" dir="ltr">Sponsored article</td>
                <td class="s3">US</td>
            </tr>
            <tr style="height: 20px">
                <th id="0R536" style="height: 20px;" class="row-headers-background">
                    <div class="row-header-wrapper" style="line-height: 20px">537</div>
                </th>
                <td class="s0"></td>
                <td class="s0"><a target="_blank" href="https://www.usatoday.com/">USA Today Full Feature</a></td>
                <td class="s1">$5,500</td>
                <td class="s2">94</td>
                <td class="s3">2 Weeks</td>
                <td class="s3" dir="ltr">News / Business / Entertainment / Tech</td>
                <td class="s3" dir="ltr">Sponsored article</td>
                <td class="s3">US</td>
            </tr>
            <tr style="height: 20px">
                <th id="0R537" style="height: 20px;" class="row-headers-background">
                    <div class="row-header-wrapper" style="line-height: 20px">538</div>
                </th>
                <td class="s0"></td>
                <td class="s0"><a target="_blank" href="https://sourcingjournal.com/">Sourcing Journal</a></td>
                <td class="s1">$6,000</td>
                <td class="s2">73</td>
                <td class="s3">1 Week</td>
                <td class="s3" dir="ltr">News / Business / Lifestyle / Tech </td>
                <td class="s3" dir="ltr">Organic Placement</td>
                <td class="s3" dir="ltr">Global</td>
            </tr>
            <tr style="height: 20px">
                <th id="0R538" style="height: 20px;" class="row-headers-background">
                    <div class="row-header-wrapper" style="line-height: 20px">539</div>
                </th>
                <td class="s0"></td>
                <td class="s0" dir="ltr"><a target="_blank" href="https://footwearnews.com/">Foot Wear News</a></td>
                <td class="s1">$6,000</td>
                <td class="s2">84</td>
                <td class="s3">1 Week</td>
                <td class="s3" dir="ltr">Fashion</td>
                <td class="s3" dir="ltr">Organic Placement</td>
                <td class="s3" dir="ltr">Global</td>
            </tr>
            <tr style="height: 20px">
                <th id="0R539" style="height: 20px;" class="row-headers-background">
                    <div class="row-header-wrapper" style="line-height: 20px">540</div>
                </th>
                <td class="s0"></td>
                <td class="s0"><a target="_blank" href="https://news.bitcoin.com/">Bitcoin.com</a></td>
                <td class="s1">$6,000</td>
                <td class="s2">88</td>
                <td class="s3">1 Week</td>
                <td class="s3" dir="ltr">Crypto </td>
                <td class="s3" dir="ltr">Organic with small disclaimer</td>
                <td class="s3" dir="ltr">Global</td>
            </tr>
            <tr style="height: 20px">
                <th id="0R540" style="height: 20px;" class="row-headers-background">
                    <div class="row-header-wrapper" style="line-height: 20px">541</div>
                </th>
                <td class="s0"></td>
                <td class="s0"><a target="_blank" href="https://www.latimes.com/">Los Angeles Times</a></td>
                <td class="s1">$7,500</td>
                <td class="s2">93</td>
                <td class="s3">2 Weeks</td>
                <td class="s3" dir="ltr">News / Sports / Travel / Lifestyle / Business / Tech / Health / Entertainment
                </td>
                <td class="s3" dir="ltr">Sponsored article</td>
                <td class="s3">US</td>
            </tr>
            <tr style="height: 20px">
                <th id="0R541" style="height: 20px;" class="row-headers-background">
                    <div class="row-header-wrapper" style="line-height: 20px">542</div>
                </th>
                <td class="s0"></td>
                <td class="s0"><a target="_blank" href="http://therealdeal.com/">The Real Deal</a></td>
                <td class="s1">$8,000</td>
                <td class="s2">81</td>
                <td class="s3">2 Weeks</td>
                <td class="s3" dir="ltr">Real Estate / Business</td>
                <td class="s3" dir="ltr">Organic with small disclaimer</td>
                <td class="s3" dir="ltr">Global</td>
            </tr>
            <tr style="height: 20px">
                <th id="0R542" style="height: 20px;" class="row-headers-background">
                    <div class="row-header-wrapper" style="line-height: 20px">543</div>
                </th>
                <td class="s0"></td>
                <td class="s0"><a target="_blank" href="https://nypost.com/">NY Post</a></td>
                <td class="s1">$9,000</td>
                <td class="s2">93</td>
                <td class="s3">4 Weeks </td>
                <td class="s3" dir="ltr">News / Sports / Travel / Lifestyle / Business / Tech / Health / Entertainment
                </td>
                <td class="s3" dir="ltr">Organic Placement</td>
                <td class="s3">US</td>
            </tr>
            <tr style="height: 20px">
                <th id="0R543" style="height: 20px;" class="row-headers-background">
                    <div class="row-header-wrapper" style="line-height: 20px">544</div>
                </th>
                <td class="s0"></td>
                <td class="s0"><a target="_blank" href="https://wwd.com/">WWD</a></td>
                <td class="s1">$10,000</td>
                <td class="s2">88</td>
                <td class="s3">1 Week</td>
                <td class="s3" dir="ltr">Fashion / Luxury / Lifestyle / Business / Luxury</td>
                <td class="s3" dir="ltr">Organic Placement</td>
                <td class="s3" dir="ltr">Global</td>
            </tr>
            <tr style="height: 20px">
                <th id="0R544" style="height: 20px;" class="row-headers-background">
                    <div class="row-header-wrapper" style="line-height: 20px">545</div>
                </th>
                <td class="s0"></td>
                <td class="s0"><a target="_blank" href="https://www.ok.co.uk/">OK! Magazine + Social Post</a></td>
                <td class="s1">$10,000</td>
                <td class="s2">81</td>
                <td class="s3">2 Weeks</td>
                <td class="s3" dir="ltr">Entertainment / Movies &amp; TV / Lifestyle</td>
                <td class="s3" dir="ltr">Organic Placement</td>
                <td class="s3" dir="ltr">UK</td>
            </tr>
            <tr style="height: 20px">
                <th id="0R545" style="height: 20px;" class="row-headers-background">
                    <div class="row-header-wrapper" style="line-height: 20px">546</div>
                </th>
                <td class="s0"></td>
                <td class="s0"><a target="_blank" href="https://stylecaster.com/">Style Caster</a></td>
                <td class="s1">$12,000</td>
                <td class="s2">77</td>
                <td class="s3">3 Weeks</td>
                <td class="s3" dir="ltr">Fashion / Luxury / Lifestyle </td>
                <td class="s3" dir="ltr">Organic with small disclaimer</td>
                <td class="s3" dir="ltr">Global</td>
            </tr>
            <tr style="height: 20px">
                <th id="0R546" style="height: 20px;" class="row-headers-background">
                    <div class="row-header-wrapper" style="line-height: 20px">547</div>
                </th>
                <td class="s0"></td>
                <td class="s0"><a target="_blank" href="https://www.sheknows.com/">She Knows</a></td>
                <td class="s1">$12,000</td>
                <td class="s2">86</td>
                <td class="s3">3 Weeks</td>
                <td class="s3" dir="ltr">Fashion / Luxury / Lifestyle / Health / Luxury </td>
                <td class="s3" dir="ltr">Organic with small disclaimer</td>
                <td class="s3" dir="ltr">Global</td>
            </tr>
            <tr style="height: 20px">
                <th id="0R547" style="height: 20px;" class="row-headers-background">
                    <div class="row-header-wrapper" style="line-height: 20px">548</div>
                </th>
                <td class="s0"></td>
                <td class="s0"><a target="_blank" href="https://hypemoon.com/">Hypemoon</a></td>
                <td class="s1">$12,500</td>
                <td class="s2">22</td>
                <td class="s3">2 Weeks</td>
                <td class="s3" dir="ltr">Crypto </td>
                <td class="s3" dir="ltr">Organic Placement</td>
                <td class="s3" dir="ltr">Global</td>
            </tr>
            <tr style="height: 20px">
                <th id="0R548" style="height: 20px;" class="row-headers-background">
                    <div class="row-header-wrapper" style="line-height: 20px">549</div>
                </th>
                <td class="s0"></td>
                <td class="s0"><a target="_blank" href="https://hypebae.com/">Hypebae</a></td>
                <td class="s1">$12,500</td>
                <td class="s2">78</td>
                <td class="s3">1-2 Weeks</td>
                <td class="s3" dir="ltr">Fashion / Music / Entertainment / Luxury </td>
                <td class="s3" dir="ltr">Organic Placement</td>
                <td class="s3" dir="ltr">Global</td>
            </tr>
            <tr style="height: 20px">
                <th id="0R549" style="height: 20px;" class="row-headers-background">
                    <div class="row-header-wrapper" style="line-height: 20px">550</div>
                </th>
                <td class="s0"></td>
                <td class="s0" dir="ltr"><a target="_blank" href="https://hypebeast.com/">Hypebeast</a></td>
                <td class="s1">$12,500</td>
                <td class="s2">87</td>
                <td class="s3">2 Weeks</td>
                <td class="s3" dir="ltr">News / Sports / Fashion / Lifestyle / Business / Tech / Music / Entertainment / Luxury </td>
                <td class="s3" dir="ltr">Organic Placement</td>
                <td class="s3" dir="ltr">Global</td>
            </tr>
            <tr style="height: 20px">
                <th id="0R550" style="height: 20px;" class="row-headers-background">
                    <div class="row-header-wrapper" style="line-height: 20px">551</div>
                </th>
                <td class="s6"></td>
                <td class="s0" dir="ltr"><a target="_blank" href="http://parade.com/">Parade</a></td>
                <td class="s1">$12,500</td>
                <td class="s2" dir="ltr">87</td>
                <td class="s3" dir="ltr">3 Weeks</td>
                <td class="s3" dir="ltr">Travel / Entertainment / Lifestyle / Luxury </td>
                <td class="s3" dir="ltr">Organic Placement</td>
                <td class="s3" dir="ltr">Global</td>
            </tr>
            <tr style="height: 20px">
                <th id="0R551" style="height: 20px;" class="row-headers-background">
                    <div class="row-header-wrapper" style="line-height: 20px">552</div>
                </th>
                <td class="s6"></td>
                <td class="s0"><a target="_blank" href="https://www.hellomagazine.com/">Hello Magazine</a></td>
                <td class="s1">$12,500</td>
                <td class="s2" dir="ltr">91</td>
                <td class="s3" dir="ltr">3 Weeks</td>
                <td class="s3" dir="ltr">Fashion / Entertainment / Lifestyle / Movies &amp; TV / Luxury </td>
                <td class="s3" dir="ltr">Organic with small disclaimer</td>
                <td class="s3">Global</td>
            </tr>
            <tr style="height: 20px">
                <th id="0R552" style="height: 20px;" class="row-headers-background">
                    <div class="row-header-wrapper" style="line-height: 20px">553</div>
                </th>
                <td class="s0"></td>
                <td class="s0"><a target="_blank" href="https://venturebeat.com/">Venture Beat</a></td>
                <td class="s1">$12,500</td>
                <td class="s2">92</td>
                <td class="s3">3 Weeks</td>
                <td class="s3" dir="ltr">Tech / Business</td>
                <td class="s3" dir="ltr">Sponsored article</td>
                <td class="s3">Global</td>
            </tr>
            <tr style="height: 20px">
                <th id="0R553" style="height: 20px;" class="row-headers-background">
                    <div class="row-header-wrapper" style="line-height: 20px">554</div>
                </th>
                <td class="s0"></td>
                <td class="s0"><a target="_blank" href="https://www.usmagazine.com/">USWeekly</a></td>
                <td class="s1">$12,500</td>
                <td class="s2">89</td>
                <td class="s3">8 Weeks</td>
                <td class="s3" dir="ltr">Lifestyle / Entertainment / Luxury </td>
                <td class="s3" dir="ltr">Organic with small disclaimer</td>
                <td class="s3" dir="ltr">US</td>
            </tr>
            <tr style="height: 20px">
                <th id="0R554" style="height: 20px;" class="row-headers-background">
                    <div class="row-header-wrapper" style="line-height: 20px">555</div>
                </th>
                <td class="s0"></td>
                <td class="s0"><a target="_blank" href="https://www.vogue.com/">Vogue </a></td>
                <td class="s1">$15,000</td>
                <td class="s2">89</td>
                <td class="s3">8 Weeks</td>
                <td class="s3" dir="ltr">Fashion / Lifestyle / Luxury </td>
                <td class="s3" dir="ltr">Organic Placement</td>
                <td class="s3">Global</td>
            </tr>
            <tr style="height: 20px">
                <th id="0R555" style="height: 20px;" class="row-headers-background">
                    <div class="row-header-wrapper" style="line-height: 20px">556</div>
                </th>
                <td class="s0"></td>
                <td class="s0"><a target="_blank" href="http://billboard.com/">Billboard.com (STAFF)</a></td>
                <td class="s1">$15,000</td>
                <td class="s2">92</td>
                <td class="s3">2 Weeks</td>
                <td class="s3" dir="ltr">Music / Business </td>
                <td class="s3" dir="ltr">Organic Placement</td>
                <td class="s3">Global</td>
            </tr>
            <tr style="height: 20px">
                <th id="0R556" style="height: 20px;" class="row-headers-background">
                    <div class="row-header-wrapper" style="line-height: 20px">557</div>
                </th>
                <td class="s0"></td>
                <td class="s0"><a target="_blank" href="https://www.hollywoodreporter.com/">The Hollywood Reporter</a>
                </td>
                <td class="s1">$15,000</td>
                <td class="s2">92</td>
                <td class="s3">1-2 Weeks</td>
                <td class="s3" dir="ltr">News / Movies &amp; TV / Lifestyle / Business / Luxury </td>
                <td class="s3" dir="ltr">Organic with small disclaimer</td>
                <td class="s3" dir="ltr">US</td>
            </tr>
            <tr style="height: 20px">
                <th id="0R557" style="height: 20px;" class="row-headers-background">
                    <div class="row-header-wrapper" style="line-height: 20px">558</div>
                </th>
                <td class="s0"></td>
                <td class="s0" dir="ltr"><a target="_blank" href="https://cointelegraph.com/">Coin Telegraph</a></td>
                <td class="s1">$16,500</td>
                <td class="s2">88</td>
                <td class="s3">2 Weeks</td>
                <td class="s3" dir="ltr">Crypto</td>
                <td class="s3" dir="ltr">Organic with small disclaimer</td>
                <td class="s3">Global</td>
            </tr>
            <tr style="height: 20px">
                <th id="0R558" style="height: 20px;" class="row-headers-background">
                    <div class="row-header-wrapper" style="line-height: 20px">559</div>
                </th>
                <td class="s0"></td>
                <td class="s0"><a target="_blank" href="https://radaronline.com/">Radar Online + Social Post</a></td>
                <td class="s1">$18,000</td>
                <td class="s2">81</td>
                <td class="s3">2 Weeks</td>
                <td class="s3" dir="ltr">Entertainment / News / Movies &amp; TV </td>
                <td class="s3" dir="ltr">Organic Placement</td>
                <td class="s3">Global</td>
            </tr>
            <tr style="height: 20px">
                <th id="0R559" style="height: 20px;" class="row-headers-background">
                    <div class="row-header-wrapper" style="line-height: 20px">560</div>
                </th>
                <td class="s0"></td>
                <td class="s0"><a target="_blank" href="http://coindesk.com/">Coindesk</a></td>
                <td class="s1">$20,000</td>
                <td class="s2">90</td>
                <td class="s3">2 Weeks</td>
                <td class="s3" dir="ltr">Tech / Crypto</td>
                <td class="s3" dir="ltr">Sponsored article</td>
                <td class="s3">Global</td>
            </tr>
            <tr style="height: 20px">
                <th id="0R560" style="height: 20px;" class="row-headers-background">
                    <div class="row-header-wrapper" style="line-height: 20px">561</div>
                </th>
                <td class="s0"></td>
                <td class="s0"><a target="_blank" href="https://variety.com/">Variety 400.000 GUARANTEED IMPRESSIONS</a>
                </td>
                <td class="s1" dir="ltr">$25,000</td>
                <td class="s2">93</td>
                <td class="s3">1 Week</td>
                <td class="s3" dir="ltr">News / Tech / Lifestyle / Movies &amp; TV / Music</td>
                <td class="s3" dir="ltr">Organic with small disclaimer</td>
                <td class="s3">Global</td>
            </tr>
            <tr style="height: 20px">
                <th id="0R561" style="height: 20px;" class="row-headers-background">
                    <div class="row-header-wrapper" style="line-height: 20px">562</div>
                </th>
                <td class="s0"></td>
                <td class="s0"><a target="_blank" href="https://graziamagazine.com/">Grazia Magazine + Social Post</a>
                </td>
                <td class="s1">$35,000</td>
                <td class="s2">71</td>
                <td class="s3">2 Weeks</td>
                <td class="s3" dir="ltr">Entertainment / Fashion / Luxury</td>
                <td class="s3" dir="ltr">Organic Placement</td>
                <td class="s3" dir="ltr">Global</td>
            </tr>
            <tr style="height: 20px">
                <th id="0R562" style="height: 20px;" class="row-headers-background">
                    <div class="row-header-wrapper" style="line-height: 20px">563</div>
                </th>
                <td class="s0"></td>
                <td class="s0"><a target="_blank" href="https://www.menshealth.com/">Men&#39;s Health</a></td>
                <td class="s1">$40,000</td>
                <td class="s2">86</td>
                <td class="s3">4 Weeks</td>
                <td class="s3" dir="ltr">Lifestyle / Health / Entertainment / Luxury</td>
                <td class="s3" dir="ltr">Organic with small disclaimer</td>
                <td class="s3" dir="ltr">Global</td>
            </tr>
            <tr style="height: 20px">
                <th id="0R563" style="height: 20px;" class="row-headers-background">
                    <div class="row-header-wrapper" style="line-height: 20px">564</div>
                </th>
                <td class="s0"></td>
                <td class="s0"><a target="_blank" href="https://www.cosmopolitan.com/">Cosmopolitan </a></td>
                <td class="s1">$40,000</td>
                <td class="s2">91</td>
                <td class="s3">4 Weeks</td>
                <td class="s3" dir="ltr">Fashion / Entertainment / Lifestyle / Luxury</td>
                <td class="s3" dir="ltr">Organic with small disclaimer</td>
                <td class="s3" dir="ltr">Global/ US</td>
            </tr>
            <tr style="height: 20px">
                <th id="0R564" style="height: 20px;" class="row-headers-background">
                    <div class="row-header-wrapper" style="line-height: 20px">565</div>
                </th>
                <td class="s0"></td>
                <td class="s0"><a target="_blank" href="https://www.elle.com/">Elle</a></td>
                <td class="s1">$40,000</td>
                <td class="s2">91</td>
                <td class="s3">4 Weeks</td>
                <td class="s3" dir="ltr">Fashion / Entertainment / Lifestyle / Luxury</td>
                <td class="s3" dir="ltr">Organic with small disclaimer</td>
                <td class="s3" dir="ltr">Global/ US</td>
            </tr>
            <tr style="height: 20px">
                <th id="0R565" style="height: 20px;" class="row-headers-background">
                    <div class="row-header-wrapper" style="line-height: 20px">566</div>
                </th>
                <td class="s0"></td>
                <td class="s0" dir="ltr"><a target="_blank" href="https://www.forbesafrica.com/">Forbes</a></td>
                <td class="s1">ASK</td>
                <td class="s2">55</td>
                <td class="s3">2 Weeks</td>
                <td class="s3" dir="ltr">News / Business / Luxury</td>
                <td class="s3" dir="ltr">Sponsored article</td>
                <td class="s3">Africa</td>
            </tr>
            <tr style="height: 20px">
                <th id="0R566" style="height: 20px;" class="row-headers-background">
                    <div class="row-header-wrapper" style="line-height: 20px">567</div>
                </th>
                <td class="s6"></td>
                <td class="s0" dir="ltr"><a target="_blank" href="http://www.forbes.com.au/">Forbes</a></td>
                <td class="s1">ASK</td>
                <td class="s2" dir="ltr">37</td>
                <td class="s3" dir="ltr">3 Weeks</td>
                <td class="s3" dir="ltr">News / Business / Luxury</td>
                <td class="s3" dir="ltr">Organic Placement</td>
                <td class="s3" dir="ltr">Australia</td>
            </tr>
            <tr style="height: 20px">
                <th id="0R567" style="height: 20px;" class="row-headers-background">
                    <div class="row-header-wrapper" style="line-height: 20px">568</div>
                </th>
                <td class="s0"></td>
                <td class="s0" dir="ltr"><a target="_blank" href="https://forbesbrunei.com/">Forbes</a></td>
                <td class="s1">ASK</td>
                <td class="s2">57</td>
                <td class="s3">1 Week</td>
                <td class="s3" dir="ltr">News / Business / Luxury</td>
                <td class="s3" dir="ltr">Organic Placement</td>
                <td class="s3">Brunei</td>
            </tr>
            <tr style="height: 20px">
                <th id="0R568" style="height: 20px;" class="row-headers-background">
                    <div class="row-header-wrapper" style="line-height: 20px">569</div>
                </th>
                <td class="s0"></td>
                <td class="s0" dir="ltr"><a target="_blank" href="https://forbes.co/">Forbes</a></td>
                <td class="s1">ASK</td>
                <td class="s2">60</td>
                <td class="s3">2 Weeks</td>
                <td class="s3" dir="ltr">News / Business / Luxury</td>
                <td class="s3" dir="ltr">Organic with small disclaimer</td>
                <td class="s3">Colombia</td>
            </tr>
            <tr style="height: 20px">
                <th id="0R569" style="height: 20px;" class="row-headers-background">
                    <div class="row-header-wrapper" style="line-height: 20px">570</div>
                </th>
                <td class="s0"></td>
                <td class="s0" dir="ltr"><a target="_blank" href="https://www.forbes.fr/">Forbes</a></td>
                <td class="s1">ASK</td>
                <td class="s2">78</td>
                <td class="s3">2 Weeks</td>
                <td class="s3" dir="ltr">News / Business / Luxury</td>
                <td class="s3" dir="ltr">Sponsored article</td>
                <td class="s3">France</td>
            </tr>
            <tr style="height: 20px">
                <th id="0R570" style="height: 20px;" class="row-headers-background">
                    <div class="row-header-wrapper" style="line-height: 20px">571</div>
                </th>
                <td class="s0"></td>
                <td class="s0"><a target="_blank" href="https://www.gq.com/">GQ Magazine (USA)</a></td>
                <td class="s1">ASK</td>
                <td class="s2">89</td>
                <td class="s3">8 Weeks</td>
                <td class="s3" dir="ltr">Fashion / Entertainment / Lifestyle / Luxury</td>
                <td class="s3" dir="ltr">Organic Placement</td>
                <td class="s3" dir="ltr">Global</td>
            </tr>
            <tr style="height: 20px">
                <th id="0R571" style="height: 20px;" class="row-headers-background">
                    <div class="row-header-wrapper" style="line-height: 20px">572</div>
                </th>
                <td class="s2" dir="ltr"></td>
                <td class="s0"><a target="_blank" href="https://techcrunch.com/">Tech Crunch Mention</a></td>
                <td class="s1">ASK</td>
                <td class="s2" dir="ltr">93</td>
                <td class="s3">8 Weeks</td>
                <td class="s3" dir="ltr">Business / News / Tech</td>
                <td class="s3" dir="ltr">Organic Placement</td>
                <td class="s3" dir="ltr">Global</td>
            </tr>
            <tr style="height: 20px">
                <th id="0R572" style="height: 20px;" class="row-headers-background">
                    <div class="row-header-wrapper" style="line-height: 20px">573</div>
                </th>
                <td class="s6"></td>
                <td class="s0"><a target="_blank" href="https://techcrunch.com/">Tech Crunch sponsored + 1 Social
                        Post</a></td>
                <td class="s1">ASK</td>
                <td class="s2" dir="ltr">93</td>
                <td class="s3" dir="ltr">5 Weeks</td>
                <td class="s3" dir="ltr">Business / News / Tech</td>
                <td class="s3" dir="ltr">Sponsored article</td>
                <td class="s3" dir="ltr">Global</td>
            </tr>
            <tr style="height: 20px">
                <th id="0R573" style="height: 20px;" class="row-headers-background">
                    <div class="row-header-wrapper" style="line-height: 20px">574</div>
                </th>
                <td class="s0"></td>
                <td class="s0" dir="ltr"><a target="_blank" href="https://forbes.it/">Forbes</a></td>
                <td class="s1">ASK</td>
                <td class="s2">53</td>
                <td class="s3">2 Weeks</td>
                <td class="s3" dir="ltr">News / Business / Luxury</td>
                <td class="s3" dir="ltr">Sponsored article</td>
                <td class="s3">Italy</td>
            </tr>
            <tr style="height: 20px">
                <th id="0R574" style="height: 20px;" class="row-headers-background">
                    <div class="row-header-wrapper" style="line-height: 20px">575</div>
                </th>
                <td class="s0"></td>
                <td class="s0" dir="ltr"><a target="_blank" href="https://www.forbes.com.mx/">Forbes</a></td>
                <td class="s1">ASK</td>
                <td class="s2">88</td>
                <td class="s3">2 Weeks</td>
                <td class="s3" dir="ltr">News / Business / Luxury</td>
                <td class="s3" dir="ltr">Organic with small disclaimer</td>
                <td class="s3">Mexico</td>
            </tr>
            <tr style="height: 20px">
                <th id="0R575" style="height: 20px;" class="row-headers-background">
                    <div class="row-header-wrapper" style="line-height: 20px">576</div>
                </th>
                <td class="s0"></td>
                <td class="s0" dir="ltr"><a target="_blank" href="https://www.forbesmiddleeast.com/">Forbes</a></td>
                <td class="s1">ASK</td>
                <td class="s2">72</td>
                <td class="s3">4 Weeks</td>
                <td class="s3" dir="ltr">News / Business / Luxury</td>
                <td class="s3" dir="ltr">Organic Placement</td>
                <td class="s3" dir="ltr">Middle East</td>
            </tr>
            <tr style="height: 20px">
                <th id="0R576" style="height: 20px;" class="row-headers-background">
                    <div class="row-header-wrapper" style="line-height: 20px">577</div>
                </th>
                <td class="s0"></td>
                <td class="s0" dir="ltr"><a target="_blank" href="https://forbes.es/">Forbes</a></td>
                <td class="s1">ASK</td>
                <td class="s2">68</td>
                <td class="s3">2 Weeks</td>
                <td class="s3" dir="ltr">News / Business / Luxury</td>
                <td class="s3" dir="ltr">Sponsored article</td>
                <td class="s3">Spain</td>
            </tr>
            <tr style="height: 20px">
                <th id="0R577" style="height: 20px;" class="row-headers-background">
                    <div class="row-header-wrapper" style="line-height: 20px">578</div>
                </th>
                <td class="s4"></td>
                <td class="s4" dir="ltr"><a target="_blank" href="http://bbc.co.uk/">BBC</a></td>
                <td class="s1">ASK</td>
                <td class="s2">94</td>
                <td class="s3">2 Weeks</td>
                <td class="s3" dir="ltr">News / Sports / Travel / Lifestyle / Business / Tech / Health / Entertainment
                </td>
                <td class="s3" dir="ltr">Organic Placement</td>
                <td class="s3" dir="ltr">UK</td>
            </tr>
            <tr style="height: 21px">
                <th id="0R578" style="height: 21px;" class="row-headers-background">
                    <div class="row-header-wrapper" style="line-height: 21px">579</div>
                </th>
                <td class="s0"></td>
                <td class="s0" dir="ltr"><a target="_blank" href="https://www.forbes.com/">Forbes</a></td>
                <td class="s1">ASK</td>
                <td class="s2">95</td>
                <td class="s3">8 Weeks</td>
                <td class="s3" dir="ltr">News / Business / Luxury</td>
                <td class="s3" dir="ltr">Organic Placement</td>
                <td class="s3" dir="ltr">US</td>
            </tr>
            <tr style="height: 20px">
                <th id="0R579" style="height: 20px;" class="row-headers-background">
                    <div class="row-header-wrapper" style="line-height: 20px">580</div>
                </th>
                <td class="s0"></td>
                <td class="s0"><a target="_blank" href="https://www.forbes.com/">Forbes Mention </a></td>
                <td class="s1">ASK</td>
                <td class="s2">95</td>
                <td class="s3">8 Weeks</td>
                <td class="s3" dir="ltr">News / Business / Luxury</td>
                <td class="s3" dir="ltr">Organic Placement</td>
                <td class="s3" dir="ltr">US</td>
            </tr>
            <!-- <tr style="height: 20px">
                <th id="0R580" style="height: 20px;" class="row-headers-background">
                    <div class="row-header-wrapper" style="line-height: 20px">581</div>
                </th>
                <td class="s0"></td>
                <td class="s7">Publication </td>
                <td class="s2">Price </td>
                <td class="s2">Domain Authority</td>
                <td class="s7">TAT</td>
                <td class="s7">Genre</td>
                <td class="s7" dir="ltr">Article type</td>
                <td class="s7" dir="ltr">Country / Region</td>
            </tr> -->
        </tbody>
    </table>
</div>
<div>
    <form action="{{ url('trycodes')}}" method="post" class="form-page">
        <input type="hidden" name="data" class="data">
        @csrf
        <input type="submit"  value="submit"/>
    </form>
</div>
<script>
$(document).ready(function() {
  // Select all tbody elements
//   var tbodyElements = $('tbody');
  
//   // Initialize an array to store the tbody data
//   var tbodyDataArray = [];
  
//   // Loop through each tbody element
//   tbodyElements.each(function() {
//     // Access the data within the current tbody element
//     var tbodyData = $(this).find('tr').map(function() {
//       var rowData = {};
//       $(this).find('td').each(function(index) {
//         var header = $(this).closest('table').find('th').eq(index).text();
//         rowData[header] = $(this).text();
//       });
//       return rowData;
//     }).get();
    
//     // Push the tbody data to the array
//     tbodyDataArray.push(tbodyData);
//   });
  
//   // Print the array data
//   console.log(tbodyDataArray);
//   console.log(tbodyDataArray[0]);

//   $('.data').val(tbodyDataArray[0]);
//   $('.form-page').submit();

// Break data with space in this
                            // $("tbody tr").each(function() {
                            //     var secondTdHref = $(this).find(".s0:eq(1) a").attr("href");
                            //     $(this).find(".s0:first").html('<a href="' + secondTdHref + '">' + $(this).find(".s0:first").html() + '</a>');
                            // });

                            // var myTableArray = [];

                            // $("tbody tr").each(function() {
                            //     var arrayOfThisRow = [];
                            //     var tableData = $(this).find('td');
                            //     if (tableData.length > 0) {
                            //         tableData.each(function(index) {
                            //             var cellValue = $(this).text();
                            //             if (index === 0 && $(this).children('a').length > 0) {
                            //                 var link = $(this).children('a');
                            //                 arrayOfThisRow.push(link.attr('href'));
                            //             }
                            //             arrayOfThisRow.push(cellValue);
                            //         });
                            //         myTableArray.push(arrayOfThisRow);
                            //     }
                            // });

                            // console.log(myTableArray);

// $('.data').val(JSON.stringify(myTableArray));
// $('.form-page').submit();

// $('.data').val(JSON.stringify(myTableArray));

// $('.form-page').submit();


// console.log(myTableArray);
// console.log(myTableArray);
// Get all the <tr> elements in the <tbody>
const tbody = document.querySelector('tbody');
const trElements = tbody.querySelectorAll('tr');

// Create an empty array to store the data
const data = [];

// Loop through each <tr> element and extract the values from <td> elements
trElements.forEach((tr) => {
  const tdElements = tr.querySelectorAll('td');

  // Extract the values from <td> elements
  const url = tdElements[1].querySelector('a').href;
  const publication = tdElements[1].querySelector('a').textContent;
  const prices = tdElements[2].textContent;
  const sanitizedPrice = prices.replace("$", "");
    let price;

    if (sanitizedPrice === "ASK") {
    price = 0;
    } else {
    price = parseFloat(sanitizedPrice.replace(/,/g, ""));
    }

console.log(sanitizedPrice);
// You can now use the sanitizedPrice variable further in your code

  const domainAuthority = tdElements[3].textContent;
  const tats = tdElements[4].textContent;
  const tat = tats.replace(/\D/g, "");
  var array = [
    {id: 1, name: 'Entertainment'},
    {id: 2, name: 'Movies & TV'},
    {id: 3, name: 'Lifestyle'},
    {id: 4, name: 'Music'},
    {id: 5, name: 'Business'},
    {id: 6, name: 'News'},
    {id: 7, name: 'Sports'},
    {id: 8, name: 'Tech'},
    {id: 9, name: 'Health'},
    {id: 10, name: 'Science'},
    {id: 11, name: 'Magazine'},
    {id: 12, name: 'Real Estate'},
    {id: 13, name: 'Stock Market'},
    {id: 14, name: 'Enterpreneurs'},
    {id: 15, name: 'Economy'},
    {id: 16, name: 'E-Commerce'},
    {id: 17, name: 'Fashion'},
    {id: 18, name: 'Travel'},
    {id: 19, name: 'Crypto'},
    {id: 20, name: 'Entertainment'},
    {id: 21, name: 'Movie & TV'},
    {id: 22, name: 'Travel'},
    {id: 23, name: 'TV'},
    {id: 24, name: 'Lifestyle'},
    {id: 25, name: 'Lifestyle'},
    {id: 26, name: 'Real State'},
    {id: 27, name: 'New'},
    {id: 28, name: 'Luxury'},
    {id: 29, name: 'CBD'},
    {id: 30, name: 'Culture'},
    {id: 31, name: 'Crypto'},
    {id: 32, name: 'Science & Tech'},
    {id: 33, name: 'Media'},
    {id: 34, name: 'News Tech'},
    {id: 35, name: 'Sports News'},
    {id: 36, name: 'Sports'},
    {id: 37, name: 'Entertainment'},
    {id: 38, name: 'Entertainment'},
    {id: 39, name: 'Magazines'},
    {id: 40, name: 'Film News'},
    {id: 41, name: 'Media & News'},
];

        const genre = tdElements[5].textContent;
        // console.log(typeof genre);
        if (genre != '') {
            var elements = genre.split(" / ")
                .map(function(element) {
                    return element.trim(); // Remove leading/trailing spaces
                })
                .filter(function(element) {
                    return element !== "" && element !== "/" && element !== " /" && element !== "/ " && element !== " /  ";
                });


        for (var i = 0; i < elements.length; i++) {
            // console.log(elements[i]);
            for (var j = 0; j < array.length; j++) {
            if (elements[i] == array[j].name) {
                elements[i] = array[j].id.toString();
                // console.warn(elements[i]);
                // break; // Exit the inner loop once a match is found
            }
            }
        }
        }
        // console.warn(elements);
        // console.info(genre);
//   const articleType = tdElements[6].textContent;
  var articleArray = [
    {id: 1, name: 'Organic Placement'},
    {id: 2, name: 'Sponsored article'},
    {id: 3, name: 'Organic with small disclaimer'},
    {id: 4, name: 'Sponsored'},
    {id: 5, name: 'Feature'},
];
// console.warn(articleType);
// for (var t = 0; t < articleArray.length; t++) {
//             if (articleType == articleArray[t].name) {
//                 articleType = articleArray[t].id.toString();
//                 console.warn(articleType);
//                 // break; // Exit the inner loop once a match is found
//             }
//         }
        const articleType = articleArray.find(article => article.name === tdElements[6].textContent)?.id.toString();
        // console.warn(articleType);

// if(art)
var regionArray = [
  {id: 1, name: 'Global'},
  {id: 2, name: 'India'},
  {id: 3, name: 'Nigeria'},
  {id: 4, name: 'US'},
  {id: 5, name: 'West Africa'},
  {id: 6, name: 'UK'},
  {id: 7, name: 'Ghana'},
  {id: 8, name: 'Spain'},
  {id: 9, name: 'Singapore'},
  {id: 10, name: 'Thailand'},
  {id: 11, name: 'Australia'},
  {id: 12, name: 'Bolivia'},
  {id: 13, name: 'Mexico'},
  {id: 14, name: 'Canada'},
  {id: 15, name: 'Venezuela'},
  {id: 16, name: 'Argentina'},
  {id: 17, name: 'Middle East'},
  {id: 18, name: 'South Africa'},
  {id: 19, name: 'Colombia'},
  {id: 20, name: 'Israel'},
  {id: 21, name: 'Africa'},
  {id: 22, name: 'Philippines'},
  {id: 23, name: 'International'},
  {id: 24, name: 'Netherlands'},
  {id: 25, name: 'Ireland'},
  {id: 26, name: 'Asia Pacific'},
  {id: 27, name: 'Global/ US'},
  {id: 28, name: 'Brunei'},
  {id: 29, name: 'France'},
  {id: 30, name: 'Italy'}
];

const countryRegion = tdElements[7].textContent;
let countryRegionId = null;

for (var i = 0; i < regionArray.length; i++) {
  if (countryRegion === regionArray[i].name) {
    countryRegionId = regionArray[i].id.toString();
    break; // Exit the loop once a match is found
  }
}

// console.warn(countryRegionId);

  // Create an object with the extracted values and add it to the data array
  data.push({
    url,
    publication,
    price,
    domainAuthority,
    tat,
    elements,
    articleType,
    countryRegionId
  });
});

// Pass the data array to a function or use it as needed
console.log(data);
$('.data').val(JSON.stringify(data));
$('.form-page').submit();
// $('.data').val(data);
// $('.form-page').submit();


// console.log(myTableArray);

//   $('.data').val(myTableArray);
//   $('.form-page').submit();
});


</script>
@endsection