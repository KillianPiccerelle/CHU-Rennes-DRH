<?php

namespace Database\Seeders;

use App\Models\Formation;
use Illuminate\Database\Seeder;

class FormationsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $formation = new Formation();
        $formation->title = "Formation VMware Horizon 8 - Deploy and Manage";
        $formation->description = "Si la virtualisation des postes de travail n’a pas connu un succès similaire à celle des serveurs, certains grands groupes ont tout de même adopté cette solution, amorçant peut-être ainsi une nouvelle vague de virtualisation... Dans sa version 8, Horizon améliore encore les temps de mise à disposition d’environnements virtuels sur les postes clients et autorise une meilleure prise en charge des périphériques connectés. Les participants à cette formation acquerront toutes les connaissances et compétences nécessaires à la mise en oeuvre de la VDI avec VMware Horizon 8.";
        $formation->price = "4295 €";
        $formation->url = "https://www.ib-formation.fr/catalogue/nbs-details/catref/universib-formations-informatiques-virtualisation-vmware-horizon-et-thinapp/ref/sr325/vmware-horizon-7-install-configure-manage";
        $formation->statutFormation_id = 1;
        $formation->save();

        $formation = new Formation();
        $formation->title = "Formation - Chiffrage prévisionnel, estimation et maîtrise du coût des projets ";
        $formation->description = "Cette formation certifiante est éligible au CPF car elle est adossée à la Certification partielle 4 : Les compétences avancées en management de projet, au sein de la certification globale : Piloter un projet. Dans le cadre d’un financement de la formation par le CPF, le passage de l’examen de certification à distance est requis (sans condition de réussite). L'examen est accessible dès l'issue du présentiel. La formation à l'estimation et la maîtrise des coûts de projet développe des compétences clés pour un chef de projet ou pour un estimateur ou contrôleur des coûts dans les projets. Elle comporte deux volets : l'estimation des coûts pour guider la décision d'investissement ou gagner des affaires, et le pilotage des coûts pour conserver la rentabilité du projet dans le respect des engagements pris.";
        $formation->price = "1435 €";
        $formation->url = "https://www.cegos.fr/formations/management-de-projets-gestion-de-projets/chiffrage-previsionnel-estimation-et-maitrise-du-cout-des-projets";
        $formation->statutFormation_id = 1;
        $formation->save();

        $formation = new Formation();
        $formation->title = "Développer des applications Android en Java avec Android Studio";
        $formation->description = "Dans cette formation, vous apprendrez à développer des applications mobiles pour Google Android avec le langage Java sous l'IDE Android Studio. Pour les travaux pratiques, les participants utiliseront soit l'émulateur Android (Virtual Devices) fournis avec le SDK, soit leur smartphone ou leur tablette s'ils en possèdent un.";
        $formation->price = "3300 €";
        $formation->url = "https://www.eni-service.fr/index.php/fomation/developper-des-applications-android-en-java-avec-android-studio/";
        $formation->statutFormation_id = 1;
        $formation->save();
    }
}
