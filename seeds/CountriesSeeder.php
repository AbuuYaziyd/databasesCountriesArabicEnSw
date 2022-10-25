<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CountriesTableSeeder extends Seeder {
	
	public function run() 
	{	
        $countries = [
            ['code' =>'AD', 'country_en' => 'Andorra', 'country_ar' => 'أندورا', 'nationality_en' => 'Andorran', 'nationality_ar' => 'أندوري'],
            ['code' =>'AE', 'country_en' => 'United Arab Emirates', 'country_ar' => 'الإمارات العربية المتحدة', 'nationality_en' => 'Emirati', 'nationality_ar' => 'إماراتي'],
            ['code' =>'AF', 'country_en' => 'Afghanistan', 'country_ar' => 'أفغانستان', 'nationality_en' => 'Afghan', 'nationality_ar' => 'أفغانستاني'],
            ['code' =>'AG', 'country_en' => 'Antigua and Barbuda', 'country_ar' => 'أنتيغوا وبربودا', 'nationality_en' => 'Antiguan', 'nationality_ar' => 'بربودي'],
            ['code' =>'AI', 'country_en' => 'Anguilla', 'country_ar' => 'أنغويلا', 'nationality_en' => 'Anguillan', 'nationality_ar' => 'أنغويلي'],
            ['code' =>'AL', 'country_en' => 'Albania', 'country_ar' => 'ألبانيا', 'nationality_en' => 'Albanian', 'nationality_ar' => 'ألباني'],
            ['code' =>'AM', 'country_en' => 'Armenia', 'country_ar' => 'أرمينيا', 'nationality_en' => 'Armenian', 'nationality_ar' => 'أرميني'],
            ['code' =>'AN', 'country_en' => 'Netherlands Antilles', 'country_ar' => 'جزر الأنتيل الهولندي', 'nationality_en' => 'Dutch Antilier', 'nationality_ar' => 'هولندي'],
            ['code' =>'AO', 'country_en' => 'Angola', 'country_ar' => 'أنغولا', 'nationality_en' => 'Angolan', 'nationality_ar' => 'أنقولي'],
            ['code' =>'AQ', 'country_en' => 'Antarctica', 'country_ar' => 'أنتاركتيكا', 'nationality_en' => 'Antarctican', 'nationality_ar' => 'أنتاركتيكي'],
            ['code' =>'AR', 'country_en' => 'Argentina', 'country_ar' => 'الأرجنتين', 'nationality_en' => 'Argentinian', 'nationality_ar' => 'أرجنتيني'],
            ['code' =>'AS', 'country_en' => 'American Samoa', 'country_ar' => 'ساموا-الأمريكي', 'nationality_en' => 'American Samoan', 'nationality_ar' => 'أمريكي سامواني'],
            ['code' =>'AT', 'country_en' => 'Austria', 'country_ar' => 'النمسا', 'nationality_en' => 'Austrian', 'nationality_ar' => 'نمساوي'],
            ['code' =>'AU', 'country_en' => 'Australia', 'country_ar' => 'أستراليا', 'nationality_en' => 'Australian', 'nationality_ar' => 'أسترالي'],
            ['code' =>'AW', 'country_en' => 'Aruba', 'country_ar' => 'أروبه', 'nationality_en' => 'Aruban', 'nationality_ar' => 'أوروبهيني'],
            ['code' =>'AX', 'country_en' => 'Aland Islands', 'country_ar' => 'جزر آلاند', 'nationality_en' => 'Aland Islander', 'nationality_ar' => 'آلاندي'],
            ['code' =>'AZ', 'country_en' => 'Azerbaijan', 'country_ar' => 'أذربيجان', 'nationality_en' => 'Azerbaijani', 'nationality_ar' => 'أذربيجاني'],
            ['code' =>'BA', 'country_en' => 'Bosnia and Herzegovina', 'country_ar' => 'البوسنة و الهرسك', 'nationality_en' => 'Bosnian / Herzegovinian', 'nationality_ar' => 'بوسني/هرسكي'],
            ['code' =>'BB', 'country_en' => 'Barbados', 'country_ar' => 'بربادوس', 'nationality_en' => 'Barbadian', 'nationality_ar' => 'بربادوسي'],
            ['code' =>'BD', 'country_en' => 'Bangladesh', 'country_ar' => 'بنغلاديش', 'nationality_en' => 'Bangladeshi', 'nationality_ar' => 'بنغلاديشي'],
            ['code' =>'BE', 'country_en' => 'Belgium', 'country_ar' => 'بلجيكا', 'nationality_en' => 'Belgian', 'nationality_ar' => 'بلجيكي'],
            ['code' =>'BF', 'country_en' => 'Burkina Faso', 'country_ar' => 'بوركينا فاسو', 'nationality_en' => 'Burkinabe', 'nationality_ar' => 'بوركيني'],
            ['code' =>'BG', 'country_en' => 'Bulgaria', 'country_ar' => 'بلغاريا', 'nationality_en' => 'Bulgarian', 'nationality_ar' => 'بلغاري'],
            ['code' =>'BH', 'country_en' => 'Bahrain', 'country_ar' => 'البحرين', 'nationality_en' => 'Bahraini', 'nationality_ar' => 'بحريني'],
            ['code' =>'BI', 'country_en' => 'Burundi', 'country_ar' => 'بوروندي', 'nationality_en' => 'Burundian', 'nationality_ar' => 'بورونيدي'],
            ['code' =>'BJ', 'country_en' => 'Benin', 'country_ar' => 'بنين', 'nationality_en' => 'Beninese', 'nationality_ar' => 'بنيني'],
            ['code' =>'BL', 'country_en' => 'Saint Barthelemy', 'country_ar' => 'سان بارتيلمي', 'nationality_en' => 'Saint Barthelmian', 'nationality_ar' => 'سان بارتيلمي'],
            ['code' =>'BM', 'country_en' => 'Bermuda', 'country_ar' => 'جزر برمودا', 'nationality_en' => 'Bermudan', 'nationality_ar' => 'برمودي'],
            ['code' =>'BN', 'country_en' => 'Brunei Darussalam', 'country_ar' => 'بروني', 'nationality_en' => 'Bruneian', 'nationality_ar' => 'بروني'],
            ['code' =>'BO', 'country_en' => 'Bolivia', 'country_ar' => 'بوليفيا', 'nationality_en' => 'Bolivian', 'nationality_ar' => 'بوليفي'],
            ['code' =>'BR', 'country_en' => 'Brazil', 'country_ar' => 'البرازيل', 'nationality_en' => 'Brazilian', 'nationality_ar' => 'برازيلي'],
            ['code' =>'BS', 'country_en' => 'Bahamas', 'country_ar' => 'الباهاماس', 'nationality_en' => 'Bahamian', 'nationality_ar' => 'باهاميسي'],
            ['code' =>'BT', 'country_en' => 'Bhutan', 'country_ar' => 'بوتان', 'nationality_en' => 'Bhutanese', 'nationality_ar' => 'بوتاني'],
            ['code' =>'BV', 'country_en' => 'Bouvet Island', 'country_ar' => 'جزيرة بوفيه', 'nationality_en' => 'Bouvetian', 'nationality_ar' => 'بوفيهي'],
            ['code' =>'BW', 'country_en' => 'Botswana', 'country_ar' => 'بوتسوانا', 'nationality_en' => 'Botswanan', 'nationality_ar' => 'بوتسواني'],
            ['code' =>'BY', 'country_en' => 'Belarus', 'country_ar' => 'روسيا البيضاء', 'nationality_en' => 'Belarusian', 'nationality_ar' => 'روسي'],
            ['code' =>'BZ', 'country_en' => 'Belize', 'country_ar' => 'بيليز', 'nationality_en' => 'Belizean', 'nationality_ar' => 'بيليزي'],
            ['code' =>'CA', 'country_en' => 'Canada', 'country_ar' => 'كندا', 'nationality_en' => 'Canadian', 'nationality_ar' => 'كندي'],
            ['code' =>'CC', 'country_en' => 'Cocos (Keeling) Islands', 'country_ar' => 'جزر كوكوس', 'nationality_en' => 'Cocos Islander', 'nationality_ar' => 'جزر كوكوس'],
            ['code' =>'CF', 'country_en' => 'Central African Republic', 'country_ar' => 'جمهورية أفريقيا الوسطى', 'nationality_en' => 'Central African', 'nationality_ar' => 'أفريقي'],
            ['code' =>'CG', 'country_en' => 'Congo', 'country_ar' => 'الكونغو', 'nationality_en' => 'Congolese', 'nationality_ar' => 'كونغي'],
            ['code' =>'CH', 'country_en' => 'Switzerland', 'country_ar' => 'سويسرا', 'nationality_en' => 'Swiss', 'nationality_ar' => 'سويسري'],
            ['code' =>'CI', 'country_en' => 'Ivory Coast', 'country_ar' => 'ساحل العاج', 'nationality_en' => 'Ivory Coastian', 'nationality_ar' => 'ساحل العاج'],
            ['code' =>'CK', 'country_en' => 'Cook Islands', 'country_ar' => 'جزر كوك', 'nationality_en' => 'Cook Islander', 'nationality_ar' => 'جزر كوك'],
            ['code' =>'CL', 'country_en' => 'Chile', 'country_ar' => 'شيلي', 'nationality_en' => 'Chilean', 'nationality_ar' => 'شيلي'],
            ['code' =>'CM', 'country_en' => 'Cameroon', 'country_ar' => 'كاميرون', 'nationality_en' => 'Cameroonian', 'nationality_ar' => 'كاميروني'],
            ['code' =>'CN', 'country_en' => 'China', 'country_ar' => 'الصين', 'nationality_en' => 'Chinese', 'nationality_ar' => 'صيني'],
            ['code' =>'CO', 'country_en' => 'Colombia', 'country_ar' => 'كولومبيا', 'nationality_en' => 'Colombian', 'nationality_ar' => 'كولومبي'],
            ['code' =>'CR', 'country_en' => 'Costa Rica', 'country_ar' => 'كوستاريكا', 'nationality_en' => 'Costa Rican', 'nationality_ar' => 'كوستاريكي'],
            ['code' =>'CU', 'country_en' => 'Cuba', 'country_ar' => 'كوبا', 'nationality_en' => 'Cuban', 'nationality_ar' => 'كوبي'],
            ['code' =>'CV', 'country_en' => 'Cape Verde', 'country_ar' => 'الرأس الأخضر', 'nationality_en' => 'Cape Verdean', 'nationality_ar' => 'الرأس الأخضر'],
            ['code' =>'CW', 'country_en' => 'Curaçao', 'country_ar' => 'كوراساو', 'nationality_en' => 'Curacian', 'nationality_ar' => 'كوراساوي'],
            ['code' =>'CX', 'country_en' => 'Christmas Island', 'country_ar' => 'جزيرة عيد الميلاد', 'nationality_en' => 'Christmas Islander', 'nationality_ar' => 'جزيرة عيد الميلاد'],
            ['code' =>'CY', 'country_en' => 'Cyprus', 'country_ar' => 'قبرص', 'nationality_en' => 'Cypriot', 'nationality_ar' => 'قبرصي'],
            ['code' =>'CZ', 'country_en' => 'Czech Republic', 'country_ar' => 'الجمهورية التشيكية', 'nationality_en' => 'Czech', 'nationality_ar' => 'تشيكي'],
            ['code' =>'DE', 'country_en' => 'Germany', 'country_ar' => 'ألمانيا', 'nationality_en' => 'German', 'nationality_ar' => 'ألماني'],
            ['code' =>'DJ', 'country_en' => 'Djibouti', 'country_ar' => 'جيبوتي', 'nationality_en' => 'Djiboutian', 'nationality_ar' => 'جيبوتي'],
            ['code' =>'DK', 'country_en' => 'Denmark', 'country_ar' => 'الدانمارك', 'nationality_en' => 'Danish', 'nationality_ar' => 'دنماركي'],
            ['code' =>'DM', 'country_en' => 'Dominica', 'country_ar' => 'دومينيكا', 'nationality_en' => 'Dominican', 'nationality_ar' => 'دومينيكي'],
            ['code' =>'DO', 'country_en' => 'Dominican Republic', 'country_ar' => 'الجمهورية الدومينيكية', 'nationality_en' => 'Dominican', 'nationality_ar' => 'دومينيكي'],
            ['code' =>'DZ', 'country_en' => 'Algeria', 'country_ar' => 'الجزائر', 'nationality_en' => 'Algerian', 'nationality_ar' => 'جزائري'],
            ['code' =>'EC', 'country_en' => 'Ecuador', 'country_ar' => 'إكوادور', 'nationality_en' => 'Ecuadorian', 'nationality_ar' => 'إكوادوري'],
            ['code' =>'EE', 'country_en' => 'Estonia', 'country_ar' => 'استونيا', 'nationality_en' => 'Estonian', 'nationality_ar' => 'استوني'],
            ['code' =>'EG', 'country_en' => 'Egypt', 'country_ar' => 'مصر', 'nationality_en' => 'Egyptian', 'nationality_ar' => 'مصري'],
            ['code' =>'EH', 'country_en' => 'Western Sahara', 'country_ar' => 'الصحراء الغربية', 'nationality_en' => 'Sahrawian', 'nationality_ar' => 'صحراوي'],
            ['code' =>'ER', 'country_en' => 'Eritrea', 'country_ar' => 'إريتريا', 'nationality_en' => 'Eritrean', 'nationality_ar' => 'إريتيري'],
            ['code' =>'ES', 'country_en' => 'Spain', 'country_ar' => 'إسبانيا', 'nationality_en' => 'Spanish', 'nationality_ar' => 'إسباني'],
            ['code' =>'ET', 'country_en' => 'Ethiopia', 'country_ar' => 'أثيوبيا', 'nationality_en' => 'Ethiopian', 'nationality_ar' => 'أثيوبي'],
            ['code' =>'FI', 'country_en' => 'Finland', 'country_ar' => 'فنلندا', 'nationality_en' => 'Finnish', 'nationality_ar' => 'فنلندي'],
            ['code' =>'FJ', 'country_en' => 'Fiji', 'country_ar' => 'فيجي', 'nationality_en' => 'Fijian', 'nationality_ar' => 'فيجي'],
            ['code' =>'FK', 'country_en' => 'Falkland Islands (Malvinas)', 'country_ar' => 'جزر فوكلاند', 'nationality_en' => 'Falkland Islander', 'nationality_ar' => 'فوكلاندي'],
            ['code' =>'FM', 'country_en' => 'Micronesia', 'country_ar' => 'مايكرونيزيا', 'nationality_en' => 'Micronesian', 'nationality_ar' => 'مايكرونيزيي'],
            ['code' =>'FO', 'country_en' => 'Faroe Islands', 'country_ar' => 'جزر فارو', 'nationality_en' => 'Faroese', 'nationality_ar' => 'جزر فارو'],
            ['code' =>'FR', 'country_en' => 'France', 'country_ar' => 'فرنسا', 'nationality_en' => 'French', 'nationality_ar' => 'فرنسي'],
            ['code' =>'GA', 'country_en' => 'Gabon', 'country_ar' => 'الغابون', 'nationality_en' => 'Gabonese', 'nationality_ar' => 'غابوني'],
            ['code' =>'GB', 'country_en' => 'United Kingdom', 'country_ar' => 'المملكة المتحدة', 'nationality_en' => 'British', 'nationality_ar' => 'بريطاني'],
            ['code' =>'GD', 'country_en' => 'Grenada', 'country_ar' => 'غرينادا', 'nationality_en' => 'Grenadian', 'nationality_ar' => 'غرينادي'],
            ['code' =>'GE', 'country_en' => 'Georgia', 'country_ar' => 'جيورجيا', 'nationality_en' => 'Georgian', 'nationality_ar' => 'جيورجي'],
            ['code' =>'GF', 'country_en' => 'French Guiana', 'country_ar' => 'غويانا الفرنسية', 'nationality_en' => 'French Guianese', 'nationality_ar' => 'غويانا الفرنسية'],
            ['code' =>'GG', 'country_en' => 'Guernsey', 'country_ar' => 'غيرنزي', 'nationality_en' => 'Guernsian', 'nationality_ar' => 'غيرنزي'],
            ['code' =>'GH', 'country_en' => 'Ghana', 'country_ar' => 'غانا', 'nationality_en' => 'Ghanaian', 'nationality_ar' => 'غاني'],
            ['code' =>'GI', 'country_en' => 'Gibraltar', 'country_ar' => 'جبل طارق', 'nationality_en' => 'Gibraltar', 'nationality_ar' => 'جبل طارق'],
            ['code' =>'GL', 'country_en' => 'Greenland', 'country_ar' => 'جرينلاند', 'nationality_en' => 'Greenlandic', 'nationality_ar' => 'جرينلاندي'],
            ['code' =>'GM', 'country_en' => 'Gambia', 'country_ar' => 'غامبيا', 'nationality_en' => 'Gambian', 'nationality_ar' => 'غامبي'],
            ['code' =>'GN', 'country_en' => 'Guinea', 'country_ar' => 'غينيا', 'nationality_en' => 'Guinean', 'nationality_ar' => 'غيني'],
            ['code' =>'GP', 'country_en' => 'Guadeloupe', 'country_ar' => 'جزر جوادلوب', 'nationality_en' => 'Guadeloupe', 'nationality_ar' => 'جزر جوادلوب'],
            ['code' =>'GQ', 'country_en' => 'Equatorial Guinea', 'country_ar' => 'غينيا الاستوائي', 'nationality_en' => 'Equatorial Guinean', 'nationality_ar' => 'غيني'],
            ['code' =>'GR', 'country_en' => 'Greece', 'country_ar' => 'اليونان', 'nationality_en' => 'Greek', 'nationality_ar' => 'يوناني'],
            ['code' =>'GS', 'country_en' => 'South Georgia and the South Sandwich', 'country_ar' => 'المنطقة القطبية الجنوبية', 'nationality_en' => 'South Georgia and the South Sandwich', 'nationality_ar' => 'لمنطقة القطبية الجنوبية'],
            ['code' =>'GT', 'country_en' => 'Guatemala', 'country_ar' => 'غواتيمال', 'nationality_en' => 'Guatemalan', 'nationality_ar' => 'غواتيمالي'],
            ['code' =>'GU', 'country_en' => 'Guam', 'country_ar' => 'جوام', 'nationality_en' => 'Guamanian', 'nationality_ar' => 'جوامي'],
            ['code' =>'GW', 'country_en' => 'Guinea-Bissau', 'country_ar' => 'غينيا-بيساو', 'nationality_en' => 'Guinea-Bissauan', 'nationality_ar' => 'غيني'],
            ['code' =>'GY', 'country_en' => 'Guyana', 'country_ar' => 'غيانا', 'nationality_en' => 'Guyanese', 'nationality_ar' => 'غياني'],
            ['code' =>'HK', 'country_en' => 'Hong Kong', 'country_ar' => 'هونغ كونغ', 'nationality_en' => 'Hongkongese', 'nationality_ar' => 'هونغ كونغي'],
            ['code' =>'HM', 'country_en' => 'Heard and Mc Donald Islands', 'country_ar' => 'جزيرة هيرد وجزر ماكدونالد', 'nationality_en' => 'Heard and Mc Donald Islanders', 'nationality_ar' => 'جزيرة هيرد وجزر ماكدونالد'],
            ['code' =>'HN', 'country_en' => 'Honduras', 'country_ar' => 'هندوراس', 'nationality_en' => 'Honduran', 'nationality_ar' => 'هندوراسي'],
            ['code' =>'HR', 'country_en' => 'Croatia', 'country_ar' => 'كرواتيا', 'nationality_en' => 'Croatian', 'nationality_ar' => 'كوراتي'],
            ['code' =>'HT', 'country_en' => 'Haiti', 'country_ar' => 'هايتي', 'nationality_en' => 'Haitian', 'nationality_ar' => 'هايتي'],
            ['code' =>'HU', 'country_en' => 'Hungary', 'country_ar' => 'المجر', 'nationality_en' => 'Hungarian', 'nationality_ar' => 'مجري'],
            ['code' =>'ID', 'country_en' => 'Indonesia', 'country_ar' => 'أندونيسيا', 'nationality_en' => 'Indonesian', 'nationality_ar' => 'أندونيسيي'],
            ['code' =>'IE', 'country_en' => 'Ireland', 'country_ar' => 'إيرلندا', 'nationality_en' => 'Irish', 'nationality_ar' => 'إيرلندي'],
            ['code' =>'IL', 'country_en' => 'Israel', 'country_ar' => 'إسرائيل', 'nationality_en' => 'Israeli', 'nationality_ar' => 'إسرائيلي'],
            ['code' =>'IM', 'country_en' => 'Isle of Man', 'country_ar' => 'جزيرة مان', 'nationality_en' => 'Manx', 'nationality_ar' => 'ماني'],
            ['code' =>'IN', 'country_en' => 'India', 'country_ar' => 'الهند', 'nationality_en' => 'Indian', 'nationality_ar' => 'هندي'],
            ['code' =>'IO', 'country_en' => 'British Indian Ocean Territory', 'country_ar' => 'إقليم المحيط الهندي البريطاني', 'nationality_en' => 'British Indian Ocean Territory', 'nationality_ar' => 'إقليم المحيط الهندي البريطاني'],
            ['code' =>'IQ', 'country_en' => 'Iraq', 'country_ar' => 'العراق', 'nationality_en' => 'Iraqi', 'nationality_ar' => 'عراقي'],
            ['code' =>'IR', 'country_en' => 'Iran', 'country_ar' => 'إيران', 'nationality_en' => 'Iranian', 'nationality_ar' => 'إيراني'],
            ['code' =>'IS', 'country_en' => 'Iceland', 'country_ar' => 'آيسلندا', 'nationality_en' => 'Icelandic', 'nationality_ar' => 'آيسلندي'],
            ['code' =>'IT', 'country_en' => 'Italy', 'country_ar' => 'إيطاليا', 'nationality_en' => 'Italian', 'nationality_ar' => 'إيطالي'],
            ['code' =>'JE', 'country_en' => 'Jersey', 'country_ar' => 'جيرزي', 'nationality_en' => 'Jersian', 'nationality_ar' => 'جيرزي'],
            ['code' =>'JM', 'country_en' => 'Jamaica', 'country_ar' => 'جمايكا', 'nationality_en' => 'Jamaican', 'nationality_ar' => 'جمايكي'],
            ['code' =>'JO', 'country_en' => 'Jordan', 'country_ar' => 'الأردن', 'nationality_en' => 'Jordanian', 'nationality_ar' => 'أردني'],
            ['code' =>'JP', 'country_en' => 'Japan', 'country_ar' => 'اليابان', 'nationality_en' => 'Japanese', 'nationality_ar' => 'ياباني'],
            ['code' =>'KE', 'country_en' => 'Kenya', 'country_ar' => 'كينيا', 'nationality_en' => 'Kenyan', 'nationality_ar' => 'كيني'],
            ['code' =>'KG', 'country_en' => 'Kyrgyzstan', 'country_ar' => 'قيرغيزستان', 'nationality_en' => 'Kyrgyzstani', 'nationality_ar' => 'قيرغيزستاني'],
            ['code' =>'KH', 'country_en' => 'Cambodia', 'country_ar' => 'كمبوديا', 'nationality_en' => 'Cambodian', 'nationality_ar' => 'كمبودي'],
            ['code' =>'KI', 'country_en' => 'Kiribati', 'country_ar' => 'كيريباتي', 'nationality_en' => 'I-Kiribati', 'nationality_ar' => 'كيريباتي'],
            ['code' =>'KM', 'country_en' => 'Comoros', 'country_ar' => 'جزر القمر', 'nationality_en' => 'Comorian', 'nationality_ar' => 'جزر القمر'],
            ['code' =>'KN', 'country_en' => 'Saint Kitts and Nevis', 'country_ar' => 'سانت كيتس ونيفس,', 'nationality_en' => 'Kittitian/Nevisian', 'nationality_ar' => 'سانت كيتس ونيفس'],
            ['code' =>'KP', 'country_en' => 'Korea(North Korea)', 'country_ar' => 'كوريا الشمالية', 'nationality_en' => 'North Korean', 'nationality_ar' => 'كوري'],
            ['code' =>'KR', 'country_en' => 'Korea(South Korea)', 'country_ar' => 'كوريا الجنوبية', 'nationality_en' => 'South Korean', 'nationality_ar' => 'كوري'],
            ['code' =>'KW', 'country_en' => 'Kuwait', 'country_ar' => 'الكويت', 'nationality_en' => 'Kuwaiti', 'nationality_ar' => 'كويتي'],
            ['code' =>'KY', 'country_en' => 'Cayman Islands', 'country_ar' => 'جزر كايمان', 'nationality_en' => 'Caymanian', 'nationality_ar' => 'كايماني'],
            ['code' =>'KZ', 'country_en' => 'Kazakhstan', 'country_ar' => 'كازاخستان', 'nationality_en' => 'Kazakh', 'nationality_ar' => 'كازاخستاني'],
            ['code' =>'LA', 'country_en' => 'Lao PDR', 'country_ar' => 'لاوس', 'nationality_en' => 'Laotian', 'nationality_ar' => 'لاوسي'],
            ['code' =>'LB', 'country_en' => 'Lebanon', 'country_ar' => 'لبنان', 'nationality_en' => 'Lebanese', 'nationality_ar' => 'لبناني'],
            ['code' =>'LC', 'country_en' => 'Saint Pierre and Miquelon', 'country_ar' => 'سان بيير وميكلون', 'nationality_en' => 'St. Pierre and Miquelon', 'nationality_ar' => 'سان بيير وميكلوني'],
            ['code' =>'LI', 'country_en' => 'Liechtenstein', 'country_ar' => 'ليختنشتين', 'nationality_en' => 'Liechtenstein', 'nationality_ar' => 'ليختنشتيني'],
            ['code' =>'LK', 'country_en' => 'Sri Lanka', 'country_ar' => 'سريلانكا', 'nationality_en' => 'Sri Lankian', 'nationality_ar' => 'سريلانكي'],
            ['code' =>'LR', 'country_en' => 'Liberia', 'country_ar' => 'ليبيريا', 'nationality_en' => 'Liberian', 'nationality_ar' => 'ليبيري'],
            ['code' =>'LS', 'country_en' => 'Lesotho', 'country_ar' => 'ليسوتو', 'nationality_en' => 'Basotho', 'nationality_ar' => 'ليوسيتي'],
            ['code' =>'LT', 'country_en' => 'Lithuania', 'country_ar' => 'لتوانيا', 'nationality_en' => 'Lithuanian', 'nationality_ar' => 'لتوانيي'],
            ['code' =>'LU', 'country_en' => 'Luxembourg', 'country_ar' => 'لوكسمبورغ', 'nationality_en' => 'Luxembourger', 'nationality_ar' => 'لوكسمبورغي'],
            ['code' =>'LV', 'country_en' => 'Latvia', 'country_ar' => 'لاتفيا', 'nationality_en' => 'Latvian', 'nationality_ar' => 'لاتيفي'],
            ['code' =>'LY', 'country_en' => 'Libya', 'country_ar' => 'ليبيا', 'nationality_en' => 'Libyan', 'nationality_ar' => 'ليبي'],
            ['code' =>'MA', 'country_en' => 'Morocco', 'country_ar' => 'المغرب', 'nationality_en' => 'Moroccan', 'nationality_ar' => 'مغربي'],
            ['code' =>'MC', 'country_en' => 'Monaco', 'country_ar' => 'موناكو', 'nationality_en' => 'Monacan', 'nationality_ar' => 'مونيكي'],
            ['code' =>'MD', 'country_en' => 'Moldova', 'country_ar' => 'مولدافيا', 'nationality_en' => 'Moldovan', 'nationality_ar' => 'مولديفي'],
            ['code' =>'ME', 'country_en' => 'Montenegro', 'country_ar' => 'الجبل الأسود', 'nationality_en' => 'Montenegrin', 'nationality_ar' => 'الجبل الأسود'],
            ['code' =>'MF', 'country_en' => 'Saint Martin (French part)', 'country_ar' => 'ساينت مارتن فرنسي', 'nationality_en' => 'St. Martian(French)', 'nationality_ar' => 'ساينت مارتني فرنسي'],
            ['code' =>'MG', 'country_en' => 'Madagascar', 'country_ar' => 'مدغشقر', 'nationality_en' => 'Malagasy', 'nationality_ar' => 'مدغشقري'],
            ['code' =>'MH', 'country_en' => 'Marshall Islands', 'country_ar' => 'جزر مارشال', 'nationality_en' => 'Marshallese', 'nationality_ar' => 'مارشالي'],
            ['code' =>'MK', 'country_en' => 'Macedonia', 'country_ar' => 'مقدونيا', 'nationality_en' => 'Macedonian', 'nationality_ar' => 'مقدوني'],
            ['code' =>'ML', 'country_en' => 'Mali', 'country_ar' => 'مالي', 'nationality_en' => 'Malian', 'nationality_ar' => 'مالي'],
            ['code' =>'MM', 'country_en' => 'Myanmar', 'country_ar' => 'ميانمار', 'nationality_en' => 'Myanmarian', 'nationality_ar' => 'ميانماري'],
            ['code' =>'MN', 'country_en' => 'Mongolia', 'country_ar' => 'منغوليا', 'nationality_en' => 'Mongolian', 'nationality_ar' => 'منغولي'],
            ['code' =>'MO', 'country_en' => 'Macau', 'country_ar' => 'ماكاو', 'nationality_en' => 'Macanese', 'nationality_ar' => 'ماكاوي'],
            ['code' =>'MP', 'country_en' => 'Northern Mariana Islands', 'country_ar' => 'جزر ماريانا الشمالية', 'nationality_en' => 'Northern Marianan', 'nationality_ar' => 'ماريني'],
            ['code' =>'MQ', 'country_en' => 'Martinique', 'country_ar' => 'مارتينيك', 'nationality_en' => 'Martiniquais', 'nationality_ar' => 'مارتينيكي'],
            ['code' =>'MR', 'country_en' => 'Mauritania', 'country_ar' => 'موريتانيا', 'nationality_en' => 'Mauritanian', 'nationality_ar' => 'موريتانيي'],
            ['code' =>'MS', 'country_en' => 'Montserrat', 'country_ar' => 'مونتسيرات', 'nationality_en' => 'Montserratian', 'nationality_ar' => 'مونتسيراتي'],
            ['code' =>'MT', 'country_en' => 'Malta', 'country_ar' => 'مالطا', 'nationality_en' => 'Maltese', 'nationality_ar' => 'مالطي'],
            ['code' =>'MU', 'country_en' => 'Mauritius', 'country_ar' => 'موريشيوس', 'nationality_en' => 'Mauritian', 'nationality_ar' => 'موريشيوسي'],
            ['code' =>'MV', 'country_en' => 'Maldives', 'country_ar' => 'المالديف', 'nationality_en' => 'Maldivian', 'nationality_ar' => 'مالديفي'],
            ['code' =>'MW', 'country_en' => 'Malawi', 'country_ar' => 'مالاوي', 'nationality_en' => 'Malawian', 'nationality_ar' => 'مالاوي'],
            ['code' =>'MX', 'country_en' => 'Mexico', 'country_ar' => 'المكسيك', 'nationality_en' => 'Mexican', 'nationality_ar' => 'مكسيكي'],
            ['code' =>'MY', 'country_en' => 'Malaysia', 'country_ar' => 'ماليزيا', 'nationality_en' => 'Malaysian', 'nationality_ar' => 'ماليزي'],
            ['code' =>'MZ', 'country_en' => 'Mozambique', 'country_ar' => 'موزمبيق', 'nationality_en' => 'Mozambican', 'nationality_ar' => 'موزمبيقي'],
            ['code' =>'NA', 'country_en' => 'Namibia', 'country_ar' => 'ناميبيا', 'nationality_en' => 'Namibian', 'nationality_ar' => 'ناميبي'],
            ['code' =>'NC', 'country_en' => 'New Caledonia', 'country_ar' => 'كاليدونيا الجديدة', 'nationality_en' => 'New Caledonian', 'nationality_ar' => 'كاليدوني'],
            ['code' =>'NE', 'country_en' => 'Niger', 'country_ar' => 'النيجر', 'nationality_en' => 'Nigerien', 'nationality_ar' => 'نيجيري'],
            ['code' =>'NF', 'country_en' => 'Norfolk Island', 'country_ar' => 'جزيرة نورفولك', 'nationality_en' => 'Norfolk Islander', 'nationality_ar' => 'نورفوليكي'],
            ['code' =>'NG', 'country_en' => 'Nigeria', 'country_ar' => 'نيجيريا', 'nationality_en' => 'Nigerian', 'nationality_ar' => 'نيجيري'],
            ['code' =>'NI', 'country_en' => 'Nicaragua', 'country_ar' => 'نيكاراجوا', 'nationality_en' => 'Nicaraguan', 'nationality_ar' => 'نيكاراجوي'],
            ['code' =>'NL', 'country_en' => 'Netherlands', 'country_ar' => 'هولندا', 'nationality_en' => 'Dutch', 'nationality_ar' => 'هولندي'],
            ['code' =>'NO', 'country_en' => 'Norway', 'country_ar' => 'النرويج', 'nationality_en' => 'Norwegian', 'nationality_ar' => 'نرويجي'],
            ['code' =>'NP', 'country_en' => 'Nepal', 'country_ar' => 'نيبال', 'nationality_en' => 'Nepalese', 'nationality_ar' => 'نيبالي'],
            ['code' =>'NR', 'country_en' => 'Nauru', 'country_ar' => 'نورو', 'nationality_en' => 'Nauruan', 'nationality_ar' => 'نوري'],
            ['code' =>'NU', 'country_en' => 'Niue', 'country_ar' => 'ني', 'nationality_en' => 'Niuean', 'nationality_ar' => 'ني'],
            ['code' =>'NZ', 'country_en' => 'New Zealand', 'country_ar' => 'نيوزيلندا', 'nationality_en' => 'New Zealander', 'nationality_ar' => 'نيوزيلندي'],
            ['code' =>'OM', 'country_en' => 'Oman', 'country_ar' => 'عمان', 'nationality_en' => 'Omani', 'nationality_ar' => 'عماني'],
            ['code' =>'PA', 'country_en' => 'Panama', 'country_ar' => 'بنما', 'nationality_en' => 'Panamanian', 'nationality_ar' => 'بنمي'],
            ['code' =>'PE', 'country_en' => 'Peru', 'country_ar' => 'بيرو', 'nationality_en' => 'Peruvian', 'nationality_ar' => 'بيري'],
            ['code' =>'PF', 'country_en' => 'French Polynesia', 'country_ar' => 'بولينيزيا الفرنسية', 'nationality_en' => 'French Polynesian', 'nationality_ar' => 'بولينيزيي'],
            ['code' =>'PG', 'country_en' => 'Papua New Guinea', 'country_ar' => 'بابوا غينيا الجديدة', 'nationality_en' => 'Papua New Guinean', 'nationality_ar' => 'بابوي'],
            ['code' =>'PH', 'country_en' => 'Philippines', 'country_ar' => 'الفليبين', 'nationality_en' => 'Filipino', 'nationality_ar' => 'فلبيني'],
            ['code' =>'PK', 'country_en' => 'Pakistan', 'country_ar' => 'باكستان', 'nationality_en' => 'Pakistani', 'nationality_ar' => 'باكستاني'],
            ['code' =>'PL', 'country_en' => 'Poland', 'country_ar' => 'بولندا', 'nationality_en' => 'Polish', 'nationality_ar' => 'بولندي'],
            ['code' =>'PN', 'country_en' => 'Pitcairn', 'country_ar' => 'بيتكيرن', 'nationality_en' => 'Pitcairn Islander', 'nationality_ar' => 'بيتكيرني'],
            ['code' =>'PR', 'country_en' => 'Puerto Rico', 'country_ar' => 'بورتو ريكو', 'nationality_en' => 'Puerto Rican', 'nationality_ar' => 'بورتي'],
            ['code' =>'PS', 'country_en' => 'Palestine', 'country_ar' => 'فلسطين', 'nationality_en' => 'Palestinian', 'nationality_ar' => 'فلسطيني'],
            ['code' =>'PT', 'country_en' => 'Portugal', 'country_ar' => 'البرتغال', 'nationality_en' => 'Portuguese', 'nationality_ar' => 'برتغالي'],
            ['code' =>'PW', 'country_en' => 'Palau', 'country_ar' => 'بالاو', 'nationality_en' => 'Palauan', 'nationality_ar' => 'بالاوي'],
            ['code' =>'PY', 'country_en' => 'Paraguay', 'country_ar' => 'باراغواي', 'nationality_en' => 'Paraguayan', 'nationality_ar' => 'بارغاوي'],
            ['code' =>'QA', 'country_en' => 'Qatar', 'country_ar' => 'قطر', 'nationality_en' => 'Qatari', 'nationality_ar' => 'قطري'],
            ['code' =>'RE', 'country_en' => 'Reunion Island', 'country_ar' => 'ريونيون', 'nationality_en' => 'Reunionese', 'nationality_ar' => 'ريونيوني'],
            ['code' =>'RO', 'country_en' => 'Romania', 'country_ar' => 'رومانيا', 'nationality_en' => 'Romanian', 'nationality_ar' => 'روماني'],
            ['code' =>'RS', 'country_en' => 'Serbia', 'country_ar' => 'صربيا', 'nationality_en' => 'Serbian', 'nationality_ar' => 'صربي'],
            ['code' =>'RU', 'country_en' => 'Russian', 'country_ar' => 'روسيا', 'nationality_en' => 'Russian', 'nationality_ar' => 'روسي'],
            ['code' =>'RW', 'country_en' => 'Rwanda', 'country_ar' => 'رواندا', 'nationality_en' => 'Rwandan', 'nationality_ar' => 'رواندا'],
            ['code' =>'SA', 'country_en' => 'Saudi Arabia', 'country_ar' => 'المملكة العربية السعودية', 'nationality_en' => 'Saudi Arabian', 'nationality_ar' => 'سعودي'],
            ['code' =>'SB', 'country_en' => 'Solomon Islands', 'country_ar' => 'جزر سليمان', 'nationality_en' => 'Solomon Island', 'nationality_ar' => 'جزر سليمان'],
            ['code' =>'SC', 'country_en' => 'Seychelles', 'country_ar' => 'سيشيل', 'nationality_en' => 'Seychellois', 'nationality_ar' => 'سيشيلي'],
            ['code' =>'SD', 'country_en' => 'Sudan', 'country_ar' => 'السودان', 'nationality_en' => 'Sudanese', 'nationality_ar' => 'سوداني'],
            ['code' =>'SE', 'country_en' => 'Sweden', 'country_ar' => 'السويد', 'nationality_en' => 'Swedish', 'nationality_ar' => 'سويدي'],
            ['code' =>'SG', 'country_en' => 'Singapore', 'country_ar' => 'سنغافورة', 'nationality_en' => 'Singaporean', 'nationality_ar' => 'سنغافوري'],
            ['code' =>'SH', 'country_en' => 'Saint Helena', 'country_ar' => 'سانت هيلانة', 'nationality_en' => 'St. Helenian', 'nationality_ar' => 'هيلاني'],
            ['code' =>'SI', 'country_en' => 'Slovenia', 'country_ar' => 'سلوفينيا', 'nationality_en' => 'Slovenian', 'nationality_ar' => 'سولفيني'],
            ['code' =>'SJ', 'country_en' => 'Svalbard and Jan Mayen', 'country_ar' => 'سفالبارد ويان ماين', 'nationality_en' => 'Svalbardian/Jan Mayenian', 'nationality_ar' => 'سفالبارد ويان ماين'],
            ['code' =>'SK', 'country_en' => 'Slovakia', 'country_ar' => 'سلوفاكيا', 'nationality_en' => 'Slovak', 'nationality_ar' => 'سولفاكي'],
            ['code' =>'SL', 'country_en' => 'Sierra Leone', 'country_ar' => 'سيراليون', 'nationality_en' => 'Sierra Leonean', 'nationality_ar' => 'سيراليوني'],
            ['code' =>'SM', 'country_en' => 'San Marino', 'country_ar' => 'سان مارينو', 'nationality_en' => 'Sammarinese', 'nationality_ar' => 'ماريني'],
            ['code' =>'SN', 'country_en' => 'Senegal', 'country_ar' => 'السنغال', 'nationality_en' => 'Senegalese', 'nationality_ar' => 'سنغالي'],
            ['code' =>'SO', 'country_en' => 'Somalia', 'country_ar' => 'الصومال', 'nationality_en' => 'Somali', 'nationality_ar' => 'صومالي'],
            ['code' =>'SR', 'country_en' => 'Suriname', 'country_ar' => 'سورينام', 'nationality_en' => 'Surinamese', 'nationality_ar' => 'سورينامي'],
            ['code' =>'SS', 'country_en' => 'South Sudan', 'country_ar' => 'السودان الجنوبي', 'nationality_en' => 'South Sudanese', 'nationality_ar' => 'سوادني جنوبي'],
            ['code' =>'ST', 'country_en' => 'Sao Tome and Principe', 'country_ar' => 'ساو تومي وبرينسيبي', 'nationality_en' => 'Sao Tomean', 'nationality_ar' => 'ساو تومي وبرينسيبي'],
            ['code' =>'SV', 'country_en' => 'El Salvador', 'country_ar' => 'إلسلفادور', 'nationality_en' => 'Salvadoran', 'nationality_ar' => 'سلفادوري'],
            ['code' =>'SX', 'country_en' => 'Sint Maarten (Dutch part)', 'country_ar' => 'ساينت مارتن هولندي', 'nationality_en' => 'St. Martian(Dutch)', 'nationality_ar' => 'ساينت مارتني هولندي'],
            ['code' =>'SY', 'country_en' => 'Syria', 'country_ar' => 'سوريا', 'nationality_en' => 'Syrian', 'nationality_ar' => 'سوري'],
            ['code' =>'SZ', 'country_en' => 'Swaziland', 'country_ar' => 'سوازيلند', 'nationality_en' => 'Swazi', 'nationality_ar' => 'سوازيلندي'],
            ['code' =>'TC', 'country_en' => 'Turks and Caicos Islands', 'country_ar' => 'جزر توركس وكايكوس', 'nationality_en' => 'Turks and Caicos Islands', 'nationality_ar' => 'جزر توركس وكايكوس'],
            ['code' =>'TD', 'country_en' => 'Chad', 'country_ar' => 'تشاد', 'nationality_en' => 'Chadian', 'nationality_ar' => 'تشادي'],
            ['code' =>'TF', 'country_en' => 'French Southern and Antarctic Lands', 'country_ar' => 'أراض فرنسية جنوبية وأنتارتيكية', 'nationality_en' => 'French', 'nationality_ar' => 'أراض فرنسية جنوبية وأنتارتيكية'],
            ['code' =>'TG', 'country_en' => 'Togo', 'country_ar' => 'توغو', 'nationality_en' => 'Togolese', 'nationality_ar' => 'توغي'],
            ['code' =>'TH', 'country_en' => 'Thailand', 'country_ar' => 'تايلندا', 'nationality_en' => 'Thai', 'nationality_ar' => 'تايلندي'],
            ['code' =>'TJ', 'country_en' => 'Tajikistan', 'country_ar' => 'طاجيكستان', 'nationality_en' => 'Tajikistani', 'nationality_ar' => 'طاجيكستاني'],
            ['code' =>'TK', 'country_en' => 'Tokelau', 'country_ar' => 'توكيلاو', 'nationality_en' => 'Tokelaian', 'nationality_ar' => 'توكيلاوي'],
            ['code' =>'TL', 'country_en' => 'Timor-Leste', 'country_ar' => 'تيمور الشرقية', 'nationality_en' => 'Timor-Lestian', 'nationality_ar' => 'تيموري'],
            ['code' =>'TM', 'country_en' => 'Turkmenistan', 'country_ar' => 'تركمانستان', 'nationality_en' => 'Turkmen', 'nationality_ar' => 'تركمانستاني'],
            ['code' =>'TN', 'country_en' => 'Tunisia', 'country_ar' => 'تونس', 'nationality_en' => 'Tunisian', 'nationality_ar' => 'تونسي'],
            ['code' =>'TO', 'country_en' => 'Tonga', 'country_ar' => 'تونغا', 'nationality_en' => 'Tongan', 'nationality_ar' => 'تونغي'],
            ['code' =>'TR', 'country_en' => 'Turkey', 'country_ar' => 'تركيا', 'nationality_en' => 'Turkish', 'nationality_ar' => 'تركي'],
            ['code' =>'TT', 'country_en' => 'Trinidad and Tobago', 'country_ar' => 'ترينيداد وتوباغو', 'nationality_en' => 'Trinidadian/Tobagonian', 'nationality_ar' => 'ترينيداد وتوباغو'],
            ['code' =>'TV', 'country_en' => 'Tuvalu', 'country_ar' => 'توفالو', 'nationality_en' => 'Tuvaluan', 'nationality_ar' => 'توفالي'],
            ['code' =>'TW', 'country_en' => 'Taiwan', 'country_ar' => 'تايوان', 'nationality_en' => 'Taiwanese', 'nationality_ar' => 'تايواني'],
            ['code' =>'TZ', 'country_en' => 'Tanzania', 'country_ar' => 'تنزانيا', 'nationality_en' => 'Tanzanian', 'nationality_ar' => 'تنزانيي'],
            ['code' =>'UA', 'country_en' => 'Ukraine', 'country_ar' => 'أوكرانيا', 'nationality_en' => 'Ukrainian', 'nationality_ar' => 'أوكراني'],
            ['code' =>'UG', 'country_en' => 'Uganda', 'country_ar' => 'أوغندا', 'nationality_en' => 'Ugandan', 'nationality_ar' => 'أوغندي'],
            ['code' =>'UM', 'country_en' => 'US Minor Outlying Islands', 'country_ar' => 'قائمة الولايات والمناطق الأمريكية', 'nationality_en' => 'US Minor Outlying Islander', 'nationality_ar' => 'أمريكي'],
            ['code' =>'US', 'country_en' => 'United States', 'country_ar' => 'الولايات المتحدة', 'nationality_en' => 'American', 'nationality_ar' => 'أمريكي'],
            ['code' =>'UY', 'country_en' => 'Uruguay', 'country_ar' => 'أورغواي', 'nationality_en' => 'Uruguayan', 'nationality_ar' => 'أورغواي'],
            ['code' =>'UZ', 'country_en' => 'Uzbekistan', 'country_ar' => 'أوزباكستان', 'nationality_en' => 'Uzbek', 'nationality_ar' => 'أوزباكستاني'],
            ['code' =>'VA', 'country_en' => 'Vatican City', 'country_ar' => 'فنزويلا', 'nationality_en' => 'Vatican', 'nationality_ar' => 'فاتيكاني'],
            ['code' =>'VC', 'country_en' => 'Saint Vincent and the Grenadines', 'country_ar' => 'سانت فنسنت وجزر غرينادين', 'nationality_en' => 'Saint Vincent and the Grenadines', 'nationality_ar' => 'سانت فنسنت وجزر غرينادين'],
            ['code' =>'VE', 'country_en' => 'Venezuela', 'country_ar' => 'فنزويلا', 'nationality_en' => 'Venezuelan', 'nationality_ar' => 'فنزويلي'],
            ['code' =>'VI', 'country_en' => 'Virgin Islands (U.S.)', 'country_ar' => 'الجزر العذراء الأمريكي', 'nationality_en' => 'American Virgin Islander', 'nationality_ar' => 'أمريكي'],
            ['code' =>'VN', 'country_en' => 'Vietnam', 'country_ar' => 'فيتنام', 'nationality_en' => 'Vietnamese', 'nationality_ar' => 'فيتنامي'],
            ['code' =>'VU', 'country_en' => 'Vanuatu', 'country_ar' => 'فانواتو', 'nationality_en' => 'Vanuatuan', 'nationality_ar' => 'فانواتي'],
            ['code' =>'WF', 'country_en' => 'Wallis and Futuna Islands', 'country_ar' => 'والس وفوتونا', 'nationality_en' => 'Wallisian/Futunan', 'nationality_ar' => 'فوتوني'],
            ['code' =>'WS', 'country_en' => 'Samoa', 'country_ar' => 'ساموا', 'nationality_en' => 'Samoan', 'nationality_ar' => 'ساموي'],
            ['code' =>'XK', 'country_en' => 'Kosovo', 'country_ar' => 'كوسوفو', 'nationality_en' => 'Kosovar', 'nationality_ar' => 'كوسيفي'],
            ['code' =>'YE', 'country_en' => 'Yemen', 'country_ar' => 'اليمن', 'nationality_en' => 'Yemeni', 'nationality_ar' => 'يمني'],
            ['code' =>'YT', 'country_en' => 'Mayotte', 'country_ar' => 'مايوت', 'nationality_en' => 'Mahoran', 'nationality_ar' => 'مايوتي'],
            ['code' =>'ZA', 'country_en' => 'South Africa', 'country_ar' => 'جنوب أفريقيا', 'nationality_en' => 'South African', 'nationality_ar' => 'أفريقي'],
            ['code' =>'ZM', 'country_en' => 'Zambia', 'country_ar' => 'زامبيا', 'nationality_en' => 'Zambian', 'nationality_ar' => 'زامبياني'],
            ['code' =>'ZW', 'country_en' => 'Zimbabwe', 'country_ar' => 'زمبابوي', 'nationality_en' => 'Zimbabwean', 'nationality_ar' => 'زمبابوي'],
        ];

		$cntry = DB::table('countries');
		$cntry->insert($countries);
	}
}