# User Stories - DreamScape Interactive

## Gebruikersregistratie
### Als speler wil ik een account kunnen aanmaken zodat ik mijn virtuele bezittingen kan beheren.
#### Definition of Done:
- Er is een registratiepagina beschikbaar.
- Spelers kunnen een unieke gebruikersnaam en wachtwoord invoeren.
- Registratie wordt bevestigd met een melding.
- Het account wordt opgeslagen in de database.
- Er is een validatiemechanisme voor correcte invoer (bijv. sterk wachtwoord, unieke gebruikersnaam).

### Als speler wil ik mijn profielinformatie kunnen bekijken en aanpassen zodat ik mijn account up-to-date kan houden.
#### Definition of Done:
- Spelers kunnen hun profiel openen via een menu.
- Basisinformatie zoals gebruikersnaam en e-mail kan worden aangepast.
- Wijzigingen worden correct opgeslagen in de database.
- Wijzigingen worden onmiddellijk zichtbaar in de UI.

### Als speler wil ik zelfstandig een account kunnen registreren zonder tussenkomst van een beheerder zodat ik snel kan beginnen met spelen.
#### Definition of Done:
- Er is een zelfregistratiesysteem zonder handmatige goedkeuring.
- Spelers kunnen zelf hun wachtwoord instellen en wijzigen.
- Er is een e-mailverificatie voor extra beveiliging.

---

## Authenticatie
### Als speler wil ik kunnen inloggen met mijn gebruikersnaam en wachtwoord zodat ik toegang krijg tot mijn account.
#### Definition of Done:
- Er is een inlogpagina beschikbaar.
- Gebruikersnaam en wachtwoord worden geverifieerd in de database.
- Bij een correcte login wordt de speler doorgestuurd naar het dashboard.
- Onjuiste inloggegevens geven een duidelijke foutmelding.

### Als beheerder wil ik toegang kunnen krijgen tot het beheerderspaneel zodat ik administratieve taken kan uitvoeren.
#### Definition of Done:
- Beheerders hebben een aparte login met extra rechten.
- Alleen beheerders kunnen toegang krijgen tot het beheerderspaneel.
- Er is een autorisatiesysteem dat rollen onderscheidt.

### Als systeembeheerder wil ik rol-gebaseerde toegangscontrole kunnen instellen zodat alleen geautoriseerde gebruikers bepaalde functies kunnen uitvoeren.
#### Definition of Done:
- Rollen en rechten zijn correct gedefinieerd.
- Spelers kunnen geen beheerderstaken uitvoeren.
- Beheerders hebben extra mogelijkheden zoals gebruikersbeheer en itembeheer.

---

## Virtuele Items
### Als speler wil ik door een catalogus met virtuele items kunnen bladeren zodat ik beschikbare items kan verkennen.
#### Definition of Done:
- Er is een overzichtelijke cataloguspagina.
- Items zijn voorzien van een afbeelding, naam en beschrijving.
- Items kunnen gefilterd en gesorteerd worden.

### Als speler wil ik items kunnen filteren op type, zeldzaamheid en andere statistieken zodat ik sneller relevante items kan vinden.
#### Definition of Done:
- Er zijn filteropties voor type, zeldzaamheid en statistieken.
- Filters werken dynamisch en tonen direct de resultaten.

### Als speler wil ik de details van een item kunnen bekijken zodat ik de eigenschappen van het item begrijp.
#### Definition of Done:
- Elk item heeft een aparte detailpagina.
- Statistieken zoals kracht, snelheid en duurzaamheid worden weergegeven.
- Magische eigenschappen worden correct weergegeven.

### Als speler wil ik een persoonlijke inventaris hebben zodat ik mijn verzamelde items kan beheren.
#### Definition of Done:
- Spelers kunnen hun eigen verzamelde items bekijken.
- Items kunnen worden gesorteerd en gefilterd.
- Er is een optie om items te verwijderen of te gebruiken.

---

## Handelssysteem
### Als speler wil ik items kunnen ruilen met andere spelers zodat ik mijn inventaris kan optimaliseren.
#### Definition of Done:
- Er is een ruilsysteem waarin spelers items kunnen aanbieden.
- Spelers kunnen een handelsverzoek indienen bij andere spelers.
- De ruil vindt pas plaats als beide partijen akkoord gaan.

### Als speler wil ik handelsaanbiedingen kunnen accepteren of weigeren zodat ik volledige controle heb over mijn ruiltransacties.
#### Definition of Done:
- Inkomende handelsverzoeken zijn zichtbaar in de interface.
- Spelers kunnen ruilverzoeken accepteren of afwijzen.
- Geaccepteerde ruilen worden correct verwerkt in de database.

### Als speler wil ik meldingen ontvangen wanneer ik een handelsverzoek krijg zodat ik op de hoogte blijf van nieuwe kansen.
#### Definition of Done:
- Er is een notificatiesysteem voor binnenkomende handelsverzoeken.
- Spelers krijgen een melding wanneer een handelsverzoek wordt geaccepteerd.

---

## Beheerderspaneel
### Als beheerder wil ik gebruikersaccounts kunnen aanmaken zodat nieuwe spelers snel toegang krijgen tot de game.
#### Definition of Done:
- Beheerders kunnen handmatig nieuwe accounts aanmaken.
- Aangemaakte accounts verschijnen in de gebruikerslijst.

### Als beheerder wil ik virtuele items kunnen toevoegen, bewerken en verwijderen zodat ik de itemcatalogus kan beheren.
#### Definition of Done:
- Beheerders kunnen nieuwe items toevoegen en verwijderen.
- Itemgegevens kunnen worden bijgewerkt zonder dat spelers hun items verliezen.

### Als beheerder wil ik statistieken van items kunnen aanpassen zodat ik de balans binnen het spel kan bewaken.
#### Definition of Done:
- Itemstatistieken kunnen bewerkt worden via het beheerderspaneel.
- Wijzigingen worden correct opgeslagen en zijn direct zichtbaar voor spelers.

### Als beheerder wil ik kunnen zien hoeveel spelers een bepaald item bezitten zodat ik de economie binnen de game kan monitoren.
#### Definition of Done:
- Een statistiekensectie toont hoeveel spelers een bepaald item bezitten.
- Data wordt correct geaggregeerd en weergegeven.

### Als beheerder wil ik verloren of beloonde items aan spelers kunnen toekennen zodat ik bugs kan corrigeren en evenementen kan ondersteunen.
#### Definition of Done:
- Beheerders kunnen items direct toekennen aan spelers.
- Een log houdt bij welke items zijn toegewezen en waarom.

---

## Beveiliging & Privacy
### Als speler wil ik dat mijn persoonlijke gegevens veilig worden opgeslagen zodat mijn privacy gewaarborgd blijft.
#### Definition of Done:
- Gegevens worden versleuteld opgeslagen.
- Privacybeleid is beschikbaar en makkelijk toegankelijk.

### Als speler wil ik een veilig wachtwoordbeleid hebben zodat mijn account beschermd blijft tegen ongeoorloofde toegang.
#### Definition of Done:
- Wachtwoorden moeten minimaal 8 tekens bevatten.
- Er is ondersteuning voor tweefactorauthenticatie (2FA).

### Als systeembeheerder wil ik dat alleen noodzakelijke gegevens worden opgeslagen zodat we voldoen aan de principes van data-minimalisatie.
#### Definition of Done:
- Er worden geen onnodige persoonsgegevens verzameld.
- Gegevensverzameling is beperkt tot wat strikt noodzakelijk is.

---

## Overige Functionaliteiten
### Als speler wil ik kunnen zien welke items ik bezit zodat ik eenvoudig mijn inventaris kan beheren.
#### Definition of Done:
- Er is een "Mijn Inventaris" pagina waarin alle items zichtbaar zijn.

### Als speler wil ik mijn items kunnen sorteren op kracht, snelheid of zeldzaamheid zodat ik mijn uitrusting snel kan optimaliseren.
#### Definition of Done:
- Sorteeropties zijn beschikbaar in de inventaris.
- Items worden correct geordend na selectie.

### Als beheerder wil ik een zoekfunctie hebben in het beheerderspaneel zodat ik snel specifieke spelers of items kan vinden.
#### Definition of Done:
- Beheerders kunnen zoeken op gebruikersnaam en itemnaam.
- Zoekresultaten worden correct weergegeven en gefilterd.
