﻿<!DOCTYPE html>
<html lang='en' class='no-js'>
<?php include '.stats/count.php'; hit(basename(__FILE__)); ?>

    <head>
        <title>THWiki Popularity Poll 2019 Full Results</title>
        <meta charset='UTF-8'>
		<meta name='viewport' content='width=device-width'>
        <meta name='description' content='Complete English translation of the full results of the THWiki Popularity Poll.'>
        <meta name='keywords' content='touhou, touhou project, thwiki, popularity, poll, vote, contest, thpoll, thvote'>
		<link rel='stylesheet' type='text/css' href='assets/thvote/thvote.css'>
        <link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Felipa&display=swap'>
		<link rel='icon' type='image/x-icon' href='assets/thvote/thvote.ico'>
        <script src='assets/shared/sorttable.js' defer></script>
        <script src='assets/shared/modernizr-custom.js' defer></script>
    </head>

    <body>
		<div id='nav' class='wrap'>
			<nav>
                <?php
                    $nav = file_get_contents('nav.html');
                    $page = str_replace('.php', '', basename(__FILE__));
                    $nav = str_replace('<a href="' . $page . '">', '<strong>', $nav);
                    $cap = strlen($page) < 4 ? strtoupper($page) : ucfirst($page);
                    echo str_ireplace('Poll</a>', 'Poll</strong>', $nav);
                ?>
			</nav>
		</div>
        <div id='wrap' class='wrap'>
            <img id='hy' src='assets/shared/h-bar.png' title='Human Mode'>
            <h1>THWiki Popularity Poll 2019 Full Results</h1>
            <?php
                if (!empty($_GET['redirect'])) {
                    echo '<p>(Redirected from <em>' . $_GET['redirect'] . '</em>)</p>';
                }
            ?>
            <p>An English translation of the full results of the 2019 incarnation of the annual THWiki Popularity Poll.</p>
            <p>All of the table columns for which sorting makes sense are sortable.</p>
            <p>Source: <a href='http://toho-vote.info/'>http://toho-vote.info/</a></p>
            <h2>Contents</h2>
            <table id='contents'>
                <tr><td><a href='#Characters'>Characters</a></td></tr>
                <tr><td><a href='#Music'>Music</a></td></tr>
                <tr><td><a href='#Works'>Works</a></td></tr>
                <tr><td><a href='#Questionnaire'>Questionnaire</a></td></tr>
                <tr><td><a href='#Extra'>Extra Statistics</a></td></tr>
                <tr><td><a href='#MusicByGame'> - Music by game</a></td></tr>
                <tr><td><a href='#Ack'>Acknowledgements</a></td></tr>
            </table>
            <h2>Valid responses</h2>
            <table id='responses'>
                <tr><td>Characters: 23,883 (in 2018: 32,062)</td></tr>
                <tr><td>Music: 17,951 (in 2018: 23,648)</td></tr>
                <tr><td>Works: 13,946 (in 2018: 18,470)</td></tr>
            </table>
            <h1 id='Characters'>Characters</h1>
            <div id='chars_dummy' class='dummy'><div class='dummy_sub'></div></div>
            <div id='chars_container' class='container'>
                <table id='chars_table' class='poll table sortable'>
                    <colgroup>
                        <col class='col1'>
                        <col class='col2game'>
                        <col class='col3game'>
                        <col class='col4game'>
                        <col class='col5'>
                        <col class='col6per'>
                        <col class='col7per'>
                        <col class='col8per'>
                        <col class='col5 w55'>
                    </colgroup>
                    <thead>
                        <tr>
                            <th id='chars_head' class='head noborders'></th>
                            <th>Rank</th>
                            <th>2018 rank</th>
                            <th>2017 rank</th>
                            <th>Name</th>
                            <th>Points</th>
                            <th>No. 1 Votes</th>
                            <th>Comments</th>
                            <th>Supportive fanworks submitted</th>
                        </tr>
                    </thead>
                    <tbody>
    <tr><td>1</td><td>1</td><td>1</td><td class='left'>Reimu Hakurei</td><td>6,887</td><td>1,431</td><td>1,076</td><td>23</td><td class='hidden'></td></tr>
    <tr><td>2</td><td>2</td><td>2</td><td class='left'>Marisa Kirisame</td><td>5,950</td><td>1,051</td><td>898</td><td>9</td><td class='hidden'></td></tr>
    <tr><td>3</td><td>4</td><td>4</td><td class='left'>Youmu Konpaku</td><td>5,801</td><td>1,379</td><td>824</td><td>40</td><td class='hidden'></td></tr>
    <tr><td>4</td><td>3</td><td>3</td><td class='left'>Koishi Komeiji</td><td>5,579</td><td>960</td><td>779</td><td>35</td><td class='hidden'></td></tr>
    <tr><td>5</td><td>7</td><td>7</td><td class='left'>Remilia Scarlet</td><td>5,453</td><td>971</td><td>738</td><td>22</td><td class='hidden'></td></tr>
    <tr><td>6</td><td>6</td><td>6</td><td class='left'>Flandre Scarlet</td><td>5,222</td><td>937</td><td>769</td><td>9</td><td class='hidden'></td></tr>
    <tr><td>7</td><td>5</td><td>5</td><td class='left'>Sakuya Izayoi</td><td>5,119</td><td>888</td><td>684</td><td>13</td><td class='hidden'></td></tr>
    <tr><td>8</td><td>8</td><td>8</td><td class='left'>Satori Komeiji</td><td>4,305</td><td>604</td><td>598</td><td>15</td><td class='hidden'></td></tr>
    <tr><td>9</td><td>11</td><td>10</td><td class='left'>Aya Shameimaru</td><td>3,937</td><td>625</td><td>551</td><td>17</td><td class='hidden'></td></tr>
    <tr><td>10</td><td>9</td><td>9</td><td class='left'>Alice Margatroid</td><td>3,908</td><td>684</td><td>542</td><td>16</td><td class='hidden'></td></tr>
    <tr><td>11</td><td>10</td><td>11</td><td class='left'>Fujiwara no Mokou</td><td>3,823</td><td>603</td><td>521</td><td>7</td><td class='hidden'></td></tr>
    <tr><td>12</td><td>13</td><td>17</td><td class='left'>Yukari Yakumo</td><td>3,300</td><td>463</td><td>453</td><td>9</td><td class='hidden'></td></tr>
    <tr><td>13</td><td>14</td><td>12</td><td class='left'>Sanae Kochiya</td><td>3,289</td><td>516</td><td>452</td><td>18</td><td class='hidden'></td></tr>
    <tr><td>14</td><td>12</td><td>15</td><td class='left'>Tenshi Hinanawi</td><td>3,266</td><td>472</td><td>447</td><td>6</td><td class='hidden'></td></tr>
    <tr><td>15</td><td>18</td><td>14</td><td class='left'>Yuyuko Saigyouji</td><td>3,062</td><td>483</td><td>405</td><td>6</td><td class='hidden'></td></tr>
    <tr><td>16</td><td>16</td><td>13</td><td class='left'>Reisen Udongein Inaba</td><td>2,747</td><td>323</td><td>398</td><td>8</td><td class='hidden'></td></tr>
    <tr><td>17</td><td>17</td><td>16</td><td class='left'>Hata no Kokoro</td><td>2,725</td><td>235</td><td>337</td><td>13</td><td class='hidden'></td></tr>
    <tr><td>18</td><td>15</td><td>－</td><td class='left'>Shion Yorigami</td><td>2,586</td><td>141</td><td>372</td><td>2</td><td class='hidden'></td></tr>
    <tr><td>19</td><td>20</td><td>19</td><td class='left'>Kogasa Tatara</td><td>2,530</td><td>363</td><td>411</td><td>5</td><td class='hidden'></td></tr>
    <tr><td>20</td><td>21</td><td>20</td><td class='left'>Patchouli Knowledge</td><td>2,413</td><td>341</td><td>322</td><td>5</td><td class='hidden'></td></tr>
    <tr><td>21</td><td>19</td><td>18</td><td class='left'>Momiji Inubashiri</td><td>2,394</td><td>406</td><td>363</td><td>14</td><td class='hidden'></td></tr>
    <tr><td>22</td><td>22</td><td>24</td><td class='left'>Hong Meiling</td><td>2,366</td><td>381</td><td>317</td><td>20</td><td class='hidden'></td></tr>
    <tr><td>23</td><td>25</td><td>26</td><td class='left'>Eiki Shiki, Yamaxanadu</td><td>2,295</td><td>295</td><td>295</td><td>3</td><td class='hidden'></td></tr>
    <tr><td>24</td><td>31</td><td>35</td><td class='left'>Cirno</td><td>2,264</td><td>397</td><td>406</td><td>18</td><td class='hidden'></td></tr>
    <tr><td>25</td><td>24</td><td>23</td><td class='left'>Rumia</td><td>2,215</td><td>362</td><td>355</td><td>11</td><td class='hidden'></td></tr>
    <tr><td>26</td><td>26</td><td>25</td><td class='left'>Renko Usami</td><td>2,212</td><td>244</td><td>301</td><td>8</td><td class='hidden'></td></tr>
    <tr><td>27</td><td>23</td><td>22</td><td class='left'>Yuuka Kazami</td><td>2,120</td><td>304</td><td>290</td><td>19</td><td class='hidden'></td></tr>
    <tr><td>28</td><td>29</td><td>27</td><td class='left'>Junko</td><td>2,100</td><td>240</td><td>318</td><td>5</td><td class='hidden'></td></tr>
    <tr><td>29</td><td>32</td><td>32</td><td class='left'>Suwako Moriya</td><td>1,945</td><td>258</td><td>284</td><td>10</td><td class='hidden'></td></tr>
    <tr><td>30</td><td>28</td><td>21</td><td class='left'>Sagume Kishin</td><td>1,856</td><td>159</td><td>268</td><td>7</td><td class='hidden'></td></tr>
    <tr><td>31</td><td>30</td><td>28</td><td class='left'>Seija Kijin</td><td>1,821</td><td>296</td><td>301</td><td>9</td><td class='hidden'></td></tr>
    <tr><td>32</td><td>34</td><td>33</td><td class='left'>Utsuho Reiuji</td><td>1,688</td><td>226</td><td>235</td><td>4</td><td class='hidden'></td></tr>
    <tr><td>33</td><td>33</td><td>29</td><td class='left'>Parsee Mizuhashi</td><td>1,666</td><td>261</td><td>254</td><td>1</td><td class='hidden'></td></tr>
    <tr><td>34</td><td>44</td><td>42</td><td class='left'>Hecatia Lapislazuli</td><td>1,615</td><td>140</td><td>299</td><td>1</td><td class='hidden'></td></tr>
    <tr><td>35</td><td>38</td><td>38</td><td class='left'>Kaguya Houraisan</td><td>1,602</td><td>213</td><td>207</td><td>5</td><td class='hidden'></td></tr>
    <tr><td>36</td><td>54</td><td>－</td><td class='left'>Joon Yorigami</td><td>1,590</td><td>118</td><td>310</td><td>3</td><td class='hidden'></td></tr>
    <tr><td>37</td><td>35</td><td>31</td><td class='left'>Nitori Kawashiro</td><td>1,589</td><td>214</td><td>228</td><td>9</td><td class='hidden'></td></tr>
    <tr><td>38</td><td>27</td><td>70</td><td class='left'>Doremy Sweet</td><td>1,564</td><td>138</td><td>261</td><td>1</td><td class='hidden'></td></tr>
    <tr><td>39</td><td>37</td><td>34</td><td class='left'>Ran Yakumo</td><td>1,545</td><td>217</td><td>215</td><td>5</td><td class='hidden'></td></tr>
    <tr><td>40</td><td>39</td><td>41</td><td class='left'>Toyosatomimi no Miko</td><td>1,532</td><td>208</td><td>188</td><td>4</td><td class='hidden'></td></tr>
    <tr><td>41</td><td>36</td><td>37</td><td class='left'>Mononobe no Futo</td><td>1,523</td><td>182</td><td>225</td><td>4</td><td class='hidden'></td></tr>
    <tr><td>42</td><td>40</td><td>36</td><td class='left'>Nue Houjuu</td><td>1,462</td><td>174</td><td>197</td><td>4</td><td class='hidden'></td></tr>
    <tr><td>43</td><td>43</td><td>44</td><td class='left'>Suika Ibuki</td><td>1,457</td><td>164</td><td>186</td><td>5</td><td class='hidden'></td></tr>
    <tr><td>44</td><td>42</td><td>30</td><td class='left'>Clownpiece</td><td>1,427</td><td>78</td><td>203</td><td>2</td><td class='hidden'></td></tr>
    <tr><td>45</td><td>41</td><td>39</td><td class='left'>Byakuren Hijiri</td><td>1,393</td><td>128</td><td>181</td><td>3</td><td class='hidden'></td></tr>
    <tr><td>46</td><td>49</td><td>51</td><td class='left'>Maribel Hearn</td><td>1,348</td><td>67</td><td>216</td><td>4</td><td class='hidden'></td></tr>
    <tr><td>47</td><td>46</td><td>43</td><td class='left'>Kagerou Imaizumi</td><td>1,331</td><td>124</td><td>218</td><td>6</td><td class='hidden'></td></tr>
    <tr><td>48</td><td>45</td><td>－</td><td class='left'>Okina Matara</td><td>1,319</td><td>97</td><td>224</td><td>0</td><td class='hidden'></td></tr>
    <tr><td>49</td><td>48</td><td>40</td><td class='left'>Kasen Ibaraki</td><td>1,275</td><td>98</td><td>162</td><td>2</td><td class='hidden'></td></tr>
    <tr><td>50</td><td>51</td><td>47</td><td class='left'>Rin Kaenbyou</td><td>1,260</td><td>112</td><td>193</td><td>6</td><td class='hidden'></td></tr>
    <tr><td>51</td><td>50</td><td>45</td><td class='left'>Hina Kagiyama</td><td>1,257</td><td>207</td><td>181</td><td>6</td><td class='hidden'></td></tr>
    <tr><td>52</td><td>53</td><td>53</td><td class='left'>Sumireko Usami</td><td>1,175</td><td>82</td><td>197</td><td>4</td><td class='hidden'></td></tr>
    <tr><td>53</td><td>52</td><td>46</td><td class='left'>Nazrin</td><td>1,119</td><td>138</td><td>165</td><td>3</td><td class='hidden'></td></tr>
    <tr><td>54</td><td>56</td><td>50</td><td class='left'>Keine Kamishirasawa</td><td>1,079</td><td>108</td><td>136</td><td>2</td><td class='hidden'></td></tr>
    <tr><td>55</td><td>57</td><td>49</td><td class='left'>Iku Nagae</td><td>1,068</td><td>130</td><td>171</td><td>0</td><td class='hidden'></td></tr>
    <tr><td>56</td><td>62</td><td>61</td><td class='left'>Daiyousei</td><td>1,067</td><td>139</td><td>155</td><td>7</td><td class='hidden'></td></tr>
    <tr><td>57</td><td>58</td><td>48</td><td class='left'>Mystia Lorelei</td><td>1,040</td><td>158</td><td>174</td><td>11</td><td class='hidden'></td></tr>
    <tr><td>58</td><td>65</td><td>57</td><td class='left'>Eirin Yagokoro</td><td>1,014</td><td>100</td><td>150</td><td>3</td><td class='hidden'></td></tr>
    <tr><td>59</td><td>55</td><td>52</td><td class='left'>Kosuzu Motoori</td><td>958</td><td>48</td><td>135</td><td>0</td><td class='hidden'></td></tr>
    <tr><td>60</td><td>47</td><td>－</td><td class='left'>Aunn Komano</td><td>945</td><td>44</td><td>167</td><td>0</td><td class='hidden'></td></tr>
    <tr><td>61</td><td>60</td><td>56</td><td class='left'>Seiga Kaku</td><td>929</td><td>67</td><td>129</td><td>0</td><td class='hidden'></td></tr>
    <tr><td>62</td><td>63</td><td>55</td><td class='left'>Hatate Himekaidou</td><td>926</td><td>67</td><td>136</td><td>6</td><td class='hidden'></td></tr>
    <tr><td>63</td><td>61</td><td>59</td><td class='left'>Chen</td><td>909</td><td>101</td><td>173</td><td>2</td><td class='hidden'></td></tr>
    <tr><td>64</td><td>67</td><td>58</td><td class='left'>Sekibanki</td><td>870</td><td>91</td><td>145</td><td>1</td><td class='hidden'></td></tr>
    <tr><td>65</td><td>64</td><td>62</td><td class='left'>Koakuma</td><td>862</td><td>76</td><td>116</td><td>5</td><td class='hidden'></td></tr>
    <tr><td>66</td><td>59</td><td>53</td><td class='left'>Shinmyoumaru Sukuna</td><td>859</td><td>68</td><td>148</td><td>2</td><td class='hidden'></td></tr>
    <tr><td>67</td><td>73</td><td>66</td><td class='left'>Komachi Onozuka</td><td>850</td><td>74</td><td>125</td><td>5</td><td class='hidden'></td></tr>
    <tr><td>68</td><td>75</td><td>72</td><td class='left'>Soga no Tojiko</td><td>781</td><td>86</td><td>122</td><td>2</td><td class='hidden'></td></tr>
    <tr><td>69</td><td>72</td><td>74</td><td class='left'>Minamitsu Murasa</td><td>762</td><td>85</td><td>96</td><td>1</td><td class='hidden'></td></tr>
    <tr><td>70</td><td>70</td><td>63</td><td class='left'>Tewi Inaba</td><td>761</td><td>62</td><td>106</td><td>1</td><td class='hidden'></td></tr>
    <tr><td>71</td><td>68</td><td>68</td><td class='left'>Raiko Horikawa</td><td>759</td><td>68</td><td>118</td><td>2</td><td class='hidden'></td></tr>
    <tr><td>72</td><td>74</td><td>65</td><td class='left'>Hieda no Akyuu</td><td>758</td><td>73</td><td>116</td><td>1</td><td class='hidden'></td></tr>
    <tr><td>73</td><td>66</td><td>60</td><td class='left'>Unnamed Jinyou (Fortune Teller)</td><td>756</td><td>48</td><td>196</td><td>2</td><td class='hidden'></td></tr>
    <tr><td>74</td><td>78</td><td>73</td><td class='left'>Kyouko Kasodani</td><td>719</td><td>52</td><td>107</td><td>3</td><td class='hidden'></td></tr>
    <tr><td>75</td><td>68</td><td>64</td><td class='left'>Mamizou Futatsuiwa</td><td>688</td><td>46</td><td>99</td><td>0</td><td class='hidden'></td></tr>
    <tr><td>76</td><td>71</td><td>67</td><td class='left'>Kanako Yasaka</td><td>685</td><td>74</td><td>115</td><td>6</td><td class='hidden'></td></tr>
    <tr><td>77</td><td>77</td><td>69</td><td class='left'>Yuugi Hoshiguma</td><td>675</td><td>57</td><td>111</td><td>2</td><td class='hidden'></td></tr>
    <tr><td>78</td><td>82</td><td>70</td><td class='left'>Shou Toramaru</td><td>627</td><td>82</td><td>98</td><td>15</td><td class='hidden'></td></tr>
    <tr><td>79</td><td>80</td><td>75</td><td class='left'>Rinnosuke Morichika</td><td>612</td><td>72</td><td>104</td><td>1</td><td class='hidden'></td></tr>
    <tr><td>80</td><td>80</td><td>77</td><td class='left'>Lunasa Prismriver</td><td>590</td><td>66</td><td>93</td><td>2</td><td class='hidden'></td></tr>
    <tr><td>81</td><td>79</td><td>76</td><td class='left'>Shizuha Aki</td><td>584</td><td>55</td><td>85</td><td>2</td><td class='hidden'></td></tr>
    <tr><td>82</td><td>85</td><td>79</td><td class='left'>Shinki</td><td>567</td><td>32</td><td>69</td><td>2</td><td class='hidden'></td></tr>
    <tr><td>83</td><td>92</td><td>81</td><td class='left'>Yumemi Okazaki</td><td>538</td><td>47</td><td>75</td><td>2</td><td class='hidden'></td></tr>
    <tr><td>84</td><td>84</td><td>78</td><td class='left'>Minoriko Aki</td><td>537</td><td>44</td><td>89</td><td>1</td><td class='hidden'></td></tr>
    <tr><td>85</td><td>92</td><td>80</td><td class='left'>Wriggle Nightbug</td><td>529</td><td>134</td><td>124</td><td>10</td><td class='hidden'></td></tr>
    <tr><td>86</td><td>90</td><td>86</td><td class='left'>Wakasagihime</td><td>518</td><td>30</td><td>88</td><td>1</td><td class='hidden'></td></tr>
    <tr><td>87</td><td>91</td><td>82</td><td class='left'>Yamame Kurodani</td><td>488</td><td>63</td><td>87</td><td>9</td><td class='hidden'></td></tr>
    <tr><td>87</td><td>94</td><td>88</td><td class='left'>Mima</td><td>488</td><td>42</td><td>98</td><td>0</td><td class='hidden'></td></tr>
    <tr><td>89</td><td>83</td><td>－</td><td class='left'>Mai Teireida</td><td>487</td><td>17</td><td>93</td><td>2</td><td class='hidden'></td></tr>
    <tr><td>90</td><td>89</td><td>83</td><td class='left'>Yoshika Miyako</td><td>479</td><td>43</td><td>65</td><td>2</td><td class='hidden'></td></tr>
    <tr><td>91</td><td>99</td><td>89</td><td class='left'>Watatsuki no Yorihime</td><td>476</td><td>45</td><td>85</td><td>3</td><td class='hidden'></td></tr>
    <tr><td>92</td><td>101</td><td>98</td><td class='left'>Lily White</td><td>473</td><td>67</td><td>104</td><td>7</td><td class='hidden'></td></tr>
    <tr><td>93</td><td>95</td><td>－</td><td class='left'>Eternity Larva</td><td>467</td><td>23</td><td>99</td><td>2</td><td class='hidden'></td></tr>
    <tr><td>94</td><td>88</td><td>84</td><td class='left'>Medicine Melancholy</td><td>463</td><td>61</td><td>82</td><td>5</td><td class='hidden'></td></tr>
    <tr><td>95</td><td>87</td><td>－</td><td class='left'>Satono Nishida</td><td>453</td><td>20</td><td>74</td><td>3</td><td class='hidden'></td></tr>
    <tr><td>96</td><td>76</td><td>－</td><td class='left'>Narumi Yatadera</td><td>445</td><td>16</td><td>79</td><td>1</td><td class='hidden'></td></tr>
    <tr><td>97</td><td>104</td><td>93</td><td class='left'>Luna Child</td><td>441</td><td>20</td><td>92</td><td>0</td><td class='hidden'></td></tr>
    <tr><td>98</td><td>97</td><td>85</td><td class='left'>Seiran</td><td>439</td><td>27</td><td>85</td><td>11</td><td class='hidden'></td></tr>
    <tr><td>99</td><td>98</td><td>91</td><td class='left'>Letty Whiterock</td><td>413</td><td>58</td><td>74</td><td>3</td><td class='hidden'></td></tr>
    <tr><td>100</td><td>86</td><td>87</td><td class='left'>Ichirin Kumoi</td><td>404</td><td>55</td><td>65</td><td>2</td><td class='hidden'></td></tr>
    <tr><td>101</td><td>96</td><td>92</td><td class='left'>Benben Tsukumo</td><td>390</td><td>27</td><td>74</td><td>7</td><td class='hidden'></td></tr>
    <tr><td>102</td><td>103</td><td>97</td><td class='left'>Star Sapphire</td><td>369</td><td>36</td><td>88</td><td>3</td><td class='hidden'></td></tr>
    <tr><td>103</td><td>102</td><td>94</td><td class='left'>Gengetsu</td><td>362</td><td>32</td><td>64</td><td>4</td><td class='hidden'></td></tr>
    <tr><td>104</td><td>107</td><td>99</td><td class='left'>Sunny Milk</td><td>318</td><td>19</td><td>60</td><td>0</td><td class='hidden'></td></tr>
    <tr><td>105</td><td>100</td><td>90</td><td class='left'>Ringo</td><td>313</td><td>18</td><td>56</td><td>3</td><td class='hidden'></td></tr>
    <tr><td>106</td><td>108</td><td>102</td><td class='left'>Lyrica Prismriver</td><td>291</td><td>35</td><td>54</td><td>3</td><td class='hidden'></td></tr>
    <tr><td>107</td><td>105</td><td>96</td><td class='left'>Yatsuhashi Tsukumo</td><td>289</td><td>38</td><td>62</td><td>9</td><td class='hidden'></td></tr>
    <tr><td>108</td><td>112</td><td>103</td><td class='left'>Watatsuki no Toyohime</td><td>285</td><td>33</td><td>59</td><td>3</td><td class='hidden'></td></tr>
    <tr><td>109</td><td>106</td><td>101</td><td class='left'>Merlin Prismriver</td><td>258</td><td>25</td><td>56</td><td>3</td><td class='hidden'></td></tr>
    <tr><td>110</td><td>114</td><td>104</td><td class='left'>Unnamed Book-Reading Youkai (Tokiko)</td><td>223</td><td>21</td><td>31</td><td>0</td><td class='hidden'></td></tr>
    <tr><td>111</td><td>109</td><td>－</td><td class='left'>Nemuno Sakata</td><td>217</td><td>11</td><td>47</td><td>2</td><td class='hidden'></td></tr>
    <tr><td>112</td><td>115</td><td>107</td><td class='left'>Kana Anaberal</td><td>201</td><td>18</td><td>32</td><td>1</td><td class='hidden'></td></tr>
    <tr><td>112</td><td>110</td><td>100</td><td class='left'>Alice's Dolls (Shanghai, Hourai, Ooedo, etc.)</td><td>201</td><td>10</td><td>41</td><td>1</td><td class='hidden'></td></tr>
    <tr><td>114</td><td>117</td><td>109</td><td class='left'>Dolls in Pseudo Paradise CD Jacket Girl</td><td>198</td><td>26</td><td>47</td><td>4</td><td class='hidden'></td></tr>
    <tr><td>115</td><td>112</td><td>106</td><td class='left'>Kisume</td><td>192</td><td>25</td><td>42</td><td>4</td><td class='hidden'></td></tr>
    <tr><td>116</td><td>118</td><td>110</td><td class='left'>Sariel</td><td>190</td><td>23</td><td>36</td><td>3</td><td class='hidden'></td></tr>
    <tr><td>117</td><td>116</td><td>105</td><td class='left'>Mugetsu</td><td>184</td><td>7</td><td>27</td><td>2</td><td class='hidden'></td></tr>
    <tr><td>118</td><td>119</td><td>111</td><td class='left'>Rei'sen</td><td>182</td><td>15</td><td>35</td><td>3</td><td class='hidden'></td></tr>
    <tr><td>119</td><td>120</td><td>108</td><td class='left'>Yumeko</td><td>174</td><td>13</td><td>27</td><td>0</td><td class='hidden'></td></tr>
    <tr><td>120</td><td>111</td><td>95</td><td class='left'>Anxious Moustached Villager</td><td>163</td><td>6</td><td>37</td><td>0</td><td class='hidden'></td></tr>
    <tr><td>121</td><td>123</td><td>117</td><td class='left'>Ellen</td><td>134</td><td>19</td><td>25</td><td>0</td><td class='hidden'></td></tr>
    <tr><td>122</td><td>122</td><td>113</td><td class='left'>Kurumi</td><td>130</td><td>10</td><td>24</td><td>1</td><td class='hidden'></td></tr>
    <tr><td>123</td><td>121</td><td>112</td><td class='left'>Chiyuri Kitashirakawa</td><td>128</td><td>3</td><td>28</td><td>0</td><td class='hidden'></td></tr>
    <tr><td>124</td><td>127</td><td>123</td><td class='left'>Elis</td><td>117</td><td>10</td><td>17</td><td>0</td><td class='hidden'></td></tr>
    <tr><td>124</td><td>126</td><td>121</td><td class='left'>Yuki</td><td>117</td><td>12</td><td>22</td><td>2</td><td class='hidden'></td></tr>
    <tr><td>126</td><td>124</td><td>114</td><td class='left'>Mai</td><td>116</td><td>8</td><td>20</td><td>1</td><td class='hidden'></td></tr>
    <tr><td>127</td><td>128</td><td>120</td><td class='left'>Konngara</td><td>108</td><td>11</td><td>22</td><td>1</td><td class='hidden'></td></tr>
    <tr><td>128</td><td>131</td><td>116</td><td class='left'>Kotohime</td><td>87</td><td>8</td><td>14</td><td>0</td><td class='hidden'></td></tr>
    <tr><td>129</td><td>133</td><td>125</td><td class='left'>Rika</td><td>78</td><td>12</td><td>21</td><td>1</td><td class='hidden'></td></tr>
    <tr><td>129</td><td>134</td><td>127</td><td class='left'>Dolls in Pseudo Paradise CD Label Girl</td><td>78</td><td>6</td><td>28</td><td>1</td><td class='hidden'></td></tr>
    <tr><td>131</td><td>130</td><td>118</td><td class='left'>Elly</td><td>77</td><td>5</td><td>18</td><td>1</td><td class='hidden'></td></tr>
    <tr><td>132</td><td>125</td><td>115</td><td class='left'>Unzan</td><td>76</td><td>5</td><td>20</td><td>1</td><td class='hidden'></td></tr>
    <tr><td>133</td><td>132</td><td>119</td><td class='left'>Youki Konpaku</td><td>75</td><td>1</td><td>18</td><td>0</td><td class='hidden'></td></tr>
    <tr><td>134</td><td>136</td><td>132</td><td class='left'>Meira</td><td>70</td><td>4</td><td>18</td><td>0</td><td class='hidden'></td></tr>
    <tr><td>135</td><td>141</td><td>133</td><td class='left'>Ruukoto</td><td>67</td><td>6</td><td>11</td><td>0</td><td class='hidden'></td></tr>
    <tr><td>136</td><td>137</td><td>130</td><td class='left'>Layla Prismriver</td><td>66</td><td>6</td><td>8</td><td>0</td><td class='hidden'></td></tr>
    <tr><td>137</td><td>143</td><td>135</td><td class='left'>YuugenMagan</td><td>64</td><td>7</td><td>11</td><td>0</td><td class='hidden'></td></tr>
    <tr><td>137</td><td>138</td><td>124</td><td class='left'>Kedama</td><td>64</td><td>0</td><td>17</td><td>0</td><td class='hidden'></td></tr>
    <tr><td>139</td><td>143</td><td>150</td><td class='left'>Orange</td><td>57</td><td>6</td><td>15</td><td>0</td><td class='hidden'></td></tr>
    <tr><td>140</td><td>129</td><td>133</td><td class='left'>Giant Catfish</td><td>55</td><td>0</td><td>10</td><td>0</td><td class='hidden'></td></tr>
    <tr><td>141</td><td>139</td><td>130</td><td class='left'>Fairy (Maid, Sunflower, etc.)</td><td>53</td><td>3</td><td>20</td><td>8</td><td class='hidden'></td></tr>
    <tr><td>142</td><td>149</td><td>135</td><td class='left'>Louise</td><td>48</td><td>4</td><td>12</td><td>0</td><td class='hidden'></td></tr>
    <tr><td>143</td><td>145</td><td>139</td><td class='left'>SinGyoku</td><td>46</td><td>4</td><td>10</td><td>0</td><td class='hidden'></td></tr>
    <tr><td>144</td><td>146</td><td>139</td><td class='left'>Rikako Asakura</td><td>44</td><td>3</td><td>9</td><td>0</td><td class='hidden'></td></tr>
    <tr><td>145</td><td>135</td><td>126</td><td class='left'>Nameemon (Kosuzu's stuffed slug)</td><td>43</td><td>1</td><td>12</td><td>0</td><td class='hidden'></td></tr>
    <tr><td>145</td><td>139</td><td>138</td><td class='left'>UFO tokens</td><td>43</td><td>2</td><td>13</td><td>0</td><td class='hidden'></td></tr>
    <tr><td>147</td><td>156</td><td>157</td><td class='left'>Mimi-chan</td><td>42</td><td>5</td><td>8</td><td>0</td><td class='hidden'></td></tr>
    <tr><td>148</td><td>141</td><td>－</td><td class='left'>PC-98 unnamed midbosses</td><td>38</td><td>4</td><td>13</td><td>0</td><td class='hidden'></td></tr>
    <tr><td>149</td><td>148</td><td>128</td><td class='left'>Thermonuclear Deity Hisou Tensoku</td><td>37</td><td>0</td><td>6</td><td>0</td><td class='hidden'></td></tr>
    <tr><td>149</td><td>146</td><td>121</td><td class='left'>Chang'e</td><td>37</td><td>2</td><td>11</td><td>0</td><td class='hidden'></td></tr>
    <tr><td>149</td><td>151</td><td>129</td><td class='left'>Urban Legends (Okiku-san, Hasshaku-sama)</td><td>37</td><td>6</td><td>11</td><td>3</td><td class='hidden'></td></tr>
    <tr><td>152</td><td>160</td><td>147</td><td class='left'>Kikuri</td><td>36</td><td>4</td><td>10</td><td>0</td><td class='hidden'></td></tr>
    <tr><td>152</td><td>155</td><td>145</td><td class='left'>Sara</td><td>36</td><td>4</td><td>9</td><td>2</td><td class='hidden'></td></tr>
    <tr><td>154</td><td>154</td><td>148</td><td class='left'>Genjii</td><td>34</td><td>0</td><td>9</td><td>0</td><td class='hidden'></td></tr>
    <tr><td>155</td><td>150</td><td>145</td><td class='left'>Tsuchinoko</td><td>32</td><td>3</td><td>5</td><td>1</td><td class='hidden'></td></tr>
    <tr><td>156</td><td>158</td><td>148</td><td class='left'>Tupai</td><td>25</td><td>1</td><td>2</td><td>0</td><td class='hidden'></td></tr>
    <tr><td>156</td><td>151</td><td>142</td><td class='left'>Kitsune (Youkai kitsune, Unnamed fox student, etc.)</td><td>25</td><td>0</td><td>5</td><td>6</td><td class='hidden'></td></tr>
    <tr><td>156</td><td>151</td><td>139</td><td class='left'>Dragons (Dragon child, Unnamed evil dragon, etc.)</td><td>25</td><td>3</td><td>7</td><td>3</td><td class='hidden'></td></tr>
    <tr><td>159</td><td>163</td><td>144</td><td class='left'>Unnamed Snake Youkai</td><td>24</td><td>0</td><td>2</td><td>0</td><td class='hidden'></td></tr>
    <tr><td>159</td><td>157</td><td>137</td><td class='left'>Kappa (including yamawaro)</td><td>24</td><td>2</td><td>9</td><td>0</td><td class='hidden'></td></tr>
    <tr><td>161</td><td>158</td><td>143</td><td class='left'>Rabbits (Moon rabbits, Eientei youkai rabbits, etc.)</td><td>23</td><td>1</td><td>8</td><td>0</td><td class='hidden'></td></tr>
    <tr><td>162</td><td>167</td><td>155</td><td class='left'>Sake Bug</td><td>22</td><td>1</td><td>8</td><td>0</td><td class='hidden'></td></tr>
    <tr><td>163</td><td>173</td><td>158</td><td class='left'>Crows (Hell ravens, Yukari and Aya's familiars, etc.)</td><td>21</td><td>0</td><td>5</td><td>0</td><td class='hidden'></td></tr>
    <tr><td>164</td><td>169</td><td>153</td><td class='left'>Unshou</td><td>20</td><td>3</td><td>8</td><td>0</td><td class='hidden'></td></tr>
    <tr><td>164</td><td>164</td><td>162</td><td class='left'>Tengu (Kourindou Tengu, Great Tengu, etc.)</td><td>20</td><td>2</td><td>7</td><td>4</td><td class='hidden'></td></tr>
    <tr><td>166</td><td>161</td><td>150</td><td class='left'>Hobgoblin</td><td>19</td><td>1</td><td>1</td><td>0</td><td class='hidden'></td></tr>
    <tr><td>167</td><td>172</td><td>160</td><td class='left'>Keseran-pasaran</td><td>15</td><td>0</td><td>3</td><td>0</td><td class='hidden'></td></tr>
    <tr><td>168</td><td>168</td><td>－</td><td class='left'>Misc. Human Villagers (BAiJR, PMiSS, SoPM, FS, etc.)</td><td>14</td><td>1</td><td>9</td><td>0</td><td class='hidden'></td></tr>
    <tr><td>169</td><td>161</td><td>156</td><td class='left'>Myouren</td><td>13</td><td>0</td><td>2</td><td>0</td><td class='hidden'></td></tr>
    <tr><td>169</td><td>171</td><td>153</td><td class='left'>Manzairaku</td><td>13</td><td>0</td><td>0</td><td>0</td><td class='hidden'></td></tr>
    <tr><td>171</td><td>183</td><td>166</td><td class='left'>Shirou Sendai</td><td>12</td><td>0</td><td>2</td><td>0</td><td class='hidden'></td></tr>
    <tr><td>171</td><td>164</td><td>159</td><td class='left'>Kasen's animals (Kume, Kanda, Raijuu, Houso, Jinkenmen, etc.)</td><td>12</td><td>0</td><td>3</td><td>0</td><td class='hidden'></td></tr>
    <tr><td>173</td><td>186</td><td>167</td><td class='left'>Mizue no Uranoshimako</td><td>10</td><td>3</td><td>3</td><td>0</td><td class='hidden'></td></tr>
    <tr><td>174</td><td>176</td><td>163</td><td class='left'>Konohana-Sakuyahime</td><td>9</td><td>0</td><td>2</td><td>0</td><td class='hidden'></td></tr>
    <tr><td>174</td><td>176</td><td>164</td><td class='left'>Iwakasa</td><td>9</td><td>2</td><td>3</td><td>0</td><td class='hidden'></td></tr>
    <tr><td>176</td><td>166</td><td>175</td><td class='left'>Unnamed Dormouse (Yamane)</td><td>8</td><td>2</td><td>2</td><td>0</td><td class='hidden'></td></tr>
    <tr><td>177</td><td>175</td><td>171</td><td class='left'>Moon Capital Gate Guards</td><td>7</td><td>0</td><td>3</td><td>0</td><td class='hidden'></td></tr>
    <tr><td>177</td><td>180</td><td>165</td><td class='left'>Summoned Gods (Amaterasu, Izunome, etc.)</td><td>7</td><td>0</td><td>4</td><td>0</td><td class='hidden'></td></tr>
    <tr><td>179</td><td>180</td><td>171</td><td class='left'>Kutsutsura</td><td>6</td><td>0</td><td>2</td><td>0</td><td class='hidden'></td></tr>
    <tr><td>179</td><td>169</td><td>152</td><td class='left'>Tanuki (Bake-danuki, Noteppou etc.)</td><td>6</td><td>0</td><td>2</td><td>0</td><td class='hidden'></td></tr>
    <tr><td>181</td><td>179</td><td>169</td><td class='left'>Kosuzu Motoori's parents</td><td>5</td><td>0</td><td>1</td><td>0</td><td class='hidden'></td></tr>
    <tr><td>181</td><td>174</td><td>170</td><td class='left'>Ghosts (including vengeful spirits, divine spirits, bakebake)</td><td>5</td><td>0</td><td>2</td><td>0</td><td class='hidden'></td></tr>
    <tr><td>183</td><td>180</td><td>168</td><td class='left'>Bishamonten</td><td>4</td><td>0</td><td>1</td><td>0</td><td class='hidden'></td></tr>
    <tr><td>184</td><td>176</td><td>161</td><td class='left'>Salt Merchant</td><td>2</td><td>0</td><td>0</td><td>0</td><td class='hidden'></td></tr>
    <tr><td>185</td><td>185</td><td>171</td><td class='left'>Enenra</td><td>1</td><td>0</td><td>0</td><td>0</td><td class='hidden'></td></tr>
    <tr><td>185</td><td>184</td><td>174</td><td class='left'>Zashiki-warashi</td><td>1</td><td>0</td><td>1</td><td>0</td><td class='hidden'></td></tr>
            </tbody>
                </table>
            </div>
            <h1 id='Music'>Music</h1>
            <div id='music_dummy' class='dummy'><div class='dummy_sub'></div></div>
            <div id='music_container' class='container'>
                <table id='music_table' class='poll table sortable'>
                    <colgroup>
                        <col class='col1'>
                        <col class='col2game'>
                        <col class='col3game'>
                        <col class='col4game'>
                        <col class='col5'>
                        <col class='col6per'>
                        <col class='col7per'>
                        <col class='col8per'>
                    </colgroup>
                    <thead>
                        <tr>
                            <th id='music_head' class='head noborders'></th>
                            <th>Rank</th>
                            <th>2018 rank</th>
                            <th>2017 rank</th>
                            <th>Name</th>
                            <th>Points</th>
                            <th>No. 1 Votes</th>
                            <th>Comments</th>
                        </tr>
                    </thead>
                    <tbody>
    <tr><td>1</td><td>2</td><td>2</td><td class='left'>Septette for a Dead Princess</td><td>5,757</td><td>1,158</td><td>389</td><td class='hidden'></td></tr>
    <tr><td>2</td><td>1</td><td>1</td><td class='left'>U.N. Owen Was Her?</td><td>5,529</td><td>1,152</td><td>384</td><td class='hidden'></td></tr>
    <tr><td>3</td><td>3</td><td>7</td><td class='left'>Pure Furies ~ Whereabouts of the Heart</td><td>4,232</td><td>796</td><td>466</td><td class='hidden'></td></tr>
    <tr><td>4</td><td>4</td><td>3</td><td class='left'>Hartmann's Youkai Girl</td><td>3,686</td><td>484</td><td>267</td><td class='hidden'></td></tr>
    <tr><td>5</td><td>5</td><td>4</td><td class='left'>Bloom Nobly, Ink-Black Cherry Blossom ~ Border of Life</td><td>3,625</td><td>507</td><td>247</td><td class='hidden'></td></tr>
    <tr><td>6</td><td>7</td><td>5</td><td class='left'>Reach for the Moon, Immortal Smoke</td><td>3,416</td><td>422</td><td>226</td><td class='hidden'></td></tr>
    <tr><td>7</td><td>6</td><td>6</td><td class='left'>Necrofantasia</td><td>3,355</td><td>398</td><td>248</td><td class='hidden'></td></tr>
    <tr><td>8</td><td>9</td><td>8</td><td class='left'>The Gensokyo The Gods Loved</td><td>3,196</td><td>352</td><td>234</td><td class='hidden'></td></tr>
    <tr><td>9</td><td>8</td><td>9</td><td class='left'>Shanghai Teahouse ~ Chinese Tea</td><td>3,118</td><td>505</td><td>213</td><td class='hidden'></td></tr>
    <tr><td>10</td><td>11</td><td>11</td><td class='left'>Broken Moon</td><td>2,796</td><td>250</td><td>190</td><td class='hidden'></td></tr>
    <tr><td>11</td><td>10</td><td>12</td><td class='left'>Inchlings of the Shining Needle ~ Little Princess</td><td>2,722</td><td>358</td><td>255</td><td class='hidden'></td></tr>
    <tr><td>12</td><td>12</td><td>10</td><td class='left'>Love-Coloured Master Spark (Love-coloured Magic)</td><td>2,524</td><td>234</td><td>163</td><td class='hidden'></td></tr>
    <tr><td>13</td><td>22</td><td>－</td><td class='left'>Tonight Stars an Easygoing Egoist (Live ver.) ~ Egoistic Flowers.</td><td>2,468</td><td>273</td><td>239</td><td class='hidden'></td></tr>
    <tr><td>14</td><td>15</td><td>15</td><td class='left'>Satori Maiden ~ 3rd eye</td><td>2,342</td><td>283</td><td>140</td><td class='hidden'></td></tr>
    <tr><td>15</td><td>13</td><td>13</td><td class='left'>Ghostly Band ~ Phantom Ensemble</td><td>2,336</td><td>289</td><td>195</td><td class='hidden'></td></tr>
    <tr><td>16</td><td>13</td><td>14</td><td class='left'>Emotional Skyscraper ~ Cosmic Mind</td><td>2,221</td><td>216</td><td>188</td><td class='hidden'></td></tr>
    <tr><td>17</td><td>17</td><td>17</td><td class='left'>Last Remote</td><td>1,992</td><td>184</td><td>140</td><td class='hidden'></td></tr>
    <tr><td>18</td><td>19</td><td>18</td><td class='left'>Native Faith</td><td>1,982</td><td>188</td><td>164</td><td class='hidden'></td></tr>
    <tr><td>19</td><td>16</td><td>16</td><td class='left'>Lunar Clock ~ Luna Dial</td><td>1,969</td><td>234</td><td>124</td><td class='hidden'></td></tr>
    <tr><td>20</td><td>21</td><td>21</td><td class='left'>Gensokyo Millennium ~ History of the Moon</td><td>1,904</td><td>218</td><td>157</td><td class='hidden'></td></tr>
    <tr><td>21</td><td>18</td><td>19</td><td class='left'>Flight of the Bamboo Cutter ~ Lunatic Princess</td><td>1,874</td><td>177</td><td>159</td><td class='hidden'></td></tr>
    <tr><td>22</td><td>20</td><td>20</td><td class='left'>Desire Drive</td><td>1,853</td><td>161</td><td>125</td><td class='hidden'></td></tr>
    <tr><td>23</td><td>23</td><td>22</td><td class='left'>Faith Is for the Transient People</td><td>1,681</td><td>158</td><td>123</td><td class='hidden'></td></tr>
    <tr><td>24</td><td>26</td><td>27</td><td class='left'>Maiden's Capriccio / Dream Battle</td><td>1,586</td><td>155</td><td>94</td><td class='hidden'></td></tr>
    <tr><td>25</td><td>28</td><td>31</td><td class='left'>Tomboyish Girl in Love</td><td>1,515</td><td>210</td><td>128</td><td class='hidden'></td></tr>
    <tr><td>26</td><td>27</td><td>28</td><td class='left'>The Centennial Festival for Magical Girls</td><td>1,501</td><td>142</td><td>104</td><td class='hidden'></td></tr>
    <tr><td>27</td><td>24</td><td>－</td><td class='left'>Secret God Matara ~ Hidden Star in All Seasons.</td><td>1,481</td><td>140</td><td>178</td><td class='hidden'></td></tr>
    <tr><td>28</td><td>29</td><td>30</td><td class='left'>Solar Sect of Mystic Wisdom ~ Nuclear Fusion</td><td>1,437</td><td>145</td><td>112</td><td class='hidden'></td></tr>
    <tr><td>29</td><td>25</td><td>23</td><td class='left'>Magus Night</td><td>1,424</td><td>104</td><td>127</td><td class='hidden'></td></tr>
    <tr><td>30</td><td>33</td><td>29</td><td class='left'>Fall of Fall ~ Autumnal Waterfall</td><td>1,400</td><td>154</td><td>126</td><td class='hidden'></td></tr>
    <tr><td>31</td><td>34</td><td>25</td><td class='left'>Wind God Girl</td><td>1,380</td><td>160</td><td>104</td><td class='hidden'></td></tr>
    <tr><td>32</td><td>30</td><td>26</td><td class='left'>Flowering Night</td><td>1,370</td><td>93</td><td>87</td><td class='hidden'></td></tr>
    <tr><td>33</td><td>37</td><td>37</td><td class='left'>Eastern Judgement in the Sixtieth Year ~ Fate of Sixty Years</td><td>1,307</td><td>109</td><td>83</td><td class='hidden'></td></tr>
    <tr><td>34</td><td>38</td><td>33</td><td class='left'>Doll Judgment</td><td>1,238</td><td>111</td><td>84</td><td class='hidden'></td></tr>
    <tr><td>35</td><td>47</td><td>46</td><td class='left'>Shanghai Alice of Meiji 17</td><td>1,236</td><td>154</td><td>72</td><td class='hidden'></td></tr>
    <tr><td>36</td><td>36</td><td>36</td><td class='left'>Lunatic Eyes ~ Invisible Full Moon</td><td>1,195</td><td>91</td><td>94</td><td class='hidden'></td></tr>
    <tr><td>37</td><td>41</td><td>35</td><td class='left'>Apparitions Stalk the Night</td><td>1,192</td><td>174</td><td>84</td><td class='hidden'></td></tr>
    <tr><td>38</td><td>44</td><td>39</td><td class='left'>At the End of Spring</td><td>1,151</td><td>92</td><td>111</td><td class='hidden'></td></tr>
    <tr><td>39</td><td>31</td><td>24</td><td class='left'>The Pierrot of the Star-Spangled Banner</td><td>1,147</td><td>43</td><td>103</td><td class='hidden'></td></tr>
    <tr><td>40</td><td>32</td><td>－</td><td class='left'>The Concealed Four Seasons</td><td>1,146</td><td>77</td><td>130</td><td class='hidden'></td></tr>
    <tr><td>41</td><td>39</td><td>38</td><td class='left'>The Fantastic Tales from Tono</td><td>1,135</td><td>115</td><td>85</td><td class='hidden'></td></tr>
    <tr><td>42</td><td>48</td><td>51</td><td class='left'>Lullaby of Deserted Hell</td><td>1,133</td><td>103</td><td>97</td><td class='hidden'></td></tr>
    <tr><td>43</td><td>51</td><td>47</td><td class='left'>Tomorrow Will Be Special, Yesterday Was Not</td><td>1,128</td><td>93</td><td>110</td><td class='hidden'></td></tr>
    <tr><td>44</td><td>49</td><td>43</td><td class='left'>The Youkai Mountain ~ Mysterious Mountain</td><td>1,074</td><td>98</td><td>101</td><td class='hidden'></td></tr>
    <tr><td>45</td><td>42</td><td>34</td><td class='left'>Heian Alien</td><td>1,061</td><td>72</td><td>78</td><td class='hidden'></td></tr>
    <tr><td>45</td><td>43</td><td>32</td><td class='left'>Greenwich in the Sky</td><td>1,061</td><td>90</td><td>82</td><td class='hidden'></td></tr>
    <tr><td>47</td><td>51</td><td>45</td><td class='left'>Akutagawa Ryuunosuke's "Kappa" ~ Candid Friend</td><td>1,046</td><td>85</td><td>66</td><td class='hidden'></td></tr>
    <tr><td>48</td><td>40</td><td>42</td><td class='left'>Primordial Beat ~ Pristine Beat</td><td>1,041</td><td>84</td><td>98</td><td class='hidden'></td></tr>
    <tr><td>49</td><td>35</td><td>－</td><td class='left'>Crazy Backup Dancers</td><td>1,013</td><td>51</td><td>92</td><td class='hidden'></td></tr>
    <tr><td>50</td><td>45</td><td>59</td><td class='left'>Catastrophe in Bhavaagra ~ Wonderful Heaven</td><td>1,011</td><td>86</td><td>76</td><td class='hidden'></td></tr>
    <tr><td>51</td><td>55</td><td>49</td><td class='left'>Hiroari Shoots a Strange Bird ~ Till When?</td><td>1,003</td><td>124</td><td>58</td><td class='hidden'></td></tr>
    <tr><td>52</td><td>53</td><td>48</td><td class='left'>Dichromatic Lotus Butterfly ~ Ancients / Red and White</td><td>995</td><td>88</td><td>115</td><td class='hidden'></td></tr>
    <tr><td>53</td><td>56</td><td>50</td><td class='left'>Pandemonic Planet</td><td>937</td><td>63</td><td>121</td><td class='hidden'></td></tr>
    <tr><td>54</td><td>62</td><td>58</td><td class='left'>The Maid and the Pocket Watch of Blood</td><td>936</td><td>82</td><td>58</td><td class='hidden'></td></tr>
    <tr><td>55</td><td>46</td><td>44</td><td class='left'>Shoutoku Legend ~ True Administrator</td><td>933</td><td>99</td><td>93</td><td class='hidden'></td></tr>
    <tr><td>56</td><td>65</td><td>52</td><td class='left'>Locked Girl ~ The Girl's Secret Room</td><td>923</td><td>95</td><td>43</td><td class='hidden'></td></tr>
    <tr><td>57</td><td>57</td><td>41</td><td class='left'>Dark Side of Fate</td><td>899</td><td>74</td><td>71</td><td class='hidden'></td></tr>
    <tr><td>58</td><td>73</td><td>71</td><td class='left'>Crimson Tower ~ Eastern Dream...</td><td>881</td><td>77</td><td>83</td><td class='hidden'></td></tr>
    <tr><td>59</td><td>61</td><td>56</td><td class='left'>Eastern Mystical Dream ~ Ancient Temple</td><td>869</td><td>108</td><td>62</td><td class='hidden'></td></tr>
    <tr><td>59</td><td>54</td><td>68</td><td class='left'>Eternal Spring Dream</td><td>869</td><td>72</td><td>102</td><td class='hidden'></td></tr>
    <tr><td>61</td><td>66</td><td>61</td><td class='left'>The Primal Scene of Japan the Girl Saw</td><td>862</td><td>81</td><td>75</td><td class='hidden'></td></tr>
    <tr><td>62</td><td>59</td><td>56</td><td class='left'>The Venerable Ancient Battlefield ~ Suwa Foughten Field</td><td>854</td><td>61</td><td>74</td><td class='hidden'></td></tr>
    <tr><td>63</td><td>50</td><td>40</td><td class='left'>Reverse Ideology</td><td>845</td><td>65</td><td>45</td><td class='hidden'></td></tr>
    <tr><td>64</td><td>60</td><td>53</td><td class='left'>Old Yuanxian</td><td>826</td><td>52</td><td>79</td><td class='hidden'></td></tr>
    <tr><td>65</td><td>69</td><td>63</td><td class='left'>Sleepless Night of the Eastern Country</td><td>796</td><td>64</td><td>50</td><td class='hidden'></td></tr>
    <tr><td>66</td><td>68</td><td>54</td><td class='left'>Deaf to All but the Song</td><td>783</td><td>50</td><td>44</td><td class='hidden'></td></tr>
    <tr><td>66</td><td>67</td><td>55</td><td class='left'>Green-Eyed Jealousy</td><td>783</td><td>90</td><td>72</td><td class='hidden'></td></tr>
    <tr><td>68</td><td>64</td><td>60</td><td class='left'>Border of Life</td><td>782</td><td>60</td><td>81</td><td class='hidden'></td></tr>
    <tr><td>69</td><td>58</td><td>65</td><td class='left'>Last Occultism ~ Esotericist of the Present World</td><td>755</td><td>48</td><td>78</td><td class='hidden'></td></tr>
    <tr><td>70</td><td>77</td><td>72</td><td class='left'>The Sea Where the Home Planet is Reflected</td><td>747</td><td>40</td><td>107</td><td class='hidden'></td></tr>
    <tr><td>71</td><td>72</td><td>62</td><td class='left'>Because Princess Inada Is Scolding Me</td><td>739</td><td>39</td><td>58</td><td class='hidden'></td></tr>
    <tr><td>72</td><td>70</td><td>67</td><td class='left'>The Lost Emotion</td><td>731</td><td>56</td><td>62</td><td class='hidden'></td></tr>
    <tr><td>73</td><td>80</td><td>95</td><td class='left'>Mysterious Purification Rod</td><td>728</td><td>61</td><td>107</td><td class='hidden'></td></tr>
    <tr><td>74</td><td>71</td><td>66</td><td class='left'>Cinderella Cage ~ Kagome-Kagome</td><td>720</td><td>43</td><td>58</td><td class='hidden'></td></tr>
    <tr><td>75</td><td>75</td><td>69</td><td class='left'>Demystify Feast</td><td>695</td><td>55</td><td>92</td><td class='hidden'></td></tr>
    <tr><td>76</td><td>81</td><td>74</td><td class='left'>Alice in Wonderland</td><td>693</td><td>72</td><td>79</td><td class='hidden'></td></tr>
    <tr><td>77</td><td>63</td><td>84</td><td class='left'>Night Falls</td><td>692</td><td>42</td><td>54</td><td class='hidden'></td></tr>
    <tr><td>78</td><td>82</td><td>78</td><td class='left'>Voyage 1969</td><td>676</td><td>53</td><td>54</td><td class='hidden'></td></tr>
    <tr><td>79</td><td>95</td><td>93</td><td class='left'>The Capital City of Flowers in the Sky</td><td>659</td><td>76</td><td>66</td><td class='hidden'></td></tr>
    <tr><td>80</td><td>76</td><td>70</td><td class='left'>The Road of the Misfortune God ~ Dark Road</td><td>653</td><td>50</td><td>54</td><td class='hidden'></td></tr>
    <tr><td>81</td><td>91</td><td>83</td><td class='left'>Kid's Festival ~ Innocent Treasures</td><td>647</td><td>62</td><td>63</td><td class='hidden'></td></tr>
    <tr><td>82</td><td>83</td><td>88</td><td class='left'>Night Sakura of Dead Spirits</td><td>631</td><td>62</td><td>84</td><td class='hidden'></td></tr>
    <tr><td>83</td><td>87</td><td>85</td><td class='left'>Hiroshige No.36 ~ Neo Super-Express</td><td>627</td><td>50</td><td>74</td><td class='hidden'></td></tr>
    <tr><td>84</td><td>78</td><td>76</td><td class='left'>A Maiden's Illusionary Funeral ~ Necro-Fantasy</td><td>626</td><td>68</td><td>59</td><td class='hidden'></td></tr>
    <tr><td>85</td><td>74</td><td>－</td><td class='left'>Illusionary White Traveler</td><td>623</td><td>50</td><td>82</td><td class='hidden'></td></tr>
    <tr><td>86</td><td>79</td><td>64</td><td class='left'>Plain Asia</td><td>618</td><td>48</td><td>41</td><td class='hidden'></td></tr>
    <tr><td>87</td><td>84</td><td>77</td><td class='left'>Bell of Avici ~ Infinite Nightmare</td><td>614</td><td>49</td><td>59</td><td class='hidden'></td></tr>
    <tr><td>88</td><td>90</td><td>80</td><td class='left'>Vanishing Dream ~ Lost Dream</td><td>581</td><td>52</td><td>50</td><td class='hidden'></td></tr>
    <tr><td>89</td><td>88</td><td>94</td><td class='left'>Illusionary Joururi</td><td>580</td><td>53</td><td>52</td><td class='hidden'></td></tr>
    <tr><td>90</td><td>92</td><td>82</td><td class='left'>Girls' Sealing Club</td><td>574</td><td>59</td><td>55</td><td class='hidden'></td></tr>
    <tr><td>91</td><td>89</td><td>79</td><td class='left'>Faraway 380,000-Kilometer Voyage</td><td>569</td><td>37</td><td>66</td><td class='hidden'></td></tr>
    <tr><td>92</td><td>96</td><td>90</td><td class='left'>A Soul as Red as a Ground Cherry</td><td>566</td><td>64</td><td>34</td><td class='hidden'></td></tr>
    <tr><td>93</td><td>86</td><td>81</td><td class='left'>Nostalgic Blood of the East ~ Old World</td><td>562</td><td>36</td><td>44</td><td class='hidden'></td></tr>
    <tr><td>94</td><td>85</td><td>75</td><td class='left'>The Doll Maker of Bucuresti</td><td>557</td><td>55</td><td>31</td><td class='hidden'></td></tr>
    <tr><td>95</td><td>104</td><td>112</td><td class='left'>Legend of Hourai</td><td>534</td><td>101</td><td>88</td><td class='hidden'></td></tr>
    <tr><td>96</td><td>94</td><td>73</td><td class='left'>Beware the Umbrella Left There Forever</td><td>530</td><td>36</td><td>45</td><td class='hidden'></td></tr>
    <tr><td>97</td><td>100</td><td>87</td><td class='left'>Ultimate Truth</td><td>522</td><td>44</td><td>53</td><td class='hidden'></td></tr>
    <tr><td>98</td><td>93</td><td>86</td><td class='left'>the Grimoire of Alice</td><td>517</td><td>37</td><td>40</td><td class='hidden'></td></tr>
    <tr><td>99</td><td>99</td><td>90</td><td class='left'>Lunate Elf</td><td>508</td><td>56</td><td>45</td><td class='hidden'></td></tr>
    <tr><td>100</td><td>98</td><td>92</td><td class='left'>Eastern Heaven of Scarlet Perception</td><td>501</td><td>37</td><td>43</td><td class='hidden'></td></tr>
    <tr><td>101</td><td>109</td><td>97</td><td class='left'>Higan Retour ~ Riverside View</td><td>491</td><td>35</td><td>29</td><td class='hidden'></td></tr>
    <tr><td>102</td><td>101</td><td>108</td><td class='left'>Interdimensional Voyage of a Ghostly Passenger Ship</td><td>473</td><td>29</td><td>48</td><td class='hidden'></td></tr>
    <tr><td>103</td><td>103</td><td>89</td><td class='left'>Reincarnation</td><td>472</td><td>38</td><td>45</td><td class='hidden'></td></tr>
    <tr><td>104</td><td>97</td><td>99</td><td class='left'>Extend Ash ~ Person of Hourai</td><td>470</td><td>31</td><td>51</td><td class='hidden'></td></tr>
    <tr><td>105</td><td>108</td><td>101</td><td class='left'>Paradise ~ Deep Mountain</td><td>461</td><td>41</td><td>45</td><td class='hidden'></td></tr>
    <tr><td>106</td><td>113</td><td>102</td><td class='left'>Retrospective Kyoto</td><td>454</td><td>22</td><td>47</td><td class='hidden'></td></tr>
    <tr><td>107</td><td>109</td><td>109</td><td class='left'>The Childlike Duo's Naturalis Historia</td><td>447</td><td>34</td><td>50</td><td class='hidden'></td></tr>
    <tr><td>108</td><td>116</td><td>119</td><td class='left'>UFO Romance in the Night Sky</td><td>443</td><td>50</td><td>59</td><td class='hidden'></td></tr>
    <tr><td>109</td><td>119</td><td>115</td><td class='left'>Voile, the Magic Library</td><td>434</td><td>33</td><td>21</td><td class='hidden'></td></tr>
    <tr><td>110</td><td>112</td><td>96</td><td class='left'>Bad Apple!!</td><td>431</td><td>24</td><td>46</td><td class='hidden'></td></tr>
    <tr><td>111</td><td>111</td><td>103</td><td class='left'>Corpse Voyage ~ Be of good cheer!</td><td>405</td><td>26</td><td>30</td><td class='hidden'></td></tr>
    <tr><td>112</td><td>102</td><td>114</td><td class='left'>Bhavaagra As Seen Through a Child's Mind</td><td>400</td><td>35</td><td>43</td><td class='hidden'></td></tr>
    <tr><td>113</td><td>106</td><td>104</td><td class='left'>Bamboo Forest of the Full Moon</td><td>399</td><td>37</td><td>46</td><td class='hidden'></td></tr>
    <tr><td>114</td><td>135</td><td>105</td><td class='left'>The Rabbit Has Landed</td><td>396</td><td>26</td><td>47</td><td class='hidden'></td></tr>
    <tr><td>115</td><td>132</td><td>129</td><td class='left'>A Dream that Is More Scarlet than Red</td><td>392</td><td>50</td><td>28</td><td class='hidden'></td></tr>
    <tr><td>116</td><td>123</td><td>121</td><td class='left'>Sakura, Sakura ~ Japanize Dream...</td><td>388</td><td>20</td><td>25</td><td class='hidden'></td></tr>
    <tr><td>116</td><td>105</td><td>100</td><td class='left'>Futatsuiwa from Sado</td><td>388</td><td>20</td><td>33</td><td class='hidden'></td></tr>
    <tr><td>118</td><td>115</td><td>122</td><td class='left'>Oni's Island in the Fairyland ~ Missing Power</td><td>386</td><td>26</td><td>45</td><td class='hidden'></td></tr>
    <tr><td>119</td><td>121</td><td>117</td><td class='left'>The Frozen Eternal Capital</td><td>380</td><td>24</td><td>46</td><td class='hidden'></td></tr>
    <tr><td>120</td><td>－</td><td>－</td><td class='left'>Nightmare Diary</td><td>378</td><td>27</td><td>76</td><td class='hidden'></td></tr>
    <tr><td>121</td><td>132</td><td>123</td><td class='left'>Voyage 1970</td><td>375</td><td>29</td><td>31</td><td class='hidden'></td></tr>
    <tr><td>122</td><td>126</td><td>112</td><td class='left'>Eastern Memory of Forgathering Dream</td><td>373</td><td>35</td><td>29</td><td class='hidden'></td></tr>
    <tr><td>123</td><td>116</td><td>118</td><td class='left'>Eternal Short-Lived Reign</td><td>372</td><td>19</td><td>34</td><td class='hidden'></td></tr>
    <tr><td>124</td><td>128</td><td>106</td><td class='left'>Gensokyo, Past and Present ~ Flower Land</td><td>361</td><td>33</td><td>30</td><td class='hidden'></td></tr>
    <tr><td>124</td><td>146</td><td>146</td><td class='left'>Eternal Shrine Maiden</td><td>361</td><td>47</td><td>49</td><td class='hidden'></td></tr>
    <tr><td>126</td><td>138</td><td>128</td><td class='left'>Memory of Forgathering Dream</td><td>358</td><td>28</td><td>26</td><td class='hidden'></td></tr>
    <tr><td>127</td><td>143</td><td>127</td><td class='left'>Heartfelt Fancy</td><td>356</td><td>22</td><td>39</td><td class='hidden'></td></tr>
    <tr><td>128</td><td>130</td><td>134</td><td class='left'>Oriental Dark Flight</td><td>355</td><td>26</td><td>32</td><td class='hidden'></td></tr>
    <tr><td>129</td><td>121</td><td>116</td><td class='left'>Vessel of Stars ~ Casket of Star</td><td>352</td><td>20</td><td>25</td><td class='hidden'></td></tr>
    <tr><td>130</td><td>136</td><td>130</td><td class='left'>Walking the Streets of a Former Hell</td><td>348</td><td>14</td><td>23</td><td class='hidden'></td></tr>
    <tr><td>131</td><td>114</td><td>150</td><td class='left'>Flawless Clothing of the Celestials</td><td>347</td><td>25</td><td>31</td><td class='hidden'></td></tr>
    <tr><td>132</td><td>125</td><td>107</td><td class='left'>The Reversed Wheel of Fortune</td><td>346</td><td>24</td><td>25</td><td class='hidden'></td></tr>
    <tr><td>133</td><td>120</td><td>110</td><td class='left'>A Flower-Studded Sake Dish on Mt. Ooe</td><td>340</td><td>23</td><td>30</td><td class='hidden'></td></tr>
    <tr><td>133</td><td>127</td><td>－</td><td class='left'>A Star of Hope Rises in the Blue Sky</td><td>340</td><td>12</td><td>48</td><td class='hidden'></td></tr>
    <tr><td>133</td><td>141</td><td>125</td><td class='left'>Now, Until the Moment You Die</td><td>340</td><td>23</td><td>39</td><td class='hidden'></td></tr>
    <tr><td>136</td><td>139</td><td>126</td><td class='left'>Strawberry Crisis!!</td><td>334</td><td>20</td><td>40</td><td class='hidden'></td></tr>
    <tr><td>137</td><td>142</td><td>142</td><td class='left'>The Witches' Ball</td><td>331</td><td>20</td><td>31</td><td class='hidden'></td></tr>
    <tr><td>137</td><td>124</td><td>98</td><td class='left'>September Pumpkin</td><td>331</td><td>12</td><td>34</td><td class='hidden'></td></tr>
    <tr><td>137</td><td>137</td><td>131</td><td class='left'>Lovely Mound of Cherry Blossoms ~ Flower of Japan / Japanese Flower</td><td>331</td><td>37</td><td>36</td><td class='hidden'></td></tr>
    <tr><td>140</td><td>106</td><td>131</td><td class='left'>Unknown X ~ Unfound Adventure / Occultly Madness</td><td>330</td><td>12</td><td>35</td><td class='hidden'></td></tr>
    <tr><td>141</td><td>131</td><td>120</td><td class='left'>Omiwa Legend</td><td>328</td><td>32</td><td>44</td><td class='hidden'></td></tr>
    <tr><td>142</td><td>145</td><td>139</td><td class='left'>Spring Lane ~ Colorful Path</td><td>325</td><td>27</td><td>24</td><td class='hidden'></td></tr>
    <tr><td>143</td><td>134</td><td>111</td><td class='left'>The Tiger-Patterned Vaisravana</td><td>324</td><td>26</td><td>32</td><td class='hidden'></td></tr>
    <tr><td>144</td><td>118</td><td>161</td><td class='left'>The Eternal Steam Engine</td><td>321</td><td>18</td><td>33</td><td class='hidden'></td></tr>
    <tr><td>145</td><td>158</td><td>140</td><td class='left'>Eastern Youkai Beauty</td><td>319</td><td>17</td><td>28</td><td class='hidden'></td></tr>
    <tr><td>146</td><td>140</td><td>133</td><td class='left'>Retribution for the Eternal Night ~ Imperishable Night</td><td>315</td><td>24</td><td>31</td><td class='hidden'></td></tr>
    <tr><td>146</td><td>150</td><td>142</td><td class='left'>Fires of Hokkai</td><td>315</td><td>15</td><td>36</td><td class='hidden'></td></tr>
    <tr><td>148</td><td>164</td><td>162</td><td class='left'>Satellite Café Terrace</td><td>309</td><td>29</td><td>45</td><td class='hidden'></td></tr>
    <tr><td>149</td><td>160</td><td>147</td><td class='left'>The Wheelchair's Future in Space</td><td>301</td><td>23</td><td>43</td><td class='hidden'></td></tr>
    <tr><td>150</td><td>149</td><td>136</td><td class='left'>Faint Dream ~ Inanimate Dream</td><td>297</td><td>28</td><td>31</td><td class='hidden'></td></tr>
    <tr><td>151</td><td>148</td><td>124</td><td class='left'>A Tiny, Tiny, Clever Commander</td><td>294</td><td>17</td><td>20</td><td class='hidden'></td></tr>
    <tr><td>152</td><td>154</td><td>147</td><td class='left'>The Young Descendant of Tepes</td><td>282</td><td>14</td><td>28</td><td class='hidden'></td></tr>
    <tr><td>153</td><td>151</td><td>156</td><td class='left'>Heaven of Scarlet Perception</td><td>278</td><td>27</td><td>22</td><td class='hidden'></td></tr>
    <tr><td>154</td><td>147</td><td>141</td><td class='left'>Captain Murasa</td><td>274</td><td>19</td><td>23</td><td class='hidden'></td></tr>
    <tr><td>155</td><td>161</td><td>144</td><td class='left'>Our Hisoutensoku</td><td>264</td><td>8</td><td>27</td><td class='hidden'></td></tr>
    <tr><td>156</td><td>162</td><td>159</td><td class='left'>A Midnight Fairy Dance</td><td>257</td><td>15</td><td>26</td><td class='hidden'></td></tr>
    <tr><td>157</td><td>157</td><td>153</td><td class='left'>Great Fairy Wars ~ Fairy Wars</td><td>256</td><td>15</td><td>32</td><td class='hidden'></td></tr>
    <tr><td>158</td><td>163</td><td>173</td><td class='left'>Alice Maestra</td><td>253</td><td>21</td><td>31</td><td class='hidden'></td></tr>
    <tr><td>159</td><td>223</td><td>213</td><td class='left'>Unknown Flower, Mesmerizing Journey</td><td>252</td><td>13</td><td>39</td><td class='hidden'></td></tr>
    <tr><td>160</td><td>129</td><td>－</td><td class='left'>Yorimashi Between Dreams and Reality ~ Necro-Fantasia</td><td>246</td><td>17</td><td>28</td><td class='hidden'></td></tr>
    <tr><td>161</td><td>169</td><td>164</td><td class='left'>Song of the Night Sparrow ~ Night Bird</td><td>241</td><td>14</td><td>23</td><td class='hidden'></td></tr>
    <tr><td>161</td><td>170</td><td>151</td><td class='left'>Rural Makai City Esoteria</td><td>241</td><td>11</td><td>39</td><td class='hidden'></td></tr>
    <tr><td>163</td><td>175</td><td>182</td><td class='left'>Dream Palace of the Great Mausoleum</td><td>239</td><td>25</td><td>34</td><td class='hidden'></td></tr>
    <tr><td>164</td><td>173</td><td>157</td><td class='left'>Stirring an Autumn Moon ~ Mooned Insect</td><td>238</td><td>35</td><td>21</td><td class='hidden'></td></tr>
    <tr><td>165</td><td>174</td><td>154</td><td class='left'>Youkai Domination ~ Who done it?</td><td>237</td><td>14</td><td>19</td><td class='hidden'></td></tr>
    <tr><td>166</td><td>165</td><td>145</td><td class='left'>Diao ye zong (Withered Leaf)</td><td>235</td><td>20</td><td>21</td><td class='hidden'></td></tr>
    <tr><td>167</td><td>155</td><td>135</td><td class='left'>Dullahan Under the Willows</td><td>232</td><td>14</td><td>21</td><td class='hidden'></td></tr>
    <tr><td>168</td><td>176</td><td>158</td><td class='left'>Crimson in the Black Sea ~ Legendary Fish</td><td>228</td><td>18</td><td>26</td><td class='hidden'></td></tr>
    <tr><td>169</td><td>144</td><td>171</td><td class='left'>The Ground's Color is Yellow</td><td>226</td><td>7</td><td>17</td><td class='hidden'></td></tr>
    <tr><td>169</td><td>177</td><td>177</td><td class='left'>Magical Girl's Crusade</td><td>226</td><td>17</td><td>32</td><td class='hidden'></td></tr>
    <tr><td>171</td><td>156</td><td>137</td><td class='left'>Crystallized Silver</td><td>225</td><td>19</td><td>21</td><td class='hidden'></td></tr>
    <tr><td>172</td><td>152</td><td>138</td><td class='left'>Battlefield of the Flower Threshold</td><td>224</td><td>16</td><td>29</td><td class='hidden'></td></tr>
    <tr><td>173</td><td>168</td><td>167</td><td class='left'>Romantic Children</td><td>223</td><td>14</td><td>36</td><td class='hidden'></td></tr>
    <tr><td>174</td><td>167</td><td>163</td><td class='left'>The Shining Needle Castle Sinking in the Air</td><td>221</td><td>20</td><td>28</td><td class='hidden'></td></tr>
    <tr><td>175</td><td>182</td><td>169</td><td class='left'>The Bridge People No Longer Cross</td><td>217</td><td>15</td><td>22</td><td class='hidden'></td></tr>
    <tr><td>176</td><td>159</td><td>159</td><td class='left'>A Never-Before-Seen World of Nightmares</td><td>214</td><td>13</td><td>25</td><td class='hidden'></td></tr>
    <tr><td>177</td><td>180</td><td>168</td><td class='left'>Mystic Dream ~ Snow or Cherry Petal</td><td>210</td><td>14</td><td>10</td><td class='hidden'></td></tr>
    <tr><td>178</td><td>177</td><td>175</td><td class='left'>Legendary Illusion ~ Infinite Being</td><td>204</td><td>12</td><td>15</td><td class='hidden'></td></tr>
    <tr><td>179</td><td>165</td><td>149</td><td class='left'>Bibliophile with a Deciphering Eye</td><td>203</td><td>12</td><td>31</td><td class='hidden'></td></tr>
    <tr><td>180</td><td>194</td><td>176</td><td class='left'>Hellfire Mantle</td><td>200</td><td>7</td><td>22</td><td class='hidden'></td></tr>
    <tr><td>181</td><td>172</td><td>155</td><td class='left'>Youkai Domination</td><td>194</td><td>17</td><td>18</td><td class='hidden'></td></tr>
    <tr><td>182</td><td>188</td><td>166</td><td class='left'>Mist Lake</td><td>188</td><td>10</td><td>19</td><td class='hidden'></td></tr>
    <tr><td>183</td><td>153</td><td>－</td><td class='left'>A Pair of Divine Beasts</td><td>184</td><td>8</td><td>19</td><td class='hidden'></td></tr>
    <tr><td>184</td><td>185</td><td>178</td><td class='left'>Let's Live in a Lovely Cemetery</td><td>182</td><td>11</td><td>16</td><td class='hidden'></td></tr>
    <tr><td>185</td><td>171</td><td>152</td><td class='left'>Rigid Paradise</td><td>181</td><td>13</td><td>16</td><td class='hidden'></td></tr>
    <tr><td>185</td><td>186</td><td>186</td><td class='left'>Enigmatic Doll</td><td>181</td><td>20</td><td>29</td><td class='hidden'></td></tr>
    <tr><td>187</td><td>180</td><td>179</td><td class='left'>A God That Misses People ~ Romantic Fall</td><td>180</td><td>15</td><td>23</td><td class='hidden'></td></tr>
    <tr><td>188</td><td>183</td><td>169</td><td class='left'>Cemetery of Onbashira ~ Grave of Being</td><td>178</td><td>8</td><td>27</td><td class='hidden'></td></tr>
    <tr><td>189</td><td>189</td><td>183</td><td class='left'>Eastern Mystical Love Consultation</td><td>175</td><td>8</td><td>19</td><td class='hidden'></td></tr>
    <tr><td>189</td><td>－</td><td>－</td><td class='left'>Lunatic Dreamer</td><td>175</td><td>7</td><td>30</td><td class='hidden'></td></tr>
    <tr><td>191</td><td>193</td><td>188</td><td class='left'>The Dark Blowhole</td><td>172</td><td>13</td><td>16</td><td class='hidden'></td></tr>
    <tr><td>192</td><td>201</td><td>172</td><td class='left'>Mermaid from the Uncharted Land</td><td>171</td><td>9</td><td>14</td><td class='hidden'></td></tr>
    <tr><td>193</td><td>209</td><td>192</td><td class='left'>Unforgettable, the Nostalgic Greenery</td><td>166</td><td>6</td><td>26</td><td class='hidden'></td></tr>
    <tr><td>194</td><td>199</td><td>185</td><td class='left'>G Free</td><td>165</td><td>12</td><td>17</td><td class='hidden'></td></tr>
    <tr><td>195</td><td>207</td><td>205</td><td class='left'>The Flowers Remain in Fantasy</td><td>163</td><td>12</td><td>23</td><td class='hidden'></td></tr>
    <tr><td>195</td><td>184</td><td>191</td><td class='left'>Magician's Melancholy</td><td>163</td><td>12</td><td>23</td><td class='hidden'></td></tr>
    <tr><td>197</td><td>206</td><td>194</td><td class='left'>Welcome to the Moon Tour</td><td>161</td><td>11</td><td>24</td><td class='hidden'></td></tr>
    <tr><td>198</td><td>187</td><td>189</td><td class='left'>Izanagi Object</td><td>160</td><td>16</td><td>17</td><td class='hidden'></td></tr>
    <tr><td>199</td><td>189</td><td>174</td><td class='left'>Did You See That Shadow?</td><td>159</td><td>13</td><td>16</td><td class='hidden'></td></tr>
    <tr><td>199</td><td>195</td><td>184</td><td class='left'>Cute Devil ~ Innocence</td><td>159</td><td>9</td><td>16</td><td class='hidden'></td></tr>
    <tr><td>201</td><td>179</td><td>165</td><td class='left'>Lonesome Werewolf</td><td>157</td><td>12</td><td>13</td><td class='hidden'></td></tr>
    <tr><td>202</td><td>205</td><td>190</td><td class='left'>Sunny Milk's Scarlet Mist Incident</td><td>153</td><td>7</td><td>17</td><td class='hidden'></td></tr>
    <tr><td>203</td><td>238</td><td>228</td><td class='left'>The Purest Sky and Sea</td><td>151</td><td>13</td><td>21</td><td class='hidden'></td></tr>
    <tr><td>204</td><td>192</td><td>180</td><td class='left'>White Flag of Usa Shrine</td><td>147</td><td>12</td><td>11</td><td class='hidden'></td></tr>
    <tr><td>205</td><td>199</td><td>195</td><td class='left'>Illusionary Night ~ Ghostly Eyes</td><td>146</td><td>12</td><td>18</td><td class='hidden'></td></tr>
    <tr><td>206</td><td>209</td><td>198</td><td class='left'>Strange Bird of the Moon, Illusion of the Mysterious Cat</td><td>141</td><td>6</td><td>9</td><td class='hidden'></td></tr>
    <tr><td>207</td><td>212</td><td>197</td><td class='left'>Merry the Magician</td><td>140</td><td>7</td><td>16</td><td class='hidden'></td></tr>
    <tr><td>208</td><td>238</td><td>208</td><td class='left'>Old Adam Bar</td><td>138</td><td>7</td><td>5</td><td class='hidden'></td></tr>
    <tr><td>209</td><td>211</td><td>204</td><td class='left'>Youkai Back Shrine Road</td><td>136</td><td>4</td><td>20</td><td class='hidden'></td></tr>
    <tr><td>210</td><td>198</td><td>186</td><td class='left'>The Traditional Old Man and the Stylish Girl</td><td>135</td><td>7</td><td>14</td><td class='hidden'></td></tr>
    <tr><td>211</td><td>218</td><td>205</td><td class='left'>Poison Body ~ Forsaken Doll</td><td>132</td><td>11</td><td>16</td><td class='hidden'></td></tr>
    <tr><td>211</td><td>216</td><td>211</td><td class='left'>The Mystery in Your Town</td><td>132</td><td>5</td><td>13</td><td class='hidden'></td></tr>
    <tr><td>213</td><td>203</td><td>216</td><td class='left'>Shinkirou Orchestra</td><td>130</td><td>8</td><td>10</td><td class='hidden'></td></tr>
    <tr><td>214</td><td>213</td><td>196</td><td class='left'>Staking Your Life on a Prank</td><td>129</td><td>4</td><td>12</td><td class='hidden'></td></tr>
    <tr><td>214</td><td>224</td><td>213</td><td class='left'>Romantic Escape Flight</td><td>129</td><td>3</td><td>20</td><td class='hidden'></td></tr>
    <tr><td>216</td><td>201</td><td>－</td><td class='left'>Swim in a Cherry Blossom-Colored Sea</td><td>125</td><td>6</td><td>24</td><td class='hidden'></td></tr>
    <tr><td>216</td><td>197</td><td>－</td><td class='left'>The Magic Straw-Hat Ksitigarbha</td><td>125</td><td>5</td><td>15</td><td class='hidden'></td></tr>
    <tr><td>216</td><td>222</td><td>203</td><td class='left'>Complete Darkness</td><td>125</td><td>12</td><td>13</td><td class='hidden'></td></tr>
    <tr><td>216</td><td>231</td><td>229</td><td class='left'>Gathering the Mysterious from All Around Japan</td><td>125</td><td>7</td><td>23</td><td class='hidden'></td></tr>
    <tr><td>220</td><td>189</td><td>181</td><td class='left'>The Mysterious Shrine Maiden Flying Through Space</td><td>124</td><td>10</td><td>17</td><td class='hidden'></td></tr>
    <tr><td>221</td><td>235</td><td>218</td><td class='left'>Tabula rasa ~ The Empty Girl</td><td>123</td><td>10</td><td>22</td><td class='hidden'></td></tr>
    <tr><td>222</td><td>237</td><td>224</td><td class='left'>Year-Round Absorbed Curiosity</td><td>121</td><td>3</td><td>18</td><td class='hidden'></td></tr>
    <tr><td>223</td><td>220</td><td>210</td><td class='left'>Loose Rain</td><td>120</td><td>9</td><td>13</td><td class='hidden'></td></tr>
    <tr><td>224</td><td>238</td><td>225</td><td class='left'>Eternal Night Vignette ~ Eastern Night.</td><td>119</td><td>8</td><td>9</td><td class='hidden'></td></tr>
    <tr><td>225</td><td>219</td><td>199</td><td class='left'>The Sealed-Away Youkai ~ Lost Place</td><td>117</td><td>12</td><td>13</td><td class='hidden'></td></tr>
    <tr><td>226</td><td>204</td><td>－</td><td class='left'>A Midsummer Fairy's Dream</td><td>116</td><td>6</td><td>18</td><td class='hidden'></td></tr>
    <tr><td>226</td><td>231</td><td>232</td><td class='left'>Mystical Maple ~ Eternal Dream</td><td>116</td><td>10</td><td>9</td><td class='hidden'></td></tr>
    <tr><td>226</td><td>221</td><td>201</td><td class='left'>Celestial Wizardry ~ Magical Astronomy</td><td>116</td><td>4</td><td>7</td><td class='hidden'></td></tr>
    <tr><td>229</td><td>228</td><td>220</td><td class='left'>Blue Sea of 53 Minutes</td><td>115</td><td>13</td><td>12</td><td class='hidden'></td></tr>
    <tr><td>229</td><td>215</td><td>221</td><td class='left'>Wind of Agartha</td><td>115</td><td>6</td><td>18</td><td class='hidden'></td></tr>
    <tr><td>231</td><td>234</td><td>222</td><td class='left'>An Eternity that Is More Transient than Scarlet</td><td>114</td><td>9</td><td>7</td><td class='hidden'></td></tr>
    <tr><td>232</td><td>235</td><td>215</td><td class='left'>Plastic Mind</td><td>111</td><td>4</td><td>16</td><td class='hidden'></td></tr>
    <tr><td>232</td><td>224</td><td>193</td><td class='left'>Schrödinger's Bakeneko</td><td>111</td><td>4</td><td>7</td><td class='hidden'></td></tr>
    <tr><td>234</td><td>214</td><td>200</td><td class='left'>Sleeping Terror</td><td>110</td><td>10</td><td>8</td><td class='hidden'></td></tr>
    <tr><td>235</td><td>224</td><td>212</td><td class='left'>Witch of Love Potion</td><td>106</td><td>7</td><td>24</td><td class='hidden'></td></tr>
    <tr><td>236</td><td>227</td><td>209</td><td class='left'>Curious old Shanghai tile</td><td>104</td><td>13</td><td>14</td><td class='hidden'></td></tr>
    <tr><td>237</td><td>196</td><td>－</td><td class='left'>Does the Forbidden Door Lead to This World, or the World Beyond?</td><td>102</td><td>6</td><td>12</td><td class='hidden'></td></tr>
    <tr><td>237</td><td>259</td><td>247</td><td class='left'>The Far Side of the Moon</td><td>102</td><td>7</td><td>12</td><td class='hidden'></td></tr>
    <tr><td>239</td><td>248</td><td>242</td><td class='left'>The Strange Everyday Life of the Flying Shrine Maiden</td><td>101</td><td>12</td><td>16</td><td class='hidden'></td></tr>
    <tr><td>239</td><td>243</td><td>218</td><td class='left'>Hangover of Bedfellows Dreaming Differently</td><td>101</td><td>6</td><td>21</td><td class='hidden'></td></tr>
    <tr><td>241</td><td>242</td><td>236</td><td class='left'>Japanese Saga</td><td>99</td><td>4</td><td>6</td><td class='hidden'></td></tr>
    <tr><td>242</td><td>233</td><td>217</td><td class='left'>Cheat Against the Impossible Danmaku</td><td>98</td><td>9</td><td>17</td><td class='hidden'></td></tr>
    <tr><td>243</td><td>253</td><td>234</td><td class='left'>Youkai Modern Colony</td><td>97</td><td>7</td><td>12</td><td class='hidden'></td></tr>
    <tr><td>243</td><td>208</td><td>－</td><td class='left'>No More Going Through Doors</td><td>97</td><td>3</td><td>14</td><td class='hidden'></td></tr>
    <tr><td>245</td><td>254</td><td>236</td><td class='left'>Border Between Dreams and Reality</td><td>95</td><td>10</td><td>17</td><td class='hidden'></td></tr>
    <tr><td>246</td><td>250</td><td>235</td><td class='left'>Starry Sky of Small Desires</td><td>90</td><td>6</td><td>15</td><td class='hidden'></td></tr>
    <tr><td>246</td><td>251</td><td>246</td><td class='left'>Doll of Misery</td><td>90</td><td>4</td><td>12</td><td class='hidden'></td></tr>
    <tr><td>248</td><td>246</td><td>225</td><td class='left'>Satellite TORIFUNE</td><td>88</td><td>6</td><td>14</td><td class='hidden'></td></tr>
    <tr><td>248</td><td>270</td><td>250</td><td class='left'>Flower Viewing Mound ~ Higan Retour</td><td>88</td><td>8</td><td>14</td><td class='hidden'></td></tr>
    <tr><td>250</td><td>247</td><td>253</td><td class='left'>Sealed Gods</td><td>87</td><td>6</td><td>14</td><td class='hidden'></td></tr>
    <tr><td>251</td><td>243</td><td>230</td><td class='left'>A Drunkard's Lemuria</td><td>86</td><td>4</td><td>12</td><td class='hidden'></td></tr>
    <tr><td>252</td><td>271</td><td>241</td><td class='left'>Sky Ruin</td><td>84</td><td>4</td><td>13</td><td class='hidden'></td></tr>
    <tr><td>253</td><td>254</td><td>244</td><td class='left'>Theme of Eastern Story</td><td>83</td><td>5</td><td>17</td><td class='hidden'></td></tr>
    <tr><td>254</td><td>248</td><td>240</td><td class='left'>Desire Dream</td><td>82</td><td>6</td><td>10</td><td class='hidden'></td></tr>
    <tr><td>254</td><td>230</td><td>202</td><td class='left'>Futatsuiwa from Gensokyo</td><td>82</td><td>2</td><td>6</td><td class='hidden'></td></tr>
    <tr><td>256</td><td>257</td><td>250</td><td class='left'>Led On by a Cow to Visit Zenkou Temple</td><td>81</td><td>9</td><td>7</td><td class='hidden'></td></tr>
    <tr><td>257</td><td>245</td><td>233</td><td class='left'>Green Sanatorium</td><td>80</td><td>1</td><td>4</td><td class='hidden'></td></tr>
    <tr><td>258</td><td>271</td><td>254</td><td class='left'>Strange, Strange Instruments</td><td>78</td><td>3</td><td>13</td><td class='hidden'></td></tr>
    <tr><td>259</td><td>281</td><td>274</td><td class='left'>Awakening of the Earth Spirits</td><td>77</td><td>1</td><td>7</td><td class='hidden'></td></tr>
    <tr><td>259</td><td>278</td><td>205</td><td class='left'>Bamboo Forest in Flames</td><td>77</td><td>3</td><td>9</td><td class='hidden'></td></tr>
    <tr><td>261</td><td>265</td><td>222</td><td class='left'>Skygazer</td><td>76</td><td>5</td><td>9</td><td class='hidden'></td></tr>
    <tr><td>261</td><td>256</td><td>230</td><td class='left'>The Refrain of the Lovely Great War</td><td>76</td><td>1</td><td>9</td><td class='hidden'></td></tr>
    <tr><td>261</td><td>216</td><td>－</td><td class='left'>Sleep Sheep Parade</td><td>76</td><td>1</td><td>17</td><td class='hidden'></td></tr>
    <tr><td>261</td><td>275</td><td>258</td><td class='left'>Swordsman of a Distant Star / Angel of a Distant Star</td><td>76</td><td>5</td><td>9</td><td class='hidden'></td></tr>
    <tr><td>261</td><td>241</td><td>227</td><td class='left'>Dying in the Dendera Fields in the Night</td><td>76</td><td>2</td><td>17</td><td class='hidden'></td></tr>
    <tr><td>266</td><td>261</td><td>239</td><td class='left'>Ghost Lead</td><td>73</td><td>1</td><td>5</td><td class='hidden'></td></tr>
    <tr><td>267</td><td>278</td><td>238</td><td class='left'>Treacherous Maiden ~ Judas Kiss</td><td>72</td><td>4</td><td>10</td><td class='hidden'></td></tr>
    <tr><td>268</td><td>264</td><td>269</td><td class='left'>Argue for and Against</td><td>71</td><td>3</td><td>7</td><td class='hidden'></td></tr>
    <tr><td>269</td><td>252</td><td>269</td><td class='left'>Fragrant Plants</td><td>69</td><td>3</td><td>2</td><td class='hidden'></td></tr>
    <tr><td>269</td><td>296</td><td>275</td><td class='left'>Girl's Divinity ~ Pandora's Box</td><td>69</td><td>4</td><td>11</td><td class='hidden'></td></tr>
    <tr><td>271</td><td>261</td><td>244</td><td class='left'>Dr. Latency's Sleepless Eyes</td><td>68</td><td>3</td><td>3</td><td class='hidden'></td></tr>
    <tr><td>272</td><td>266</td><td>248</td><td class='left'>Youkai Space Travel</td><td>65</td><td>4</td><td>8</td><td class='hidden'></td></tr>
    <tr><td>272</td><td>277</td><td>262</td><td class='left'>Illusionary Sputnik Night</td><td>65</td><td>3</td><td>11</td><td class='hidden'></td></tr>
    <tr><td>274</td><td>294</td><td>260</td><td class='left'>Tengu is Watching ~ Black Eyes</td><td>61</td><td>3</td><td>4</td><td class='hidden'></td></tr>
    <tr><td>274</td><td>229</td><td>－</td><td class='left'>Into Backdoor</td><td>61</td><td>4</td><td>10</td><td class='hidden'></td></tr>
    <tr><td>274</td><td>274</td><td>269</td><td class='left'>Star Voyage 2,008</td><td>61</td><td>6</td><td>9</td><td class='hidden'></td></tr>
    <tr><td>274</td><td>275</td><td>254</td><td class='left'>Watatsuki's Spell Card ~ Lunatic Blue</td><td>61</td><td>6</td><td>5</td><td class='hidden'></td></tr>
    <tr><td>278</td><td>304</td><td>248</td><td class='left'>The Lake Reflects the Cleansed Moonlight</td><td>60</td><td>1</td><td>13</td><td class='hidden'></td></tr>
    <tr><td>278</td><td>316</td><td>285</td><td class='left'>Silk Road Alice</td><td>60</td><td>3</td><td>12</td><td class='hidden'></td></tr>
    <tr><td>278</td><td>289</td><td>254</td><td class='left'>Illusory Science ~ Doll's Phantom</td><td>60</td><td>2</td><td>7</td><td class='hidden'></td></tr>
    <tr><td>281</td><td>268</td><td>254</td><td class='left'>Dancing Water Spray</td><td>59</td><td>3</td><td>5</td><td class='hidden'></td></tr>
    <tr><td>281</td><td>289</td><td>288</td><td class='left'>Mechanical Circus ~ Reverie</td><td>59</td><td>7</td><td>10</td><td class='hidden'></td></tr>
    <tr><td>283</td><td>292</td><td>282</td><td class='left'>Tengu's Notebook ~ Mysterious Note</td><td>57</td><td>1</td><td>3</td><td class='hidden'></td></tr>
    <tr><td>283</td><td>333</td><td>292</td><td class='left'>Can't Sleep Because It's Nighttime</td><td>57</td><td>0</td><td>14</td><td class='hidden'></td></tr>
    <tr><td>285</td><td>283</td><td>267</td><td class='left'>Thunderclouds of Magical Power</td><td>56</td><td>2</td><td>7</td><td class='hidden'></td></tr>
    <tr><td>285</td><td>319</td><td>306</td><td class='left'>Peaceful Romancer</td><td>56</td><td>4</td><td>10</td><td class='hidden'></td></tr>
    <tr><td>287</td><td>310</td><td>285</td><td class='left'>Magical Storm</td><td>55</td><td>0</td><td>9</td><td class='hidden'></td></tr>
    <tr><td>287</td><td>266</td><td>－</td><td class='left'>White Traveler</td><td>55</td><td>1</td><td>3</td><td class='hidden'></td></tr>
    <tr><td>287</td><td>301</td><td>267</td><td class='left'>the Last Judgement</td><td>55</td><td>4</td><td>5</td><td class='hidden'></td></tr>
    <tr><td>290</td><td>301</td><td>280</td><td class='left'>Dim. Dream</td><td>53</td><td>3</td><td>8</td><td class='hidden'></td></tr>
    <tr><td>290</td><td>273</td><td>258</td><td class='left'>The Inevitably Forbidden Game</td><td>53</td><td>1</td><td>2</td><td class='hidden'></td></tr>
    <tr><td>290</td><td>321</td><td>310</td><td class='left'>Flower of Past Days ~ Fairy of Flower</td><td>53</td><td>5</td><td>11</td><td class='hidden'></td></tr>
    <tr><td>290</td><td>283</td><td>298</td><td class='left'>Boys and Girls of a Science Era</td><td>53</td><td>1</td><td>10</td><td class='hidden'></td></tr>
    <tr><td>290</td><td>283</td><td>250</td><td class='left'>Trojan Asteroid Jungle</td><td>53</td><td>3</td><td>5</td><td class='hidden'></td></tr>
    <tr><td>290</td><td>325</td><td>321</td><td class='left'>AN ORDEAL FROM GOD</td><td>53</td><td>1</td><td>8</td><td class='hidden'></td></tr>
    <tr><td>296</td><td>261</td><td>－</td><td class='left'>The Sky Where Cherry Blossoms Flutter Down</td><td>52</td><td>1</td><td>9</td><td class='hidden'></td></tr>
    <tr><td>296</td><td>310</td><td>266</td><td class='left'>The Tank Girl's Dream</td><td>52</td><td>5</td><td>10</td><td class='hidden'></td></tr>
    <tr><td>298</td><td>308</td><td>269</td><td class='left'>Returning Home From the Sky ~ Sky Dream</td><td>51</td><td>1</td><td>10</td><td class='hidden'></td></tr>
    <tr><td>298</td><td>347</td><td>306</td><td class='left'>Witching Dream</td><td>51</td><td>5</td><td>8</td><td class='hidden'></td></tr>
    <tr><td>298</td><td>281</td><td>277</td><td class='left'>Lotus Love</td><td>51</td><td>5</td><td>6</td><td class='hidden'></td></tr>
    <tr><td>298</td><td>310</td><td>310</td><td class='left'>A Land Resplendent With Nature's Beauty</td><td>51</td><td>6</td><td>12</td><td class='hidden'></td></tr>
    <tr><td>298</td><td>325</td><td>332</td><td class='left'>Hourai Illusion ~ far East</td><td>51</td><td>6</td><td>8</td><td class='hidden'></td></tr>
    <tr><td>298</td><td>280</td><td>－</td><td class='left'>Blooms of Spirit Possession</td><td>51</td><td>2</td><td>11</td><td class='hidden'></td></tr>
    <tr><td>304</td><td>339</td><td>315</td><td class='left'>Civilization of Magic / We Shall Die Together</td><td>50</td><td>5</td><td>5</td><td class='hidden'></td></tr>
    <tr><td>304</td><td>333</td><td>304</td><td class='left'>Legend of Aokigahara</td><td>50</td><td>4</td><td>2</td><td class='hidden'></td></tr>
    <tr><td>306</td><td>257</td><td>278</td><td class='left'>Outside World Folklore</td><td>49</td><td>1</td><td>5</td><td class='hidden'></td></tr>
    <tr><td>306</td><td>331</td><td>290</td><td class='left'>Maple Wise</td><td>49</td><td>6</td><td>6</td><td class='hidden'></td></tr>
    <tr><td>308</td><td>328</td><td>325</td><td class='left'>Magic Mirror</td><td>48</td><td>3</td><td>7</td><td class='hidden'></td></tr>
    <tr><td>309</td><td>298</td><td>261</td><td class='left'>Youkai Girl at the Gate</td><td>47</td><td>3</td><td>5</td><td class='hidden'></td></tr>
    <tr><td>309</td><td>283</td><td>264</td><td class='left'>The Space Shrine Maiden Appears</td><td>47</td><td>0</td><td>7</td><td class='hidden'></td></tr>
    <tr><td>311</td><td>268</td><td>－</td><td class='left'>Deep-Mountain Encounter</td><td>46</td><td>0</td><td>2</td><td class='hidden'></td></tr>
    <tr><td>312</td><td>316</td><td>310</td><td class='left'>Dream Express</td><td>45</td><td>6</td><td>8</td><td class='hidden'></td></tr>
    <tr><td>313</td><td>305</td><td>325</td><td class='left'>The Sealed Cloud Route</td><td>44</td><td>6</td><td>6</td><td class='hidden'></td></tr>
    <tr><td>313</td><td>331</td><td>306</td><td class='left'>Welcome to Youkai Temple</td><td>44</td><td>4</td><td>9</td><td class='hidden'></td></tr>
    <tr><td>313</td><td>319</td><td>273</td><td class='left'>Sunny Rutile Flection</td><td>44</td><td>2</td><td>9</td><td class='hidden'></td></tr>
    <tr><td>313</td><td>321</td><td>319</td><td class='left'>Dream of Arcadia</td><td>44</td><td>2</td><td>6</td><td class='hidden'></td></tr>
    <tr><td>317</td><td>314</td><td>290</td><td class='left'>Wind Circulation ~ Wind Tour</td><td>43</td><td>0</td><td>8</td><td class='hidden'></td></tr>
    <tr><td>318</td><td>316</td><td>298</td><td class='left'>Spirit of Avarice</td><td>42</td><td>2</td><td>7</td><td class='hidden'></td></tr>
    <tr><td>318</td><td>259</td><td>243</td><td class='left'>Occult à la Carte</td><td>42</td><td>1</td><td>4</td><td class='hidden'></td></tr>
    <tr><td>318</td><td>333</td><td>302</td><td class='left'>Eastern Strange Discourse</td><td>42</td><td>3</td><td>8</td><td class='hidden'></td></tr>
    <tr><td>318</td><td>333</td><td>332</td><td class='left'>Sailor of Time</td><td>42</td><td>3</td><td>6</td><td class='hidden'></td></tr>
    <tr><td>318</td><td>352</td><td>289</td><td class='left'>The Darkness Brought In by Swallowstone Naturalis Historia</td><td>42</td><td>2</td><td>6</td><td class='hidden'></td></tr>
    <tr><td>323</td><td>288</td><td>300</td><td class='left'>Evening Primrose</td><td>41</td><td>0</td><td>2</td><td class='hidden'></td></tr>
    <tr><td>323</td><td>283</td><td>297</td><td class='left'>Shrine of the Wind</td><td>41</td><td>3</td><td>12</td><td class='hidden'></td></tr>
    <tr><td>323</td><td>340</td><td>332</td><td class='left'>Fly above Hatoyama at night</td><td>41</td><td>4</td><td>7</td><td class='hidden'></td></tr>
    <tr><td>326</td><td>292</td><td>264</td><td class='left'>A Dream Transcending Space-time</td><td>40</td><td>2</td><td>4</td><td class='hidden'></td></tr>
    <tr><td>326</td><td>297</td><td>275</td><td class='left'>Illusion of a Maid ~ Icemilk Magic</td><td>40</td><td>1</td><td>2</td><td class='hidden'></td></tr>
    <tr><td>328</td><td>347</td><td>302</td><td class='left'>Darkening Dusk</td><td>39</td><td>1</td><td>3</td><td class='hidden'></td></tr>
    <tr><td>328</td><td>377</td><td>－</td><td class='left'>Shining Heavenly Armillary</td><td>39</td><td>3</td><td>4</td><td class='hidden'></td></tr>
    <tr><td>328</td><td>352</td><td>306</td><td class='left'>Scarlet Symphony ~ Scarlet Phoneme</td><td>39</td><td>2</td><td>8</td><td class='hidden'></td></tr>
    <tr><td>331</td><td>328</td><td>319</td><td class='left'>The Gods Give Us Blessed Rain ~ Sylphid Dream</td><td>38</td><td>1</td><td>8</td><td class='hidden'></td></tr>
    <tr><td>331</td><td>－</td><td>－</td><td class='left'>Nightmare Journal</td><td>38</td><td>1</td><td>7</td><td class='hidden'></td></tr>
    <tr><td>333</td><td>340</td><td>342</td><td class='left'>Magic Shop of Raspberry</td><td>37</td><td>0</td><td>8</td><td class='hidden'></td></tr>
    <tr><td>333</td><td>308</td><td>263</td><td class='left'>Outsider Cocktail</td><td>37</td><td>2</td><td>4</td><td class='hidden'></td></tr>
    <tr><td>333</td><td>315</td><td>293</td><td class='left'>Herselves</td><td>37</td><td>2</td><td>10</td><td class='hidden'></td></tr>
    <tr><td>333</td><td>342</td><td>315</td><td class='left'>Magician of the Twilight</td><td>37</td><td>2</td><td>6</td><td class='hidden'></td></tr>
    <tr><td>333</td><td>333</td><td>325</td><td class='left'>Fantasy Corridor</td><td>37</td><td>1</td><td>5</td><td class='hidden'></td></tr>
    <tr><td>338</td><td>289</td><td>280</td><td class='left'>Player's Score</td><td>36</td><td>1</td><td>5</td><td class='hidden'></td></tr>
    <tr><td>338</td><td>294</td><td>－</td><td class='left'>Neo Bamboo Forest in Flames</td><td>36</td><td>5</td><td>1</td><td class='hidden'></td></tr>
    <tr><td>338</td><td>358</td><td>310</td><td class='left'>End of Daylight</td><td>36</td><td>2</td><td>9</td><td class='hidden'></td></tr>
    <tr><td>338</td><td>358</td><td>342</td><td class='left'>Decoration Battle</td><td>36</td><td>3</td><td>5</td><td class='hidden'></td></tr>
    <tr><td>338</td><td>299</td><td>279</td><td class='left'>The Taboo Membrane Wall</td><td>36</td><td>1</td><td>10</td><td class='hidden'></td></tr>
    <tr><td>338</td><td>365</td><td>295</td><td class='left'>False Strawberry</td><td>36</td><td>1</td><td>6</td><td class='hidden'></td></tr>
    <tr><td>344</td><td>305</td><td>285</td><td class='left'>Humans and Youkai Traversing the Canal</td><td>35</td><td>2</td><td>7</td><td class='hidden'></td></tr>
    <tr><td>344</td><td>321</td><td>293</td><td class='left'>Child of Are</td><td>35</td><td>1</td><td>5</td><td class='hidden'></td></tr>
    <tr><td>344</td><td>356</td><td>357</td><td class='left'>Like the Brilliance of Fairies</td><td>35</td><td>6</td><td>4</td><td class='hidden'></td></tr>
    <tr><td>347</td><td>301</td><td>284</td><td class='left'>Raise the Signal Fire of Cheating</td><td>34</td><td>3</td><td>0</td><td class='hidden'></td></tr>
    <tr><td>347</td><td>299</td><td>－</td><td class='left'>The Colorless Wind on Youkai Mountain</td><td>34</td><td>1</td><td>10</td><td class='hidden'></td></tr>
    <tr><td>347</td><td>365</td><td>339</td><td class='left'>Velvet Maiden Battle ~ Velvet Battle</td><td>34</td><td>1</td><td>6</td><td class='hidden'></td></tr>
    <tr><td>350</td><td>392</td><td>362</td><td class='left'>Forbidden Magic</td><td>33</td><td>1</td><td>5</td><td class='hidden'></td></tr>
    <tr><td>351</td><td>377</td><td>332</td><td class='left'>Flower of Soul ~ Another Dream...</td><td>32</td><td>2</td><td>4</td><td class='hidden'></td></tr>
    <tr><td>351</td><td>328</td><td>304</td><td class='left'>Energy Daybreak ~ Future Dream...</td><td>32</td><td>2</td><td>3</td><td class='hidden'></td></tr>
    <tr><td>351</td><td>345</td><td>325</td><td class='left'>A Shadow in the Blue Sky</td><td>32</td><td>4</td><td>6</td><td class='hidden'></td></tr>
    <tr><td>351</td><td>305</td><td>295</td><td class='left'>Bell of the Antipodes</td><td>32</td><td>1</td><td>4</td><td class='hidden'></td></tr>
    <tr><td>351</td><td>358</td><td>352</td><td class='left'>Hakurei ~ Eastern Wind </td><td>32</td><td>2</td><td>5</td><td class='hidden'></td></tr>
    <tr><td>351</td><td>358</td><td>348</td><td class='left'>Visionary Game ~ Dream War</td><td>32</td><td>3</td><td>5</td><td class='hidden'></td></tr>
    <tr><td>357</td><td>363</td><td>337</td><td class='left'>The Earth Spirits' Homecoming</td><td>31</td><td>2</td><td>6</td><td class='hidden'></td></tr>
    <tr><td>357</td><td>375</td><td>382</td><td class='left'>The Exaggerated Castle Keep</td><td>31</td><td>1</td><td>5</td><td class='hidden'></td></tr>
    <tr><td>357</td><td>325</td><td>325</td><td class='left'>Dream Land</td><td>31</td><td>2</td><td>3</td><td class='hidden'></td></tr>
    <tr><td>360</td><td>387</td><td>361</td><td class='left'>Shrine at the Foot of the Mountain</td><td>30</td><td>2</td><td>5</td><td class='hidden'></td></tr>
    <tr><td>361</td><td>373</td><td>315</td><td class='left'>Skies Beyond the Clouds</td><td>29</td><td>1</td><td>3</td><td class='hidden'></td></tr>
    <tr><td>361</td><td>342</td><td>349</td><td class='left'>Maple Dream...</td><td>29</td><td>2</td><td>5</td><td class='hidden'></td></tr>
    <tr><td>361</td><td>369</td><td>352</td><td class='left'>Eternal Festival of Illusions</td><td>29</td><td>1</td><td>5</td><td class='hidden'></td></tr>
    <tr><td>361</td><td>321</td><td>314</td><td class='left'>Ame-no-torifune Shrine</td><td>29</td><td>1</td><td>1</td><td class='hidden'></td></tr>
    <tr><td>365</td><td>356</td><td>339</td><td class='left'>A Huge Shadow and a Tiny Conclusion</td><td>28</td><td>2</td><td>3</td><td class='hidden'></td></tr>
    <tr><td>365</td><td>373</td><td>－</td><td class='left'>A Rose Blooming in the Underworld</td><td>28</td><td>1</td><td>4</td><td class='hidden'></td></tr>
    <tr><td>367</td><td>377</td><td>352</td><td class='left'>The Mound Where the Flowers Reflect</td><td>27</td><td>0</td><td>2</td><td class='hidden'></td></tr>
    <tr><td>367</td><td>363</td><td>349</td><td class='left'>A Sacred Lot</td><td>27</td><td>0</td><td>4</td><td class='hidden'></td></tr>
    <tr><td>367</td><td>382</td><td>362</td><td class='left'>Himorogi, Burn in Violet </td><td>27</td><td>3</td><td>3</td><td class='hidden'></td></tr>
    <tr><td>367</td><td>369</td><td>315</td><td class='left'>Forest of Dolls</td><td>27</td><td>4</td><td>7</td><td class='hidden'></td></tr>
    <tr><td>371</td><td>365</td><td>324</td><td class='left'>Spirit Battle ~ Perdition crisis</td><td>26</td><td>1</td><td>3</td><td class='hidden'></td></tr>
    <tr><td>371</td><td>352</td><td>362</td><td class='left'>Ancient Temple of the Netherworld</td><td>26</td><td>5</td><td>8</td><td class='hidden'></td></tr>
    <tr><td>371</td><td>333</td><td>321</td><td class='left'>The Barrier of Ame-no-torifune Shrine</td><td>26</td><td>0</td><td>4</td><td class='hidden'></td></tr>
    <tr><td>374</td><td>344</td><td>339</td><td class='left'>Nemesis' Stronghold</td><td>25</td><td>1</td><td>3</td><td class='hidden'></td></tr>
    <tr><td>374</td><td>381</td><td>325</td><td class='left'>Dreamy pilot</td><td>25</td><td>1</td><td>8</td><td class='hidden'></td></tr>
    <tr><td>376</td><td>310</td><td>－</td><td class='left'>Immortal Red Soul</td><td>24</td><td>1</td><td>2</td><td class='hidden'></td></tr>
    <tr><td>376</td><td>349</td><td>331</td><td class='left'>The Instant is Shorter Than Planck Time</td><td>24</td><td>0</td><td>7</td><td class='hidden'></td></tr>
    <tr><td>378</td><td>382</td><td>349</td><td class='left'>Legendary Wonderland</td><td>23</td><td>2</td><td>1</td><td class='hidden'></td></tr>
    <tr><td>378</td><td>377</td><td>360</td><td class='left'>Maniacal Princess</td><td>23</td><td>2</td><td>7</td><td class='hidden'></td></tr>
    <tr><td>378</td><td>350</td><td>332</td><td class='left'>Two Worlds</td><td>23</td><td>2</td><td>4</td><td class='hidden'></td></tr>
    <tr><td>378</td><td>385</td><td>352</td><td class='left'>The Gensokyo That Floats in Outer Space</td><td>23</td><td>1</td><td>4</td><td class='hidden'></td></tr>
    <tr><td>382</td><td>365</td><td>357</td><td class='left'>An Ice Fairy in Spring</td><td>22</td><td>0</td><td>2</td><td class='hidden'></td></tr>
    <tr><td>383</td><td>387</td><td>－</td><td class='left'>Mushroom Waltz</td><td>21</td><td>0</td><td>4</td><td class='hidden'></td></tr>
    <tr><td>384</td><td>369</td><td>300</td><td class='left'>Swift Battle</td><td>20</td><td>1</td><td>0</td><td class='hidden'></td></tr>
    <tr><td>384</td><td>385</td><td>371</td><td class='left'>X, the Floating Objects in the Sky</td><td>20</td><td>1</td><td>2</td><td class='hidden'></td></tr>
    <tr><td>384</td><td>352</td><td>337</td><td class='left'>Midnight Spell Card</td><td>20</td><td>2</td><td>1</td><td class='hidden'></td></tr>
    <tr><td>384</td><td>345</td><td>321</td><td class='left'>Heart-Stirring Urban Legends</td><td>20</td><td>1</td><td>2</td><td class='hidden'></td></tr>
    <tr><td>384</td><td>375</td><td>378</td><td class='left'>Angel's Legend</td><td>20</td><td>0</td><td>0</td><td class='hidden'></td></tr>
    <tr><td>384</td><td>408</td><td>366</td><td class='left'>Dimension of Reverie</td><td>20</td><td>3</td><td>2</td><td class='hidden'></td></tr>
    <tr><td>390</td><td>358</td><td>345</td><td class='left'>The Scenery of Living Dolls</td><td>19</td><td>0</td><td>3</td><td class='hidden'></td></tr>
    <tr><td>390</td><td>－</td><td>－</td><td class='left'>Lucid Dreamer</td><td>19</td><td>0</td><td>6</td><td class='hidden'></td></tr>
    <tr><td>390</td><td>433</td><td>393</td><td class='left'>Crescent Dream</td><td>19</td><td>2</td><td>5</td><td class='hidden'></td></tr>
    <tr><td>390</td><td>387</td><td>371</td><td class='left'>Crimson Maiden ~ Crimson Dead!!</td><td>19</td><td>2</td><td>0</td><td class='hidden'></td></tr>
    <tr><td>390</td><td>439</td><td>379</td><td class='left'>The Hide-and-Seek Lifestyle at the Shrine</td><td>19</td><td>0</td><td>5</td><td class='hidden'></td></tr>
    <tr><td>390</td><td>461</td><td>406</td><td class='left'>Holy Knight of Orléans</td><td>19</td><td>2</td><td>4</td><td class='hidden'></td></tr>
    <tr><td>396</td><td>413</td><td>386</td><td class='left'>This Dull World's Unchanging Pessimism</td><td>18</td><td>1</td><td>1</td><td class='hidden'></td></tr>
    <tr><td>396</td><td>417</td><td>371</td><td class='left'>Phantasmagoria</td><td>18</td><td>2</td><td>3</td><td class='hidden'></td></tr>
    <tr><td>398</td><td>413</td><td>421</td><td class='left'>Drunk as I Like</td><td>17</td><td>3</td><td>1</td><td class='hidden'></td></tr>
    <tr><td>398</td><td>394</td><td>345</td><td class='left'>The Positive and Negative</td><td>17</td><td>2</td><td>2</td><td class='hidden'></td></tr>
    <tr><td>398</td><td>404</td><td>393</td><td class='left'>World of Empty Dreams </td><td>17</td><td>2</td><td>3</td><td class='hidden'></td></tr>
    <tr><td>398</td><td>399</td><td>345</td><td class='left'>Hakurei Shrine Grounds</td><td>17</td><td>0</td><td>4</td><td class='hidden'></td></tr>
    <tr><td>398</td><td>429</td><td>393</td><td class='left'>Sacred Battle</td><td>17</td><td>0</td><td>8</td><td class='hidden'></td></tr>
    <tr><td>403</td><td>439</td><td>386</td><td class='left'>Mound of Life</td><td>16</td><td>0</td><td>2</td><td class='hidden'></td></tr>
    <tr><td>403</td><td>392</td><td>366</td><td class='left'>Ridiculous Game</td><td>16</td><td>0</td><td>2</td><td class='hidden'></td></tr>
    <tr><td>403</td><td>444</td><td>398</td><td class='left'>Morning Clouds</td><td>16</td><td>2</td><td>2</td><td class='hidden'></td></tr>
    <tr><td>403</td><td>387</td><td>－</td><td class='left'>Overcome a Thousand Trials</td><td>16</td><td>0</td><td>2</td><td class='hidden'></td></tr>
    <tr><td>403</td><td>394</td><td>393</td><td class='left'>Extra Love</td><td>16</td><td>0</td><td>2</td><td class='hidden'></td></tr>
    <tr><td>408</td><td>421</td><td>368</td><td class='left'>Power of Darkness </td><td>15</td><td>0</td><td>1</td><td class='hidden'></td></tr>
    <tr><td>408</td><td>387</td><td>356</td><td class='left'>Disunified Field Theory of Magic</td><td>15</td><td>0</td><td>2</td><td class='hidden'></td></tr>
    <tr><td>408</td><td>369</td><td>342</td><td class='left'>The Fairies' Adventurous Tale</td><td>15</td><td>1</td><td>1</td><td class='hidden'></td></tr>
    <tr><td>408</td><td>439</td><td>415</td><td class='left'>Magic of Life</td><td>15</td><td>1</td><td>7</td><td class='hidden'></td></tr>
    <tr><td>412</td><td>397</td><td>371</td><td class='left'>She's in a temper!!</td><td>14</td><td>1</td><td>3</td><td class='hidden'></td></tr>
    <tr><td>412</td><td>399</td><td>384</td><td class='left'>Eternal Full Moon</td><td>14</td><td>1</td><td>0</td><td class='hidden'></td></tr>
    <tr><td>412</td><td>421</td><td>406</td><td class='left'>Castle Explorer -in the Sky-</td><td>14</td><td>1</td><td>6</td><td class='hidden'></td></tr>
    <tr><td>415</td><td>408</td><td>384</td><td class='left'>Dream of a Spring Breeze</td><td>13</td><td>0</td><td>0</td><td class='hidden'></td></tr>
    <tr><td>415</td><td>397</td><td>368</td><td class='left'>The Arcane Is Revealed</td><td>13</td><td>1</td><td>3</td><td class='hidden'></td></tr>
    <tr><td>415</td><td>399</td><td>371</td><td class='left'>The Space Shrine Maiden Returns Home</td><td>13</td><td>0</td><td>5</td><td class='hidden'></td></tr>
    <tr><td>415</td><td>399</td><td>381</td><td class='left'>Blade of Banishment</td><td>13</td><td>0</td><td>2</td><td class='hidden'></td></tr>
    <tr><td>419</td><td>421</td><td>389</td><td class='left'>Unexpected Visitor</td><td>12</td><td>0</td><td>3</td><td class='hidden'></td></tr>
    <tr><td>419</td><td>421</td><td>379</td><td class='left'>Starbow Dream</td><td>12</td><td>0</td><td>2</td><td class='hidden'></td></tr>
    <tr><td>419</td><td>350</td><td>283</td><td class='left'>Adventurer's Tavern of the Old World</td><td>12</td><td>0</td><td>1</td><td class='hidden'></td></tr>
    <tr><td>419</td><td>439</td><td>386</td><td class='left'>Disastrous Gemini</td><td>12</td><td>0</td><td>3</td><td class='hidden'></td></tr>
    <tr><td>419</td><td>404</td><td>383</td><td class='left'>Orphic Poetry ~ Pseudoclassic</td><td>12</td><td>1</td><td>8</td><td class='hidden'></td></tr>
    <tr><td>424</td><td>413</td><td>389</td><td class='left'>Eastern Wind</td><td>11</td><td>1</td><td>2</td><td class='hidden'></td></tr>
    <tr><td>424</td><td>408</td><td>362</td><td class='left'>Newshound</td><td>11</td><td>0</td><td>0</td><td class='hidden'></td></tr>
    <tr><td>424</td><td>404</td><td>393</td><td class='left'>Magical Power of the Mallet</td><td>11</td><td>0</td><td>2</td><td class='hidden'></td></tr>
    <tr><td>424</td><td>461</td><td>429</td><td class='left'>Iris</td><td>11</td><td>0</td><td>0</td><td class='hidden'></td></tr>
    <tr><td>424</td><td>444</td><td>398</td><td class='left'>Decisive Magic Battle! ~ Fight it out!</td><td>11</td><td>0</td><td>2</td><td class='hidden'></td></tr>
    <tr><td>424</td><td>452</td><td>398</td><td class='left'>Illusionary Girl from Canaveral</td><td>11</td><td>0</td><td>1</td><td class='hidden'></td></tr>
    <tr><td>424</td><td>452</td><td>389</td><td class='left'>Antique Terror</td><td>11</td><td>1</td><td>3</td><td class='hidden'></td></tr>
    <tr><td>424</td><td>433</td><td>414</td><td class='left'>Magical and Hopeless</td><td>11</td><td>1</td><td>4</td><td class='hidden'></td></tr>
    <tr><td>432</td><td>417</td><td>357</td><td class='left'>Seven-Orb Collection Showdown</td><td>10</td><td>1</td><td>2</td><td class='hidden'></td></tr>
    <tr><td>432</td><td>408</td><td>406</td><td class='left'>The Moon as Seen from the Shrine</td><td>10</td><td>0</td><td>1</td><td class='hidden'></td></tr>
    <tr><td>432</td><td>452</td><td>－</td><td class='left'>Corridor Stretching to Eternity</td><td>10</td><td>0</td><td>2</td><td class='hidden'></td></tr>
    <tr><td>432</td><td>421</td><td>403</td><td class='left'>the Legend of KAGE</td><td>10</td><td>1</td><td>2</td><td class='hidden'></td></tr>
    <tr><td>436</td><td>444</td><td>398</td><td class='left'>Usual Days</td><td>9</td><td>0</td><td>1</td><td class='hidden'></td></tr>
    <tr><td>436</td><td>413</td><td>－</td><td class='left'>The Curtain Shall Rise Soon</td><td>9</td><td>1</td><td>1</td><td class='hidden'></td></tr>
    <tr><td>436</td><td>429</td><td>429</td><td class='left'>Eastern Recorded Sealing of a Demon ~ A Phantom's Boisterous Dance</td><td>9</td><td>0</td><td>1</td><td class='hidden'></td></tr>
    <tr><td>436</td><td>417</td><td>421</td><td class='left'>Wondrous Tales of Romance ~ Mystic Square</td><td>9</td><td>0</td><td>1</td><td class='hidden'></td></tr>
    <tr><td>436</td><td>421</td><td>403</td><td class='left'>Spiritual Heaven</td><td>9</td><td>1</td><td>2</td><td class='hidden'></td></tr>
    <tr><td>436</td><td>461</td><td>467</td><td class='left'>Soul's Resting Place</td><td>9</td><td>0</td><td>2</td><td class='hidden'></td></tr>
    <tr><td>436</td><td>429</td><td>449</td><td class='left'>My Maid, Sweet Maid</td><td>9</td><td>1</td><td>1</td><td class='hidden'></td></tr>
    <tr><td>443</td><td>433</td><td>406</td><td class='left'>A Popular Location</td><td>8</td><td>0</td><td>3</td><td class='hidden'></td></tr>
    <tr><td>443</td><td>489</td><td>439</td><td class='left'>The Value Is Unrealized</td><td>8</td><td>2</td><td>0</td><td class='hidden'></td></tr>
    <tr><td>443</td><td>399</td><td>371</td><td class='left'>Fair Scramble</td><td>8</td><td>0</td><td>0</td><td class='hidden'></td></tr>
    <tr><td>443</td><td>473</td><td>411</td><td class='left'>Eastern Recorded Sealing of a Demon ~ Pure Land Mandala</td><td>8</td><td>0</td><td>2</td><td class='hidden'></td></tr>
    <tr><td>443</td><td>452</td><td>415</td><td class='left'>Adoration of Magic</td><td>8</td><td>0</td><td>2</td><td class='hidden'></td></tr>
    <tr><td>443</td><td>417</td><td>415</td><td class='left'>Winds of Time</td><td>8</td><td>0</td><td>2</td><td class='hidden'></td></tr>
    <tr><td>443</td><td>444</td><td>411</td><td class='left'>Selene's light</td><td>8</td><td>0</td><td>2</td><td class='hidden'></td></tr>
    <tr><td>443</td><td>506</td><td>439</td><td class='left'>Illusory Imperial Capital</td><td>8</td><td>1</td><td>1</td><td class='hidden'></td></tr>
    <tr><td>443</td><td>444</td><td>436</td><td class='left'>Warrior Maiden ~ Heart of Valkyrie</td><td>8</td><td>1</td><td>0</td><td class='hidden'></td></tr>
    <tr><td>443</td><td>479</td><td>461</td><td class='left'>Frontal Attack</td><td>8</td><td>0</td><td>7</td><td class='hidden'></td></tr>
    <tr><td>453</td><td>461</td><td>421</td><td class='left'>Youkai Temple</td><td>7</td><td>0</td><td>1</td><td class='hidden'></td></tr>
    <tr><td>453</td><td>433</td><td>436</td><td class='left'>An Ice Fairy in Spring - still -</td><td>7</td><td>0</td><td>0</td><td class='hidden'></td></tr>
    <tr><td>453</td><td>429</td><td>403</td><td class='left'>Gensokyo Mystery Discovery</td><td>7</td><td>0</td><td>1</td><td class='hidden'></td></tr>
    <tr><td>453</td><td>421</td><td>－</td><td class='left'>The Palanquin Ship Flies in the Sky</td><td>7</td><td>1</td><td>0</td><td class='hidden'></td></tr>
    <tr><td>453</td><td>408</td><td>－</td><td class='left'>The Inverted Castle Lit by the Setting Sun</td><td>7</td><td>0</td><td>1</td><td class='hidden'></td></tr>
    <tr><td>453</td><td>433</td><td>389</td><td class='left'>End of the World ~ World's End</td><td>7</td><td>1</td><td>2</td><td class='hidden'></td></tr>
    <tr><td>453</td><td>452</td><td>461</td><td class='left'>Eternal Paradise</td><td>7</td><td>0</td><td>2</td><td class='hidden'></td></tr>
    <tr><td>453</td><td>382</td><td>371</td><td class='left'>Firmament Army</td><td>7</td><td>0</td><td>1</td><td class='hidden'></td></tr>
    <tr><td>453</td><td>473</td><td>439</td><td class='left'>Inventive City</td><td>7</td><td>0</td><td>2</td><td class='hidden'></td></tr>
    <tr><td>462</td><td>489</td><td>429</td><td class='left'>End of Summer</td><td>6</td><td>0</td><td>3</td><td class='hidden'></td></tr>
    <tr><td>462</td><td>461</td><td>439</td><td class='left'>Wanderings</td><td>6</td><td>0</td><td>1</td><td class='hidden'></td></tr>
    <tr><td>462</td><td>444</td><td>449</td><td class='left'>Silence</td><td>6</td><td>0</td><td>0</td><td class='hidden'></td></tr>
    <tr><td>462</td><td>473</td><td>398</td><td class='left'>Officially-Sanctioned Twilight Newspaper</td><td>6</td><td>0</td><td>1</td><td class='hidden'></td></tr>
    <tr><td>462</td><td>479</td><td>439</td><td class='left'>Oriental Magician</td><td>6</td><td>1</td><td>0</td><td class='hidden'></td></tr>
    <tr><td>462</td><td>394</td><td>368</td><td class='left'>Gensokyo ~ Lotus Land Story</td><td>6</td><td>0</td><td>2</td><td class='hidden'></td></tr>
    <tr><td>462</td><td>473</td><td>461</td><td class='left'>Break the Sabbath</td><td>6</td><td>0</td><td>1</td><td class='hidden'></td></tr>
    <tr><td>462</td><td>498</td><td>467</td><td class='left'>Shinto Shrine</td><td>6</td><td>1</td><td>1</td><td class='hidden'></td></tr>
    <tr><td>462</td><td>479</td><td>411</td><td class='left'>Shuusou Gyoku ~ Clockworks</td><td>6</td><td>0</td><td>2</td><td class='hidden'></td></tr>
    <tr><td>462</td><td>461</td><td>429</td><td class='left'>Illusion of Flowers, Air of Scarlet Dream</td><td>6</td><td>0</td><td>1</td><td class='hidden'></td></tr>
    <tr><td>462</td><td>461</td><td>449</td><td class='left'>Plastic Space</td><td>6</td><td>0</td><td>3</td><td class='hidden'></td></tr>
    <tr><td>473</td><td>473</td><td>421</td><td class='left'>Scarlet Night</td><td>5</td><td>0</td><td>1</td><td class='hidden'></td></tr>
    <tr><td>473</td><td>489</td><td>421</td><td class='left'>Bad Omen</td><td>5</td><td>0</td><td>0</td><td class='hidden'></td></tr>
    <tr><td>473</td><td>479</td><td>461</td><td class='left'>Forms of Manifested Folklore</td><td>5</td><td>1</td><td>1</td><td class='hidden'></td></tr>
    <tr><td>473</td><td>404</td><td>406</td><td class='left'>Highly Responsive to Prayers</td><td>5</td><td>0</td><td>0</td><td class='hidden'></td></tr>
    <tr><td>473</td><td>439</td><td>436</td><td class='left'>Selection</td><td>5</td><td>0</td><td>2</td><td class='hidden'></td></tr>
    <tr><td>473</td><td>498</td><td>467</td><td class='left'>Ghostly Person's Holiday</td><td>5</td><td>1</td><td>1</td><td class='hidden'></td></tr>
    <tr><td>473</td><td>489</td><td>421</td><td class='left'>Magic Formation ~ Magic Square</td><td>5</td><td>0</td><td>0</td><td class='hidden'></td></tr>
    <tr><td>473</td><td>479</td><td>461</td><td class='left'>Mystic Dream</td><td>5</td><td>0</td><td>0</td><td class='hidden'></td></tr>
    <tr><td>473</td><td>452</td><td>439</td><td class='left'>New Illusion ~ New Fantasy</td><td>5</td><td>1</td><td>1</td><td class='hidden'></td></tr>
    <tr><td>482</td><td>433</td><td>415</td><td class='left'>The Legendary Titan</td><td>4</td><td>0</td><td>2</td><td class='hidden'></td></tr>
    <tr><td>482</td><td>－</td><td>449</td><td class='left'>An Unpopular Location</td><td>4</td><td>0</td><td>2</td><td class='hidden'></td></tr>
    <tr><td>482</td><td>452</td><td>－</td><td class='left'>Equality Under the Law of Dharma</td><td>4</td><td>0</td><td>1</td><td class='hidden'></td></tr>
    <tr><td>482</td><td>421</td><td>－</td><td class='left'>The Ravine Kappa's Technological Prowess</td><td>4</td><td>0</td><td>0</td><td class='hidden'></td></tr>
    <tr><td>482</td><td>473</td><td>－</td><td class='left'>In the Deep-Green Tanuki Forest</td><td>4</td><td>0</td><td>1</td><td class='hidden'></td></tr>
    <tr><td>482</td><td>479</td><td>429</td><td class='left'>Forest of Tono</td><td>4</td><td>1</td><td>1</td><td class='hidden'></td></tr>
    <tr><td>482</td><td>498</td><td>467</td><td class='left'>Sealed Demon's Finale</td><td>4</td><td>0</td><td>0</td><td class='hidden'></td></tr>
    <tr><td>482</td><td>520</td><td>421</td><td class='left'>Arcadian Dream</td><td>4</td><td>0</td><td>1</td><td class='hidden'></td></tr>
    <tr><td>490</td><td>520</td><td>467</td><td class='left'>Solitary Place</td><td>3</td><td>0</td><td>0</td><td class='hidden'></td></tr>
    <tr><td>490</td><td>461</td><td>429</td><td class='left'>The Village in the Dead of Night</td><td>3</td><td>0</td><td>0</td><td class='hidden'></td></tr>
    <tr><td>490</td><td>－</td><td>415</td><td class='left'>Performer Selection</td><td>3</td><td>0</td><td>0</td><td class='hidden'></td></tr>
    <tr><td>490</td><td>498</td><td>421</td><td class='left'>Each Ending</td><td>3</td><td>1</td><td>0</td><td class='hidden'></td></tr>
    <tr><td>490</td><td>520</td><td>－</td><td class='left'>An Odd Couple</td><td>3</td><td>0</td><td>1</td><td class='hidden'></td></tr>
    <tr><td>490</td><td>506</td><td>－</td><td class='left'>Scheming Outside the Box</td><td>3</td><td>0</td><td>0</td><td class='hidden'></td></tr>
    <tr><td>490</td><td>479</td><td>－</td><td class='left'>Floating with the Tide</td><td>3</td><td>0</td><td>0</td><td class='hidden'></td></tr>
    <tr><td>490</td><td>520</td><td>－</td><td class='left'>An Unused Location</td><td>3</td><td>0</td><td>1</td><td class='hidden'></td></tr>
    <tr><td>490</td><td>489</td><td>439</td><td class='left'>Bet on Death</td><td>3</td><td>0</td><td>0</td><td class='hidden'></td></tr>
    <tr><td>490</td><td>506</td><td>439</td><td class='left'>Dream of Eternity</td><td>3</td><td>1</td><td>0</td><td class='hidden'></td></tr>
    <tr><td>490</td><td>489</td><td>480</td><td class='left'>Days</td><td>3</td><td>0</td><td>1</td><td class='hidden'></td></tr>
    <tr><td>490</td><td>506</td><td>480</td><td class='left'>Peaceful</td><td>3</td><td>1</td><td>0</td><td class='hidden'></td></tr>
    <tr><td>490</td><td>444</td><td>486</td><td class='left'>Those Who Live in Illusions</td><td>3</td><td>0</td><td>2</td><td class='hidden'></td></tr>
    <tr><td>490</td><td>506</td><td>449</td><td class='left'>Lotus Road</td><td>3</td><td>1</td><td>1</td><td class='hidden'></td></tr>
    <tr><td>490</td><td>444</td><td>449</td><td class='left'>Incomplete Plot</td><td>3</td><td>0</td><td>2</td><td class='hidden'></td></tr>
    <tr><td>490</td><td>520</td><td>449</td><td class='left'>Border Land</td><td>3</td><td>0</td><td>0</td><td class='hidden'></td></tr>
    <tr><td>506</td><td>506</td><td>467</td><td class='left'>Intermezzo</td><td>2</td><td>1</td><td>0</td><td class='hidden'></td></tr>
    <tr><td>506</td><td>461</td><td>429</td><td class='left'>Swing a Fish to Drive Away Flies</td><td>2</td><td>0</td><td>0</td><td class='hidden'></td></tr>
    <tr><td>506</td><td>506</td><td>476</td><td class='left'>Arrival of the Winds of the Era</td><td>2</td><td>0</td><td>0</td><td class='hidden'></td></tr>
    <tr><td>506</td><td>489</td><td>467</td><td class='left'>Believe in Possibilities</td><td>2</td><td>0</td><td>1</td><td class='hidden'></td></tr>
    <tr><td>506</td><td>461</td><td>－</td><td class='left'>Unnatural Nature</td><td>2</td><td>0</td><td>0</td><td class='hidden'></td></tr>
    <tr><td>506</td><td>479</td><td>－</td><td class='left'>Constant and Unchanging Mazureum</td><td>2</td><td>0</td><td>0</td><td class='hidden'></td></tr>
    <tr><td>506</td><td>－</td><td>－</td><td class='left'>Two Minds of One Body</td><td>2</td><td>0</td><td>0</td><td class='hidden'></td></tr>
    <tr><td>506</td><td>506</td><td>－</td><td class='left'>Big Talk</td><td>2</td><td>0</td><td>1</td><td class='hidden'></td></tr>
    <tr><td>506</td><td>498</td><td>449</td><td class='left'>Sunfall</td><td>2</td><td>0</td><td>1</td><td class='hidden'></td></tr>
    <tr><td>506</td><td>520</td><td>467</td><td class='left'>Eastern Blue Sky</td><td>2</td><td>0</td><td>0</td><td class='hidden'></td></tr>
    <tr><td>506</td><td>452</td><td>449</td><td class='left'>Endless</td><td>2</td><td>1</td><td>1</td><td class='hidden'></td></tr>
    <tr><td>506</td><td>479</td><td>461</td><td class='left'>Dream Machine ~ Innocent Power</td><td>2</td><td>0</td><td>0</td><td class='hidden'></td></tr>
    <tr><td>506</td><td>506</td><td>476</td><td class='left'>Titled Maid</td><td>2</td><td>0</td><td>1</td><td class='hidden'></td></tr>
    <tr><td>506</td><td>489</td><td>480</td><td class='left'>Kioh Gyoku ~ Fairy Dance</td><td>2</td><td>0</td><td>0</td><td class='hidden'></td></tr>
    <tr><td>520</td><td>461</td><td>439</td><td class='left'>The Moon</td><td>1</td><td>0</td><td>0</td><td class='hidden'></td></tr>
    <tr><td>520</td><td>－</td><td>439</td><td class='left'>Inner Heart</td><td>1</td><td>0</td><td>0</td><td class='hidden'></td></tr>
    <tr><td>520</td><td>506</td><td>467</td><td class='left'>Beautiful Nature Sight</td><td>1</td><td>0</td><td>0</td><td class='hidden'></td></tr>
    <tr><td>520</td><td>479</td><td>476</td><td class='left'>Free and Easy</td><td>1</td><td>0</td><td>0</td><td class='hidden'></td></tr>
    <tr><td>520</td><td>506</td><td>449</td><td class='left'>Today's Front-Page Headline</td><td>1</td><td>0</td><td>0</td><td class='hidden'></td></tr>
    <tr><td>520</td><td>506</td><td>449</td><td class='left'>An Everyday Life with Balls</td><td>1</td><td>0</td><td>0</td><td class='hidden'></td></tr>
    <tr><td>520</td><td>506</td><td>480</td><td class='left'>Those Who Know the Truth</td><td>1</td><td>0</td><td>0</td><td class='hidden'></td></tr>
    <tr><td>520</td><td>498</td><td>－</td><td class='left'>Being Things Eye To Eye</td><td>1</td><td>0</td><td>0</td><td class='hidden'></td></tr>
    <tr><td>520</td><td>461</td><td>480</td><td class='left'>Victory Demonstration</td><td>1</td><td>0</td><td>1</td><td class='hidden'></td></tr>
    <tr><td>520</td><td>452</td><td>449</td><td class='left'>Game Over</td><td>1</td><td>0</td><td>0</td><td class='hidden'></td></tr>
    <tr><td>520</td><td>498</td><td>415</td><td class='left'>Primrose Shiver</td><td>1</td><td>0</td><td>1</td><td class='hidden'></td></tr>
                    </tbody>
                </table>
            </div>
            <h1 id='Works'>Works</h1>
            <div id='works_dummy' class='dummy'><div class='dummy_sub'></div></div>
            <div id='works_container' class='container'>
                <table id='works_table' class='poll table sortable'>
                    <colgroup>
                        <col class='col1'>
                        <col class='col2game'>
                        <col class='col3game'>
                        <col class='col4game'>
                        <col class='col5'>
                        <col class='col6per'>
                        <col class='col7per'>
                        <col class='col8per'>
                    </colgroup>
                    <thead>
                        <tr>
                            <th id='works_head' class='head noborders'></th>
                            <th>Rank</th>
                            <th>2018 rank</th>
                            <th>2017 rank</th>
                            <th>Name</th>
                            <th>Points</th>
                            <th>No. 1 votes</th>
                            <th>Comments</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr><td>1</td><td>1</td><td>1</td><td class='left'>EoSD</td><td>8,183</td><td>2,557</td><td>528</td><td class='hidden'></td></tr>
                        <tr><td>2</td><td>2</td><td>2</td><td class='left'>IN</td><td>7,478</td><td>1,765</td><td>547</td><td class='hidden'></td></tr>
                        <tr><td>3</td><td>3</td><td>3</td><td class='left'>PCB</td><td>6,470</td><td>1,466</td><td>431</td><td class='hidden'></td></tr>
                        <tr><td>4</td><td>4</td><td>4</td><td class='left'>MoF</td><td>5,845</td><td>1,312</td><td>422</td><td class='hidden'></td></tr>
                        <tr><td>5</td><td>5</td><td>5</td><td class='left'>SA</td><td>4,923</td><td>1,000</td><td>307</td><td class='hidden'></td></tr>
                        <tr><td>6</td><td>6</td><td>6</td><td class='left'>LoLK</td><td>4,664</td><td>870</td><td>447</td><td class='hidden'></td></tr>
                        <tr><td>7</td><td>7</td><td>7</td><td class='left'>Forbidden Scrollery</td><td>3,048</td><td>319</td><td>276</td><td class='hidden'></td></tr>
                        <tr><td>8</td><td>8</td><td>8</td><td class='left'>DDC</td><td>2,739</td><td>502</td><td>236</td><td class='hidden'></td></tr>
                        <tr><td>9</td><td>11</td><td>9</td><td class='left'>UFO</td><td>2,429</td><td>424</td><td>225</td><td class='hidden'></td></tr>
                        <tr><td>10</td><td>9</td><td>－</td><td class='left'>HSiFS</td><td>2,422</td><td>298</td><td>238</td><td class='hidden'></td></tr>
                        <tr><td>11</td><td>10</td><td>－</td><td class='left'>AoCF</td><td>2,266</td><td>237</td><td>186</td><td class='hidden'></td></tr>
                        <tr><td>12</td><td>13</td><td>12</td><td class='left'>Wild and Horned Hermit</td><td>2,060</td><td>179</td><td>163</td><td class='hidden'></td></tr>
                        <tr><td>13</td><td>14</td><td>13</td><td class='left'>TD</td><td>2,007</td><td>370</td><td>171</td><td class='hidden'></td></tr>
                        <tr><td>14</td><td>12</td><td>10</td><td class='left'>Hisoutensoku</td><td>2,003</td><td>255</td><td>145</td><td class='hidden'></td></tr>
                        <tr><td>15</td><td>15</td><td>14</td><td class='left'>PoFV</td><td>1,776</td><td>273</td><td>148</td><td class='hidden'></td></tr>
                        <tr><td>16</td><td>17</td><td>15</td><td class='left'>SWR</td><td>1,231</td><td>173</td><td>87</td><td class='hidden'></td></tr>
                        <tr><td>16</td><td>19</td><td>18</td><td class='left'>Touhou Sangetsusei</td><td>1,231</td><td>132</td><td>131</td><td class='hidden'></td></tr>
                        <tr><td>18</td><td>16</td><td>11</td><td class='left'>ULiL</td><td>1,192</td><td>108</td><td>98</td><td class='hidden'></td></tr>
                        <tr><td>19</td><td>20</td><td>21</td><td class='left'>Magical Astronomy</td><td>1,013</td><td>119</td><td>95</td><td class='hidden'></td></tr>
                        <tr><td>20</td><td>22</td><td>25</td><td class='left'>Dolls in Pseudo Paradise</td><td>991</td><td>145</td><td>106</td><td class='hidden'></td></tr>
                        <tr><td>21</td><td>21</td><td>17</td><td class='left'>Touhou Bougetsushou</td><td>989</td><td>95</td><td>77</td><td class='hidden'></td></tr>
                        <tr><td>22</td><td>18</td><td>16</td><td class='left'>ISC</td><td>934</td><td>110</td><td>72</td><td class='hidden'></td></tr>
                        <tr><td>23</td><td>24</td><td>22</td><td class='left'>Perfect Memento in Strict Sense / Symposium of Post-mysticism</td><td>797</td><td>66</td><td>59</td><td class='hidden'></td></tr>
                        <tr><td>24</td><td>23</td><td>20</td><td class='left'>Curiosities of Lotus Asia</td><td>761</td><td>91</td><td>77</td><td class='hidden'></td></tr>
                        <tr><td>25</td><td>27</td><td>23</td><td class='left'>StB</td><td>717</td><td>83</td><td>49</td><td class='hidden'></td></tr>
                        <tr><td>26</td><td>28</td><td>26</td><td class='left'>GFW</td><td>687</td><td>76</td><td>71</td><td class='hidden'></td></tr>
                        <tr><td>27</td><td>29</td><td>27</td><td class='left'>LLS</td><td>685</td><td>129</td><td>42</td><td class='hidden'></td></tr>
                        <tr><td>28</td><td>－</td><td>－</td><td class='left'>VD</td><td>670</td><td>56</td><td>107</td><td class='hidden'></td></tr>
                        <tr><td>29</td><td>30</td><td>28</td><td class='left'>MS</td><td>646</td><td>96</td><td>56</td><td class='hidden'></td></tr>
                        <tr><td>30</td><td>26</td><td>24</td><td class='left'>DS</td><td>638</td><td>56</td><td>70</td><td class='hidden'></td></tr>
                        <tr><td>31</td><td>25</td><td>19</td><td class='left'>HM</td><td>637</td><td>51</td><td>49</td><td class='hidden'></td></tr>
                        <tr><td>32</td><td>33</td><td>32</td><td class='left'>Retrospective 53 minutes</td><td>521</td><td>46</td><td>52</td><td class='hidden'></td></tr>
                        <tr><td>33</td><td>31</td><td>29</td><td class='left'>IaMP</td><td>488</td><td>47</td><td>44</td><td class='hidden'></td></tr>
                        <tr><td>34</td><td>34</td><td>33</td><td class='left'>PoDD</td><td>475</td><td>82</td><td>39</td><td class='hidden'></td></tr>
                        <tr><td>35</td><td>35</td><td>31</td><td class='left'>Ghostly Field Club</td><td>467</td><td>52</td><td>39</td><td class='hidden'></td></tr>
                        <tr><td>36</td><td>37</td><td>36</td><td class='left'>HRtP</td><td>452</td><td>91</td><td>50</td><td class='hidden'></td></tr>
                        <tr><td>37</td><td>36</td><td>30</td><td class='left'>Dr. Latency's Freak Report</td><td>402</td><td>27</td><td>43</td><td class='hidden'></td></tr>
                        <tr><td>38</td><td>39</td><td>37</td><td class='left'>Changeability of Strange Dream</td><td>375</td><td>26</td><td>33</td><td class='hidden'></td></tr>
                        <tr><td>39</td><td>32</td><td>－</td><td class='left'>Alternative Facts in Eastern Utopia</td><td>331</td><td>19</td><td>37</td><td class='hidden'></td></tr>
                        <tr><td>40</td><td>38</td><td>34</td><td class='left'>The Grimoire of Marisa</td><td>317</td><td>35</td><td>38</td><td class='hidden'></td></tr>
                        <tr><td>41</td><td>40</td><td>38</td><td class='left'>Neo-traditionalism of Japan</td><td>281</td><td>22</td><td>34</td><td class='hidden'></td></tr>
                        <tr><td>42</td><td>46</td><td>43</td><td class='left'>Unknown Flower, Mesmerizing Journey</td><td>235</td><td>19</td><td>41</td><td class='hidden'></td></tr>
                        <tr><td>43</td><td>41</td><td>35</td><td class='left'>Dateless Bar "Old Adam"</td><td>229</td><td>10</td><td>17</td><td class='hidden'></td></tr>
                        <tr><td>44</td><td>43</td><td>41</td><td class='left'>SoEW</td><td>213</td><td>29</td><td>18</td><td class='hidden'></td></tr>
                        <tr><td>45</td><td>42</td><td>40</td><td class='left'>Trojan Green Asteroid</td><td>205</td><td>9</td><td>19</td><td class='hidden'></td></tr>
                        <tr><td>46</td><td>44</td><td>39</td><td class='left'>Bohemian Archive in Japanese Red</td><td>201</td><td>10</td><td>13</td><td class='hidden'></td></tr>
                        <tr><td>47</td><td>45</td><td>42</td><td class='left'>Akyuu's Untouched Score</td><td>167</td><td>9</td><td>19</td><td class='hidden'></td></tr>
                    </tbody>
                </table>
            </div>
            <h1 id='Questionnaire'>Questionnaire</h1>
<h2>01. Age</h2>
<div id='age_summary'>
<p>Valid responses: 10,163　<input type='button' value='Detailed view'></p>
<table class='poll sortable'>
    <colgroup>
        <col class='col2 w8'>
        <col class='col3q'>
        <col class='col4q'>
    </colgroup>
<tbody>
<tr><th><u>Age</u></th><th><u>Responses</u></th><th><u>Percentage</u></th></tr>
<tr><th>&lt;= 9</th><td>17</td><td>0.17%</td></tr>
<tr><th>10-14</th><td>569</td><td>5.6%</td></tr>
<tr><th>15-19</th><td>3,486</td><td>34.3%</td></tr>
<tr><th>20-24</th><td>2,860</td><td>28.14%</td></tr>
<tr><th>25-29</th><td>1,605</td><td>15.79%</td></tr>
<tr><th>30-34</th><td>908</td><td>8.93%</td></tr>
<tr><th>35-39</th><td>422</td><td>4.15%</td></tr>
<tr><th>40-44</th><td>189</td><td>1.86%</td></tr>
<tr><th>45-49</th><td>71</td><td>0.7%</td></tr>
<tr><th>&gt;= 50</th><td>36</td><td>0.35%</td></tr>
</tbody></table>
</div>
<div id='age_detail'>
<p>Valid responses: 10,163　<input type='button' value='Simple view'></p>
<table class='poll sortable'>
    <colgroup>
        <col class='col2 w8'>
        <col class='col3q'>
        <col class='col4q'>
    </colgroup>
<tbody>
<tr><th><u>Age</u></th><th><u>Responses</u></th><th><u>Percentage</u></th></tr>
<tr><th>5</th><td>12</td><td>0.12%</td></tr>
<tr><th>6</th><td>1</td><td>0.01%</td></tr>
<tr><th>7</th><td>1</td><td>0.01%</td></tr>
<tr><th>8</th><td>1</td><td>0.01%</td></tr>
<tr><th>9</th><td>2</td><td>0.02%</td></tr>
<tr><th>10</th><td>8</td><td>0.08%</td></tr>
<tr><th>11</th><td>33</td><td>0.32%</td></tr>
<tr><th>12</th><td>58</td><td>0.57%</td></tr>
<tr><th>13</th><td>166</td><td>1.63%</td></tr>
<tr><th>14</th><td>304</td><td>2.99%</td></tr>
<tr><th>15</th><td>502</td><td>4.94%</td></tr>
<tr><th>16</th><td>696</td><td>6.85%</td></tr>
<tr><th>17</th><td>717</td><td>7.06%</td></tr>
<tr><th>18</th><td>849</td><td>8.35%</td></tr>
<tr><th>19</th><td>722</td><td>7.1%</td></tr>
<tr><th>20</th><td>699</td><td>6.88%</td></tr>
<tr><th>21</th><td>601</td><td>5.91%</td></tr>
<tr><th>22</th><td>589</td><td>5.8%</td></tr>
<tr><th>23</th><td>478</td><td>4.7%</td></tr>
<tr><th>24</th><td>493</td><td>4.85%</td></tr>
<tr><th>25</th><td>422</td><td>4.15%</td></tr>
<tr><th>26</th><td>311</td><td>3.06%</td></tr>
<tr><th>27</th><td>329</td><td>3.24%</td></tr>
<tr><th>28</th><td>317</td><td>3.12%</td></tr>
<tr><th>29</th><td>226</td><td>2.22%</td></tr>
<tr><th>30</th><td>238</td><td>2.34%</td></tr>
<tr><th>31</th><td>207</td><td>2.04%</td></tr>
<tr><th>32</th><td>183</td><td>1.8%</td></tr>
<tr><th>33</th><td>159</td><td>1.56%</td></tr>
<tr><th>34</th><td>121</td><td>1.19%</td></tr>
<tr><th>35</th><td>130</td><td>1.28%</td></tr>
<tr><th>36</th><td>100</td><td>0.98%</td></tr>
<tr><th>37</th><td>77</td><td>0.76%</td></tr>
<tr><th>38</th><td>56</td><td>0.55%</td></tr>
<tr><th>39</th><td>59</td><td>0.58%</td></tr>
<tr><th>40</th><td>60</td><td>0.59%</td></tr>
<tr><th>41</th><td>37</td><td>0.36%</td></tr>
<tr><th>42</th><td>38</td><td>0.37%</td></tr>
<tr><th>43</th><td>22</td><td>0.22%</td></tr>
<tr><th>44</th><td>32</td><td>0.31%</td></tr>
<tr><th>45</th><td>30</td><td>0.3%</td></tr>
<tr><th>46</th><td>11</td><td>0.11%</td></tr>
<tr><th>47</th><td>11</td><td>0.11%</td></tr>
<tr><th>48</th><td>13</td><td>0.13%</td></tr>
<tr><th>49</th><td>6</td><td>0.06%</td></tr>
<tr><th>50</th><td>8</td><td>0.08%</td></tr>
<tr><th>51</th><td>5</td><td>0.05%</td></tr>
<tr><th>52</th><td>3</td><td>0.03%</td></tr>
<tr><th>53</th><td>3</td><td>0.03%</td></tr>
<tr><th>54</th><td>3</td><td>0.03%</td></tr>
<tr><th>55</th><td>2</td><td>0.02%</td></tr>
<tr><th>56</th><td>0</td><td>0%</td></tr>
<tr><th>57</th><td>0</td><td>0%</td></tr>
<tr><th>58</th><td>0</td><td>0%</td></tr>
<tr><th>59</th><td>0</td><td>0%</td></tr>
<tr><th>60</th><td>1</td><td>0.01%</td></tr>
<tr><th>61</th><td>0</td><td>0%</td></tr>
<tr><th>62</th><td>0</td><td>0%</td></tr>
<tr><th>63</th><td>0</td><td>0%</td></tr>
<tr><th>64</th><td>0</td><td>0%</td></tr>
<tr><th>65</th><td>0</td><td>0%</td></tr>
<tr><th>66</th><td>0</td><td>0%</td></tr>
<tr><th>67</th><td>0</td><td>0%</td></tr>
<tr><th>68</th><td>0</td><td>0%</td></tr>
<tr><th>69</th><td>0</td><td>0%</td></tr>
<tr><th>70</th><td>1</td><td>0.01%</td></tr>
<tr><th>71</th><td>0</td><td>0%</td></tr>
<tr><th>72</th><td>0</td><td>0%</td></tr>
<tr><th>73</th><td>0</td><td>0%</td></tr>
<tr><th>74</th><td>0</td><td>0%</td></tr>
<tr><th>75</th><td>0</td><td>0%</td></tr>
<tr><th>76</th><td>0</td><td>0%</td></tr>
<tr><th>77</th><td>1</td><td>0.01%</td></tr>
<tr><th>78</th><td>0</td><td>0%</td></tr>
<tr><th>79</th><td>0</td><td>0%</td></tr>
<tr><th>80</th><td>0</td><td>0%</td></tr>
<tr><th>81</th><td>0</td><td>0%</td></tr>
<tr><th>82</th><td>0</td><td>0%</td></tr>
<tr><th>83</th><td>0</td><td>0%</td></tr>
<tr><th>84</th><td>0</td><td>0%</td></tr>
<tr><th>85</th><td>0</td><td>0%</td></tr>
<tr><th>86</th><td>0</td><td>0%</td></tr>
<tr><th>87</th><td>0</td><td>0%</td></tr>
<tr><th>88</th><td>0</td><td>0%</td></tr>
<tr><th>89</th><td>0</td><td>0%</td></tr>
<tr><th>90</th><td>0</td><td>0%</td></tr>
<tr><th>91</th><td>0</td><td>0%</td></tr>
<tr><th>92</th><td>0</td><td>0%</td></tr>
<tr><th>93</th><td>0</td><td>0%</td></tr>
<tr><th>94</th><td>0</td><td>0%</td></tr>
<tr><th>95</th><td>0</td><td>0%</td></tr>
<tr><th>96</th><td>0</td><td>0%</td></tr>
<tr><th>97</th><td>0</td><td>0%</td></tr>
<tr><th>98</th><td>0</td><td>0%</td></tr>
<tr><th>99</th><td>0</td><td>0%</td></tr>
<tr><th>100</th><td>9</td><td>0.09%</td></tr>
</tbody></table>
</div>
<h2>02. Gender</h2>
<p>Valid responses: 10,337</p>
<table class='poll result'>
    <colgroup>
        <col class='col2 w6'>
        <col class='col3q'>
        <col class='col4q'>
    </colgroup>
<tbody><tr><th>Male</th><td>8,806</td><td>85.19%</td></tr>
<tr><th>Female</th><td>1,531</td><td>14.81%</td></tr>
</tbody></table>
<h2>03. Location</h2>
<p>Valid responses: 9,981</p>
<table class='poll sortable'>
    <colgroup>
        <col class='col2q'>
        <col class='col3q'>
        <col class='col4q'>
    </colgroup>
<tbody>
<tr><th><u>Location</u></th><th><u>Responses</u></th><th><u>Percentage</u></th></tr>
<tr><th>Hokkaido</th><td>399</td><td>4%</td></tr>
<tr><td><b>Northern Tohoku</b><br>(Aomori, Iwate, Akita)</td><td>187</td><td>1.87%</td></tr>
<tr><td><b>Southern Tohoku</b><br>(Miyagi, Yamagata, Fukushima)</td><td>338</td><td>3.39%</td></tr>
<tr><td><b>Northern Kanto</b><br>(Ibaraki, Tochigi, Gunma)</td><td>510</td><td>5.11%</td></tr>
<tr><td><b>Southern Kanto</b><br>(Saitama, Chiba, Tokyo, Kanagawa)</td><td>2,958</td><td>29.64%</td></tr>
<tr><td><b>Hokuriku</b><br>(Toyama, Ishikawa, Fukui)</td><td>191</td><td>1.91%</td></tr>
<tr><td><b>Koshinetsu</b><br>(Niigata, Yamanashi, Nagano)</td><td>335</td><td>3.36%</td></tr>
<tr><td><b>Tokai</b><br>(Aichi, Mie, Gifu, Shizuoka)</td><td>1,006</td><td>10.08%</td></tr>
<tr><td><b>Kansai</b><br>(Osaka, Kyoto, Hyogo, Nara, Shiga, Wakayama)</td><td>1,259</td><td>12.61%</td></tr>
<tr><td><b>Chugoku</b><br>(Tottori, Shimane, Okayama, Hiroshima, Yamaguchi)</td><td>425</td><td>4.26%</td></tr>
<tr><td><b>Shikoku</b><br>(Tokushima, Ehime, Kagawa, Kochi)</td><td>168</td><td>1.68%</td></tr>
<tr><td><b>Northern Kyushu</b><br>(Fukuoka, Saga, Nagasaki, Oita)</td><td>398</td><td>3.99%</td></tr>
<tr><td><b>Southern Kyushu</b><br>(Kumamoto, Miyazaki, Kagoshima, Okinawa)</td><td>225</td><td>2.25%</td></tr>
<tr><td><b>East Asia</b><br>(China, Taiwan, Korea, etc.)</td><td>1,015</td><td>10.17%</td></tr>
<tr><th>Southeast Asia</th><td>85</td><td>0.85%</td></tr>
<tr><th>South, Central, West Asia</th><td>14</td><td>0.14%</td></tr>
<tr><th>Europe</th><td>154</td><td>1.54%</td></tr>
<tr><th>Africa</th><td>10</td><td>0.1%</td></tr>
<tr><th>North America</th><td>224</td><td>2.24%</td></tr>
<tr><th>South America</th><td>52</td><td>0.52%</td></tr>
<tr><th>Oceania</th><td>28</td><td>0.28%</td></tr>
</tbody></table>
<h2>04. Difficulty level 1cc'd</h2>
<div id='clear_dummy' class='dummy'><div class='dummy_sub'></div></div>
<div id='clear_container' class='container'>
    <table id='clear_table' class='poll table result'>
        <colgroup>
            <col class='col2 w7'>
            <col class='col3q'>
            <col class='col4 w7'>
            <col class='col5 w7'>
            <col class='col2 w7'>
            <col class='col3 w7'>
            <col class='col4 w7'>
            <col class='col2 w7'>
        </colgroup>
    <tbody><tr><th><u>Game</u></th><th><u>Responses</u></th><th><u>Not played</u></th><th><u>Not cleared</u></th>
        <th><u>Easy 1cc</u></th><th><u>Normal 1cc</u></th><th><u>Hard 1cc</u></th><th><u>Lunatic 1cc</u></th></tr>
    <tr><th rowspan='3'>EoSD</th><td rowspan='3'>8,891</td><td>2,000</td><td>920</td><td>1,507</td><td>2,902</td><td>890</td><td>672</td></tr>
    <tr><td>－</td><td>13.35%</td><td>21.87%</td><td>42.11%</td><td>12.92%</td><td>9.75%</td></tr>
    <tr><td>22.49%</td><td class='percentage' colspan='5'>77.51%</td></tr>
    <tr><th rowspan='3'>PCB</th><td rowspan='3'>8,742</td><td>2,243</td><td>836</td><td>1,281</td><td>2,692</td><td>947</td><td>743</td></tr>
    <tr><td>－</td><td>12.86%</td><td>19.71%</td><td>41.42%</td><td>14.57%</td><td>11.43%</td></tr>
    <tr><td>25.66%</td><td class='percentage' colspan='5'>74.34%</td></tr>
    <tr><th rowspan='3'>IN</th><td rowspan='3'>8,704</td><td>2,162</td><td>611</td><td>1,335</td><td>2,815</td><td>963</td><td>818</td></tr>
    <tr><td>－</td><td>9.34%</td><td>20.41%</td><td>43.03%</td><td>14.72%</td><td>12.5%</td></tr>
    <tr><td>24.84%</td><td class='percentage' colspan='5'>75.16%</td></tr>
    <tr><th rowspan='3'>PoFV</th><td rowspan='3'>8,413</td><td>3,384</td><td>650</td><td>1,227</td><td>2,095</td><td>429</td><td>628</td></tr>
    <tr><td>－</td><td>12.93%</td><td>24.4%</td><td>41.66%</td><td>8.53%</td><td>12.49%</td></tr>
    <tr><td>40.22%</td><td class='percentage' colspan='5'>59.78%</td></tr>
    <tr><th rowspan='3'>MoF</th><td rowspan='3'>8,572</td><td>2,453</td><td>781</td><td>1,007</td><td>2,736</td><td>861</td><td>734</td></tr>
    <tr><td>－</td><td>12.76%</td><td>16.46%</td><td>44.71%</td><td>14.07%</td><td>12%</td></tr>
    <tr><td>28.62%</td><td class='percentage' colspan='5'>71.38%</td></tr>
    <tr><th rowspan='3'>SA</th><td rowspan='3'>8,458</td><td>2,735</td><td>1,077</td><td>1,385</td><td>2,131</td><td>597</td><td>533</td></tr>
    <tr><td>－</td><td>18.82%</td><td>24.2%</td><td>37.24%</td><td>10.43%</td><td>9.31%</td></tr>
    <tr><td>32.34%</td><td class='percentage' colspan='5'>67.66%</td></tr>
    <tr><th rowspan='3'>UFO</th><td rowspan='3'>8,351</td><td>3,062</td><td>1,124</td><td>1,125</td><td>2,166</td><td>502</td><td>372</td></tr>
    <tr><td>－</td><td>21.25%</td><td>21.27%</td><td>40.95%</td><td>9.49%</td><td>7.03%</td></tr>
    <tr><td>36.67%</td><td class='percentage' colspan='5'>63.33%</td></tr>
    <tr><th rowspan='3'>TD</th><td rowspan='3'>8,389</td><td>3,126</td><td>784</td><td>995</td><td>2,325</td><td>647</td><td>512</td></tr>
    <tr><td>－</td><td>14.9%</td><td>18.91%</td><td>44.18%</td><td>12.29%</td><td>9.73%</td></tr>
    <tr><td>37.26%</td><td class='percentage' colspan='5'>62.74%</td></tr>
    <tr><th rowspan='3'>DDC</th><td rowspan='3'>8,351</td><td>3,186</td><td>783</td><td>1,168</td><td>2,158</td><td>538</td><td>518</td></tr>
    <tr><td>－</td><td>15.16%</td><td>22.61%</td><td>41.78%</td><td>10.42%</td><td>10.03%</td></tr>
    <tr><td>38.15%</td><td class='percentage' colspan='5'>61.85%</td></tr>
    <tr><th rowspan='3'>LoLK (Pointdevice)</th><td rowspan='3'>8,361</td><td>3,255</td><td>940</td><td>1,159</td><td>2,021</td><td>411</td><td>575</td></tr>
    <tr><td>－</td><td>18.41%</td><td>22.7%</td><td>39.58%</td><td>8.05%</td><td>11.26%</td></tr>
    <tr><td>38.93%</td><td class='percentage' colspan='5'>61.07%</td></tr>
    <tr><th rowspan='3'>LoLK (Legacy)</th><td rowspan='3'>8,082</td><td>3,318</td><td>2,189</td><td>822</td><td>1,071</td><td>272</td><td>410</td></tr>
    <tr><td>－</td><td>45.95%</td><td>17.25%</td><td>22.48%</td><td>5.71%</td><td>8.61%</td></tr>
    <tr><td>41.05%</td><td class='percentage' colspan='5'>58.95%</td></tr>
    <tr><th rowspan='3'>HSiFS</th><td rowspan='3'>8,396</td><td>3,310</td><td>893</td><td>1,224</td><td>1,994</td><td>405</td><td>570</td></tr>
    <tr><td>－</td><td>17.56%</td><td>24.07%</td><td>39.21%</td><td>7.96%</td><td>11.21%</td></tr>
    <tr><td>39.42%</td><td class='percentage' colspan='5'>60.58%</td></tr>
    </tbody></table>
</div>
<h2>05. Publications subscribed to</h2>
<h3>Wild and Horned Hermit</h3>
<p>Valid responses: 8,667</p>
<table class='poll result'>
    <colgroup>
        <col class='col2q'>
        <col class='col3q'>
        <col class='col4q'>
    </colgroup>
<tbody><tr><th>Not bought</th><td>3,454</td><td>39.85%</td></tr>
<tr><th>Bought the tankobon volumes</th><td>4,946</td><td>57.07%</td></tr>
<tr><th>Bought the serialization (Febri)</th><td>267</td><td>3.08%</td></tr>
</tbody></table>
<h3>Touhou Sangetsusei</h3>
<p>Valid responses: 8,421</p>
<table class='poll result'>
    <colgroup>
        <col class='col2q'>
        <col class='col3q'>
        <col class='col4q'>
    </colgroup>
<tbody><tr><th>Not bought</th><td>4,113</td><td>48.84%</td></tr>
<tr><th>Bought the tankobon volumes</th><td>4,006</td><td>47.57%</td></tr>
<tr><th>Bought the serialization (Comp Ace)</th><td>302</td><td>3.59%</td></tr>
</tbody></table>
<h3>Strange Creators of Outer World</h3>
<p>Valid responses: 8,253</p>
<table class='poll result'>
    <colgroup>
        <col class='col2q'>
        <col class='col3q'>
        <col class='col4q'>
    </colgroup>
<tbody><tr><th>Not bought</th><td>5,029</td><td>60.94%</td></tr>
<tr><th>Bought the serialization (Strange Creators of Outer World)</th><td>3,224</td><td>39.06%</td></tr>
</tbody></table>
<h2>06. What do you like about Touhou? (Multiple answers possible)</h2>
<p>Valid responses: 10,922</p>
<table class='poll sortable'>
    <colgroup>
        <col class='col2q'>
        <col class='col3q'>
        <col class='col4q'>
    </colgroup>
<tbody>
<tr><th><u>Aspect</u></th><th><u>Responses</u></th><th><u>Percentage</u></th>
<tr><th>Music</th><td>10,487</td><td>96.02%</td></tr>
<tr><th>Games</th><td>6,381</td><td>58.42%</td></tr>
<tr><th>Characters</th><td>10,060</td><td>92.11%</td></tr>
<tr><th>Story</th><td>6,872</td><td>62.92%</td></tr>
<tr><th>Universe</th><td>9,085</td><td>83.18%</td></tr>
<tr><th>Fanworks</th><td>8,351</td><td>76.46%</td></tr>
<tr><th>Fandom</th><td>4,477</td><td>40.99%</td></tr>
</tbody></table>
<h2>07. When did you discover Touhou?</h2>
<p>Valid responses: 10,574</p>
<table class='poll sortable'>
    <colgroup>
        <col class='col2q'>
        <col class='col3q'>
        <col class='col4q'>
    </colgroup>
<tbody>
<tr><th><u>Time period</u></th><th><u>Responses</u></th><th><u>Percentage</u></th></tr>
<tr><td><strong>PC-98 - Shuusou Gyoku</strong><br>(October 1995 - December 2000)</td><td>58</td><td>0.55%</td></tr>
<tr><td><strong>Shuusou Gyoku - EoSD</strong><br>(December 2000 - August 2002)</td><td>88</td><td>0.83%</td></tr>
<tr><td><strong>EoSD - PCB</strong><br>(August 2002 - August 2003)</td><td>373</td><td>3.53%</td></tr>
<tr><td><strong>PCB - IN</strong><br>(August 2003 - August 2004)</td><td>283</td><td>2.68%</td></tr>
<tr><td><strong>IN - IaMP</strong><br>(August 2004 - December 2004)</td><td>221</td><td>2.09%</td></tr>
<tr><td><strong>IaMP - PoFV</strong><br>(December 2004 - August 2005)</td><td>140</td><td>1.32%</td></tr>
<tr><td><strong>PoFV - StB</strong><br>(August 2005 - December 2005)</td><td>134</td><td>1.27%</td></tr>
<tr><td><strong>StB - PMiSS</strong><br>(December 2005 - December 2006)</td><td>169</td><td>1.6%</td></tr>
<tr><td><strong>PMiSS - MoF</strong><br>(December 2006 - August 2007)</td><td>562</td><td>5.31%</td></tr>
<tr><td><strong>MoF - SA</strong><br>(August 2007 - August 2008)</td><td>1,130</td><td>10.69%</td></tr>
<tr><td><strong>SA - UFO</strong><br>(August 2008 - August 2009)</td><td>886</td><td>8.38%</td></tr>
<tr><td><strong>UFO - GFW</strong><br>(August 2009 - August 2010)</td><td>655</td><td>6.19%</td></tr>
<tr><td><strong>GFW - TD</strong><br>(August 2010 - August 2011)</td><td>636</td><td>6.01%</td></tr>
<tr><td><strong>TD - SoPM</strong><br>(August 2011 - April 2012)</td><td>818</td><td>7.74%</td></tr>
<tr><td><strong>SoPM - DDC</strong><br>(April 2012 - August 2013)</td><td>891</td><td>8.43%</td></tr>
<tr><td><strong>PC-98 - ISC</strong><br>(August 2013 - May 2014)</td><td>994</td><td>9.4%</td></tr>
<tr><td><strong>ISC - LoLK</strong><br>(May 2014 - August 2015)</td><td>1,006</td><td>9.51%</td></tr>
<tr><td><strong>LoLK - DBOA</strong><br>(August 2015 - August 2016)</td><td>762</td><td>7.21%</td></tr>
<tr><td><strong>DBOA - HSiFS</strong><br>(August 2016 - August 2017)</td><td>386</td><td>3.65%</td></tr>
<tr><td><strong>HSiFS - now</strong><br>(August 2017 - February 2, 2019)</td><td>382</td><td>3.61%</td></tr>
</tbody></table>
<h2>08. How did you discover Touhou?</h2>
<p>Valid responses: 10,081</p>
<table class='poll sortable'>
    <colgroup>
        <col class='col2 w36'>
        <col class='col3q'>
        <col class='col4q'>
    </colgroup>
<tbody>
<tr><th><u>Means of discovery</u></th><th><u>Responses</u></th><th><u>Percentage</u></th></tr>
<tr><th>Offline (School, club activities, family, etc.)</th><td>2,531</td><td>25.11%</td></tr>
<tr><th>Online games, online friends, chat (IRC, etc.)</th><td>426</td><td>4.23%</td></tr>
<tr><th>Personal sites, blogs, news sites, etc.</th><td>363</td><td>3.6%</td></tr>
<tr><th>Image sites (Pixiv, Nijie, TINAMI, SNS, etc.)</th><td>327</td><td>3.24%</td></tr>
<tr><th>Anonymous boards (2ch, Futaba, etc.)</th><td>222</td><td>2.2%</td></tr>
<tr><th>Niconico</th><td>2,336</td><td>23.17%</td></tr>
<tr><th>Other video sites (YouTube, etc.)</th><td>2,679</td><td>26.57%</td></tr>
<tr><th>Twitter</th><td>49</td><td>0.49%</td></tr>
<tr><th>Magazine articles, TV programs, etc.</th><td>46</td><td>0.46%</td></tr>
<tr><th>Doujinshi (Comiket, etc.)</th><td>95</td><td>0.94%</td></tr>
<tr><th>Doujin stores, general bookstores, etc.</th><td>160</td><td>1.59%</td></tr>
<tr><th>Rhythm games that contain Touhou music</th><td>521</td><td>5.17%</td></tr>
<tr><th>When looking for interesting games</th><td>326</td><td>3.23%</td></tr>
</tbody></table>
<h2>08. Correlation between when and how people discovered Touhou</h2>
<div id='corr_dummy' class='dummy'><div class='dummy_sub'></div></div>
<div id='corr_container' class='container'>
    <table id='corr_table' class='poll table result'>
        <colgroup>
            <col class='col2 w4'>
            <col class='col3 w42'>
            <col class='col4 w42'>
            <col class='col5 w42'>
            <col class='col2 w42'>
            <col class='col3 w42'>
            <col class='col4 w42'>
            <col class='col5 w42'>
            <col class='col2 w42'>
            <col class='col3 w42'>
            <col class='col4 w42'>
            <col class='col5 w42'>
            <col class='col2 w42'>
            <col class='col3 w42'>
        </colgroup>
    <tbody><tr><th><u>Period</u></th><th><u>Offline</u></th><th><u>Online</u></th><th><u>Personal sites</u></th>
        <th><u>Image sites</u></th><th><u>Anon. boards</u></th><th><u>Nico</u></th><th><u>Other video sites</u></th>
        <th><u>Twitter</u></th><th><u>Magazines<br>/TV</u></th><th><u>Doujinshi</u></th>
        <th><u>Doujin shops</u></th><th><u>Shmups</u></th><th><u>Fighters</u></th></tr>
    <tr><th rowspan='2'>PC98-SG</th><td>15</td><td>5</td><td>0</td><td>3</td><td>1</td><td>1</td><td>2</td><td>0</td><td>1</td><td>9</td><td>2</td><td>5</td><td>8</td></tr>
    <tr><td>29%</td><td>10%</td><td>0%</td><td>6%</td><td>2%</td><td>2%</td><td>4%</td><td>0%</td><td>2%</td><td>17%</td><td>4%</td><td>10%</td><td>15%</td></tr>
    <tr><th rowspan='2'>SG-EoSD</th><td>21</td><td>2</td><td>6</td><td>3</td><td>5</td><td>9</td><td>11</td><td>0</td><td>2</td><td>3</td><td>6</td><td>4</td><td>9</td></tr>
    <tr><td>26%</td><td>2%</td><td>7%</td><td>4%</td><td>6%</td><td>11%</td><td>14%</td><td>0%</td><td>2%</td><td>4%</td><td>7%</td><td>5%</td><td>11%</td></tr>
    <tr><th rowspan='2'>EoSD-PCB</th><td>111</td><td>23</td><td>37</td><td>12</td><td>7</td><td>54</td><td>28</td><td>1</td><td>6</td><td>10</td><td>21</td><td>10</td><td>28</td></tr>
    <tr><td>32%</td><td>7%</td><td>11%</td><td>3%</td><td>2%</td><td>16%</td><td>8%</td><td>0%</td><td>2%</td><td>3%</td><td>6%</td><td>3%</td><td>8%</td></tr>
    <tr><th rowspan='2'>PCB-IN</th><td>97</td><td>19</td><td>28</td><td>2</td><td>11</td><td>45</td><td>14</td><td>1</td><td>4</td><td>3</td><td>16</td><td>11</td><td>20</td></tr>
    <tr><td>36%</td><td>7%</td><td>10%</td><td>1%</td><td>4%</td><td>17%</td><td>5%</td><td>0%</td><td>1%</td><td>1%</td><td>6%</td><td>4%</td><td>7%</td></tr>
    <tr><th rowspan='2'>IN-IaMP</th><td>74</td><td>16</td><td>22</td><td>3</td><td>16</td><td>22</td><td>6</td><td>0</td><td>0</td><td>4</td><td>12</td><td>9</td><td>22</td></tr>
    <tr><td>36%</td><td>8%</td><td>11%</td><td>1%</td><td>8%</td><td>11%</td><td>3%</td><td>0%</td><td>0%</td><td>2%</td><td>6%</td><td>4%</td><td>11%</td></tr>
    <tr><th rowspan='2'>IaMP-PoFV</th><td>39</td><td>13</td><td>15</td><td>2</td><td>8</td><td>18</td><td>11</td><td>0</td><td>1</td><td>3</td><td>6</td><td>7</td><td>6</td></tr>
    <tr><td>30%</td><td>10%</td><td>12%</td><td>2%</td><td>6%</td><td>14%</td><td>9%</td><td>0%</td><td>1%</td><td>2%</td><td>5%</td><td>5%</td><td>5%</td></tr>
    <tr><th rowspan='2'>PoFV-StB</th><td>43</td><td>5</td><td>11</td><td>1</td><td>7</td><td>17</td><td>8</td><td>0</td><td>1</td><td>3</td><td>6</td><td>10</td><td>9</td></tr>
    <tr><td>36%</td><td>4%</td><td>9%</td><td>1%</td><td>6%</td><td>14%</td><td>7%</td><td>0%</td><td>1%</td><td>2%</td><td>5%</td><td>8%</td><td>7%</td></tr>
    <tr><th rowspan='2'>StB-PMiSS</th><td>39</td><td>6</td><td>15</td><td>4</td><td>20</td><td>31</td><td>14</td><td>0</td><td>4</td><td>4</td><td>6</td><td>3</td><td>9</td></tr>
    <tr><td>25%</td><td>4%</td><td>10%</td><td>3%</td><td>13%</td><td>20%</td><td>9%</td><td>0%</td><td>3%</td><td>3%</td><td>4%</td><td>2%</td><td>6%</td></tr>
    <tr><th rowspan='2'>PMiSS-MoF</th><td>116</td><td>17</td><td>29</td><td>9</td><td>19</td><td>218</td><td>72</td><td>1</td><td>2</td><td>6</td><td>14</td><td>13</td><td>9</td></tr>
    <tr><td>22%</td><td>3%</td><td>6%</td><td>2%</td><td>4%</td><td>42%</td><td>14%</td><td>0%</td><td>0%</td><td>1%</td><td>3%</td><td>2%</td><td>2%</td></tr>
    <tr><th rowspan='2'>MoF-SA</th><td>283</td><td>31</td><td>43</td><td>24</td><td>30</td><td>431</td><td>144</td><td>1</td><td>4</td><td>3</td><td>11</td><td>17</td><td>27</td></tr>
    <tr><td>27%</td><td>3%</td><td>4%</td><td>2%</td><td>3%</td><td>41%</td><td>14%</td><td>0%</td><td>0%</td><td>0%</td><td>1%</td><td>2%</td><td>3%</td></tr>
    <tr><th rowspan='2'>SA-UFO</th><td>231</td><td>31</td><td>22</td><td>23</td><td>13</td><td>293</td><td>159</td><td>0</td><td>4</td><td>10</td><td>10</td><td>23</td><td>16</td></tr>
    <tr><td>28%</td><td>4%</td><td>3%</td><td>3%</td><td>2%</td><td>35%</td><td>19%</td><td>0%</td><td>0%</td><td>1%</td><td>1%</td><td>3%</td><td>2%</td></tr>
    <tr><th rowspan='2'>UFO-GFW</th><td>141</td><td>31</td><td>19</td><td>28</td><td>14</td><td>184</td><td>146</td><td>3</td><td>6</td><td>2</td><td>8</td><td>18</td><td>10</td></tr>
    <tr><td>23%</td><td>5%</td><td>3%</td><td>5%</td><td>2%</td><td>30%</td><td>24%</td><td>0%</td><td>1%</td><td>0%</td><td>1%</td><td>3%</td><td>2%</td></tr>
    <tr><th rowspan='2'>GFW-TD</th><td>135</td><td>29</td><td>11</td><td>20</td><td>7</td><td>147</td><td>194</td><td>2</td><td>1</td><td>5</td><td>4</td><td>19</td><td>20</td></tr>
    <tr><td>23%</td><td>5%</td><td>2%</td><td>3%</td><td>1%</td><td>25%</td><td>33%</td><td>0%</td><td>0%</td><td>1%</td><td>1%</td><td>3%</td><td>3%</td></tr>
    <tr><th rowspan='2'>TD-PMiSS</th><td>171</td><td>32</td><td>18</td><td>36</td><td>9</td><td>168</td><td>256</td><td>0</td><td>1</td><td>4</td><td>9</td><td>41</td><td>22</td></tr>
    <tr><td>22%</td><td>4%</td><td>2%</td><td>5%</td><td>1%</td><td>22%</td><td>33%</td><td>0%</td><td>0%</td><td>1%</td><td>1%</td><td>5%</td><td>3%</td></tr>
    <tr><th rowspan='2'>PMiSS-DDC</th><td>202</td><td>23</td><td>15</td><td>31</td><td>16</td><td>146</td><td>313</td><td>5</td><td>3</td><td>3</td><td>7</td><td>43</td><td>15</td></tr>
    <tr><td>25%</td><td>3%</td><td>2%</td><td>4%</td><td>2%</td><td>18%</td><td>38%</td><td>1%</td><td>0%</td><td>0%</td><td>1%</td><td>5%</td><td>2%</td></tr>
    <tr><th rowspan='2'>DDC-ISC</th><td>216</td><td>36</td><td>9</td><td>39</td><td>11</td><td>181</td><td>330</td><td>6</td><td>3</td><td>7</td><td>6</td><td>58</td><td>27</td></tr>
    <tr><td>23%</td><td>4%</td><td>1%</td><td>4%</td><td>1%</td><td>19%</td><td>36%</td><td>1%</td><td>0%</td><td>1%</td><td>1%</td><td>6%</td><td>3%</td></tr>
    <tr><th rowspan='2'>DDC-LoLK</th><td>218</td><td>42</td><td>15</td><td>39</td><td>7</td><td>143</td><td>372</td><td>8</td><td>1</td><td>3</td><td>4</td><td>64</td><td>19</td></tr>
    <tr><td>23%</td><td>4%</td><td>2%</td><td>4%</td><td>1%</td><td>15%</td><td>40%</td><td>1%</td><td>0%</td><td>0%</td><td>0%</td><td>7%</td><td>2%</td></tr>
    <tr><th rowspan='2'>LoLK-DBOA</th><td>170</td><td>22</td><td>23</td><td>17</td><td>12</td><td>103</td><td>263</td><td>8</td><td>1</td><td>3</td><td>4</td><td>50</td><td>17</td></tr>
    <tr><td>25%</td><td>3%</td><td>3%</td><td>2%</td><td>2%</td><td>15%</td><td>38%</td><td>1%</td><td>0%</td><td>0%</td><td>1%</td><td>7%</td><td>2%</td></tr>
    <tr><th rowspan='2'>DBOA-HSiFS</th><td>79</td><td>14</td><td>12</td><td>11</td><td>5</td><td>42</td><td>118</td><td>3</td><td>1</td><td>3</td><td>2</td><td>45</td><td>17</td></tr>
    <tr><td>22%</td><td>4%</td><td>3%</td><td>3%</td><td>1%</td><td>12%</td><td>34%</td><td>1%</td><td>0%</td><td>1%</td><td>1%</td><td>13%</td><td>5%</td></tr>
    </tbody></table>
</div>
<h2>09. Participation in doujin events such as Comiket and Reitaisai (multiple answers possible)</h2>
<p>Valid responses: 10,528</p>
<table class='poll result'>
    <colgroup>
        <col class='col2q'>
        <col class='col3q'>
        <col class='col4q'>
        <col class='col5q'>
        <col class='col2qs'>
    </colgroup>
<tbody><tr><th>No participation</th><td>4,770</td><td>45.31%</td><td>－</td><td>－</td></tr>
<tr><th>Bought official works</th><td rowspan='13'>5,758</td><td rowspan='13'>54.69%</td><td>2,842</td><td>49.36%</td></tr>
<tr><th>Bought doujinshi</th><td>4,753</td><td>82.55%</td></tr>
<tr><th>Bought doujin music</th><td>3,746</td><td>65.06%</td></tr>
<tr><th>Bought doujin games</th><td>2,087</td><td>36.25%</td></tr>
<tr><th>Bought doujin goods</th><td>3,246</td><td>56.37%</td></tr>
<tr><th>Bought corporate works</th><td>875</td><td>15.2%</td></tr>
<tr><th>Distributed works (as a circle)</th><td>1,132</td><td>19.66%</td></tr>
<tr><th>Staff</th><td>144</td><td>2.5%</td></tr>
<tr><th>Interacted with circles and friends</th><td>1,810</td><td>31.43%</td></tr>
<tr><th>Cosplayed</th><td>361</td><td>6.27%</td></tr>
<tr><th>Viewed or photographed cosplay</th><td>888</td><td>15.42%</td></tr>
<tr><th>Corporate collab events (for rhythm games, etc)</th><td>507</td><td>8.81%</td></tr>
<tr><th>Performed live music</th><td>619</td><td>10.75%</td></tr>
</tbody></table>
<h2>10. Have you voted on the Touhou Popularity Poll before?</h2>
<p>Valid responses: 10,822</p>
<table class='poll result'>
<colgroup>
    <col class='col2q'>
    <col class='col3q'>
    <col class='col5q'>
</colgroup>
<tbody><tr><th>Never voted before</th><td>3,057</td><td>28.25%</td></tr>
<tr><th>Voted 1 to 3 times</th><td>4,695</td><td>43.38%</td></tr>
<tr><th>Voted 4 or more times</th><td>3,070</td><td>28.37%</td></tr>
</tbody></table>
            <h1 id='Extra'>Extra Statistics</h1>
            <p>The following table shows the total number of points for all the newly introduced Stage bosses and midbosses
                of each Windows maingame (except Alice counts for PCB and Aya counts for PoFV), including Reimu and Marisa as a separate entity.</p>
            <table id='maingame_chars' class='poll sortable'>
                <colgroup>
                    <col class='col2game'>
                    <col class='col3'>
                    <col class='col5per'>
                </colgroup>
                <thead>
                    <tr><th><u>Rank</u></th><th><u>Name</u></th><th><u>Points</u></th></tr>
                </thead>
                <tbody>
                    <tr><td>1</td><td class='left'>EoSD</td><td>26,981</td></tr>
                    <tr><td>2</td><td class='left'>PCB</td><td>20,550</td></tr>
                    <tr><td>3</td><td class='left'>SA</td><td>15,853</td></tr>
                    <tr><td>4</td><td class='left'>Reimu &amp; Marisa</td><td>12,837</td></tr>
                    <tr><td>5</td><td class='left'>MoF</td><td>12,280</td></tr>
                    <tr><td>6</td><td class='left'>IN</td><td>12,595</td></tr>
                    <tr><td>7</td><td class='left'>LoLK</td><td>9,314</td></tr>
                    <tr><td>8</td><td class='left'>UFO</td><td>8,297</td></tr>
                    <tr><td>9</td><td class='left'>PoFV</td><td>7,545</td></tr>
                    <tr><td>10</td><td class='left'>DDC</td><td>6,837</td></tr>
                    <tr><td>11</td><td class='left'>TD</td><td>6,651</td></tr>
                    <tr><td>12</td><td class='left'>HSiFS</td><td>4,333</td></tr>
                </tbody>
            </table>
            <p>This table shows the total number of points for all newly introduced soundtracks of each Windows maingame
            (except PoFV, as it has many remixes; the IN Stage 4 boss themes count for IN; the Player's Score theme counts for MoF).</p>
            <table id='maingame_music' class='poll sortable'>
                <colgroup>
                    <col class='col2game'>
                    <col class='col3'>
                    <col class='col5per'>
                </colgroup>
                <thead>
                    <tr><th><u>Rank</u></th><th><u>Name</u></th><th><u>Points</u></th></tr>
                </thead>
                <tbody>
                    <tr><td>1</td><td class='left'>EoSD</td><td>26,853</td></tr>
                    <tr><td>2</td><td class='left'>PCB</td><td>18,670</td></tr>
                    <tr><td>3</td><td class='left'>IN</td><td>18,238</td></tr>
                    <tr><td>4</td><td class='left'>MoF</td><td>16,063</td></tr>
                    <tr><td>5</td><td class='left'>SA</td><td>13,668</td></tr>
                    <tr><td>6</td><td class='left'>LoLK</td><td>10,588</td></tr>
                    <tr><td>7</td><td class='left'>UFO</td><td>7,680</td></tr>
                    <tr><td>8</td><td class='left'>DDC</td><td>7,550</td></tr>
                    <tr><td>9</td><td class='left'>TD</td><td>6,094</td></tr>
                    <tr><td>10</td><td class='left'>HSiFS</td><td>5,602</td></tr>
                </tbody>
            </table>
            <p>This table shows the highest and lowest ranked characters and Stage and Boss themes for each maingame (except PoFV themes, as that game has many remixes).
            Title, credits and ending are not included, because in that case the lowest scoring theme is the ending theme for every game.</p>
            <div id='highlow_dummy' class='dummy'><div class='dummy_sub'></div></div>
            <div id='highlow_container' class='container'>
                <table id='maingame_highlow' class='poll result'>
                    <colgroup>
                        <col class='col2game'>
                        <col class='col3 w10'>
                        <col class='col5 w10'>
                        <col class='col2'>
                        <col class='col3'>
                    </colgroup>
                    <thead>
                        <tr><th><u>Game</u></th><th><u>Highest Char</u></th><th><u>Lowest Char</u></th><th><u>Highest Theme</u></th><th><u>Lowest Theme</u></th></tr>
                    </thead>
                    <tbody>
    <tr><td>EoSD</td><td>Remilia (#5)</td><td>Koakuma (#65)</td><td>Septette for a Dead Princess (#1)</td><td>The Young Descendant of Tepes (#152)</td></tr>
    <tr><td>PCB</td><td>Youmu (#3)</td><td>Merlin (#109)</td><td>Bloom Nobly, Ink-Black Cherry Blossom ~ Border of Life (#5)</td><td>Youkai Domination (#181)</td></tr>
    <tr><td>IN</td><td>Mokou (#11)</td><td>Wriggle (#85)</td><td>Reach for the Moon, Immortal Smoke (#6)</td><td>Illusionary Night ~ Ghostly Eyes (#205)</td></tr>
    <tr><td>PoFV</td><td>Aya (#9)</td><td>Medicine (#94)</td><td>-</td><td>-</td></tr>
    <tr><td>MoF</td><td>Sanae (#13)</td><td>Minoriko (#84)</td><td>The Gensokyo The Gods Loved (#8)</td><td>Cemetery of Onbashira ~ Grave of Being (#188)</td></tr>
    <tr><td>SA</td><td>Koishi (#4)</td><td>Kisume (#115)</td><td>Hartmann's Youkai Girl (#4)</td><td>The Sealed-Away Youkai ~ Lost Place (#225)</td></tr>
    <tr><td>UFO</td><td>Kogasa (#19)</td><td>Ichirin (#100)</td><td>Emotional Skyscraper ~ Cosmic Mind (#16)</td><td>The Sealed Cloud Route (#313)</td></tr>
    <tr><td>TD</td><td>Miko (#40)</td><td>Yoshika (#90)</td><td>Desire Drive (#22)</td><td>Welcome to Youkai Temple (#313)</td></tr>
    <tr><td>DDC</td><td>Seija (#31)</td><td>Yatsuhashi (#107)</td><td>Inchlings of the Shining Needle ~ Little Princess (#11)</td><td>The Exaggerated Castle Keep (#357)</td></tr>
    <tr><td>LoLK</td><td>Junko (#28)</td><td>Ringo (#105)</td><td>Pure Furies ~ Whereabouts of the Heart (#3)</td><td>The Lake Reflects the Cleansed Moonlight (#278)</td></tr>
    <tr><td>HSiFS</td><td>Okina (#48)</td><td>Nemuno (#111)</td><td>Secret God Matara ~ Hidden Star in All Seasons. (#27)</td><td>The Colorless Wind on Youkai Mountain (#347)</td></tr>
                    </tbody>
                </table>
            </div>
            <h2 id='MusicByGame'>Music By Game</h2>
            <h3>EoSD</h3>
            <div id='eosd_dummy' class='dummy'><div class='dummy_sub'></div></div>
            <div id='eosd_container' class='container'>
                <table id='eosd_table' class='poll table sortable'>
                    <colgroup>
                        <col class='col1'>
                        <col class='col2game'>
                        <col class='col3game'>
                        <col class='col4game'>
                        <col class='col5'>
                        <col class='col6per'>
                        <col class='col7per'>
                        <col class='col8per'>
                    </colgroup>
                    <thead>
                        <tr>
                            <th id='eosd_head' class='head noborders'></th>
                            <th>Rank</th>
                            <th>2018 rank</th>
                            <th>2017 rank</th>
                            <th>Name</th>
                            <th>Points</th>
                            <th>No. 1 Votes</th>
                            <th>Comments</th>
                        </tr>
                    </thead>
                    <tbody>
    <tr><td>1</td><td>2</td><td>2</td><td class='left'>Septette for a Dead Princess</td><td>5,757</td><td>1,158</td><td>389</td><td class='hidden'></td></tr>
    <tr><td>2</td><td>1</td><td>1</td><td class='left'>U.N. Owen Was Her?</td><td>5,529</td><td>1,152</td><td>384</td><td class='hidden'></td></tr>
    <tr><td>9</td><td>8</td><td>9</td><td class='left'>Shanghai Teahouse ~ Chinese Tea</td><td>3,118</td><td>505</td><td>213</td><td class='hidden'></td></tr>
    <tr><td>19</td><td>16</td><td>16</td><td class='left'>Lunar Clock ~ Luna Dial</td><td>1,969</td><td>234</td><td>124</td><td class='hidden'></td></tr>
    <tr><td>25</td><td>28</td><td>31</td><td class='left'>Tomboyish Girl in Love</td><td>1,515</td><td>210</td><td>128</td><td class='hidden'></td></tr>
    <tr><td>26</td><td>27</td><td>28</td><td class='left'>The Centennial Festival for Magical Girls</td><td>1,501</td><td>142</td><td>104</td><td class='hidden'></td></tr>
    <tr><td>35</td><td>47</td><td>46</td><td class='left'>Shanghai Alice of Meiji 17</td><td>1,236</td><td>154</td><td>72</td><td class='hidden'></td></tr>
    <tr><td>37</td><td>41</td><td>35</td><td class='left'>Apparitions Stalk the Night</td><td>1,192</td><td>174</td><td>84</td><td class='hidden'></td></tr>
    <tr><td>54</td><td>62</td><td>58</td><td class='left'>The Maid and the Pocket Watch of Blood</td><td>936</td><td>82</td><td>58</td><td class='hidden'></td></tr>
    <tr><td>56</td><td>65</td><td>52</td><td class='left'>Locked Girl ~ The Girl's Secret Room</td><td>923</td><td>95</td><td>43</td><td class='hidden'></td></tr>
    <tr><td>58</td><td>73</td><td>71</td><td class='left'>Crimson Tower ~ Eastern Dream...</td><td>881</td><td>77</td><td>83</td><td class='hidden'></td></tr>
    <tr><td>92</td><td>96</td><td>90</td><td class='left'>A Soul as Red as a Ground Cherry</td><td>566</td><td>64</td><td>34</td><td class='hidden'></td></tr>
    <tr><td>99</td><td>99</td><td>90</td><td class='left'>Lunate Elf</td><td>508</td><td>56</td><td>45</td><td class='hidden'></td></tr>
    <tr><td>109</td><td>119</td><td>115</td><td class='left'>Voile, the Magic Library</td><td>434</td><td>33</td><td>21</td><td class='hidden'></td></tr>
    <tr><td>115</td><td>132</td><td>129</td><td class='left'>A Dream that Is More Scarlet than Red</td><td>392</td><td>50</td><td>28</td><td class='hidden'></td></tr>
    <tr><td>152</td><td>154</td><td>147</td><td class='left'>The Young Descendant of Tepes</td><td>282</td><td>14</td><td>28</td><td class='hidden'></td></tr>
    <tr><td>231</td><td>234</td><td>222</td><td class='left'>An Eternity that Is More Transient than Scarlet</td><td>114</td><td>9</td><td>7</td><td class='hidden'></td></tr>
                    </tbody>
                </table>
            </div>
            <h3>PCB</h3>
            <div id='pcb_dummy' class='dummy'><div class='dummy_sub'></div></div>
            <div id='pcb_container' class='container'>
                <table id='pcb_table' class='poll table sortable'>
                    <colgroup>
                        <col class='col1'>
                        <col class='col2game'>
                        <col class='col3game'>
                        <col class='col4game'>
                        <col class='col5'>
                        <col class='col6per'>
                        <col class='col7per'>
                        <col class='col8per'>
                    </colgroup>
                    <thead>
                        <tr>
                            <th id='pcb_head' class='head noborders'></th>
                            <th>Rank</th>
                            <th>2018 rank</th>
                            <th>2017 rank</th>
                            <th>Name</th>
                            <th>Points</th>
                            <th>No. 1 Votes</th>
                            <th>Comments</th>
                        </tr>
                    </thead>
                    <tbody>
    <tr><td>5</td><td>5</td><td>4</td><td class='left'>Bloom Nobly, Ink-Black Cherry Blossom ~ Border of Life</td><td>3,625</td><td>507</td><td>247</td><td class='hidden'></td></tr>
    <tr><td>7</td><td>6</td><td>6</td><td class='left'>Necrofantasia</td><td>3,355</td><td>398</td><td>248</td><td class='hidden'></td></tr>
    <tr><td>15</td><td>13</td><td>13</td><td class='left'>Ghostly Band ~ Phantom Ensemble</td><td>2,336</td><td>289</td><td>195</td><td class='hidden'></td></tr>
    <tr><td>34</td><td>38</td><td>33</td><td class='left'>Doll Judgment</td><td>1,238</td><td>111</td><td>84</td><td class='hidden'></td></tr>
    <tr><td>41</td><td>39</td><td>38</td><td class='left'>The Fantastic Tales from Tono</td><td>1,135</td><td>115</td><td>85</td><td class='hidden'></td></tr>
    <tr><td>51</td><td>55</td><td>49</td><td class='left'>Hiroari Shoots a Strange Bird ~ Till When?</td><td>1,003</td><td>124</td><td>58</td><td class='hidden'></td></tr>
    <tr><td>59</td><td>61</td><td>56</td><td class='left'>Eastern Mystical Dream ~ Ancient Temple</td><td>869</td><td>108</td><td>62</td><td class='hidden'></td></tr>
    <tr><td>68</td><td>64</td><td>60</td><td class='left'>Border of Life</td><td>782</td><td>60</td><td>81</td><td class='hidden'></td></tr>
    <tr><td>79</td><td>95</td><td>93</td><td class='left'>The Capital City of Flowers in the Sky</td><td>659</td><td>76</td><td>66</td><td class='hidden'></td></tr>
    <tr><td>84</td><td>78</td><td>76</td><td class='left'>A Maiden's Illusionary Funeral ~ Necro-Fantasy</td><td>626</td><td>68</td><td>59</td><td class='hidden'></td></tr>
    <tr><td>94</td><td>85</td><td>75</td><td class='left'>The Doll Maker of Bucuresti</td><td>557</td><td>55</td><td>31</td><td class='hidden'></td></tr>
    <tr><td>97</td><td>100</td><td>87</td><td class='left'>Ultimate Truth</td><td>522</td><td>44</td><td>53</td><td class='hidden'></td></tr>
    <tr><td>105</td><td>108</td><td>101</td><td class='left'>Paradise ~ Deep Mountain</td><td>461</td><td>41</td><td>45</td><td class='hidden'></td></tr>
    <tr><td>116</td><td>123</td><td>121</td><td class='left'>Sakura, Sakura ~ Japanize Dream...</td><td>388</td><td>20</td><td>25</td><td class='hidden'></td></tr>
    <tr><td>171</td><td>156</td><td>137</td><td class='left'>Crystallized Silver</td><td>225</td><td>19</td><td>21</td><td class='hidden'></td></tr>
    <tr><td>166</td><td>165</td><td>145</td><td class='left'>Diao ye zong (Withered Leaf)</td><td>235</td><td>20</td><td>21</td><td class='hidden'></td></tr>
    <tr><td>165</td><td>174</td><td>154</td><td class='left'>Youkai Domination ~ Who done it?</td><td>237</td><td>14</td><td>19</td><td class='hidden'></td></tr>
    <tr><td>177</td><td>180</td><td>168</td><td class='left'>Mystic Dream ~ Snow or Cherry Petal</td><td>210</td><td>14</td><td>10</td><td class='hidden'></td></tr>
    <tr><td>181</td><td>172</td><td>155</td><td class='left'>Youkai Domination</td><td>194</td><td>17</td><td>18</td><td class='hidden'></td></tr>
    <tr><td>415</td><td>408</td><td>384</td><td class='left'>Dream of a Spring Breeze</td><td>13</td><td>0</td><td>0</td><td class='hidden'></td></tr>
                    </tbody>
                </table>
            </div>
            <h3>IN</h3>
            <div id='in_dummy' class='dummy'><div class='dummy_sub'></div></div>
            <div id='in_container' class='container'>
                <table id='in_table' class='poll table sortable'>
                    <colgroup>
                        <col class='col1'>
                        <col class='col2game'>
                        <col class='col3game'>
                        <col class='col4game'>
                        <col class='col5'>
                        <col class='col6per'>
                        <col class='col7per'>
                        <col class='col8per'>
                    </colgroup>
                    <thead>
                        <tr>
                            <th id='in_head' class='head noborders'></th>
                            <th>Rank</th>
                            <th>2018 rank</th>
                            <th>2017 rank</th>
                            <th>Name</th>
                            <th>Points</th>
                            <th>No. 1 Votes</th>
                            <th>Comments</th>
                        </tr>
                    </thead>
                    <tbody>
    <tr><td>6</td><td>7</td><td>5</td><td class='left'>Reach for the Moon, Immortal Smoke</td><td>3,416</td><td>422</td><td>226</td><td class='hidden'></td></tr>
    <tr><td>12</td><td>12</td><td>10</td><td class='left'>Love-Coloured Master Spark (Love-coloured Magic)</td><td>2,524</td><td>234</td><td>163</td><td class='hidden'></td></tr>
    <tr><td>20</td><td>21</td><td>21</td><td class='left'>Gensokyo Millennium ~ History of the Moon</td><td>1,904</td><td>218</td><td>157</td><td class='hidden'></td></tr>
    <tr><td>21</td><td>18</td><td>19</td><td class='left'>Flight of the Bamboo Cutter ~ Lunatic Princess</td><td>1,874</td><td>177</td><td>159</td><td class='hidden'></td></tr>
    <tr><td>24</td><td>26</td><td>27</td><td class='left'>Maiden's Capriccio / Dream Battle</td><td>1,586</td><td>155</td><td>94</td><td class='hidden'></td></tr>
    <tr><td>36</td><td>36</td><td>36</td><td class='left'>Lunatic Eyes ~ Invisible Full Moon</td><td>1,195</td><td>91</td><td>94</td><td class='hidden'></td></tr>
    <tr><td>66</td><td>68</td><td>54</td><td class='left'>Deaf to All but the Song</td><td>783</td><td>50</td><td>44</td><td class='hidden'></td></tr>
    <tr><td>74</td><td>71</td><td>66</td><td class='left'>Cinderella Cage ~ Kagome-Kagome</td><td>720</td><td>43</td><td>58</td><td class='hidden'></td></tr>
    <tr><td>78</td><td>82</td><td>78</td><td class='left'>Voyage 1969</td><td>676</td><td>53</td><td>54</td><td class='hidden'></td></tr>
    <tr><td>86</td><td>79</td><td>64</td><td class='left'>Plain Asia</td><td>618</td><td>48</td><td>41</td><td class='hidden'></td></tr>
    <tr><td>93</td><td>86</td><td>81</td><td class='left'>Nostalgic Blood of the East ~ Old World</td><td>562</td><td>36</td><td>44</td><td class='hidden'></td></tr>
    <tr><td>104</td><td>97</td><td>99</td><td class='left'>Extend Ash ~ Person of Hourai</td><td>470</td><td>31</td><td>51</td><td class='hidden'></td></tr>
    <tr><td>121</td><td>132</td><td>123</td><td class='left'>Voyage 1970</td><td>375</td><td>29</td><td>31</td><td class='hidden'></td></tr>
    <tr><td>145</td><td>158</td><td>140</td><td class='left'>Eastern Youkai Beauty</td><td>319</td><td>17</td><td>28</td><td class='hidden'></td></tr>
    <tr><td>146</td><td>140</td><td>133</td><td class='left'>Retribution for the Eternal Night ~ Imperishable Night</td><td>315</td><td>24</td><td>31</td><td class='hidden'></td></tr>
    <tr><td>161</td><td>169</td><td>164</td><td class='left'>Song of the Night Sparrow ~ Night Bird</td><td>241</td><td>14</td><td>23</td><td class='hidden'></td></tr>
    <tr><td>164</td><td>173</td><td>157</td><td class='left'>Stirring an Autumn Moon ~ Mooned Insect</td><td>238</td><td>35</td><td>21</td><td class='hidden'></td></tr>
    <tr><td>205</td><td>199</td><td>195</td><td class='left'>Illusionary Night ~ Ghostly Eyes</td><td>146</td><td>12</td><td>18</td><td class='hidden'></td></tr>
    <tr><td>224</td><td>238</td><td>225</td><td class='left'>Eternal Night Vignette ~ Eastern Night.</td><td>119</td><td>8</td><td>9</td><td class='hidden'></td></tr>
    <tr><td>226</td><td>231</td><td>232</td><td class='left'>Mystical Maple ~ Eternal Dream</td><td>116</td><td>10</td><td>9</td><td class='hidden'></td></tr>
    <tr><td>323</td><td>288</td><td>300</td><td class='left'>Evening Primrose</td><td>41</td><td>0</td><td>2</td><td class='hidden'></td></tr>
                    </tbody>
                </table>
            </div>
            <h3>MoF</h3>
            <div id='mof_dummy' class='dummy'><div class='dummy_sub'></div></div>
            <div id='mof_container' class='container'>
                <table id='mof_table' class='poll table sortable'>
                    <colgroup>
                        <col class='col1'>
                        <col class='col2game'>
                        <col class='col3game'>
                        <col class='col4game'>
                        <col class='col5'>
                        <col class='col6per'>
                        <col class='col7per'>
                        <col class='col8per'>
                    </colgroup>
                    <thead>
                        <tr>
                            <th id='mof_head' class='head noborders'></th>
                            <th>Rank</th>
                            <th>2018 rank</th>
                            <th>2017 rank</th>
                            <th>Name</th>
                            <th>Points</th>
                            <th>No. 1 Votes</th>
                            <th>Comments</th>
                        </tr>
                    </thead>
                    <tbody>
    <tr><td>8</td><td>9</td><td>8</td><td class='left'>The Gensokyo The Gods Loved</td><td>3,196</td><td>352</td><td>234</td><td class='hidden'></td></tr>
    <tr><td>18</td><td>19</td><td>18</td><td class='left'>Native Faith</td><td>1,982</td><td>188</td><td>164</td><td class='hidden'></td></tr>
    <tr><td>23</td><td>23</td><td>22</td><td class='left'>Faith Is for the Transient People</td><td>1,681</td><td>158</td><td>123</td><td class='hidden'></td></tr>
    <tr><td>30</td><td>33</td><td>29</td><td class='left'>Fall of Fall ~ Autumnal Waterfall</td><td>1,400</td><td>154</td><td>126</td><td class='hidden'></td></tr>
    <tr><td>43</td><td>51</td><td>47</td><td class='left'>Tomorrow Will Be Special, Yesterday Was Not</td><td>1,128</td><td>93</td><td>110</td><td class='hidden'></td></tr>
    <tr><td>44</td><td>49</td><td>43</td><td class='left'>The Youkai Mountain ~ Mysterious Mountain</td><td>1,074</td><td>98</td><td>101</td><td class='hidden'></td></tr>
    <tr><td>47</td><td>51</td><td>45</td><td class='left'>Akutagawa Ryuunosuke's "Kappa" ~ Candid Friend</td><td>1,046</td><td>85</td><td>66</td><td class='hidden'></td></tr>
    <tr><td>57</td><td>57</td><td>41</td><td class='left'>Dark Side of Fate</td><td>899</td><td>74</td><td>71</td><td class='hidden'></td></tr>
    <tr><td>61</td><td>66</td><td>61</td><td class='left'>The Primal Scene of Japan the Girl Saw</td><td>862</td><td>81</td><td>75</td><td class='hidden'></td></tr>
    <tr><td>62</td><td>59</td><td>56</td><td class='left'>The Venerable Ancient Battlefield ~ Suwa Foughten Field</td><td>854</td><td>61</td><td>74</td><td class='hidden'></td></tr>
    <tr><td>71</td><td>72</td><td>62</td><td class='left'>Because Princess Inada Is Scolding Me</td><td>739</td><td>39</td><td>58</td><td class='hidden'></td></tr>
    <tr><td>80</td><td>76</td><td>70</td><td class='left'>The Road of the Misfortune God ~ Dark Road</td><td>653</td><td>50</td><td>54</td><td class='hidden'></td></tr>
    <tr><td>187</td><td>180</td><td>179</td><td class='left'>A God That Misses People ~ Romantic Fall</td><td>180</td><td>15</td><td>23</td><td class='hidden'></td></tr>
    <tr><td>188</td><td>183</td><td>169</td><td class='left'>Cemetery of Onbashira ~ Grave of Being</td><td>178</td><td>8</td><td>27</td><td class='hidden'></td></tr>
    <tr><td>250</td><td>247</td><td>253</td><td class='left'>Sealed Gods</td><td>87</td><td>6</td><td>14</td><td class='hidden'></td></tr>
    <tr><td>331</td><td>328</td><td>319</td><td class='left'>The Gods Give Us Blessed Rain ~ Sylphid Dream</td><td>38</td><td>1</td><td>8</td><td class='hidden'></td></tr>
    <tr><td>338</td><td>289</td><td>280</td><td class='left'>Player's Score</td><td>36</td><td>1</td><td>5</td><td class='hidden'></td></tr>
    <tr><td>360</td><td>387</td><td>361</td><td class='left'>Shrine at the Foot of the Mountain</td><td>30</td><td>2</td><td>5</td><td class='hidden'></td></tr>
                    </tbody>
                </table>
            </div>
            <h3>SA</h3>
            <div id='sa_dummy' class='dummy'><div class='dummy_sub'></div></div>
            <div id='sa_container' class='container'>
                <table id='sa_table' class='poll table sortable'>
                    <colgroup>
                        <col class='col1'>
                        <col class='col2game'>
                        <col class='col3game'>
                        <col class='col4game'>
                        <col class='col5'>
                        <col class='col6per'>
                        <col class='col7per'>
                        <col class='col8per'>
                    </colgroup>
                    <thead>
                        <tr>
                            <th id='sa_head' class='head noborders'></th>
                            <th>Rank</th>
                            <th>2018 rank</th>
                            <th>2017 rank</th>
                            <th>Name</th>
                            <th>Points</th>
                            <th>No. 1 Votes</th>
                            <th>Comments</th>
                        </tr>
                    </thead>
                    <tbody>
    <tr><td>4</td><td>4</td><td>3</td><td class='left'>Hartmann's Youkai Girl</td><td>3,686</td><td>484</td><td>267</td><td class='hidden'></td></tr>
    <tr><td>14</td><td>15</td><td>15</td><td class='left'>Satori Maiden ~ 3rd eye</td><td>2,342</td><td>283</td><td>140</td><td class='hidden'></td></tr>
    <tr><td>17</td><td>17</td><td>17</td><td class='left'>Last Remote</td><td>1,992</td><td>184</td><td>140</td><td class='hidden'></td></tr>
    <tr><td>28</td><td>29</td><td>30</td><td class='left'>Solar Sect of Mystic Wisdom ~ Nuclear Fusion</td><td>1,437</td><td>145</td><td>112</td><td class='hidden'></td></tr>
    <tr><td>42</td><td>48</td><td>51</td><td class='left'>Lullaby of Deserted Hell</td><td>1,133</td><td>103</td><td>97</td><td class='hidden'></td></tr>
    <tr><td>66</td><td>67</td><td>55</td><td class='left'>Green-Eyed Jealousy</td><td>783</td><td>90</td><td>72</td><td class='hidden'></td></tr>
    <tr><td>111</td><td>111</td><td>103</td><td class='left'>Corpse Voyage ~ Be of good cheer!</td><td>405</td><td>26</td><td>30</td><td class='hidden'></td></tr>
    <tr><td>127</td><td>143</td><td>127</td><td class='left'>Heartfelt Fancy</td><td>356</td><td>22</td><td>39</td><td class='hidden'></td></tr>
    <tr><td>130</td><td>136</td><td>130</td><td class='left'>Walking the Streets of a Former Hell</td><td>348</td><td>14</td><td>23</td><td class='hidden'></td></tr>
    <tr><td>133</td><td>120</td><td>110</td><td class='left'>A Flower-Studded Sake Dish on Mt. Ooe</td><td>340</td><td>23</td><td>30</td><td class='hidden'></td></tr>
    <tr><td>175</td><td>182</td><td>169</td><td class='left'>The Bridge People No Longer Cross</td><td>217</td><td>15</td><td>22</td><td class='hidden'></td></tr>
    <tr><td>180</td><td>194</td><td>176</td><td class='left'>Hellfire Mantle</td><td>200</td><td>7</td><td>22</td><td class='hidden'></td></tr>
    <tr><td>191</td><td>193</td><td>188</td><td class='left'>The Dark Blowhole</td><td>172</td><td>13</td><td>16</td><td class='hidden'></td></tr>
    <tr><td>225</td><td>219</td><td>199</td><td class='left'>The Sealed-Away Youkai ~ Lost Place</td><td>117</td><td>12</td><td>13</td><td class='hidden'></td></tr>
    <tr><td>259</td><td>281</td><td>274</td><td class='left'>Awakening of the Earth Spirits</td><td>77</td><td>1</td><td>7</td><td class='hidden'></td></tr>
    <tr><td>351</td><td>328</td><td>304</td><td class='left'>Energy Daybreak ~ Future Dream...</td><td>32</td><td>2</td><td>3</td><td class='hidden'></td></tr>
    <tr><td>357</td><td>363</td><td>337</td><td class='left'>The Earth Spirits' Homecoming</td><td>31</td><td>2</td><td>6</td><td class='hidden'></td></tr>
                    </tbody>
                </table>
            </div>
            <h3>UFO</h3>
            <div id='ufo_dummy' class='dummy'><div class='dummy_sub'></div></div>
            <div id='ufo_container' class='container'>
                <table id='ufo_table' class='poll table sortable'>
                    <colgroup>
                        <col class='col1'>
                        <col class='col2game'>
                        <col class='col3game'>
                        <col class='col4game'>
                        <col class='col5'>
                        <col class='col6per'>
                        <col class='col7per'>
                        <col class='col8per'>
                    </colgroup>
                    <thead>
                        <tr>
                            <th id='ufo_head' class='head noborders'></th>
                            <th>Rank</th>
                            <th>2018 rank</th>
                            <th>2017 rank</th>
                            <th>Name</th>
                            <th>Points</th>
                            <th>No. 1 Votes</th>
                            <th>Comments</th>
                        </tr>
                    </thead>
                    <tbody>
    <tr><td>16</td><td>13</td><td>14</td><td class='left'>Emotional Skyscraper ~ Cosmic Mind</td><td>2,221</td><td>216</td><td>188</td><td class='hidden'></td></tr>
    <tr><td>38</td><td>44</td><td>39</td><td class='left'>At the End of Spring</td><td>1,151</td><td>92</td><td>111</td><td class='hidden'></td></tr>
    <tr><td>45</td><td>42</td><td>34</td><td class='left'>Heian Alien</td><td>1,061</td><td>72</td><td>78</td><td class='hidden'></td></tr>
    <tr><td>96</td><td>94</td><td>73</td><td class='left'>Beware the Umbrella Left There Forever</td><td>530</td><td>36</td><td>45</td><td class='hidden'></td></tr>
    <tr><td>102</td><td>101</td><td>108</td><td class='left'>Interdimensional Voyage of a Ghostly Passenger Ship</td><td>473</td><td>29</td><td>48</td><td class='hidden'></td></tr>
    <tr><td>108</td><td>116</td><td>119</td><td class='left'>UFO Romance in the Night Sky</td><td>443</td><td>50</td><td>59</td><td class='hidden'></td></tr>
    <tr><td>143</td><td>134</td><td>111</td><td class='left'>The Tiger-Patterned Vaisravana</td><td>324</td><td>26</td><td>32</td><td class='hidden'></td></tr>
    <tr><td>146</td><td>150</td><td>142</td><td class='left'>Fires of Hokkai</td><td>315</td><td>15</td><td>36</td><td class='hidden'></td></tr>
    <tr><td>154</td><td>147</td><td>141</td><td class='left'>Captain Murasa</td><td>274</td><td>19</td><td>23</td><td class='hidden'></td></tr>
    <tr><td>161</td><td>170</td><td>151</td><td class='left'>Rural Makai City Esoteria</td><td>241</td><td>11</td><td>39</td><td class='hidden'></td></tr>
    <tr><td>210</td><td>198</td><td>186</td><td class='left'>The Traditional Old Man and the Stylish Girl</td><td>135</td><td>7</td><td>14</td><td class='hidden'></td></tr>
    <tr><td>252</td><td>271</td><td>241</td><td class='left'>Sky Ruin</td><td>84</td><td>4</td><td>13</td><td class='hidden'></td></tr>
    <tr><td>298</td><td>308</td><td>269</td><td class='left'>Returning Home From the Sky ~ Sky Dream</td><td>51</td><td>1</td><td>10</td><td class='hidden'></td></tr>
    <tr><td>313</td><td>305</td><td>325</td><td class='left'>The Sealed Cloud Route</td><td>44</td><td>6</td><td>6</td><td class='hidden'></td></tr>
    <tr><td>351</td><td>345</td><td>325</td><td class='left'>A Shadow in the Blue Sky</td><td>32</td><td>4</td><td>6</td><td class='hidden'></td></tr>
    <tr><td>453</td><td>461</td><td>421</td><td class='left'>Youkai Temple</td><td>7</td><td>0</td><td>1</td><td class='hidden'></td></tr>
                    </tbody>
                </table>
            </div>
            <h3>TD</h3>
            <div id='td_dummy' class='dummy'><div class='dummy_sub'></div></div>
            <div id='td_container' class='container'>
                <table id='td_table' class='poll table sortable'>
                    <colgroup>
                        <col class='col1'>
                        <col class='col2game'>
                        <col class='col3game'>
                        <col class='col4game'>
                        <col class='col5'>
                        <col class='col6per'>
                        <col class='col7per'>
                        <col class='col8per'>
                    </colgroup>
                    <thead>
                        <tr>
                            <th id='td_head' class='head noborders'></th>
                            <th>Rank</th>
                            <th>2018 rank</th>
                            <th>2017 rank</th>
                            <th>Name</th>
                            <th>Points</th>
                            <th>No. 1 Votes</th>
                            <th>Comments</th>
                        </tr>
                    </thead>
                    <tbody>
    <tr><td>22</td><td>20</td><td>20</td><td class='left'>Desire Drive</td><td>1,853</td><td>161</td><td>125</td><td class='hidden'></td></tr>
    <tr><td>55</td><td>46</td><td>44</td><td class='left'>Shoutoku Legend ~ True Administrator</td><td>933</td><td>99</td><td>93</td><td class='hidden'></td></tr>
    <tr><td>64</td><td>60</td><td>53</td><td class='left'>Old Yuanxian</td><td>826</td><td>52</td><td>79</td><td class='hidden'></td></tr>
    <tr><td>82</td><td>83</td><td>88</td><td class='left'>Night Sakura of Dead Spirits</td><td>631</td><td>62</td><td>84</td><td class='hidden'></td></tr>
    <tr><td>116</td><td>105</td><td>100</td><td class='left'>Futatsuiwa from Sado</td><td>388</td><td>20</td><td>33</td><td class='hidden'></td></tr>
    <tr><td>141</td><td>131</td><td>120</td><td class='left'>Omiwa Legend</td><td>328</td><td>32</td><td>44</td><td class='hidden'></td></tr>
    <tr><td>163</td><td>175</td><td>182</td><td class='left'>Dream Palace of the Great Mausoleum</td><td>239</td><td>25</td><td>34</td><td class='hidden'></td></tr>
    <tr><td>184</td><td>185</td><td>178</td><td class='left'>Let's Live in a Lovely Cemetery</td><td>182</td><td>11</td><td>16</td><td class='hidden'></td></tr>
    <tr><td>185</td><td>171</td><td>152</td><td class='left'>Rigid Paradise</td><td>181</td><td>13</td><td>16</td><td class='hidden'></td></tr>
    <tr><td>209</td><td>211</td><td>204</td><td class='left'>Youkai Back Shrine Road</td><td>136</td><td>4</td><td>20</td><td class='hidden'></td></tr>
    <tr><td>246</td><td>250</td><td>235</td><td class='left'>Starry Sky of Small Desires</td><td>90</td><td>6</td><td>15</td><td class='hidden'></td></tr>
    <tr><td>254</td><td>248</td><td>240</td><td class='left'>Desire Dream</td><td>82</td><td>6</td><td>10</td><td class='hidden'></td></tr>
    <tr><td>266</td><td>261</td><td>239</td><td class='left'>Ghost Lead</td><td>73</td><td>1</td><td>5</td><td class='hidden'></td></tr>
    <tr><td>309</td><td>298</td><td>261</td><td class='left'>Youkai Girl at the Gate</td><td>47</td><td>3</td><td>5</td><td class='hidden'></td></tr>
    <tr><td>313</td><td>331</td><td>306</td><td class='left'>Welcome to Youkai Temple</td><td>44</td><td>4</td><td>9</td><td class='hidden'></td></tr>
    <tr><td>318</td><td>316</td><td>298</td><td class='left'>Spirit of Avarice</td><td>42</td><td>2</td><td>7</td><td class='hidden'></td></tr>
    <tr><td>390</td><td>439</td><td>379</td><td class='left'>The Hide-and-Seek Lifestyle at the Shrine</td><td>19</td><td>0</td><td>5</td><td class='hidden'></td></tr>
                    </tbody>
                </table>
            </div>
            <h3>DDC</h3>
            <div id='ddc_dummy' class='dummy'><div class='dummy_sub'></div></div>
            <div id='ddc_container' class='container'>
                <table id='ddc_table' class='poll table sortable'>
                    <colgroup>
                        <col class='col1'>
                        <col class='col2game'>
                        <col class='col3game'>
                        <col class='col4game'>
                        <col class='col5'>
                        <col class='col6per'>
                        <col class='col7per'>
                        <col class='col8per'>
                    </colgroup>
                    <thead>
                        <tr>
                            <th id='ddc_head' class='head noborders'></th>
                            <th>Rank</th>
                            <th>2018 rank</th>
                            <th>2017 rank</th>
                            <th>Name</th>
                            <th>Points</th>
                            <th>No. 1 Votes</th>
                            <th>Comments</th>
                        </tr>
                    </thead>
                    <tbody>
    <tr><td>11</td><td>10</td><td>12</td><td class='left'>Inchlings of the Shining Needle ~ Little Princess</td><td>2,722</td><td>358</td><td>255</td><td class='hidden'></td></tr>
    <tr><td>48</td><td>40</td><td>42</td><td class='left'>Primordial Beat ~ Pristine Beat</td><td>1,041</td><td>84</td><td>98</td><td class='hidden'></td></tr>
    <tr><td>63</td><td>50</td><td>40</td><td class='left'>Reverse Ideology</td><td>845</td><td>65</td><td>45</td><td class='hidden'></td></tr>
    <tr><td>73</td><td>80</td><td>95</td><td class='left'>Mysterious Purification Rod</td><td>728</td><td>61</td><td>107</td><td class='hidden'></td></tr>
    <tr><td>89</td><td>88</td><td>94</td><td class='left'>Illusionary Joururi</td><td>580</td><td>53</td><td>52</td><td class='hidden'></td></tr>
    <tr><td>113</td><td>106</td><td>104</td><td class='left'>Bamboo Forest of the Full Moon</td><td>399</td><td>37</td><td>46</td><td class='hidden'></td></tr>
    <tr><td>167</td><td>155</td><td>135</td><td class='left'>Dullahan Under the Willows</td><td>232</td><td>14</td><td>21</td><td class='hidden'></td></tr>
    <tr><td>174</td><td>167</td><td>163</td><td class='left'>The Shining Needle Castle Sinking in the Air</td><td>221</td><td>20</td><td>28</td><td class='hidden'></td></tr>
    <tr><td>182</td><td>188</td><td>166</td><td class='left'>Mist Lake</td><td>188</td><td>10</td><td>19</td><td class='hidden'></td></tr>
    <tr><td>192</td><td>201</td><td>172</td><td class='left'>Mermaid from the Uncharted Land</td><td>171</td><td>9</td><td>14</td><td class='hidden'></td></tr>
    <tr><td>201</td><td>179</td><td>165</td><td class='left'>Lonesome Werewolf</td><td>157</td><td>12</td><td>13</td><td class='hidden'></td></tr>
    <tr><td>258</td><td>271</td><td>254</td><td class='left'>Strange, Strange Instruments</td><td>78</td><td>3</td><td>13</td><td class='hidden'></td></tr>
    <tr><td>285</td><td>283</td><td>267</td><td class='left'>Thunderclouds of Magical Power</td><td>56</td><td>2</td><td>7</td><td class='hidden'></td></tr>
    <tr><td>287</td><td>310</td><td>285</td><td class='left'>Magical Storm</td><td>55</td><td>0</td><td>9</td><td class='hidden'></td></tr>
    <tr><td>344</td><td>305</td><td>285</td><td class='left'>Humans and Youkai Traversing the Canal</td><td>35</td><td>2</td><td>7</td><td class='hidden'></td></tr>
    <tr><td>357</td><td>375</td><td>382</td><td class='left'>The Exaggerated Castle Keep</td><td>31</td><td>1</td><td>5</td><td class='hidden'></td></tr>
    <tr><td>424</td><td>404</td><td>393</td><td class='left'>Magical Power of the Mallet</td><td>11</td><td>0</td><td>2</td><td class='hidden'></td></tr>
                    </tbody>
                </table>
            </div>
            <h3>LoLK</h3>
            <div id='lolk_dummy' class='dummy'><div class='dummy_sub'></div></div>
            <div id='lolk_container' class='container'>
                <table id='lolk_table' class='poll table sortable'>
                    <colgroup>
                        <col class='col1'>
                        <col class='col2game'>
                        <col class='col3game'>
                        <col class='col4game'>
                        <col class='col5'>
                        <col class='col6per'>
                        <col class='col7per'>
                        <col class='col8per'>
                    </colgroup>
                    <thead>
                        <tr>
                            <th id='lolk_head' class='head noborders'></th>
                            <th>Rank</th>
                            <th>2018 rank</th>
                            <th>2017 rank</th>
                            <th>Name</th>
                            <th>Points</th>
                            <th>No. 1 Votes</th>
                            <th>Comments</th>
                        </tr>
                    </thead>
                    <tbody>
    <tr><td>3</td><td>3</td><td>7</td><td class='left'>Pure Furies ~ Whereabouts of the Heart</td><td>4,232</td><td>796</td><td>466</td><td class='hidden'></td></tr>
    <tr><td>39</td><td>31</td><td>24</td><td class='left'>The Pierrot of the Star-Spangled Banner</td><td>1,147</td><td>43</td><td>103</td><td class='hidden'></td></tr>
    <tr><td>53</td><td>56</td><td>50</td><td class='left'>Pandemonic Planet</td><td>937</td><td>63</td><td>121</td><td class='hidden'></td></tr>
    <tr><td>59</td><td>54</td><td>68</td><td class='left'>Eternal Spring Dream</td><td>869</td><td>72</td><td>102</td><td class='hidden'></td></tr>
    <tr><td>70</td><td>77</td><td>72</td><td class='left'>The Sea Where the Home Planet is Reflected</td><td>747</td><td>40</td><td>107</td><td class='hidden'></td></tr>
    <tr><td>91</td><td>89</td><td>79</td><td class='left'>Faraway 380,000-Kilometer Voyage</td><td>569</td><td>37</td><td>66</td><td class='hidden'></td></tr>
    <tr><td>114</td><td>135</td><td>105</td><td class='left'>The Rabbit Has Landed</td><td>396</td><td>26</td><td>47</td><td class='hidden'></td></tr>
    <tr><td>119</td><td>121</td><td>117</td><td class='left'>The Frozen Eternal Capital</td><td>380</td><td>24</td><td>46</td><td class='hidden'></td></tr>
    <tr><td>132</td><td>125</td><td>107</td><td class='left'>The Reversed Wheel of Fortune</td><td>346</td><td>24</td><td>25</td><td class='hidden'></td></tr>
    <tr><td>137</td><td>124</td><td>98</td><td class='left'>September Pumpkin</td><td>331</td><td>12</td><td>34</td><td class='hidden'></td></tr>
    <tr><td>176</td><td>159</td><td>159</td><td class='left'>A Never-Before-Seen World of Nightmares</td><td>214</td><td>13</td><td>25</td><td class='hidden'></td></tr>
    <tr><td>193</td><td>209</td><td>192</td><td class='left'>Unforgettable, the Nostalgic Greenery</td><td>166</td><td>6</td><td>26</td><td class='hidden'></td></tr>
    <tr><td>220</td><td>189</td><td>181</td><td class='left'>The Mysterious Shrine Maiden Flying Through Space</td><td>124</td><td>10</td><td>17</td><td class='hidden'></td></tr>
    <tr><td>278</td><td>304</td><td>248</td><td class='left'>The Lake Reflects the Cleansed Moonlight</td><td>60</td><td>1</td><td>13</td><td class='hidden'></td></tr>
    <tr><td>309</td><td>283</td><td>264</td><td class='left'>The Space Shrine Maiden Appears</td><td>47</td><td>0</td><td>7</td><td class='hidden'></td></tr>
    <tr><td>415</td><td>399</td><td>371</td><td class='left'>The Space Shrine Maiden Returns Home</td><td>13</td><td>0</td><td>5</td><td class='hidden'></td></tr>
    <tr><td>432</td><td>408</td><td>406</td><td class='left'>The Moon as Seen from the Shrine</td><td>10</td><td>0</td><td>1</td><td class='hidden'></td></tr>
                    </tbody>
                </table>
            </div>
            <h3>HSiFS</h3>
            <div id='hsifs_dummy' class='dummy'><div class='dummy_sub'></div></div>
            <div id='hsifs_container' class='container'>
                <table id='hsifs_table' class='poll table sortable'>
                    <colgroup>
                        <col class='col1'>
                        <col class='col2game'>
                        <col class='col3game'>
                        <col class='col4game'>
                        <col class='col5'>
                        <col class='col6per'>
                        <col class='col7per'>
                        <col class='col8per'>
                    </colgroup>
                    <thead>
                        <tr>
                            <th id='hsifs_head' class='head noborders'></th>
                            <th>Rank</th>
                            <th>2018 rank</th>
                            <th>2017 rank</th>
                            <th>Name</th>
                            <th>Points</th>
                            <th>No. 1 Votes</th>
                            <th>Comments</th>
                        </tr>
                    </thead>
                    <tbody>
    <tr><td>27</td><td>24</td><td>－</td><td class='left'>Secret God Matara ~ Hidden Star in All Seasons.</td><td>1,481</td><td>140</td><td>178</td><td class='hidden'></td></tr>
    <tr><td>40</td><td>32</td><td>－</td><td class='left'>The Concealed Four Seasons</td><td>1,146</td><td>77</td><td>130</td><td class='hidden'></td></tr>
    <tr><td>49</td><td>35</td><td>－</td><td class='left'>Crazy Backup Dancers</td><td>1,013</td><td>51</td><td>92</td><td class='hidden'></td></tr>
    <tr><td>85</td><td>74</td><td>－</td><td class='left'>Illusionary White Traveler</td><td>623</td><td>50</td><td>82</td><td class='hidden'></td></tr>
    <tr><td>133</td><td>127</td><td>－</td><td class='left'>A Star of Hope Rises in the Blue Sky</td><td>340</td><td>12</td><td>48</td><td class='hidden'></td></tr>
    <tr><td>183</td><td>153</td><td>－</td><td class='left'>A Pair of Divine Beasts</td><td>184</td><td>8</td><td>19</td><td class='hidden'></td></tr>
    <tr><td>216</td><td>201</td><td>－</td><td class='left'>Swim in a Cherry Blossom-Colored Sea</td><td>125</td><td>6</td><td>24</td><td class='hidden'></td></tr>
    <tr><td>216</td><td>197</td><td>－</td><td class='left'>The Magic Straw-Hat Ksitigarbha</td><td>125</td><td>5</td><td>15</td><td class='hidden'></td></tr>
    <tr><td>237</td><td>196</td><td>－</td><td class='left'>Does the Forbidden Door Lead to This World, or the World Beyond?</td><td>102</td><td>6</td><td>12</td><td class='hidden'></td></tr>
    <tr><td>243</td><td>208</td><td>－</td><td class='left'>No More Going Through Doors</td><td>97</td><td>3</td><td>14</td><td class='hidden'></td></tr>
    <tr><td>274</td><td>229</td><td>－</td><td class='left'>Into Backdoor</td><td>61</td><td>4</td><td>10</td><td class='hidden'></td></tr>
    <tr><td>287</td><td>266</td><td>－</td><td class='left'>White Traveler</td><td>55</td><td>1</td><td>3</td><td class='hidden'></td></tr>
    <tr><td>296</td><td>261</td><td>－</td><td class='left'>The Sky Where Cherry Blossoms Flutter Down</td><td>52</td><td>1</td><td>9</td><td class='hidden'></td></tr>
    <tr><td>311</td><td>268</td><td>－</td><td class='left'>Deep-Mountain Encounter</td><td>46</td><td>0</td><td>2</td><td class='hidden'></td></tr>
    <tr><td>347</td><td>299</td><td>－</td><td class='left'>The Colorless Wind on Youkai Mountain</td><td>34</td><td>1</td><td>10</td><td class='hidden'></td></tr>
    <tr><td>506</td><td>461</td><td>－</td><td class='left'>Unnatural Nature</td><td>2</td><td>0</td><td>0</td><td class='hidden'></td></tr>
                    </tbody>
                </table>
            </div>
            <h2 id='Ack'>Acknowledgements</h2>
			<p id='credit' class='noborders'>The background image
			was drawn by <a href='https://www.pixiv.net/member.php?id=2025430'>Yakumo_Stocking</a>.</p>
            <p id='back'><strong><a id='backtotop' href='#nav'>Back to Top</a></strong></p>
        </div>
        <script src='assets/thvote/thvote.js'></script>
        <script src='assets/shared/dark.js'></script>
    </body>
</html>