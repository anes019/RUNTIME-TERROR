<?php

use Symfony\Component\Translation\MessageCatalogue;

$catalogue = new MessageCatalogue('da', array (
  'validators' => 
  array (
    'This value should be false.' => 'Værdien skal være falsk.',
    'This value should be true.' => 'Værdien skal være sand.',
    'This value should be of type {{ type }}.' => 'Værdien skal være af typen {{ type }}.',
    'This value should be blank.' => 'Værdien skal være blank.',
    'The value you selected is not a valid choice.' => 'Den valgte værdi er ikke gyldig.',
    'You must select at least {{ limit }} choice.|You must select at least {{ limit }} choices.' => 'Du skal vælge mindst én mulighed.|Du skal vælge mindst {{ limit }} muligheder.',
    'You must select at most {{ limit }} choice.|You must select at most {{ limit }} choices.' => 'Du kan højst vælge én mulighed.|Du kan højst vælge {{ limit }} muligheder.',
    'One or more of the given values is invalid.' => 'En eller flere af de angivne værdier er ugyldige.',
    'This field was not expected.' => 'Feltet blev ikke forventet.',
    'This field is missing.' => 'Dette felt mangler.',
    'This value is not a valid date.' => 'Værdien er ikke en gyldig dato.',
    'This value is not a valid datetime.' => 'Værdien er ikke et gyldigt tidspunkt.',
    'This value is not a valid email address.' => 'Værdien er ikke en gyldig e-mailadresse.',
    'The file could not be found.' => 'Filen kunne ikke findes.',
    'The file is not readable.' => 'Filen kan ikke læses.',
    'The file is too large ({{ size }} {{ suffix }}). Allowed maximum size is {{ limit }} {{ suffix }}.' => 'Filen er for stor ({{ size }} {{ suffix }}). Maksimale tilladte størrelse er {{ limit }} {{ suffix }}.',
    'The mime type of the file is invalid ({{ type }}). Allowed mime types are {{ types }}.' => 'Filens MIME-type er ugyldig ({{ type }}). Tilladte MIME-typer er {{ types }}.',
    'This value should be {{ limit }} or less.' => 'Værdien skal være {{ limit }} eller mindre.',
    'This value is too long. It should have {{ limit }} character or less.|This value is too long. It should have {{ limit }} characters or less.' => 'Værdien er for lang. Den må højst indeholde {{ limit }} tegn.',
    'This value should be {{ limit }} or more.' => 'Værdien skal være {{ limit }} eller mere.',
    'This value is too short. It should have {{ limit }} character or more.|This value is too short. It should have {{ limit }} characters or more.' => 'Værdien er for kort. Den skal indeholde mindst {{ limit }} tegn.',
    'This value should not be blank.' => 'Værdien må ikke være blank.',
    'This value should not be null.' => 'Værdien må ikke være tom (null).',
    'This value should be null.' => 'Værdien skal være tom (null).',
    'This value is not valid.' => 'Værdien er ikke gyldig.',
    'This value is not a valid time.' => 'Værdien er ikke et gyldigt klokkeslæt.',
    'This value is not a valid URL.' => 'Værdien er ikke en gyldig URL.',
    'The two values should be equal.' => 'De to værdier skal være ens.',
    'The file is too large. Allowed maximum size is {{ limit }} {{ suffix }}.' => 'Filen er for stor. Den maksimale størrelse er {{ limit }} {{ suffix }}.',
    'The file is too large.' => 'Filen er for stor.',
    'The file could not be uploaded.' => 'Filen kunne ikke blive uploadet.',
    'This value should be a valid number.' => 'Værdien skal være et gyldigt tal.',
    'This file is not a valid image.' => 'Filen er ikke gyldigt billede.',
    'This is not a valid IP address.' => 'Dette er ikke en gyldig IP-adresse.',
    'This value is not a valid language.' => 'Værdien er ikke et gyldigt sprog.',
    'This value is not a valid locale.' => 'Værdien er ikke en gyldig lokalitet.',
    'This value is not a valid country.' => 'Værdien er ikke et gyldigt land.',
    'This value is already used.' => 'Værdien er allerede i brug.',
    'The size of the image could not be detected.' => 'Størrelsen på billedet kunne ikke detekteres.',
    'The image width is too big ({{ width }}px). Allowed maximum width is {{ max_width }}px.' => 'Billedet er for bredt ({{ width }}px). Største tilladte bredde er {{ max_width }}px.',
    'The image width is too small ({{ width }}px). Minimum width expected is {{ min_width }}px.' => 'Billedet er for smalt ({{ width }}px). Mindste forventede bredde er {{ min_width }}px.',
    'The image height is too big ({{ height }}px). Allowed maximum height is {{ max_height }}px.' => 'Billedet er for højt ({{ height }}px). Største tilladte højde er {{ max_height }}px.',
    'The image height is too small ({{ height }}px). Minimum height expected is {{ min_height }}px.' => 'Billedet er for lavt ({{ height }}px). Mindste forventede højde er {{ min_height }}px.',
    'This value should be the user\'s current password.' => 'Værdien skal være brugerens nuværende adgangskode.',
    'This value should have exactly {{ limit }} character.|This value should have exactly {{ limit }} characters.' => 'Værdien skal være på præcis {{ limit }} tegn.',
    'The file was only partially uploaded.' => 'Filen blev kun delvist uploadet.',
    'No file was uploaded.' => 'Ingen fil blev uploadet.',
    'No temporary folder was configured in php.ini.' => 'Ingen midlertidig mappe er konfigureret i php.ini.',
    'Cannot write temporary file to disk.' => 'Kan ikke skrive midlertidig fil til disk.',
    'A PHP extension caused the upload to fail.' => 'En PHP-udvidelse forårsagede fejl i upload.',
    'This collection should contain {{ limit }} element or more.|This collection should contain {{ limit }} elements or more.' => 'Denne samling skal indeholde mindst ét element.|Denne samling skal indeholde mindst {{ limit }} elementer.',
    'This collection should contain {{ limit }} element or less.|This collection should contain {{ limit }} elements or less.' => 'Denne samling skal indeholde højst ét element.|Denne samling skal indeholde højst {{ limit }} elementer.',
    'This collection should contain exactly {{ limit }} element.|This collection should contain exactly {{ limit }} elements.' => 'Denne samling skal indeholde præcis ét element.|Denne samling skal indeholde præcis {{ limit }} elementer.',
    'Invalid card number.' => 'Ugyldigt kortnummer.',
    'Unsupported card type or invalid card number.' => 'Ikke-understøttet korttype eller ugyldigt kortnummer.',
    'This is not a valid International Bank Account Number (IBAN).' => 'Det er ikke et gyldigt International Bank Account Number (IBAN).',
    'This value is not a valid ISBN-10.' => 'Værdien er ikke en gyldig ISBN-10.',
    'This value is not a valid ISBN-13.' => 'Værdien er ikke en gyldig ISBN-13.',
    'This value is neither a valid ISBN-10 nor a valid ISBN-13.' => 'Værdien er hverken en gyldig ISBN-10 eller en gyldig ISBN-13.',
    'This value is not a valid ISSN.' => 'Værdien er ikke en gyldig ISSN.',
    'This value is not a valid currency.' => 'Denne værdi er ikke en gyldig valuta.',
    'This value should be equal to {{ compared_value }}.' => 'Denne værdi skal være lig med {{ compared_value }}.',
    'This value should be greater than {{ compared_value }}.' => 'Denne værdi skal være større end {{ compared_value }}.',
    'This value should be greater than or equal to {{ compared_value }}.' => 'Denne værdi skal være større end eller lig med {{ compared_value }}.',
    'This value should be identical to {{ compared_value_type }} {{ compared_value }}.' => 'Denne værdi skal være identisk med {{ compared_value_type }} {{ compared_value }}.',
    'This value should be less than {{ compared_value }}.' => 'Denne værdi skal være mindre end {{ compared_value }}.',
    'This value should be less than or equal to {{ compared_value }}.' => 'Denne værdi skal være mindre end eller lig med {{ compared_value }}.',
    'This value should not be equal to {{ compared_value }}.' => 'Denne værdi bør ikke være lig med {{ compared_value }}.',
    'This value should not be identical to {{ compared_value_type }} {{ compared_value }}.' => 'Denne værdi bør ikke være identisk med {{ compared_value_type }} {{ compared_value }}.',
    'The image ratio is too big ({{ ratio }}). Allowed maximum ratio is {{ max_ratio }}.' => 'Billedforholdet er for stort ({{ratio}}). Tilladt maksimumsforhold er {{ max_ratio }}.',
    'The image ratio is too small ({{ ratio }}). Minimum ratio expected is {{ min_ratio }}.' => 'Billedforholdet er for lille ({{ ratio }}). Minimumsforventet forventet er {{ min_ratio }}.',
    'The image is square ({{ width }}x{{ height }}px). Square images are not allowed.' => 'Billedet er firkantet ({{ width }} x {{ height }} px). Firkantede billeder er ikke tilladt.',
    'The image is landscape oriented ({{ width }}x{{ height }}px). Landscape oriented images are not allowed.' => 'Billedet er landskabsorienteret ({{width}} x {{height}} px). Landskabsorienterede billeder er ikke tilladt',
    'The image is portrait oriented ({{ width }}x{{ height }}px). Portrait oriented images are not allowed.' => 'Billedet er portrætorienteret ({{ width }}x{{ height }}px). Portrætorienterede billeder er ikke tilladt.',
    'An empty file is not allowed.' => 'En tom fil er ikke tilladt.',
    'The host could not be resolved.' => 'Værten kunne ikke løses.',
    'This value does not match the expected {{ charset }} charset.' => 'Denne værdi stemmer ikke overens med den forventede {{ charset }} charset.',
    'This is not a valid Business Identifier Code (BIC).' => 'Dette er ikke en gyldig Business Identifier Code (BIC).a',
    'Error' => 'Fejl',
    'This is not a valid UUID.' => 'Dette er ikke en gyldig UUID.',
    'This value should be a multiple of {{ compared_value }}.' => 'Denne værdi skal være et flertal af {{ compared_value }}.',
    'This Business Identifier Code (BIC) is not associated with IBAN {{ iban }}.' => 'Denne Business Identifier Code (BIC) er ikke forbundet med IBAN {{ iban }}.',
    'This value should be valid JSON.' => 'Denne værdi skal være gyldig JSON.',
    'This collection should contain only unique elements.' => 'Denne samling bør kun indeholde unikke elementer.',
    'This value should be positive.' => 'Denne værdi skal være positiv.',
    'This value should be either positive or zero.' => 'Denne værdi skal være enten positiv eller nul.',
    'This value should be negative.' => 'Denne værdi skal være negativ.',
    'This value should be either negative or zero.' => 'Denne værdi skal være enten negativ eller nul.',
    'This value is not a valid timezone.' => 'Denne værdi er ikke en gyldig tidszone.',
    'This password has been leaked in a data breach, it must not be used. Please use another password.' => 'Denne adgangskode er blevet lækket i et databrud, det må ikke bruges. Brug venligst en anden adgangskode.',
    'This value should be between {{ min }} and {{ max }}.' => 'Værdien skal være mellem {{ min }} og {{ max }}.',
    'This form should not contain extra fields.' => 'Feltgruppen må ikke indeholde ekstra felter.',
    'The uploaded file was too large. Please try to upload a smaller file.' => 'Den uploadede fil var for stor. Upload venligst en mindre fil.',
    'The CSRF token is invalid. Please try to resubmit the form.' => 'CSRF-token er ugyldig.',
    'fos_user.username.already_used' => 'Brugernavnet er allerede i brug.',
    'fos_user.username.blank' => 'Indtast venligst et brugernavn.',
    'fos_user.username.short' => 'Brugernavnet er for kort.',
    'fos_user.username.long' => 'Brugernavnet er for langt.',
    'fos_user.email.already_used' => 'E-mailadressen er allerede i brug.',
    'fos_user.email.blank' => 'Indtast venligst en e-mailadresse.',
    'fos_user.email.short' => 'E-mailadressen er for kort.',
    'fos_user.email.long' => 'E-mailadressen er for lang.',
    'fos_user.email.invalid' => 'E-mailadressen er ikke gyldig.',
    'fos_user.password.blank' => 'Indtast venligst en adgangskode.',
    'fos_user.password.short' => 'Adgangskoden er for kort.',
    'fos_user.password.mismatch' => 'De valgte adgangskoder matcher ikke.',
    'fos_user.new_password.blank' => 'Indtast venligst en ny adgangskode.',
    'fos_user.new_password.short' => 'Den nye adgangskode er for kort.',
    'fos_user.current_password.invalid' => 'Den indtastede adgangskode er forkert.',
    'fos_user.group.blank' => 'Indtast venligst et navn.',
    'fos_user.group.short' => 'Navnet er for kort.',
    'fos_user.group.long' => 'Navnet er for langt.',
    'fos_group.name.already_used' => 'Navnet er allerede i brug.',
  ),
  'security' => 
  array (
    'An authentication exception occurred.' => 'En fejl indtraf ved godkendelse.',
    'Authentication credentials could not be found.' => 'Loginoplysninger kan findes.',
    'Authentication request could not be processed due to a system problem.' => 'Godkendelsesanmodning kan ikke behandles på grund af et systemfejl.',
    'Invalid credentials.' => 'Ugyldige loginoplysninger.',
    'Cookie has already been used by someone else.' => 'Cookie er allerede brugt af en anden.',
    'Not privileged to request the resource.' => 'Ingen adgang til at forespørge ressourcen.',
    'Invalid CSRF token.' => 'Ugyldig CSRF-token.',
    'Digest nonce has expired.' => 'Digest nonce er udløbet.',
    'No authentication provider found to support the authentication token.' => 'Ingen godkendelsesudbyder er fundet til understøttelsen af godkendelsestoken.',
    'No session available, it either timed out or cookies are not enabled.' => 'Ingen session tilgængelig, sessionen er enten udløbet eller cookies er ikke aktiveret.',
    'No token could be found.' => 'Ingen token kan findes.',
    'Username could not be found.' => 'Brugernavn kan ikke findes.',
    'Account has expired.' => 'Brugerkonto er udløbet.',
    'Credentials have expired.' => 'Loginoplysninger er udløbet.',
    'Account is disabled.' => 'Brugerkonto er deaktiveret.',
    'Account is locked.' => 'Brugerkonto er låst.',
  ),
  'FOSUserBundle' => 
  array (
    'group.edit.submit' => 'Opdater gruppe',
    'group.show.name' => 'Gruppenavn',
    'group.new.submit' => 'Opret gruppe',
    'group.flash.updated' => 'Gruppen er blevet opdateret.',
    'group.flash.created' => 'Gruppen er blevet oprettet.',
    'group.flash.deleted' => 'Gruppen er blevet slettet.',
    'security.login.username' => 'Brugernavn',
    'security.login.password' => 'Adgangskode',
    'security.login.remember_me' => 'Husk mig',
    'security.login.submit' => 'Log ind',
    'profile.show.username' => 'Brugernavn',
    'profile.show.email' => 'E-mail',
    'profile.edit.submit' => 'Opdater',
    'profile.flash.updated' => 'Profilen er blevet opdateret.',
    'change_password.submit' => 'Skift adgangskode',
    'change_password.flash.success' => 'Adgangskoden er blevet opdateret.',
    'registration.check_email' => 'En e-mail er blevet sendt til %email%. Den indeholder et aktiveringslink, du skal følge for at aktivere din konto.
',
    'registration.confirmed' => 'Tillykke %username%, din konto er nu aktiveret',
    'registration.back' => 'Tilbage til foregående side.',
    'registration.submit' => 'Registrer',
    'registration.flash.user_created' => 'Bruger er blevet oprettet.',
    'registration.email.subject' => 'Velkommen %username%!',
    'registration.email.message' => 'Hej %username%!

For at færdiggøre aktiveringen af din konto, besøg venligst %confirmationUrl%

Dette link kan kun bruges én gang til at validere din konto.

Venlig hilsen,
Holdet bag siden.
',
    'resetting.check_email' => 'En e-mail er blevet sendt til %email%. Den indeholder et link, du skal følge for at nulstille din adgangskode.
Note: Du kan først bede om en ny adgangskode om %tokenLifetime% timer.

Hvis ikke du modtager en enmail skal du tjekke dit spamfilter eller prøve igen.
',
    'resetting.request.username' => 'Brugernavn eller e-mailadresse',
    'resetting.request.submit' => 'Nulstil adgangskode',
    'resetting.reset.submit' => 'Skift adgangskode',
    'resetting.flash.success' => 'Adgangskoden er blevet nulstillet.',
    'resetting.email.subject' => 'Velkommen %username%!',
    'resetting.email.message' => 'Hej %username%!

For at nulstille din adgangskode, besøg venligst %confirmationUrl%

Venlig hilsen,
Holdet bag siden.
',
    'layout.logout' => 'Log ud',
    'layout.login' => 'Log ind',
    'layout.register' => 'Registrer',
    'layout.logged_in_as' => 'Logget ind som %username%',
    'form.group_name' => 'Gruppenavn',
    'form.username' => 'Brugernavn',
    'form.email' => 'E-mail',
    'form.current_password' => 'Nuværende adgangskode',
    'form.password' => 'Adgangskode',
    'form.password_confirmation' => 'Gentag adgangskode',
    'form.new_password' => 'Ny adgangskode',
    'form.new_password_confirmation' => 'Gentag adgangskode',
  ),
  'KnpPaginatorBundle' => 
  array (
    'label_previous' => 'Forrige',
    'label_next' => 'Næste',
  ),
));

$catalogueEn = new MessageCatalogue('en', array (
  'validators' => 
  array (
    'This value should be false.' => 'This value should be false.',
    'This value should be true.' => 'This value should be true.',
    'This value should be of type {{ type }}.' => 'This value should be of type {{ type }}.',
    'This value should be blank.' => 'This value should be blank.',
    'The value you selected is not a valid choice.' => 'The value you selected is not a valid choice.',
    'You must select at least {{ limit }} choice.|You must select at least {{ limit }} choices.' => 'You must select at least {{ limit }} choice.|You must select at least {{ limit }} choices.',
    'You must select at most {{ limit }} choice.|You must select at most {{ limit }} choices.' => 'You must select at most {{ limit }} choice.|You must select at most {{ limit }} choices.',
    'One or more of the given values is invalid.' => 'One or more of the given values is invalid.',
    'This field was not expected.' => 'This field was not expected.',
    'This field is missing.' => 'This field is missing.',
    'This value is not a valid date.' => 'This value is not a valid date.',
    'This value is not a valid datetime.' => 'This value is not a valid datetime.',
    'This value is not a valid email address.' => 'This value is not a valid email address.',
    'The file could not be found.' => 'The file could not be found.',
    'The file is not readable.' => 'The file is not readable.',
    'The file is too large ({{ size }} {{ suffix }}). Allowed maximum size is {{ limit }} {{ suffix }}.' => 'The file is too large ({{ size }} {{ suffix }}). Allowed maximum size is {{ limit }} {{ suffix }}.',
    'The mime type of the file is invalid ({{ type }}). Allowed mime types are {{ types }}.' => 'The mime type of the file is invalid ({{ type }}). Allowed mime types are {{ types }}.',
    'This value should be {{ limit }} or less.' => 'This value should be {{ limit }} or less.',
    'This value is too long. It should have {{ limit }} character or less.|This value is too long. It should have {{ limit }} characters or less.' => 'This value is too long. It should have {{ limit }} character or less.|This value is too long. It should have {{ limit }} characters or less.',
    'This value should be {{ limit }} or more.' => 'This value should be {{ limit }} or more.',
    'This value is too short. It should have {{ limit }} character or more.|This value is too short. It should have {{ limit }} characters or more.' => 'This value is too short. It should have {{ limit }} character or more.|This value is too short. It should have {{ limit }} characters or more.',
    'This value should not be blank.' => 'This value should not be blank.',
    'This value should not be null.' => 'This value should not be null.',
    'This value should be null.' => 'This value should be null.',
    'This value is not valid.' => 'This value is not valid.',
    'This value is not a valid time.' => 'This value is not a valid time.',
    'This value is not a valid URL.' => 'This value is not a valid URL.',
    'The two values should be equal.' => 'The two values should be equal.',
    'The file is too large. Allowed maximum size is {{ limit }} {{ suffix }}.' => 'The file is too large. Allowed maximum size is {{ limit }} {{ suffix }}.',
    'The file is too large.' => 'The file is too large.',
    'The file could not be uploaded.' => 'The file could not be uploaded.',
    'This value should be a valid number.' => 'This value should be a valid number.',
    'This file is not a valid image.' => 'This file is not a valid image.',
    'This is not a valid IP address.' => 'This is not a valid IP address.',
    'This value is not a valid language.' => 'This value is not a valid language.',
    'This value is not a valid locale.' => 'This value is not a valid locale.',
    'This value is not a valid country.' => 'This value is not a valid country.',
    'This value is already used.' => 'This value is already used.',
    'The size of the image could not be detected.' => 'The size of the image could not be detected.',
    'The image width is too big ({{ width }}px). Allowed maximum width is {{ max_width }}px.' => 'The image width is too big ({{ width }}px). Allowed maximum width is {{ max_width }}px.',
    'The image width is too small ({{ width }}px). Minimum width expected is {{ min_width }}px.' => 'The image width is too small ({{ width }}px). Minimum width expected is {{ min_width }}px.',
    'The image height is too big ({{ height }}px). Allowed maximum height is {{ max_height }}px.' => 'The image height is too big ({{ height }}px). Allowed maximum height is {{ max_height }}px.',
    'The image height is too small ({{ height }}px). Minimum height expected is {{ min_height }}px.' => 'The image height is too small ({{ height }}px). Minimum height expected is {{ min_height }}px.',
    'This value should be the user\'s current password.' => 'This value should be the user\'s current password.',
    'This value should have exactly {{ limit }} character.|This value should have exactly {{ limit }} characters.' => 'This value should have exactly {{ limit }} character.|This value should have exactly {{ limit }} characters.',
    'The file was only partially uploaded.' => 'The file was only partially uploaded.',
    'No file was uploaded.' => 'No file was uploaded.',
    'No temporary folder was configured in php.ini.' => 'No temporary folder was configured in php.ini, or the configured folder does not exist.',
    'Cannot write temporary file to disk.' => 'Cannot write temporary file to disk.',
    'A PHP extension caused the upload to fail.' => 'A PHP extension caused the upload to fail.',
    'This collection should contain {{ limit }} element or more.|This collection should contain {{ limit }} elements or more.' => 'This collection should contain {{ limit }} element or more.|This collection should contain {{ limit }} elements or more.',
    'This collection should contain {{ limit }} element or less.|This collection should contain {{ limit }} elements or less.' => 'This collection should contain {{ limit }} element or less.|This collection should contain {{ limit }} elements or less.',
    'This collection should contain exactly {{ limit }} element.|This collection should contain exactly {{ limit }} elements.' => 'This collection should contain exactly {{ limit }} element.|This collection should contain exactly {{ limit }} elements.',
    'Invalid card number.' => 'Invalid card number.',
    'Unsupported card type or invalid card number.' => 'Unsupported card type or invalid card number.',
    'This is not a valid International Bank Account Number (IBAN).' => 'This is not a valid International Bank Account Number (IBAN).',
    'This value is not a valid ISBN-10.' => 'This value is not a valid ISBN-10.',
    'This value is not a valid ISBN-13.' => 'This value is not a valid ISBN-13.',
    'This value is neither a valid ISBN-10 nor a valid ISBN-13.' => 'This value is neither a valid ISBN-10 nor a valid ISBN-13.',
    'This value is not a valid ISSN.' => 'This value is not a valid ISSN.',
    'This value is not a valid currency.' => 'This value is not a valid currency.',
    'This value should be equal to {{ compared_value }}.' => 'This value should be equal to {{ compared_value }}.',
    'This value should be greater than {{ compared_value }}.' => 'This value should be greater than {{ compared_value }}.',
    'This value should be greater than or equal to {{ compared_value }}.' => 'This value should be greater than or equal to {{ compared_value }}.',
    'This value should be identical to {{ compared_value_type }} {{ compared_value }}.' => 'This value should be identical to {{ compared_value_type }} {{ compared_value }}.',
    'This value should be less than {{ compared_value }}.' => 'This value should be less than {{ compared_value }}.',
    'This value should be less than or equal to {{ compared_value }}.' => 'This value should be less than or equal to {{ compared_value }}.',
    'This value should not be equal to {{ compared_value }}.' => 'This value should not be equal to {{ compared_value }}.',
    'This value should not be identical to {{ compared_value_type }} {{ compared_value }}.' => 'This value should not be identical to {{ compared_value_type }} {{ compared_value }}.',
    'The image ratio is too big ({{ ratio }}). Allowed maximum ratio is {{ max_ratio }}.' => 'The image ratio is too big ({{ ratio }}). Allowed maximum ratio is {{ max_ratio }}.',
    'The image ratio is too small ({{ ratio }}). Minimum ratio expected is {{ min_ratio }}.' => 'The image ratio is too small ({{ ratio }}). Minimum ratio expected is {{ min_ratio }}.',
    'The image is square ({{ width }}x{{ height }}px). Square images are not allowed.' => 'The image is square ({{ width }}x{{ height }}px). Square images are not allowed.',
    'The image is landscape oriented ({{ width }}x{{ height }}px). Landscape oriented images are not allowed.' => 'The image is landscape oriented ({{ width }}x{{ height }}px). Landscape oriented images are not allowed.',
    'The image is portrait oriented ({{ width }}x{{ height }}px). Portrait oriented images are not allowed.' => 'The image is portrait oriented ({{ width }}x{{ height }}px). Portrait oriented images are not allowed.',
    'An empty file is not allowed.' => 'An empty file is not allowed.',
    'The host could not be resolved.' => 'The host could not be resolved.',
    'This value does not match the expected {{ charset }} charset.' => 'This value does not match the expected {{ charset }} charset.',
    'This is not a valid Business Identifier Code (BIC).' => 'This is not a valid Business Identifier Code (BIC).',
    'Error' => 'Error',
    'This is not a valid UUID.' => 'This is not a valid UUID.',
    'This value should be a multiple of {{ compared_value }}.' => 'This value should be a multiple of {{ compared_value }}.',
    'This Business Identifier Code (BIC) is not associated with IBAN {{ iban }}.' => 'This Business Identifier Code (BIC) is not associated with IBAN {{ iban }}.',
    'This value should be valid JSON.' => 'This value should be valid JSON.',
    'This collection should contain only unique elements.' => 'This collection should contain only unique elements.',
    'This value should be positive.' => 'This value should be positive.',
    'This value should be either positive or zero.' => 'This value should be either positive or zero.',
    'This value should be negative.' => 'This value should be negative.',
    'This value should be either negative or zero.' => 'This value should be either negative or zero.',
    'This value is not a valid timezone.' => 'This value is not a valid timezone.',
    'This password has been leaked in a data breach, it must not be used. Please use another password.' => 'This password has been leaked in a data breach, it must not be used. Please use another password.',
    'This value should be between {{ min }} and {{ max }}.' => 'This value should be between {{ min }} and {{ max }}.',
    'This form should not contain extra fields.' => 'This form should not contain extra fields.',
    'The uploaded file was too large. Please try to upload a smaller file.' => 'The uploaded file was too large. Please try to upload a smaller file.',
    'The CSRF token is invalid. Please try to resubmit the form.' => 'The CSRF token is invalid. Please try to resubmit the form.',
    'fos_user.username.already_used' => 'The username is already used.',
    'fos_user.username.blank' => 'Please enter a username.',
    'fos_user.username.short' => 'The username is too short.',
    'fos_user.username.long' => 'The username is too long.',
    'fos_user.email.already_used' => 'The email is already used.',
    'fos_user.email.blank' => 'Please enter an email.',
    'fos_user.email.short' => 'The email is too short.',
    'fos_user.email.long' => 'The email is too long.',
    'fos_user.email.invalid' => 'The email is not valid.',
    'fos_user.password.blank' => 'Please enter a password.',
    'fos_user.password.short' => 'The password is too short.',
    'fos_user.password.mismatch' => 'The entered passwords don\'t match.',
    'fos_user.new_password.blank' => 'Please enter a new password.',
    'fos_user.new_password.short' => 'The new password is too short.',
    'fos_user.current_password.invalid' => 'The entered password is invalid.',
    'fos_user.group.blank' => 'Please enter a name.',
    'fos_user.group.short' => 'The name is too short.',
    'fos_user.group.long' => 'The name is too long.',
    'fos_group.name.already_used' => 'The name is already used.',
    'fos_message.recipient.blank' => 'No recipient specified',
    'fos_message.recipients.blank' => 'No recipients specified',
    'fos_message.subject.blank' => 'Please enter a subject',
    'fos_message.subject.short' => 'The subject is too short|The subject is too short',
    'fos_message.subject.long' => 'The subject is too long|The subject is too long',
    'fos_message.body.blank' => 'Please enter a body',
    'fos_message.body.short' => 'The body is too short',
    'fos_message.body.spam' => 'Sorry, your message looks like spam',
    'fos_message.not_authorized' => 'You are not allowed to send this message',
    'fos_message.reply_not_authorized' => 'You are not allowed to reply to this message',
    'fos_message.self_recipient' => 'You cannot send a message to yourself',
    'Bad code value' => 'Code does not match',
  ),
  'security' => 
  array (
    'An authentication exception occurred.' => 'An authentication exception occurred.',
    'Authentication credentials could not be found.' => 'Authentication credentials could not be found.',
    'Authentication request could not be processed due to a system problem.' => 'Authentication request could not be processed due to a system problem.',
    'Invalid credentials.' => 'Invalid credentials.',
    'Cookie has already been used by someone else.' => 'Cookie has already been used by someone else.',
    'Not privileged to request the resource.' => 'Not privileged to request the resource.',
    'Invalid CSRF token.' => 'Invalid CSRF token.',
    'Digest nonce has expired.' => 'Digest nonce has expired.',
    'No authentication provider found to support the authentication token.' => 'No authentication provider found to support the authentication token.',
    'No session available, it either timed out or cookies are not enabled.' => 'No session available, it either timed out or cookies are not enabled.',
    'No token could be found.' => 'No token could be found.',
    'Username could not be found.' => 'Username could not be found.',
    'Account has expired.' => 'Account has expired.',
    'Credentials have expired.' => 'Credentials have expired.',
    'Account is disabled.' => 'Account is disabled.',
    'Account is locked.' => 'Account is locked.',
  ),
  'FOSUserBundle' => 
  array (
    'group.edit.submit' => 'Update group',
    'group.show.name' => 'Group name',
    'group.new.submit' => 'Create group',
    'group.flash.updated' => 'The group has been updated.',
    'group.flash.created' => 'The group has been created.',
    'group.flash.deleted' => 'The group has been deleted.',
    'security.login.username' => 'Username',
    'security.login.password' => 'Password',
    'security.login.remember_me' => 'Remember me',
    'security.login.submit' => 'Log in',
    'profile.show.username' => 'Username',
    'profile.show.email' => 'Email',
    'profile.edit.submit' => 'Update',
    'profile.flash.updated' => 'The profile has been updated.',
    'change_password.submit' => 'Change password',
    'change_password.flash.success' => 'The password has been changed.',
    'registration.check_email' => 'An email has been sent to %email%. It contains an activation link you must click to activate your account.
',
    'registration.confirmed' => 'Congrats %username%, your account is now activated.',
    'registration.back' => 'Back to the originating page.',
    'registration.submit' => 'Register',
    'registration.flash.user_created' => 'The user has been created successfully.',
    'registration.email.subject' => 'Welcome %username%!',
    'registration.email.message' => 'Hello %username%!

To finish activating your account - please visit %confirmationUrl%

This link can only be used once to validate your account.

Regards,
the Team.
',
    'resetting.check_email' => 'An email has been sent. It contains a link you must click to reset your password.
Note: You can only request a new password once within %tokenLifetime% hours.

If you don\'t get an email check your spam folder or try again.
',
    'resetting.request.username' => 'Username or email address',
    'resetting.request.submit' => 'Reset password',
    'resetting.reset.submit' => 'Change password',
    'resetting.flash.success' => 'The password has been reset successfully.',
    'resetting.email.subject' => 'Reset Password',
    'resetting.email.message' => 'Hello %username%!

To reset your password - please visit %confirmationUrl%

Regards,
the Team.
',
    'layout.logout' => 'Log out',
    'layout.login' => 'Log in',
    'layout.register' => 'Register',
    'layout.logged_in_as' => 'Logged in as %username%',
    'form.group_name' => 'Group name',
    'form.username' => 'Username',
    'form.email' => 'Email',
    'form.current_password' => 'Current password',
    'form.password' => 'Password',
    'form.password_confirmation' => 'Repeat password',
    'form.new_password' => 'New password',
    'form.new_password_confirmation' => 'Repeat new password',
  ),
  'KnpPaginatorBundle' => 
  array (
    'label_previous' => 'Previous',
    'label_next' => 'Next',
  ),
  'FOSMessageBundle' => 
  array (
    'messenger' => 'Messenger',
    'inbox' => 'Inbox',
    'sent' => 'Sent',
    'deleted' => 'Deleted',
    'send_new' => 'Send a new message',
    'search' => 'Search',
    'threads_found' => '%num% thread found with | %num% threads found with',
    'message_info' => 'By %sender%, on %date%',
    'reply' => 'Reply',
    'subject' => 'Subject',
    'starter' => 'Starter',
    'startdate' => 'Start date',
    'messages' => 'Messages',
    'last_message' => 'Last message',
    'actions' => 'Actions',
    'new' => 'New',
    'goto_last' => 'Go to last message',
    'on' => 'On %date%',
    'by' => 'By %sender%',
    'no_thread' => 'There is no thread to show',
    'delete' => 'Delete',
    'undelete' => 'Undelete',
    'recipient' => 'Recipient',
    'recipients' => 'Recipients',
    'body' => 'Body',
  ),
  'gregwar_captcha' => 
  array (
    'Renew' => 'Renew',
  ),
));
$catalogue->addFallbackCatalogue($catalogueEn);

return $catalogue;
