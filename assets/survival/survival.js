var vals = {
    "HRtP": {
        "Easy": "N/A",
        "Normal": "N/A",
        "Hard": "N/A",
        "Lunatic": "N/A"
    },
    "SoEW": {
        "Easy": "N/A",
        "Normal": "N/A",
        "Hard": "N/A",
        "Lunatic": "N/A",
        "Extra": "N/A"
    },
    "PoDD": {
        "Easy": "N/A",
        "Normal": "N/A",
        "Hard": "N/A",
        "Lunatic": "N/A"
    },
    "LLS": {
        "Easy": "N/A",
        "Normal": "N/A",
        "Hard": "N/A",
        "Lunatic": "N/A",
        "Extra": "N/A"
    },
    "MS": {
        "Easy": "N/A",
        "Normal": "N/A",
        "Hard": "N/A",
        "Lunatic": "N/A",
        "Extra": "N/A"
    },
    "EoSD": {
        "Easy": "N/A",
        "Normal": "N/A",
        "Hard": "N/A",
        "Lunatic": "N/A",
        "Extra": "N/A"
    },
    "PCB": {
        "Easy": "N/A",
        "Normal": "N/A",
        "Hard": "N/A",
        "Lunatic": "N/A",
        "Extra": "N/A",
        "Phantasm": "N/A"
    },
    "IN": {
        "Easy": "N/A",
        "Normal": "N/A",
        "Hard": "N/A",
        "Lunatic": "N/A",
        "Extra": "N/A"
    },
    "PoFV": {
        "Easy": "N/A",
        "Normal": "N/A",
        "Hard": "N/A",
        "Lunatic": "N/A",
        "Extra": "N/A"
    },
    "MoF": {
        "Easy": "N/A",
        "Normal": "N/A",
        "Hard": "N/A",
        "Lunatic": "N/A",
        "Extra": "N/A"
    },
    "SA": {
        "Easy": "N/A",
        "Normal": "N/A",
        "Hard": "N/A",
        "Lunatic": "N/A",
        "Extra": "N/A"
    },
    "UFO": {
        "Easy": "N/A",
        "Normal": "N/A",
        "Hard": "N/A",
        "Lunatic": "N/A",
        "Extra": "N/A"
    },
    "GFW": {
        "Easy": "N/A",
        "Normal": "N/A",
        "Hard": "N/A",
        "Lunatic": "N/A",
        "Extra": "N/A"
    },
    "TD": {
        "Easy": "N/A",
        "Normal": "N/A",
        "Hard": "N/A",
        "Lunatic": "N/A",
        "Extra": "N/A"
    },
    "DDC": {
        "Easy": "N/A",
        "Normal": "N/A",
        "Hard": "N/A",
        "Lunatic": "N/A",
        "Extra": "N/A"
    },
    "LoLK": {
        "Easy": "N/A",
        "Normal": "N/A",
        "Hard": "N/A",
        "Lunatic": "N/A",
        "Extra": "N/A"
    },
    "HSiFS": {
        "Easy": "N/A",
        "Normal": "N/A",
        "Hard": "N/A",
        "Lunatic": "N/A",
        "Extra": "N/A"
    },
    "WBaWC": {
        "Easy": "N/A",
        "Normal": "N/A",
        "Hard": "N/A",
        "Lunatic": "N/A",
        "Extra": "N/A"
    }
};
function isTripleNGame(game) {
    return game == "PCB" || game == "UFO" || game == "TD" || game == "HSiFS" || game == "WBaWC"
}
function getPercentage(game) {
    return 100 / Object
        .keys(vals[game])
        .length
}
function setProgress(category, val) {
    var game,
        difficulty,
        tmp;
    difficulty = category.match(/Easy|Normal|Hard|Lunatic|Extra|Phantasm/);
    game = category.replace(difficulty, "");
    vals[game][difficulty] = val
}
function gameSpecific(game, achievement) {
    if (game == "PCB") {
        return ({"NB+": "NBNBB", "NMNB": "NMNBNBB"}[achievement])
    } else if (game == "UFO") {
        return ({"NB+": "NBNV", "NMNB": "NMNB(NV)"}[achievement])
    } else if (game == "UFO") {
        return ({"NB+": "NBNV", "NMNB": "NMNB(NV)"}[achievement])
    } else if (game == "TD") {
        return ({"NB+": "NBNT", "NMNB": "NMNBNT"}[achievement])
    } else if (game == "HSiFS") {
        return ({"NB+": "NBNR", "NMNB": "NMNBNR"}[achievement])
    } else if (game == "WBaWC") {
        return ({"NB+": "NBNHNRB", "NMNB": "NNNN"}[achievement])
    } else {
        return ({"NB+": "NB", "NMNB": "NMNB"}[achievement])
    }
}
function fillAll(value, achievement) {
    var difficulty;
    if (vals.hasOwnProperty(value)) {
        for (difficulty in vals[value]) {
            tmp = achievement;
            if (achievement == "NB+" || achievement == "NMNB") {
                achievement = gameSpecific(value, achievement)
            }
            $("#" + value + difficulty).val(achievement);
            vals[value][difficulty] = achievement;
            achievement = tmp
        }
    } else {
        if (value == "Extra") {
            $("#PCBPhantasm").val(gameSpecific("PCB", achievement))
        }
        for (game in vals) {
            tmp = achievement;
            if (achievement == "NB+" || achievement == "NMNB") {
                achievement = gameSpecific(game, achievement)
            }
            if (value == "Normal" || value == "Hard" || value == "Lunatic") {
                $("#" + game + "Easy").val(achievement);
                vals[game]["Easy"] = achievement;
                if (value == "Hard" || value == "Lunatic") {
                    $("#" + game + "Normal").val(achievement);
                    vals[game]["Normal"] = achievement;
                    if (value == "Lunatic") {
                        $("#" + game + "Hard").val(achievement);
                        vals[game]["Hard"] = achievement
                    }
                }
            }
            if (value == "Extra" && (game == "HRtP" || game == "PoDD")) {
                continue
            }
            $("#" + game + value).val(achievement);
            vals[game][value] = achievement;
            achievement = tmp
        }
    }
}
function format(achievement) {
    return ({
        "N/A": "",
        "Not cleared": "",
        "1cc": "clear",
        "NM": "nm",
        "NB": "nb",
        "NBNBB": "nbp",
        "NBNV": "nbp",
        "NBNT": "nbp",
        "NBNR": "nbp",
        "NBNHNRB": "nbp",
        "NMNB": "nmnb",
        "NMNBNBB": "nmnb",
        "NMNB(NV)": "nmnb",
        "NMNBNT": "nmnb",
        "NMNBNR": "nmnb",
        "NNNN": "nmnb"
    })[achievement]
}
function apply() {
    var numbers = {
            "Easy": {
                "Not cleared": 0,
                "1cc": 0,
                "NM": 0,
                "NB": 0,
                "NB+": 0,
                "NMNB": 0
            },
            "Normal": {
                "Not cleared": 0,
                "1cc": 0,
                "NM": 0,
                "NB": 0,
                "NB+": 0,
                "NMNB": 0
            },
            "Hard": {
                "Not cleared": 0,
                "1cc": 0,
                "NM": 0,
                "NB": 0,
                "NB+": 0,
                "NMNB": 0
            },
            "Lunatic": {
                "Not cleared": 0,
                "1cc": 0,
                "NM": 0,
                "NB": 0,
                "NB+": 0,
                "NMNB": 0
            },
            "Extra": {
                "Not cleared": 0,
                "1cc": 0,
                "NM": 0,
                "NB": 0,
                "NB+": 0,
                "NMNB": 0
            },
            "Total": {
                "Not cleared": 0,
                "1cc": 0,
                "NM": 0,
                "NB": 0,
                "NB+": 0,
                "NMNB": 0
            }
        },
        na = {
            "HRtP": 0,
            "SoEW": 0,
            "PoDD": 0,
            "LLS": 0,
            "MS": 0,
            "EoSD": 0,
            "PCB": 0,
            "IN": 0,
            "PoFV": 0,
            "MoF": 0,
            "SA": 0,
            "UFO": 0,
            "GFW": 0,
            "TD": 0,
            "DDC": 0,
            "LoLK": 0,
            "HSiFS": 0,
            "WBaWC": 0
        },
        completions = {
            "HRtP": 0,
            "SoEW": 0,
            "PoDD": 0,
            "LLS": 0,
            "MS": 0,
            "EoSD": 0,
            "PCB": 0,
            "IN": 0,
            "PoFV": 0,
            "MoF": 0,
            "SA": 0,
            "UFO": 0,
            "GFW": 0,
            "TD": 0,
            "DDC": 0,
            "LoLK": 0,
            "HSiFS": 0,
            "WBaWC": 0
        },
        results = "<h2>Progress Table</h2><table id='overview'><thead><tr><th class='overview'>Game" +
                "</th><th class='overview'>Easy</th><th class='overview'>Normal</th><th class='ov" +
                "erview'>Hard</th><th class='overview'>Lunatic</th><th class='overview' colspan='" +
                "2'>Extra</th></tr></thead><tbody>",
        game,
        difficulty,
        val;
    for (game in vals) {
        results += "<tr><th>" + game + "</th>";
        for (difficulty in vals[game]) {
            val = vals[game][difficulty];
            results += "<td class='" + format(val) + "'" + (difficulty == "Extra" && game != "PCB"
                ? " colspan='2'"
                : "") + ">" + (format(val) == "nbp"
                ? val
                : "") + "</td>";
            if (difficulty == "Phantasm") {
                difficulty = "Extra"
            }
            if (val == "N/A") {
                na[game] += getPercentage(game)
            } else if (val == "Not cleared") {
                numbers[difficulty]["Not cleared"] += 1;
                numbers["Total"]["Not cleared"] += 1
            } else {
                completions[game] += getPercentage(game);
                if (val.substr(0, 2) == "NB" && val.length > 2) {
                    numbers[difficulty]["NB+"] += 1;
                    numbers["Total"]["NB+"] += 1
                } else if (val.substr(0, 4) == "NMNB") {
                    numbers[difficulty]["NMNB"] += 1;
                    numbers["Total"]["NMNB"] += 1
                } else {
                    numbers[difficulty][val] += 1;
                    numbers["Total"][val] += 1
                }
            }
        }
        if (game == "HRtP" || game == "PoDD") {
            results += "<td colspan='2'>X</td>"
        }
        results += "</tr>";
        if (game == "MS") {
            results += "<tr><td></td><td></td><td></td><td></td><td></td><td colspan='2'></td></tr>"
        }
    }
    results += "</tbody></table><h2>Numbers of Achievements</h2><table id='table' class='sortabl" +
            "e'><thead><tr><th>Difficulty</th><th>Not cleared</th><th>1cc</th><th>NM</th><th>" +
            "NB</th><th>NB+</th><th>NMNB</th></tr></thead><tbody>";
    for (difficulty in numbers) {
        if (difficulty == "Total") {
            results += "<tr><td></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>"
        }
        results += "<tr><th>" + difficulty + "</th>";
        for (val in numbers[difficulty]) {
            results += "<td>" + numbers[difficulty][val] + "</td>"
        }
        results += "</tr>"
    }
    results += "</tbody></table><h2>Clear Completions</h2><table id='gameTable' class='sortable'" +
            "><thead><tr><th>Game</th><th>Clear Completion</th></tr></thead><tbody>";
    for (game in vals) {
        if (Math.round(na[game]) == 100) {
            continue
        }
        results += "<tr><td>" + game + "</td><td>" + Math.round(completions[game]) + "%</td></tr>"
    }
    results += "</tbody></table><br>";
    $("#results").html(results);
    $("#table").attr("align", "center");
    $("#gameTable").attr("align", "center");
    $("#overview").attr("align", "center");
    sorttable.makeSortable(table);
    sorttable.makeSortable(gameTable);
    if ($("#toggleData").is(":checked")) {
        localStorage.setItem("saveData", true);
        localStorage.setItem("vals", JSON.stringify(vals))
    } else {
        localStorage.removeItem("saveData")
    }
}
function reset() {
    var confirmation = confirm("Are you sure you want to reset your progress table?"),
        game,
        difficulty;
    if (confirmation) {
        $("#toggleData").prop("checked", false);
        localStorage.removeItem("vals");
        localStorage.removeItem("saveData")
    }
    for (var game in vals) {
        for (difficulty in vals[game]) {
            vals[game][difficulty] = "N/A";
            $("#" + game + difficulty).val("N/A")
        }
    }
}
function allowData() {
    if (localStorage.length <= 2) {
        var allowed = confirm("This will store data in your browser's Web Storage, which functions like a cooki" +
                "e. Do you allow this?");
        if (!allowed) {
            $("#toggleData").prop("checked", false)
        }
    }
}
function dark() {
    var style = document.createElement("link");
    style.id = "dark";
    style.href = "assets/shared/dark-tables.css";
    style.type = "text/css";
    style.rel = "stylesheet";
    $("head").append(style);
    $("#hy").attr("title", "Youkai Mode");
}
function theme(e) {
    if (e.src.indexOf("y") < 0) {
        e.src = "assets/shared/y-bar.png";
        localStorage.theme = "dark";
        dark()
    } else {
        e.src = "assets/shared/h-bar.png";
        $("head").children("#dark").remove();
        $("#hy").attr("title", "Human Mode");
        localStorage.theme = "light"
    }
}
$(document)
    .ready(function () {
        var data;
        if (localStorage.theme == "dark") {
            $("#hy").attr("src", "assets/shared/y-bar.png");
            dark()
        }
        if (getCookie("vals")) {
            localStorage.setItem("vals", JSON.stringify(getCookie("vals")));
            deleteCookie("vals")
        }
        if (getCookie("saveCookies")) {
            localStorage.setItem("saveData", getCookie("saveCookies"));
            deleteCookie("saveCookies")
        }
        if (location.protocol == "file:") {
            var path = location
                .pathname
                .split('/')
                .pop();
            $("#nav a").attr("href", function (i, oldHref) {
                return (oldHref == '/'
                    ? location.href.replace(path, "index.html") + ""
                    : oldHref + ".html")
            })
        }
        try {
            if (localStorage.saveData) {
                $("#toggleData").prop("checked", Boolean(localStorage.saveData))
            }
        } catch (err) {}
        data = localStorage.getItem("vals");
        if (data) {
            vals = JSON.parse(data);
            if (!vals.hasOwnProperty("WBaWC")) {
                vals.WBaWC = {
                    "Easy": "N/A",
                    "Normal": "N/A",
                    "Hard": "N/A",
                    "Lunatic": "N/A",
                    "Extra": "N/A"
                }
            }
        }
        for (var game in vals) {
            for (difficulty in vals[game]) {
                $("#" + game + difficulty).val(vals[game][difficulty])
            }
        }
        if (navigator.userAgent.contains("Mobile") || navigator.userAgent.contains("Tablet")) {
            $("#notice").css("display", "block")
        }
    });
