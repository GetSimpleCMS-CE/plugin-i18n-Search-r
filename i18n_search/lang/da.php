<?php
/**
 *
 * @package I18n Search 2.7
 * @subpackage Plugin Language
 * @file type: Danish Language File
 * @Version: 1.1
 * @Date: 30. april 2012
 * @author: Christian Sand
 * @website: http://www.get-simple.dk
 */

$i18n = [
    'GO' => "Søg"
  , 'HEADER' => "Søgeresultater"
  , 'NOT_FOUND' => "Ingen resultater"
  , 'DATE_LOCALE' => "da_DA.utf8,da_DA,da"
  , 'DATE_FORMAT' => "%A, %d.%m.%Y - %H:%M"
  , 'FIRST_TEXT' => "<<"
  , 'FIRST_TITLE' => "Første side"
  , 'PREV_TEXT' => "<"
  , 'PREV_TITLE' => "Forrige side"
  , 'NEXT_TEXT' => ">"
  , 'NEXT_TITLE' => "Næste side"
  , 'LAST_TEXT' => ">>"
  , 'LAST_TITLE' => "Sidste side"
  , 'CONFIGURE' => "I18N Søgning"
  , 'CONFIGURATION' => "I18N Søgning"
  , 'VIEW_USAGE' => "Opsætning"
  , 'VIEW_SETTINGS' => "Indstillinger"
  , 'INDEX_SETTINGS' => "Indeksering"
  , 'INDEX_DESCRIPTION' => "Indstil vægtning af søgeord på baggrund af findested - Hvis søgeord i titler fx vægtes med værdien \"5\", mens ord i indhold kun vægtes med talværdien \"1\", vil søgeord i titeler blive vægtet fem gange højere end søgeord fundet i indholdet."
  , 'CONTENT_WEIGHT' => "Søgeord i indhold"
  , 'TITLE_WEIGHT' => "Søgeord i titel"
  , 'TAG_WEIGHT' => "Søgeord i etiketter og nøgleord"
  , 'SEARCHFORM_SETTINGS' => "Søgeformular"
  , 'SEARCHFORM_DESCRIPTION' => "Skal formularen med søgeresultater indeholde en etikettesky? Slå denne funktion fra, hvis du ikke har oprettet etiketter og nøgleord til dine sider."
  , 'SHOW_TAGS' => "Vis etikettesky"
  , 'MIN_TAG_SIZE' => "Mindste etiketstørrelse (procent af fontstørrelse)"
  , 'MAX_TAG_SIZE' => "Største etiketstørrelse (procent af fontstørrelse)"
  , 'SEARCHRESULT_SETTINGS' => "Søgeresultater"
  , 'SEARCHRESULT_DESCRIPTION' => "Disse indstillinger bestemmer, hvordan søgeresultaterne vises."
  , 'MAX' => "Maksimale antal søgeresultater pr. side"
  , 'NUM_WORDS' => "Antal ord i søgeudkørsl (0 = ingen, -1 = hele indholdet)"
  , 'SHOW_LANGUAGE' => "Vis sprog for søgeresultater (kun for flersprogede websteder)"
  , 'SHOW_UL' => "Use UL and LI HTML-tags"
  , 'SHOW_DATE' => "Vis udgivelsesdato for søgeresultater"
  , 'SHOW_PAGING' => "Vis navigeringspanel, hvis søgeresultaterne fylder mere end en side"
  , 'SAVE_CONFIGURATION' => "Gem"
  , 'RESET_CONFIGURATION' => "Nulstil"
  , 'SAVE_FAILURE' => "Dine ændrede søgeindstillingerne blev ikke gemt."
  , 'SAVE_SUCCESS' => "Dine ændrede søgeindstillingerne blev gemt."
  , 'RESET_FAILURE' => "Søgeindstillingerne blev ikke nulstillet."
  , 'RESET_SUCCESS' => "Søgeindstillingerne blev sat til standardværdier."
  , 'UNDO_FAILURE' => "Søgeindstillingerne blev ikke gendannet."
  , 'UNDO_SUCCESS' => "Søgeindstillingerne blev gendannet."
  , 'USAGE_IN_PAGE' => "Opret fx en side med URL'en \"search\" og titlen \"search\" under sideindstillinger - og placer følgende linjer i sidens indholdsrude:"
  , 'USAGE_IN_TEMPLATE' => "Anvend kodelinjen her under for at placere en søgeformular på sidebjælken eller i et sidehoved (hvor \"search\" er ULR'en på den side, hvor søgeresultaterne vises):"
  , 'CUSTOMIZE_1' => "Søgefunktionen tilpasse ved hjælp af "
  , 'CUSTOMIZE_2' => "eller den tilpasses manuelt ved at bruge søgeparametrene nederst på denne side."
  , 'CUSTOMIZE_3' => "Søgeparametre:"
  , 'PARAMETER_NAME' => "Navn"
  , 'PARAMETER_DESCRIPTION' => "Beskrivelse"
  , 'SLUG_DESCR' => "Forkortet URL på siden med søgeresultater (fx \"search\")"
  , 'GO_DESCR' => "Tekst på søgeknap"
  , 'TAGS_DESCR' => "Etiketter (nøgleord) til at søge efter - i stedet for de oplyste etiketter"
  , 'WORDS_DESCR' => "Søgeord - i stedet for de oplyste ord"
  , 'ORDER_DESCR' => "Sorter søgeresultater: <i>url</i> = stigende efter forkortet URL, <i>reverseurl</i> = faldende efter forkortet URL, <i>date</i> = faldende efter udgivelsesdato, <i>created</i> = faldende efter tidspunkt for oprettelse (hvis informationen er til rådighed), resultater ordnes som standard faldende efter antal"
  , 'HEADER_DESCR' => "Sidehoved med søgeresultater"
  , 'NOT_FOUND_DESCR' => "Besked om, at ingen resultater blev fundet"
  , 'DATE_LOCALE_DESCR' => "Tillad visning af et eller flere lokale datoformater ved at angive de enkelte formater kommasepareret (fx \"da_DA.utf8,da_DA,da\")"
  , 'DATE_FORMAT_DESCR' => "Datoformat, som specificeret for PHP-funktionens STRFT-id (fx \"%A, %d.%m.%Y - %H:%M\")"
  , 'PAGING_DESCR' => "Sidenummer, fx."
  , 'LANGUAGE_FILE_COMMENT' => "Parametre skrevet med store bogstaver indlæses normalt fra tilføjelsesprogrammets sprogfil. Det anbefales at oprette eller ændre sprogfiler (i /plugins/i18n_search/lang/) i stedet for at bruge disse parametre."
  , 'LANG_DESCR' => "Vis kun søgeresultater i det angivne sprog. Alternativt vises alle søgeresultater på brugerens sprog og systemets standardsprog (fx \"da\" for dansk, \"de\" for tysk eller \"us\" for engelsk."
  , 'ADDTAGS_DESCR' => "Føjer yderligere etiketter til søgningen"
  , 'ADDWORDS_DESCR' => "Føjer yderligere ord til søgningen"
  , 'COMPONENT_DESCR' => "Angiver en komponent, som kalder for hvert søgeresultat"
  , 'TRANSLITERATION' => "Indstillinger for transliteration"
  , 'TRANSLITERATION_DESCRIPTION' => "Angiv translations af karakterer, som skal benyttes under søgningen. Hver linje indeholder en translation af typen <em>source character(s) \"=\" target character(s)</em>, e.g. <em>ø=o</em>."
  , 'TRANSLITERATION_SETTINGS' => "Transliteration"
  , 'AJAX_DESCR' => "Værdien \"0\" deaktiverer AJAX-funktionalitet på søgeformular og etikettesky."
  , 'PLACEHOLDER_DESCR' => "Pladsholder for indput til søgefelt"
  , 'LIVE_DESCR' => "Værdien \"1\" aktiverer livesøgning med visning af søgeresultater under skrivning eller valg af nøgleord (værdien skal angives for både søgeformular og søgeresultater)."
  , 'IDPREFIX_DESCR' => "Tildeler de enkelte søgeresulter et prefiks med et id og en øget talværdi"
  , 'TAGCLASSPREFIX_DESCR' => "Etiketter vil blive tilføjet til søgeresultater som CSS-klasser - med denne værdi som præfiks. Denne søgepræference anvendes for at tilpasse søgeresultater fundet på baggrund af etiketter"
  , 'TAG_MODE' => "Hvilke etiketter skal benyttes?"
  , 'TAGS_LANG_OR_DEFLANG' => "Etiketter for standardsprog (hvis ikke der eksisterer sprogspecifikke etiketter)"
  , 'TAGS_ALWAYS_DEFLANG' => "Etiketter for standardsprog"
  , 'TAGS_ALWAYS_LANG' => "Sprogspecifikke etiketter")
  , 'SHOW_SCRIPT' => "Use autocomplete script? (requires a jQuery library connection)"
  ];