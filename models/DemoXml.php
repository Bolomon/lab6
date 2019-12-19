<?php
/**
 * Created by PhpStorm.
 * User: ClassAdmin
 * Date: 02.10.2019
 * Time: 11:35
 */

namespace app\models;

use Yii;
use yii\base\Model;

class DemoXml extends Model
{

    public function generateXml() {
        $xml = new \DOMDocument( "1.0", "iso-8859-1" );

        $xml_guestbook = $xml->createElement( "guestbook" );
        $xml_guestbook = $xml->appendChild( $xml_guestbook);
        $xml_guest = $xml->createElement('guest');
        $xml_guestbook->appendChild( $xml_guest );

        $xml_fname = $xml->createElement('fname', 'Terje');
        $xml_guest->appendChild( $xml_fname );
        $xml_lname = $xml->createElement('lname', 'Beck');
        $xml_guest->appendChild( $xml_lname );
        //$xml_guest = $xml->createElement('guest');


        $xml_fname = $xml->createElement('fname', 'Jan');
        $xml_guest->appendChild( $xml_fname );
        $xml_lname = $xml->createElement('lname', 'Refsnes');
        $xml_guest->appendChild( $xml_lname );
        $xml_guest = $xml->createElement('guest');


        $xml_fname = $xml->createElement('fname', 'Torleif');
        $xml_lname = $xml->createElement('lname', 'Rasmussen');
        $xml_guest = $xml->createElement('guest');
        $xml_guest->appendChild( $xml_fname );
        $xml_guest->appendChild( $xml_lname );

        $xml_fname = $xml->createElement('fname', 'anton');
        $xml_lname = $xml->createElement('lname', 'chek');
        $xml_guest = $xml->createElement('guest');
        $xml_guest->appendChild( $xml_fname );
        $xml_guest->appendChild( $xml_lname );

        $xml_fname = $xml->createElement('fname', 'stale');
        $xml_lname = $xml->createElement('lname', 'refsnes');
        $xml_guest = $xml->createElement('guest');
        $xml_guest->appendChild( $xml_fname );
        $xml_guest->appendChild( $xml_lname );

        $xml_fname = $xml->createElement('fname', 'hari');
        $xml_lname = $xml->createElement('lname', 'prawin');
        $xml_guest = $xml->createElement('guest');
        $xml_guest->appendChild( $xml_fname );
        $xml_guest->appendChild( $xml_lname );

        $xml_fname = $xml->createElement('fname', 'Hege');
        $xml_lname = $xml->createElement('lname', 'Refsnes');
        $xml_guest = $xml->createElement('guest');
        $xml_guest->appendChild( $xml_fname );
        $xml_guest->appendChild( $xml_lname );

       return $xml->saveXML();

    }
}