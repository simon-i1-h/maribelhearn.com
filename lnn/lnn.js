var LNNs, language = "English", all = ["overall", "players", "SoEW", "PoDD", "LLS", "MS", "EoSD",
    "PCB", "IN", "MoF", "SA", "UFO", "GFW", "TD", "DDC", "LoLK", "HSiFS"],
    lastUpdate =  "April 26, 2019";

function generateText() {
    if (language == "English") {
        $("title").html("Touhou Lunatic No Miss No Bombs");
        $("h1").html("Touhou Lunatic No Miss No Bombs");
        $(".game").html("Game");
        $(".games").html("Games LNN'd");
        $(".player").html("Player");
        $(".players").html("Players");
        $(".different").html("(Different players)");
        $(".differentn").html("Different players");
        $(".ranking").html("Ranking");
        $(".overall").html("Overall");
        $(".difficulty").html("Difficulty");
        $(".shottype").html("Shottype");
        $(".route").html("Route");
        $(".playerranking").html("Player Ranking");
        $(".overallcount").html("Overall Count");
        $(".nooflnns").html("No. of LNNs");
        $(".nooflnnns").html("No. of LNNNs");
        $(".nooflnnfss").html("No. of LNNFSs");
        $(".nooflnnnsu").html("No. of LNN(N)s");
        $(".HRtP").html("HRtP");
        $(".SoEW").html("SoEW");
        $(".PoDD").html("PoDD");
        $(".LLS").html("LLS");
        $(".MS").html("MS");
        $(".EoSD").html("EoSD");
        $(".PCB").html("PCB");
        $(".IN").html("IN");
        $(".PoFV").html("PoFV");
        $(".MoF").html("MoF");
        $(".SA").html("SA");
        $(".UFO").html("UFO");
        $(".DS").html("DS");
        $(".GFW").html("GFW");
        $(".TD").html("TD");
        $(".DDC").html("DDC");
        $(".LoLK").html("LoLK");
        $(".HSiFS").html("HSiFS");
        $(".th1").html("Touhou 1 - The Highly Responsive to Prayers");
        $(".th2").html("Touhou 2 - The Story of Eastern Wonderland");
        $(".th3").html("Touhou 3 - Phantasmagoria of Dim.Dream");
        $(".th4").html("Touhou 4 - Lotus Land Story");
        $(".th5").html("Touhou 5 - Mystic Square");
        $(".th6").html("Touhou 6 - The Embodiment of Scarlet Devil");
        $(".th7").html("Touhou 7 - Perfect Cherry Blossom");
        $(".th8").html("Touhou 8 - Imperishable Night");
        $(".th9").html("Touhou 9 - Phantasmagoria of Flower View");
        $(".th10").html("Touhou 10 - Mountain of Faith");
        $(".th11").html("Touhou 11 - Subterranean Animism");
        $(".th12").html("Touhou 12 - Undefined Fantastic Object");
        $(".th128").html("Touhou 12.8 - Great Fairy Wars");
        $(".th13").html("Touhou 13 - Ten Desires");
        $(".th14").html("Touhou 14 - Double Dealing Character");
        $(".th15").html("Touhou 15 - Legacy of Lunatic Kingdom");
        $(".th16").html("Touhou 16 - Hidden Star in Four Seasons");
        $(".Makai").html("Makai");
        $(".Jigoku").html("Jigoku");
        $(".ReimuA").html("ReimuA");
        $(".ReimuB").html("ReimuB");
        $(".ReimuC").html("ReimuC");
        $(".Reimu").html("Reimu");
        $(".Mima").html("Mima");
        $(".Marisa").html("Marisa");
        $(".Ellen").html("Ellen");
        $(".Kotohime").html("Kotohime");
        $(".Kana").html("Kana");
        $(".Rikako").html("Rikako");
        $(".Chiyuri").html("Chiyuri");
        $(".Yumemi").html("Yumemi");
        $(".Yuuka").html("Yuuka");
        $(".MarisaA").html("MarisaA");
        $(".MarisaB").html("MarisaB");
        $(".SakuyaA").html("SakuyaA");
        $(".SakuyaB").html("SakuyaB");
        $(".BorderTeam").html("Border Team");
        $(".MagicTeam").html("Magic Team");
        $(".ScarletTeam").html("Scarlet Team");
        $(".GhostTeam").html("Ghost Team");
        $(".Yukari").html("Yukari");
        $(".Alice").html("Alice");
        $(".Sakuya").html("Sakuya");
        $(".Remilia").html("Remilia");
        $(".Youmu").html("Youmu");
        $(".Yuyuko").html("Yuyuko");
        $(".Reisen").html("Reisen");
        $(".Cirno").html("Cirno");
        $(".Lyrica").html("Lyrica");
        $(".Mystia").html("Mystia");
        $(".Tewi").html("Tewi");
        $(".Aya").html("Aya");
        $(".Medicine").html("Medicine");
        $(".Komachi").html("Komachi");
        $(".Eiki").html("Eiki");
        $(".MarisaC").html("MarisaC");
        $(".SanaeA").html("SanaeA");
        $(".SanaeB").html("SanaeB");
        $(".Sanae").html("Sanae");
        $(".Spring").html("<br>Spring");
        $(".Summer").html("<br>Summer");
        $(".Autumn").html("<br>Autumn");
        $(".Winter").html("<br>Winter");
        $(".ReimuSpring").html("ReimuSpring");
        $(".CirnoSpring").html("CirnoSpring");
        $(".AyaSpring").html("AyaSpring");
        $(".MarisaSpring").html("MarisaSpring");
        $(".ReimuSummer").html("ReimuSummer");
        $(".CirnoSummer").html("CirnoSummer");
        $(".AyaSummer").html("AyaSummer");
        $(".MarisaSummer").html("MarisaSummer");
        $(".ReimuAutumn").html("ReimuAutumn");
        $(".CirnoAutumn").html("CirnoAutumn");
        $(".AyaAutumn").html("AyaAutumn");
        $(".MarisaAutumn").html("MarisaAutumn");
        $(".ReimuWinter").html("ReimuWinter");
        $(".CirnoWinter").html("CirnoWinter");
        $(".AyaWinter").html("AyaWinter");
        $(".MarisaWinter").html("MarisaWinter");
        $("#description").html("A listing of Touhou Lunatic No Miss No Bomb (LNN) runs, updated every so often. " +
        "For every shottype in a game, tables will tell you which players have done an LNN with it, if any." +
        "If a player has multiple LNNs for one particular shottype, those are not factored in.");
        $("#conditions").html(">Extra conditions are required for PCB, TD and HSiFS; these are No Border Breaks, " +
        "No Trance and No Release respectively. LNN in these games is called LNNN, with an extra N to denote the extra condition." +
        "The extra condition in UFO, no UFO summons, is optional, as it is not considered to have a significant impact on " +
        "the difficulty of the run. As for IN, an LNN is assumed to capture all Last Spells and is referred to as LNNFS.");
        $("#tables").html("All of the table columns are sortable.");
        $("#lastupdate").html("LNNs are current as of " + lastUpdate + ".");
        $("#contents_header").html("Contents");
        $("#customize").html("Customize");
        $("#score").html("Score");
        $("#label_all").html("All");
        $("#autosort").html("No. of WRs");
        $("#differentgames").html("Different games");
        $("#backtotop").html("Back to Top");
    } else if (language == "Japanese") {
        $("title").html("東方Lunaticノーミスノーボム");
        $("h1").html("東方Lunaticノーミスノーボム");
        $(".game").html("ゲーム");
        $(".games").html("ゲーム");
        $(".player").html("プレイヤー");
        $(".players").html("プレイヤー");
        $(".different").html("（プレイヤー）");
        $(".differentn").html("プレイヤー");
        $(".overall").html("合計");
        $(".ranking").html("ランキング");
        $(".difficulty").html("難易度");
        $(".shottype").html("キャラ");
        $(".route").html("ルート");
        $(".playerranking").html("プレイヤーのランキング");
        $(".overallcount").html("総数");
        $(".nooflnns").html("LNNの数");
        $(".nooflnnns").html("LNNNの数");
        $(".nooflnnfss").html("LNNFSの数");
        $(".nooflnnnsu").html("LNNの数");
        $(".HRtP").html("靈");
        $(".SoEW").html("封");
        $(".PoDD").html("夢");
        $(".LLS").html("幻");
        $(".MS").html("怪");
        $(".EoSD").html("紅");
        $(".PCB").html("妖");
        $(".IN").html("永");
        $(".PoFV").html("花");
        $(".MoF").html("風");
        $(".SA").html("地");
        $(".UFO").html("星");
        $(".GFW").html("大");
        $(".TD").html("神");
        $(".DDC").html("輝");
        $(".LoLK").html("紺");
        $(".HSiFS").html("天");
        $(".th1").html("東方靈異伝　～ The Highly Responsive to Prayers");
        $(".th2").html("東方封魔録　～ the Story of Eastern Wonderland");
        $(".th3").html("東方夢時空　～ Phantasmagoria of Dim.Dream");
        $(".th4").html("東方幻想郷　～ Lotus Land Story");
        $(".th5").html("東方怪綺談　～ Mystic Square");
        $(".th6").html("東方紅魔郷　～ the Embodiment of Scarlet Devil");
        $(".th7").html("東方妖々夢　～ Perfect Cherry Blossom");
        $(".th8").html("東方永夜抄　～ Imperishable Night");
        $(".th9").html("東方花映塚　～ Phantasmagoria of Flower View");
        $(".th10").html("東方風神録　～ Mountain of Faith");
        $(".th11").html("東方地霊殿　～ Subterranean Animism");
        $(".th12").html("東方星蓮船　～ Undefined Fantastic Object");
        $(".th128").html("妖精大戦争　～ 東方三月精");
        $(".th13").html("東方神霊廟　～ Ten Desires");
        $(".th14").html("東方輝針城　～ Double Dealing Character");
        $(".th15").html("東方紺珠伝　～ Legacy of Lunatic Kingdom");
        $(".th16").html("東方天空璋　～ Hidden Star in Four Seasons");
        $(".Makai").html("魔界");
        $(".Jigoku").html("地獄");
        $(".ReimuA").html("霊夢A");
        $(".ReimuB").html("霊夢B");
        $(".ReimuC").html("霊夢C");
        $(".Reimu").html("霊夢");
        $(".Mima").html("魅魔");
        $(".Marisa").html("魔理沙");
        $(".Ellen").html("エレン");
        $(".Kotohime").html("小兎姫");
        $(".Kana").html("カナ");
        $(".Rikako").html("理香子");
        $(".Chiyuri").html("ちゆり");
        $(".Yumemi").html("夢美");
        $(".Yuuka").html("幽香");
        $(".MarisaA").html("魔理沙A");
        $(".MarisaB").html("魔理沙B");
        $(".SakuyaA").html("咲夜A");
        $(".SakuyaB").html("咲夜B");
        $(".BorderTeam").html("霊夢＆紫");
        $(".MagicTeam").html("魔理沙＆アリス");
        $(".ScarletTeam").html("咲夜＆レミリア");
        $(".GhostTeam").html("妖夢＆幽々子");
        $(".Yukari").html("紫");
        $(".Alice").html("アリス");
        $(".Sakuya").html("咲夜");
        $(".Remilia").html("レミリア");
        $(".Youmu").html("妖夢");
        $(".Yuyuko").html("幽々子");
        $(".Reisen").html("鈴仙");
        $(".Cirno").html("チルノ");
        $(".Lyrica").html("リリカ");
        $(".Mystia").html("ミスティア");
        $(".Tewi").html("てゐ");
        $(".Aya").html("文");
        $(".Medicine").html("メディスン");
        $(".Komachi").html("小町");
        $(".Eiki").html("映姫");
        $(".MarisaC").html("魔理沙C");
        $(".SanaeA").html("早苗A");
        $(".SanaeB").html("早苗B");
        $(".Sanae").html("早苗");
        $(".Spring").html("春");
        $(".Summer").html("夏");
        $(".Autumn").html("秋");
        $(".Winter").html("冬");
        $(".ReimuSpring").html("霊夢春");
        $(".CirnoSpring").html("チルノ春");
        $(".AyaSpring").html("文春");
        $(".MarisaSpring").html("魔理沙春");
        $(".ReimuSummer").html("霊夢夏");
        $(".CirnoSummer").html("チルノ夏");
        $(".AyaSummer").html("文夏");
        $(".MarisaSummer").html("魔理沙夏");
        $(".ReimuAutumn").html("霊夢秋");
        $(".CirnoAutumn").html("チルノ秋");
        $(".AyaAutumn").html("文秋");
        $(".MarisaAutumn").html("魔理沙秋");
        $(".ReimuWinter").html("霊夢冬");
        $(".CirnoWinter").html("チルノ冬");
        $(".AyaWinter").html("文冬");
        $(".MarisaWinter").html("魔理沙冬");
        $("#description").html("東方原作STG各作品の難易度Lunaticのノーミスノーボム（LNN）リストです。適宜頻繁に更新します。" +
        "各作品の表とも、各機体において誰が達成したかを記載しています。特定の作品、" +
        "ショットタイプで複数回のLNNを達成している場合でも１回とカウントされます。");
        $("#conditions").html("また妖々夢では霊撃無し、神霊廟ではトランス無し、天空璋では開放無しが条件となります。" +
        "この３作品では追加条件によってNが追加され、LNNNと呼称します。" +
        "また星蓮船ではUFO招喚無しも考慮されますが、難易度が劇的に変化するわけではないため必須条件とはなっていません。" +
        "永夜抄ではラストスペル取得を含めLNNFSが条件となります。");
        $("#tables").html("各欄は並べ替え可能となっています。並べ替えには各表の最上段をクリックしてください。");
        $("#lastupdate").html(translateDate(lastUpdate) + "現在のLNN記録です。");
        $("#contents_header").html("内容");
        $("#customize").html("カスタマイズ");
        $("#lnns").html("LNNリスト");
        $("#score").html("スコア");
        $("#label_all").html("全");
        $("#autosort").html("WR数");
        $("#differentgames").html("ゲーム");
        $("#backtotop").html("上に帰る");
    } else { // language == "Chinese"
        $("title").html("东方LunaticNMNB");
        $("h1").html("东方LunaticNMNB");
        $(".game").html("游戏");
        $(".games").html("游戏");
        $(".player").html("玩家");
        $(".players").html("玩家");
        $(".different").html("（玩家）");
        $(".differentn").html("玩家");
        $(".overall").html("合計");
        $(".ranking").html("排行");
        $(".difficulty").html("难度");
        $(".shottype").html("机体");
        $(".route").html("路线");
        $(".playerranking").html("玩家排行");
        $(".overallcount").html("总数");
        $(".nooflnns").html("LNN的数量");
        $(".nooflnnns").html("LNNN的数量");
        $(".nooflnnfss").html("LNNFS的数量");
        $(".nooflnnnsu").html("LNN的数量");
        $(".HRtP").html("灵");
        $(".SoEW").html("封");
        $(".PoDD").html("梦");
        $(".LLS").html("幻");
        $(".MS").html("怪");
        $(".EoSD").html("红");
        $(".PCB").html("妖");
        $(".IN").html("永");
        $(".PoFV").html("花");
        $(".MoF").html("风");
        $(".SA").html("地");
        $(".UFO").html("星");
        $(".GFW").html("大");
        $(".TD").html("神");
        $(".DDC").html("辉");
        $(".LoLK").html("绀");
        $(".HSiFS").html("天");
        $(".th1").html("东方灵异传　～ The Highly Responsive to Prayers");
        $(".th2").html("东方封魔录　～ the Story of Eastern Wonderland");
        $(".th3").html("东方梦时空　～ Phantasmagoria of Dim.Dream");
        $(".th4").html("东方幻想乡　～ Lotus Land Story");
        $(".th5").html("东方怪绮谈　～ Mystic Square");
        $(".th6").html("东方红魔乡　～ the Embodiment of Scarlet Devil");
        $(".th7").html("东方妖妖梦　～ Perfect Cherry Blossom");
        $(".th8").html("东方永夜抄　～ Imperishable Night");
        $(".th9").html("东方花映塚　～ Phantasmagoria of Flower View");
        $(".th10").html("东方风神录　～ Mountain of Faith");
        $(".th11").html("东方地灵殿　～ Subterranean Animism");
        $(".th12").html("东方星莲船　～ Undefined Fantastic Object");
        $(".th128").html("妖精大战争　～ 东方三月精");
        $(".th13").html("东方神灵庙　～ Ten Desires");
        $(".th14").html("东方辉针城　～ Double Dealing Character");
        $(".th15").html("东方绀珠传　～ Legacy of Lunatic Kingdom");
        $(".th16").html("东方天空璋　～ Hidden Star in Four Seasons");
        $(".Makai").html("魔界");
        $(".Jigoku").html("地狱");
        $(".ReimuA").html("灵梦A");
        $(".ReimuB").html("灵梦B");
        $(".ReimuC").html("灵梦C");
        $(".Reimu").html("灵梦");
        $(".Mima").html("魅魔");
        $(".Marisa").html("魔理沙");
        $(".Ellen").html("爱莲");
        $(".Kotohime").html("小兔姬");
        $(".Kana").html("卡娜");
        $(".Rikako").html("理香子");
        $(".Chiyuri").html("千百合");
        $(".Yumemi").html("梦美");
        $(".Yuuka").html("幽香");
        $(".MarisaA").html("魔理沙A");
        $(".MarisaB").html("魔理沙B");
        $(".SakuyaA").html("咲夜A");
        $(".SakuyaB").html("咲夜B");
        $(".BorderTeam").html("结界组");
        $(".MagicTeam").html("咏唱组");
        $(".ScarletTeam").html("红魔组");
        $(".GhostTeam").html("幽冥组");
        $(".Yukari").html("紫");
        $(".Alice").html("爱丽丝");
        $(".Sakuya").html("咲夜");
        $(".Remilia").html("蕾米莉亚");
        $(".Youmu").html("妖梦");
        $(".Yuyuko").html("幽幽子");
        $(".Reisen").html("铃仙");
        $(".Cirno").html("琪露诺");
        $(".Lyrica").html("莉莉卡");
        $(".Mystia").html("米丝蒂亚");
        $(".Tewi").html("帝");
        $(".Aya").html("文");
        $(".Medicine").html("梅蒂薪");
        $(".Komachi").html("小町");
        $(".Eiki").html("映姬");
        $(".MarisaC").html("魔理沙C");
        $(".SanaeA").html("早苗A");
        $(".SanaeB").html("早苗B");
        $(".Sanae").html("早苗");
        $(".Spring").html("春");
        $(".Summer").html("夏");
        $(".Autumn").html("秋");
        $(".Winter").html("冬");
        $(".ReimuSpring").html("灵梦春");
        $(".CirnoSpring").html("琪露诺春");
        $(".AyaSpring").html("文春");
        $(".MarisaSpring").html("魔理沙春");
        $(".ReimuSummer").html("灵梦夏");
        $(".CirnoSummer").html("琪露诺夏");
        $(".AyaSummer").html("文夏");
        $(".MarisaSummer").html("魔理沙夏");
        $(".ReimuAutumn").html("灵梦秋");
        $(".CirnoAutumn").html("琪露诺秋");
        $(".AyaAutumn").html("文秋");
        $(".MarisaAutumn").html("魔理沙秋");
        $(".ReimuWinter").html("灵梦冬");
        $(".CirnoWinter").html("琪露诺冬");
        $(".AyaWinter").html("文冬");
        $(".MarisaWinter").html("魔理沙冬");
        $("#description").html("A listing of Touhou Lunatic No Miss No Bomb (LNN) runs, updated every so often. " +
        "For every shottype in a game, tables will tell you which players have done an LNN with it, if any." +
        "If a player has multiple LNNs for one particular shottype, those are not factored in.");
        $("#conditions").html(">Extra conditions are required for PCB, TD and HSiFS; these are No Border Breaks, " +
        "No Trance and No Release respectively. LNN in these games is called LNNN, with an extra N to denote the extra condition." +
        "The extra condition in UFO, no UFO summons, is optional, as it is not considered to have a significant impact on " +
        "the difficulty of the run. As for IN, an LNN is assumed to capture all Last Spells and is referred to as LNNFS.");
        $("#tables").html("所有表格均可分类。");
        $("#lastupdate").html("LNNs are current as of " + translateDate(lastUpdate) + ".");
        $("#contents_header").html("内容");
        $("#customize").html("定制");
        $("#lnns").html("LNN Listings");
        $("#score").html("分数");
        $("#label_all").html("皆");
        $("#autosort").html("WR数量");
        $("#differentgames").html("游戏");
        $("#backtotop").html("回到顶部");
    }
}

function setLanguage(newLanguage) {
    if (language == newLanguage) {
        return;
    }

    language = newLanguage;
    generateText();
    setCookie("lang", newLanguage);
}

function show(game) {
    $("#" + game).css("display", "block");

    if (!$("#" + game + "c").is(":checked")) {
        $("#" + game + "c").prop("checked", true);
    }
}

function hide(game) {
    $("#" + game).css("display", "none");

    if ($("#" + game + "c").is(":checked")) {
        $("#" + game + "c").prop("checked", false);
    }
}

function checkGame(arg) {
    if ($("#" + arg + "c").is(":checked")) {
        show(arg);
    } else {
        hide(arg);
    }
}

function checkAll() {
    var checked = $("#all").is(":checked");

    for (var key in all) {
        checked ? show(all[key]) : hide(all[key]);
    }
}

$(document).ready(function() {
    // detect smartphone and tablet
    if (navigator.userAgent.contains("Mobile") || navigator.userAgent.contains("Tablet")) {
        $("#back").css("display", "block");
	}

    $.get("https://maribelhearn.github.io/json/lnnlist.json", function(data) {
        LNNs = data;

        var playergameLNNs = {}, playerLNNs = {}, overallplayers = [], typeString = "", count = 0, game, players, gamecount, shottype, shotplayers, shotplayersIN, shotcount, character, type, i, player;

        for (game in LNNs) {
            players = [];
            gamecount = 0;

            for (shottype in LNNs[game]) {
                if (game != "IN" && game != "UFO" && game != "HSiFS" || (game == "IN" && shottype.contains("FinalA")) || (game == "UFO" && !shottype.contains("UFOs")) || (game == "HSiFS" && shottype.contains("Spring"))) {
                    shotplayers = [];
                    shotplayersIN = [];
                    shotcount = 0;
                }

                character = shottype.replace(/Spring|Summer|Autumn|Winter|FinalA|FinalB|UFOs/, "");

                if (game == "IN" || game == "UFO" || game == "HSiFS") {
                    type = shottype.replace(character, "");

                    if (type !== "") {
                        typeString = " (" + type + ")";
                    } else {
                        typeString = "";
                    }
                }

                for (i in LNNs[game][shottype]) {
                    player = LNNs[game][shottype][i];
                    shotplayers.push(player + (game == "IN" || game == "UFO" || game == "HSiFS" ? typeString : ""));
                    shotplayersIN.pushStrict(player);

                    if (!playerLNNs.hasOwnProperty(player)) {
                        playerLNNs[player] = 0;
                    }

                    playerLNNs[player] += 1;

                    if (!playergameLNNs.hasOwnProperty(player)) {
                        playergameLNNs[player] = [];
                    }

                    playergameLNNs[player].pushStrict(game);

                    if (!players.contains(player)) {
                        players.push(player);
                    }

                    count += 1;
                    gamecount += 1;
                    shotcount += 1;
                }

                if (!(game == "IN" && type != "FinalB") && !(game == "UFO" && type != "UFOs") && !(game == "HSiFS" && type != "Winter")) {
                    shotplayers.sort();
                    $("#" + game + character + "n").html(shotcount + (game == "IN" ? " (" + shotplayersIN.length + ")" : ""));

                    if (shotcount === 0) {
                        $("#" + game + character).html('-');
                        continue;
                    }

                    for (i in shotplayers) {
                        $("#" + game + character).append(", " + shotplayers[i]);
                    }

                    if ($("#" + game + character).html().substring(0, 2) == ", ") {
                        $("#" + game + character).html($("#" + game + character).html().replace(", ", ""));
                    }
                }
            }

            players.sort();

            for (i in players) {
                $("#" + game + "t").append(", " + players[i]);
            }

            $("#" + game + "tn").html(gamecount + " (" + players.length + ")");
            $("#" + game + "on").html(gamecount);
            $("#" + game + "o").html(players.length);
            $("#" + game + "t").html($("#" + game + "t").html().replace(", ", ""));

            if (!$("#" + game + "c").is(":checked")) {
                hide(game);
            }
        }

        for (player in playerLNNs) {
            $("#ranking_tbody").append("<tr><td>" + player + "</td><td>" + playerLNNs[player] + "</td><td>" + playergameLNNs[player].length + "</td></tr>");
        }

        $("#on").html(count);
        $("#o").html(Object.keys(playerLNNs).length);

        if (!$("#overallc").is(":checked")) {
            hide("overall");
        }

        if (!$("#playersc").is(":checked")) {
            hide("players");
        }

        $("#autosort2").click();
        $("#autosort2").click();
        $("#autosort2").click();
        $("#autosort1").click();
        $("#autosort1").click();

        if (getCookie("lang") == "Japanese") {
            language = "Japanese";
            generateText();
        } else if (getCookie("lang") == "Chinese") {
            language = "Chinese";
            generateText();
        }
    }, "json");
});
