<?php
/**
 * Stub for arginfo in PHP 8.
 *
 * @generate-function-entries
 * @generate-legacy-arginfo
 */

define('SE_JUL_CAL', 0);
define('SE_GREG_CAL', 1);

// planet numbers for the ipl parameter in swe_calc();
define('SE_ECL_NUT', -1);
define('SE_SUN', 0);
define('SE_MOON', 1);
define('SE_MERCURY', 2);
define('SE_VENUS', 3);
define('SE_MARS', 4);
define('SE_JUPITER', 5);
define('SE_SATURN', 6);
define('SE_URANUS', 7);
define('SE_NEPTUNE', 8);
define('SE_PLUTO', 9);
define('SE_MEAN_NODE', 10);
define('SE_TRUE_NODE', 11);
define('SE_MEAN_APOG', 12);
define('SE_OSCU_APOG', 13);
define('SE_EARTH', 14);
define('SE_CHIRON', 15);
define('SE_PHOLUS', 16);
define('SE_CERES', 17);
define('SE_PALLAS', 18);
define('SE_JUNO', 19);
define('SE_VESTA', 20);
define('SE_INTP_APOG', 21);
define('SE_INTP_PERG', 22);

define('SE_NPLANETS', 23);

define('SE_AST_OFFSET', 10000);
define('SE_VARUNA', SE_AST_OFFSET + 20000);

define('SE_FICT_OFFSET', 40);
define('SE_FICT_OFFSET_1', 39);
define('SE_FICT_MAX', 999);
define('SE_NFICT_ELEM', 15);
define('SE_COMET_OFFSET', 1000);
define('SE_PLMOON_OFFSET', 9000);
define('SE_NALL_NAT_POINTS', (SE_NPLANETS + SE_NFICT_ELEM));

// Hamburger or Uranian "planets"
define('SE_CUPIDO', 40);
define('SE_HADES', 41);
define('SE_ZEUS', 42);
define('SE_KRONOS', 43);
define('SE_APOLLON', 44);
define('SE_ADMETOS', 45);
define('SE_VULKANUS', 46);
define('SE_POSEIDON', 47);

// other fictitious bodies
define('SE_ISIS', 48);
define('SE_NIBIRU', 49);
define('SE_HARRINGTON', 50);
define('SE_NEPTUNE_LEVERRIER', 51);
define('SE_NEPTUNE_ADAMS', 52);
define('SE_PLUTO_LOWELL', 53);
define('SE_PLUTO_PICKERING', 54);
define('SE_VULCAN', 55);
define('SE_WHITE_MOON', 56);
define('SE_PROSERPINA', 57);
define('SE_WALDEMATH', 58);

define('SE_FIXSTAR', -10);

define('SE_ASC', 0);
define('SE_MC', 1);
define('SE_ARMC', 2);
define('SE_VERTEX', 3);
define('SE_EQUASC', 4);	// "equatorial ascendant"
define('SE_COASC1', 5); // "co-ascendant" (W. Koch);
define('SE_COASC2', 6); // "co-ascendant" (M. Munkasey);
define('SE_POLASC', 7); // "polar ascendant" (M. Munkasey);
define('SE_NASCMC', 8);

// flag bits for parameter iflag in function swe_calc();
// The flag bits are defined in such a way that iflag', 0 delivers what one
// usually wants:
//    - the default ephemeris (SWISS EPHEMERIS); is used',
//    - apparent geocentric positions referring to the true equinox of date
//      are returned.
// If not only coordinates', but also speed values are required', use
// flag', ('SEFLG_SPEED + ...

define('SEFLG_JPLEPH', 1);       // use JPL ephemeris
define('SEFLG_SWIEPH', 2);       // use SWISSEPH ephemeris
define('SEFLG_MOSEPH', 4);       // use Moshier ephemeris
define('SEFLG_DEFAULTEPH', SEFLG_SWIEPH);

define('SEFLG_HELCTR', 8);  		// return heliocentric position
define('SEFLG_TRUEPOS', 16); 		// return true positions', not apparent
define('SEFLG_J2000', 32);     		// no precession', i.e. give J2000 equinox
define('SEFLG_NONUT', 64);     		// no nutation', i.e. mean equinox of date
define('SEFLG_SPEED3', 128);     // speed from 3 positions (do not use it', define('SEFLG_SPEED is faster and more precise.);
define('SEFLG_SPEED', 256);     	// high precision speed
define('SEFLG_NOGDEFL', 512);     // turn off gravitational deflection
define('SEFLG_NOABERR', 1024);    // turn off 'annual' aberration of light
define('SEFLG_ASTROMETRIC', (SEFLG_NOABERR + SEFLG_NOGDEFL)); // astrometric positions
define('SEFLG_EQUATORIAL', (2*1024));    // equatorial positions are wanted
define('SEFLG_XYZ', (4*1024));    // cartesian', not polar', coordinates
define('SEFLG_RADIANS', (8*1024));    // coordinates in radians', not degrees
define('SEFLG_BARYCTR', (16*1024));   // barycentric positions
define('SEFLG_TOPOCTR', (32*1024));   // topocentric positions
define('SEFLG_SIDEREAL', (64*1024));   // sidereal positions
define('SEFLG_ICRS', (128*1024));  // ICRS (DE406 reference frame);

define ('SEFLG_DPSIDEPS_1980' (256*1024)); // reproduce JPL Horizons * 1962 - today to 0.002 arcsec
define ('SEFLG_JPLHOR', SEFLG_DPSIDEPS_1980);
define ('SEFLG_JPLHOR_APPROX', (512*1024)); // approximate JPL Horizons 1962 - today
define ('SEFLG_CENTER_BODY', (1024*1024)); // calculate position of center of body (COB) of planet, not barycenter of its system

define ('SE_AUNIT_TO_LIGHTYEAR', (1.0/63241.077088071));
define ('SE_AUNIT_TO_PARSEC', (1.0/206264.8062471));

define('SE_SIDBITS', 256);
// for projection onto ecliptic of t0
define('SE_SIDBIT_ECL_T0', 256);
// for projection onto solar system plane
define('SE_SIDBIT_SSY_PLANE', 512);

define('SE_SIDBIT_USER_UT', 1024);
define('SE_SIDBIT_ECL_DATE', 2048);

// sidereal modes (ayanamsas);
define('SE_SIDM_FAGAN_BRADLEY', 0);
define('SE_SIDM_LAHIRI', 1);
define('SE_SIDM_DELUCE', 2);
define('SE_SIDM_RAMAN', 3);
define('SE_SIDM_USHASHASHI', 4);
define('SE_SIDM_KRISHNAMURTI', 5);
define('SE_SIDM_DJWHAL_KHUL', 6);
define('SE_SIDM_YUKTESHWAR', 7);
define('SE_SIDM_JN_BHASIN', 8);
define('SE_SIDM_BABYL_KUGLER1', 9);
define('SE_SIDM_BABYL_KUGLER2', 10);
define('SE_SIDM_BABYL_KUGLER3', 11);
define('SE_SIDM_BABYL_HUBER', 12);
define('SE_SIDM_BABYL_ETPSC', 13);
define('SE_SIDM_ALDEBARAN_15TAU', 14);
define('SE_SIDM_HIPPARCHOS', 15);
define('SE_SIDM_SASSANIAN', 16);
define('SE_SIDM_GALCENT_0SAG', 17);
define('SE_SIDM_J2000', 18);
define('SE_SIDM_J1900', 19);
define('SE_SIDM_B1950', 20);
define('SE_SIDM_SURYASIDDHANTA', 21);
define('SE_SIDM_SURYASIDDHANTA_MSUN', 22);
define('SE_SIDM_ARYABHATA',23);
define('SE_SIDM_ARYABHATA_MSUN',24);
define('SE_SIDM_SS_REVATI', 25);
define('SE_SIDM_SS_CITRA', 26);
define('SE_SIDM_TRUE_CITRA', 27);
define('SE_SIDM_TRUE_REVATI', 28);
define('SE_SIDM_TRUE_PUSHYA', 29);
define('SE_SIDM_GALCENT_RGILBRAND', 30);
define('SE_SIDM_GALEQU_IAU1958', 31);
define('SE_SIDM_GALEQU_TRUE', 32);
define('SE_SIDM_GALEQU_MULA', 33);
define('SE_SIDM_GALALIGN_MARDYKS', 34);
define('SE_SIDM_TRUE_MULA', 35);
define('SE_SIDM_GALCENT_MULA_WILHELM', 36);
define('SE_SIDM_ARYABHATA_522', 37);
define('SE_SIDM_BABYL_BRITTON', 38);
define('SE_SIDM_TRUE_SHEORAN', 39);
define('SE_SIDM_GALCENT_COCHRANE', 40);
define('SE_SIDM_GALEQU_FIORENZA', 41);
define('SE_SIDM_VALENS_MOON', 42);
define('SE_SIDM_LAHIRI_1940', 43);
define('SE_SIDM_LAHIRI_VP285', 44);
define('SE_SIDM_KRISHNAMURTI_VP291', 45);
define('SE_SIDM_LAHIRI_ICRC', 46);
define('SE_SIDM_USER', 255);

define('SE_NSIDM_PREDEF', 21);

// used for swe_nod_aps();:
define('SE_NODBIT_MEAN', 1);   // mean nodes/apsides
define('SE_NODBIT_OSCU', 2);   // osculating nodes/apsides
define('SE_NODBIT_OSCU_BAR', 4);   // same', but motion about solar system barycenter is considered
define('SE_NODBIT_FOPOINT', 256); // focal point of orbit instead of aphelion

// default ephemeris used when no ephemeris flagbit is set
define('SEFLG_DEFAULTEPH', SEFLG_SWIEPH);

define('SE_MAX_STNAME', 20);	// maximum size of fixstar name; the parameter star in swe_fixstar must allow twice this space for the returned star name.

// defines for eclipse computations

define('SE_ECL_CENTRAL', 1);
define('SE_ECL_NONCENTRAL', 2);
define('SE_ECL_TOTAL', 4);
define('SE_ECL_ANNULAR', 8);
define('SE_ECL_PARTIAL', 16);
define('SE_ECL_ANNULAR_TOTAL', 32);
define('SE_ECL_PENUMBRAL', 64);
define('SE_ECL_ALLTYPES_SOLAR', (SE_ECL_CENTRAL + SE_ECL_NONCENTRAL + SE_ECL_TOTAL + SE_ECL_ANNULAR + SE_ECL_PARTIAL + SE_ECL_ANNULAR_TOTAL));
define('SE_ECL_ALLTYPES_LUNAR',  (SE_ECL_TOTAL + SE_ECL_PARTIAL + SE_ECL_PENUMBRAL));
define('SE_ECL_VISIBLE', 128);
define('SE_ECL_MAX_VISIBLE', 256);
define('SE_ECL_1ST_VISIBLE', 512);
define('SE_ECL_2ND_VISIBLE', 1024);
define('SE_ECL_3RD_VISIBLE', 2048);
define('SE_ECL_4TH_VISIBLE', 4096);
define('SE_ECL_ONE_TRY', (32*1024));
// check if the next conjunction of the moon with a planet is an occultation; don't search further

// for swe_rise();
define('SE_CALC_RISE', 1);
define('SE_CALC_SET', 2);
define('SE_CALC_MTRANSIT', 4);
define('SE_CALC_ITRANSIT', 8);
//  the following bits can be added (or’ed) to SE_CALC_RISE or SE_CALC_SET
define('SE_BIT_GEOCTR_NO_ECL_LAT', 128);
define('SE_BIT_DISC_CENTER', 256); // to be or'ed to define('SE_CALC_RISE/SET if rise or set of disc center is required
define('SE_BIT_DISC_BOTTOM', 8192);
define('SE_BIT_FIXED_DISC_SIZE', (16*1024));
define('SE_BIT_NO_REFRACTION', 512); // to be or'ed to define('SE_CALC_RISE/SET', if refraction is not to be considered
define('SE_BIT_CIVIL_TWILIGHT', 1024); // to be or'ed to define('SE_CALC_RISE/SET
define('SE_BIT_NAUTIC_TWILIGHT', 2048); // to be or'ed to define('SE_CALC_RISE/SET
define('SE_BIT_ASTRO_TWILIGHT', 4096); // to be or'ed to define('SE_CALC_RISE/SET
define('SE_BIT_HINDU_RISING', (SE_BIT_DISC_CENTER + SE_BIT_NO_REFRACTION + SE_BIT_GEOCTR_NO_ECL_LAT));

// for swe_azalt(); and swe_azalt_rev();
define('SE_ECL2HOR', 0);
define('SE_EQU2HOR', 1);
define('SE_HOR2ECL', 0);
define('SE_HOR2EQU', 1);

// for swe_refrac();
define('SE_TRUE_TO_APP', 0);
define('SE_APP_TO_TRUE', 1);


// only used for experimenting with various JPL ephemeris files which are available at Astrodienst's internal network

define('SE_DE_NUMBER', 406);
define('SE_FNAME_DE200', "de200.eph");
define('SE_FNAME_DE403', "de403.eph");
define('SE_FNAME_DE404', "de404.eph");
define('SE_FNAME_DE405', "de405.eph");
define('SE_FNAME_DE406', "de406.eph");
define('SE_FNAME_DFT', SE_FNAME_DE406);
define('SE_STARFILE', "fixstars.cat");
define('SE_ASTNAMFILE', "seasnam.txt");
define('SE_FICTFILE', "seorbel.txt");

// Where ephemeris files are expected if the function swe_set_ephe_path(); is not
// called by the application.  Normally', every application should make this call
// to define its own place for the ephemeris files.
define('SE_EPHE_PATH', ".:/users/ephe2/:/users/ephe/:../swephp");
// At Astrodienst', we maintain two ephemeris areas for the thousands of asteroid files: the short files in /users/ephe/ast*', the long file in /users/ephe2/ast*.

// defines for function swe_split_deg(); (in swephlib.c);
define('SE_SPLIT_DEG_ROUND_SEC', 1);
define('SE_SPLIT_DEG_ROUND_MIN', 2);
define('SE_SPLIT_DEG_ROUND_DEG', 4);
define('SE_SPLIT_DEG_ZODIACAL', 8);
define('SE_SPLIT_DEG_KEEP_SIGN', 16); // don't round to next sign', e.g. 29.9999999 will be rounded to 29d59m59s (or 29d59m or 29d);
define('SE_SPLIT_DEG_KEEP_DEG', 32); // don't round to next degree e.g. 13.9999999 will be rounded to 13d59m59s (or 13d59m or 13d);
define('SE_SPLIT_DEG_NAKSHATRA', 1024); // split into nakshatras

// for heliacal functions
define('SE_HELIACAL_RISING', 1);
define('SE_HELIACAL_SETTING', 2);
define('SE_MORNING_FIRST', SE_HELIACAL_RISING);
define('SE_EVENING_LAST', SE_HELIACAL_SETTING);
define('SE_EVENING_FIRST', 3);
define('SE_MORNING_LAST', 4);
define('SE_ACRONYCHAL_RISING', 5); // still not implemented
define('SE_COSMICAL_SETTING', 6); // still not implemented
define('SE_ACRONYCHAL_SETTING', SE_COSMICAL_SETTING);

define('SE_HELFLAG_LONG_SEARCH', 128);
define('SE_HELFLAG_HIGH_PRECISION', 256);
define('SE_HELFLAG_OPTICAL_PARAMS',	512);
define('SE_HELFLAG_NO_DETAILS', 1024);
define('SE_HELFLAG_AVKIND_VR', 2048);
define('SE_HELFLAG_AVKIND_PTO',	4096);
define('SE_HELFLAG_AVKIND_MIN7', 8192);
define('SE_HELFLAG_AVKIND_MIN9', 16384);
define('SE_HELFLAG_AVKIND', (SE_HELFLAG_AVKIND_VR + SE_HELFLAG_AVKIND_PTO + SE_HELFLAG_AVKIND_MIN7 + SE_HELFLAG_AVKIND_MIN9));
define('TJD_INVALID', 99999999.0);
define('SIMULATE_VICTORVB', 1);

define('SE_PHOTOPIC_FLAG', 0);
define('SE_SCOTOPIC_FLAG', 1);
define('SE_MIXEDOPIC_FLAG', 2);

/**
 * @param double $tjd_et
 * @param int $ipl
 * @param int $iflag
 * @return array
 */
function swe_calc(double $tjd_et, int $ipl, int $iflag): array {}

/**
 * @param double $tjd_ut
 * @param int $ipl
 * @param int $iflag
 * @return array
 */
function swe_calc_ut(double $tjd_et, int $ipl, int $iflag): array {}

/**
 * @param double $tjd_et
 * @param int $ipl
 * @param int $iplctr
 * @param int $iflag
 * @return array
 */
function swe_calc_pctr(double $tjd_et, int $ipl, int $iplctr, int $iflag): array {}

/**
 * @param double $x2cross
 * @param double $jd_et
 * @param int $iflag
 * @return array
 */
function swe_solcross(double $x2cross, double $jd_et, int $iflag): array {}

/**
 * @param double $x2cross
 * @param double $jd_ut
 * @param int $iflag
 * @return array
 */
function swe_solcross_ut(double $x2cross, double $jd_ut, int $iflag): array {}

/**
 * @param double $x2cross
 * @param double $jd_et
 * @param int $iflag
 * @return array
 */
function swe_mooncross(double $x2cross, double $jd_et, int $iflag): array {}

/**
 * @param double $x2cross
 * @param double $jd_ut
 * @param int $iflag
 * @return array
 */
function swe_mooncross_ut(double $x2cross, double $jd_ut, int $iflag): array {}

/**
 * @param double $jd_et
 * @param int $iflag
 * @return array
 */
function swe_mooncross_node(double $jd_et, int $iflag): array {}

/**
 * @param double $jd_ut
 * @param int $iflag
 * @return array
 */
function swe_mooncross_node_ut(double $jd_ut, int $iflag): array {}

/**
 * @param int $ipl
 * @param double $x2cross
 * @param double $jd_et
 * @param int $iflag
 * @param int $dir
 * @return array
 */
function swe_helio_cross(int $ipl, double $x2cross, double $jd_et, int $iflag, int $dir): array {}

/**
 * @param int $ipl
 * @param double $x2cross
 * @param double $jd_ut
 * @param int $iflag
 * @param int $dir
 * @return array
 */
function swe_helio_cross_ut(int $ipl, double $x2cross, double $jd_ut, int $iflag, int $dir): array {}

/**
 * @param string $star
 * @param double $tjd_et
 * @param int $iflag
 * @return array
 */
function swe_fixstar(string $star, double $tjd_et, int $iflag): array {}

/**
 * @param string $star
 * @param double $tjd_et
 * @param int $iflag
 * @return array
 */
function swe_fixstar2(string $star, double $tjd_et, int $iflag): array {}

/**
 * @param string $star
 * @param double $tjd_ut
 * @param int $iflag
 * @return array
 */
function swe_fixstar_ut(string $star, double $tjd_ut, int $iflag): array {}

/**
 * @param string $star
 * @param double $tjd_ut
 * @param int $iflag
 * @return array
 */
function swe_fixstar2_ut(string $star, double $tjd_ut, int $iflag): array {}

/**
 * @param string $star
 * @return array
 */
function swe_fixstar_mag(string $star): array {}

/**
 * @param string $star
 * @return array
 */
function swe_fixstar2_mag(string $star): array {}

/**
 * @return null
 */
function swe_close() {}

/**
 * @param string|null $path
 * @return null
 */
function swe_set_ephe_path(?string $path = null) {}

/**
 * @param string $fname
 * @return null
 */
function swe_set_jpl_file(string $fname) {}

/**
 * @param int $ipl
 * @return string
 */
function swe_get_planet_name(int $ipl): string {}

/**
 * @param double $geolon
 * @param double $geolat
 * @param double $geoalt
 * @return null
 */
function swe_set_topo(double $geolon, double $geolat, double $geoalt) {}

/**
 * @param int $sid_mode
 * @param double $t0
 * @param double $ayan_t0
 * @return null
 */
function swe_set_sid_mode(int $sid_mode, double $t0, double $ayan_t0) {}

/**
 * @param double $tjd_et
 * @return double
 */
function swe_get_ayanamsa(double $tjd_et): double {}

/**
 * @param double $tjd_et
 * @param int $iflag
 * @return array
 */
function swe_get_ayanamsa_ex(double $tjd_et, int $iflag): array {}

/**
 * @param double $tjd_ut
 * @return double
 */
function swe_get_ayanamsa_ut(double $tjd_ut): double {}

/**
 * @param double $tjd_ut
 * @param int $iflag
 * @return array
 */
function swe_get_ayanamsa_ex_ut(double $tjd_ut, int $iflag): array {}

/**
 * @param int $isidmode
 * @return string
 */
function swe_get_ayanamsa_name(int $isidmode): string {}

/**
 * @return string
 */
function swe_version(): string {}

/**
 * @return string
 */
function swe_get_library_path(): string {}

/**
 * @param int $ifno
 * @return string|null
 */
function swe_get_current_file_data(int $ifno): ?string {}

/**
 * @param int $year
 * @param int $month
 * @param int $day
 * @param double $hour
 * @param int $cal_flag
 * @return double|null
 */
function swe_date_conversion(int $year, int $month, int $day, double $hour, int $cal_flag): ?double {}

/**
 * @param int $year
 * @param int $month
 * @param int $day
 * @param double $hour
 * @param int|null $gregflag
 * @return double
 */
function swe_julday(int $year, int $month, int $day, double $hour, ?int $gregflag = null): double {}

/**
 * @param double $jd
 * @param int|null $gregflag
 * @return array
 */
function swe_revjul(double $jd, ?int $gregflag = null): array {}

/**
 * @param double $tjd_et
 * @param int $gregflag
 * @return array
 */
function swe_jdet_to_utc(double $tjd_et, int $gregflag): array {}

/**
 * @param double $tjd_ut
 * @param int $gregflag
 * @return array
 */
function swe_jdut1_to_utc(double $tjd_ut, int $gregflag): array {}

/**
 * @param int $year
 * @param int $month
 * @param int $day
 * @param int $hour
 * @param int $min
 * @param double $dsec
 * @param int $gregflag
 * @return array
 */
function swe_utc_to_jd(int $year, int $month, int $day, int $hour, int $min, double $dsec, int $gregflag): array {}

/**
 * @param int $year
 * @param int $month
 * @param int $day
 * @param int $hour
 * @param int $min
 * @param double $dsec
 * @param double $d_timezone
 * @return array
 */
function swe_utc_time_zone(
    int $year,
    int $month,
    int $day,
    int $hour,
    int $min,
    double $dsec,
    double $d_timezone
): array {}

/**
 * @param double $tjd_ut
 * @param double $geolat
 * @param double $geolon
 * @param string $hsys
 * @return array
 */
function swe_houses(double $tjd_ut, double $geolat, double $geolon, string $hsys): array {}

/**
 * @param double $tjd_ut
 * @param int $iflag
 * @param double $geolat
 * @param double $geolon
 * @param string $hsys
 * @return array
 */
function swe_houses_ex(double $tjd_ut, int $iflag, double $geolat, double $geolon, string $hsys): array {}

/**
 * @param double $tjd_ut
 * @param int $iflag
 * @param double $geolat
 * @param double $geolon
 * @param string $hsys
 * @return array
 */
function swe_houses_ex2(double $tjd_ut, int $iflag, double $geolat, double $geolon, string $hsys): array {}

/**
 * @param double $armc
 * @param double $geolat
 * @param double $eps
 * @param string $hsys
 * @return array
 */
function swe_houses_armc(double $armc, double $geolat, double $eps, string $hsys): array {}

/**
 * @param double $armc
 * @param double $geolat
 * @param double $eps
 * @param string $hsys
 * @return array
 */
function swe_houses_armc_ex2(double $armc, double $geolat, double $eps, string $hsys): array {}

/**
 * @param double $armc
 * @param double $geolat
 * @param double $eps
 * @param string $hsys
 * @param double $xpin0
 * @param double $xpin1
 * @return double|string
 */
function swe_house_pos(
    double $armc,
    double $geolat,
    double $eps,
    string $hsys,
    double $xpin0,
    double $xpin1
): double|string {}

/**
 * @param string $hsys
 * @return string
 */
function swe_house_name(string $hsys): string {}

/**
 * @param double $tjd_ut
 * @param int $ipl
 * @param string $starname
 * @param int $iflag
 * @param int $imeth
 * @param double $geolon
 * @param double $geolat
 * @param double $geoalt
 * @param double $atpress
 * @param double $attemp
 * @return array
 */
function swe_gauquelin_sector(
    double $tjd_ut,
    int $ipl,
    string $starname,
    int $iflag,
    int $imeth,
    double $geolon,
    double $geolat,
    double $geoalt,
    double $atpress,
    double $attemp
): array {}

/**
 * @param double $tjd_ut
 * @param int $iflag
 * @return array
 */
function swe_sol_eclipse_where(double $tjd_ut, int $iflag): array {}

/**
 * @param double $tjd_ut
 * @param int $ipl
 * @param string $star
 * @param int $iflag
 * @return array
 */
function swe_lun_occult_where(double $tjd_ut, int $ipl, string $star, int $iflag): array {}

/**
 * @param double $tjd_ut
 * @param int $iflag
 * @param double $geolng
 * @param double $geolat
 * @param double $geoalt
 * @return array
 */
function swe_sol_eclipse_how(double $tjd_ut, int $iflag, double $geolng, double $geolat, double $geoalt): array {}

/**
 * @param double $tjd_start
 * @param int $iflag
 * @param double $geolng
 * @param double $geolat
 * @param double $geoalt
 * @param int $backw
 * @return array
 */
function swe_sol_eclipse_when_loc(
    double $tjd_start,
    int $iflag,
    double $geolng,
    double $geolat,
    double $geoalt,
    int $backw
): array {}

/**
 * @param double $tjd_ut
 * @param int $ipl
 * @param string $star
 * @param int $iflag
 * @param double $geolng
 * @param double $geolat
 * @param double $geoalt
 * @param int $backw
 * @return array
 */
function swe_lun_occult_when_loc(
    double $tjd_ut,
    int $ipl,
    string $star,
    int $iflag,
    double $geolng,
    double $geolat,
    double $geoalt,
    int $backw
): array {}

/**
 * @param double $tjd_start
 * @param int $iflag
 * @param int $ifltype
 * @param int $backw
 * @return array
 */
function swe_sol_eclipse_when_glob(double $tjd_start, int $iflag, int $ifltype, int $backw): array {}

/**
 * @param double $tjd_ut
 * @param int $ipl
 * @param string $star
 * @param int $iflag
 * @param int $ifltype
 * @param int $backw
 * @return array
 */
function swe_lun_occult_when_glob(
    double $tjd_ut,
    int $ipl,
    string $star,
    int $iflag,
    int $ifltype,
    int $backw)
: array {}

/**
 * @param double $tjd_ut
 * @param int $iflag
 * @param double $geolng
 * @param double $geolat
 * @param double $geoalt
 * @return array
 */
function swe_lun_eclipse_how(double $tjd_ut, int $iflag, double $geolng, double $geolat, double $geoalt): array {}

/**
 * @param double $tjd_ut
 * @param int $iflag
 * @param int $ifltype
 * @param int $backw
 * @return array
 */
function swe_lun_eclipse_when(double $tjd_ut, int $iflag, int $ifltype, int $backw): array {}

/**
 * @param double $tjd_start
 * @param int $iflag
 * @param double $geolng
 * @param double $geolat
 * @param double $geoalt
 * @param int $backw
 * @return array
 */
function swe_lun_eclipse_when_loc(
    double $tjd_start,
    int $iflag,
    double $geolng,
    double $geolat,
    double $geoalt,
    int $backw
): array {}

/**
 * @param double $tjd_et
 * @param int $ipl
 * @param int $iflag
 * @return array
 */
function swe_pheno(double $tjd_et, int $ipl, int $iflag): array {}

/**
 * @param double $tjd_ut
 * @param int $ipl
 * @param int $iflag
 * @return array
 */
function swe_pheno_ut(double $tjd_ut, int $ipl, int $iflag): array {}

/**
 * @param double $inalt
 * @param double $atpress
 * @param double $attemp
 * @param int $calc_flag
 * @return double
 */
function swe_refrac(double $inalt, double $atpress, double $attemp, int $calc_flag): double {}

/**
 * @param double $inalt
 * @param double $geoalt
 * @param double $atpress
 * @param double $attemp
 * @param double $lapse_rate
 * @param int $calc_flag
 * @return array
 */
function swe_refrac_extended(
    double $inalt,
    double $geoalt,
    double $atpress,
    double $attemp,
    double $lapse_rate,
    int $calc_flag
): array {}

/**
 * @param double $tjdstart
 * @param double $geolon
 * @param double $geolat
 * @param double $geoalt
 * @param double $atpress
 * @param double $attemp
 * @param double $athum
 * @param double $atuom
 * @param double $oage
 * @param double $oeyes
 * @param double $omono
 * @param double $ozoom
 * @param double $odia
 * @param double $otrans
 * @param string $objectname
 * @param int $event_type
 * @param int $helflag
 * @return array
 */
function swe_heliacal_ut(
    double $tjdstart,
    double $geolon,
    double $geolat,
    double $geoalt,
    double $atpress,
    double $attemp,
    double $athum,
    double $atuom,
    double $oage,
    double $oeyes,
    double $omono,
    double $ozoom,
    double $odia,
    double $otrans,
    string $objectname,
    int $event_type,
    int $helflag
): array {}

/**
 * @param double $tjdstart
 * @param double $geolon
 * @param double $geolat
 * @param double $geoalt
 * @param double $atpress
 * @param double $attemp
 * @param double $athum
 * @param double $atuom
 * @param double $oage
 * @param double $oeyes
 * @param double $omono
 * @param double $ozoom
 * @param double $odia
 * @param double $otrans
 * @param string $objectname
 * @param int $event_type
 * @param int $helflag
 * @return array
 */
function swe_heliacal_pheno_ut(
    double $tjdstart,
    double $geolon,
    double $geolat,
    double $geoalt,
    double $atpress,
    double $attemp,
    double $athum,
    double $atuom,
    double $oage,
    double $oeyes,
    double $omono,
    double $ozoom,
    double $odia,
    double $otrans,
    string $objectname,
    int $event_type,
    int $helflag
): array {}

/**
 * @param double $tjdstart
 * @param double $geolon
 * @param double $geolat
 * @param double $geoalt
 * @param double $atpress
 * @param double $attemp
 * @param double $athum
 * @param double $atuom
 * @param double $oage
 * @param double $oeyes
 * @param double $omono
 * @param double $ozoom
 * @param double $odia
 * @param double $otrans
 * @param string $objectname
 * @param int $helflag
 * @return array
 */
function swe_vis_limit_mag(
    double $tjdstart,
    double $geolon,
    double $geolat,
    double $geoalt,
    double $atpress,
    double $attemp,
    double $athum,
    double $atuom,
    double $oage,
    double $oeyes,
    double $omono,
    double $ozoom,
    double $odia,
    double $otrans,
    string $objectname,
    int $helflag
): array {}

/**
 * @param double $tjd_ut
 * @param int $calc_flag
 * @param double $geolon
 * @param double $geolat
 * @param double $geoalt
 * @param double $atpress
 * @param double $attemp
 * @param double $xin0
 * @param double $xin1
 * @return array
 */
function swe_azalt(
    double $tjd_ut,
    int $calc_flag,
    double $geolon,
    double $geolat,
    double $geoalt,
    double $atpress,
    double $attemp,
    double $xin0,
    double $xin1
): array {}

/**
 * @param double $tjd_ut
 * @param int $calc_flag
 * @param double $lng
 * @param double $lat
 * @param double $alt
 * @param double $xin0
 * @param double $xin1
 * @return array
 */
function swe_azalt_rev(
    double $tjd_ut,
    int $calc_flag,
    double $lng,
    double $lat,
    double $alt,
    double $xin0,
    double $xin1
): array {}

/**
 * @param double $tjd_ut
 * @param int $ipl
 * @param string|null $starname
 * @param int $epheflag
 * @param int $rsmi
 * @param double $geolon
 * @param double $geolat
 * @param double $geoalt
 * @param double $atpress
 * @param double $attemp
 * @return array
 */
function swe_rise_trans(
    double $tjd_ut,
    int $ipl,
    ?string $starname = null,
    int $epheflag,
    int $rsmi,
    double $geolon,
    double $geolat,
    double $geoalt,
    double $atpress,
    double $attemp
): array {}

/**
 * @param double $tjd_ut
 * @param int $ipl
 * @param string|null $starname
 * @param int $epheflag
 * @param int $rsmi
 * @param double $geolon
 * @param double $geolat
 * @param double $geoalt
 * @param double $atpress
 * @param double $attemp
 * @param double $horhgt
 * @return array
 */
function swe_rise_trans_true_hor(
    double $tjd_ut,
    int $ipl,
    ?string $starname = null,
    int $epheflag,
    int $rsmi,
    double $geolon,
    double $geolat,
    double $geoalt,
    double $atpress,
    double $attemp,
    double $horhgt
): array {}

/**
 * @param double $tjd_et
 * @param int $ipl
 * @param int $iflag
 * @param int $method
 * @return array
 */
function swe_nod_aps(double $tjd_et, int $ipl, int $iflag, int $method): array {}

/**
 * @param double $tjd_ut
 * @param int $ipl
 * @param int $iflag
 * @param int $method
 * @return array
 */
function swe_nod_aps_ut(double $tjd_ut, int $ipl, int $iflag, int $method): array {}

/**
 * @param double $tjd_et
 * @param int $ipl
 * @param int $iflag
 * @return array
 */
function swe_get_orbital_elements(double $tjd_et, int $ipl, int $iflag): array {}

/**
 * @param double $tjd_et
 * @param int $ipl
 * @param int $iflag
 * @return array
 */
function swe_orbit_max_min_true_distance(double $tjd_et, int $ipl, int $iflag): array {}

/**
 * @param float $tjd
 * @return float
 */
function swe_deltat(double $tjd): double {}

/**
 * @param float $tjd
 * @param int $ephe_flat
 * @return array
 */
function swe_deltat_ex(double $tjd, int $ephe_flat): array {}

/**
 * @param float $tjd_et
 * @return array
 */
function swe_time_equ(double $tjd_et): array {}

/**
 * @param float $tjd_lmt
 * @param float $geolon
 * @return array
 */
function swe_lmt_to_lat(double $tjd_lmt, double $geolon): array {}

/**
 * @param float $tjd_lat
 * @param float $geolon
 * @return array
 */
function swe_lat_to_lmt(double $tjd_lat, double $geolon): array {}

/**
 * @param float $tjd_ut
 * @param float $eps
 * @param float $nut
 * @return float
 */
function swe_sidtime0(double $tjd_ut, double $eps, double $nut): double {}

/**
 * @param float $tjd_ut
 * @return float
 */
function swe_sidtime(double $tjd_ut): double {}

/**
 * @param float $lng
 * @param float $lat
 * @param float $dist
 * @param float $eps
 * @return array
 */
function swe_cotrans(double $lng, double $lat, double $dist, double $eps): array {}

/**
 * @param float $lng
 * @param float $lat
 * @param float $dist
 * @param float $lngs
 * @param float $lats
 * @param float $dists
 * @param float $eps
 * @return array
 */
function swe_cotrans_sp(
    double $lng,
    double $lat,
    double $dist,
    double $lngs,
    double $lats,
    double $dists,
    double $eps
): array {}

/**
 * @return float
 */
function swe_get_tid_acc(): double {}

/**
 * @param float $t_acc
 * @return null
 */
function swe_set_tid_acc(double $t_acc) {}

/**
 * @param float $t_acc
 * @return null
 */
function swe_set_delta_t_userdef(double $t_acc) {}

/**
 * @param float $deg
 * @return float
 */
function swe_degnorm(double $deg): double {}

/**
 * @param float $rad
 * @return float
 */
function swe_radnorm(double $rad): double {}

/**
 * @param float $x1
 * @param float $x2
 * @return float
 */
function swe_rad_midp(double $x1, double $x2): double {}

/**
 * @param float $x1
 * @param float $x2
 * @return float
 */
function swe_deg_midp(double $x1, double $x2): double {}

/**
 * @param float $ddeg
 * @param int $roundflag
 * @return array
 */
function swe_split_deg(double $ddeg, int $roundflag): array {}

/**
 * @param int $p
 * @return int
 */
function swe_csnorm(int $p): int {}

/**
 * @param int $p1
 * @param int $p2
 * @return int
 */
function swe_difcsn(int $p1, int $p2): int {}

/**
 * @param float $p1
 * @param float $p2
 * @return float
 */
function swe_difdegn(double $p1, double $p2): double {}

/**
 * @param int $p1
 * @param int $p2
 * @return int
 */
function swe_difcs2n(int $p1, int $p2): int {}

/**
 * @param float $p1
 * @param float $p2
 * @return float
 */
function swe_difdeg2n(double $p1, double $p2): double {}

/**
 * @param float $p1
 * @param float $p2
 * @return float
 */
function swe_difrad2n(double $p1, double $p2): double {}

/**
 * @param int $x
 * @return int
 */
function swe_csroundsec(int $x): int {}

/**
 * @param float $x
 * @return float
 */
function swe_d2l(double $x): double {}

/**
 * @param float $jd
 * @return int
 */
function swe_day_of_week(double $jd): int {}

/**
 * @param int $t
 * @param int $sep
 * @param int $suppressZero
 * @return string
 */
function swe_cs2timestr(int $t, int $sep, int $suppressZero): string {}

/**
 * @param int $t
 * @param string $pchar
 * @param string $mchar
 * @return string
 */
function swe_cs2lonlatstr(int $t, string $pchar, string $mchar): string {}

/**
 * @param int $t
 * @return string
 */
function swe_cs2degstr(int $t): string {}
