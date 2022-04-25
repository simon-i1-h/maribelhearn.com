<?php
$games = ['HRtP', 'SoEW', 'PoDD', 'LLS', 'MS', 'EoSD', 'PCB', 'INFinalA', 'INFinalB',
'PoFV', 'MoF', 'SA', 'UFO', 'GFW', 'TD', 'DDC', 'LoLK', 'HSiFS', 'WBaWC', 'UM'];
$diffs = ['Easy', 'Normal', 'Hard', 'Lunatic', 'Extra'];
function achievs(string $game) {
    $achievs = ['N/A', 'Not cleared', '1cc', 'NM', 'NB'];
    switch ($game) {
        case 'PCB': return array_merge($achievs, ['NBB', 'NMNBB', 'NBNBB', 'NMNBNBB']);
        case 'UFO': return array_merge($achievs, ['NV', 'NMNV', 'NBNV', 'NMNB(NV)']);
        case 'TD': return array_merge($achievs, ['NT', 'NMNT', 'NBNT', 'NMNBNT']);
        case 'HSiFS': return array_merge($achievs, ['NR', 'NMNR', 'NBNR', 'NMNBNR']);
        case 'WBaWC': return array_merge($achievs, ['NHNRB', 'NMNHNRB', 'NBNHNRB', 'NNNN']);
        case 'UM': return array_merge($achievs, ['NC', 'NMNC', 'NBNC', 'NMNBNC']);
        default: return array_merge($achievs, ['NMNB']);
    }
}
function no_extra(string $game) {
    return in_array($game, ['HRtP', 'PoDD', 'INFinalB']);
}
function display_name(string $game) {
    if ($game == 'INFinalA') {
        return 'IN <span class="in_route">FinalA</span>';
    } else if ($game == 'INFinalB') {
        return 'IN <span class="in_route">FinalB</span>';
    } else {
        return $game;
    }
}
?>
