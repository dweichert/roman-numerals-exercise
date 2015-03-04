<?php
/**
 * Roman Numerals Exercise.
 *
 * The exercise consists of a single task: Create the class RomanNumerals and
 * run the test cases provided by this class and implement all functionality
 * in the RomanNumerals class that is required to pass all tests.
 */

require_once 'RomanNumerals.php';

/**
 * Test class for RomanNumerals.
 */
class RomanNumeralsTest extends PHPUnit_Framework_TestCase
{
    /**
     * @var RomanNumerals
     */
    protected $_object;

    /**
     * Sets up the fixture, for example, opens a network connection.
     * This method is called before a test is executed.
     */
    protected function setUp()
    {
        $this->_object = new RomanNumerals();
    }

    /**
     * Tears down the fixture, for example, closes a network connection.
     * This method is called after a test is executed.
     */
    protected function tearDown()
    {
    }

    /**
     * Test convert Arabic to Roman numerals.
     *
     * @dataProvider convertArabicToRomanProvider
     */
    public function testConvertArabicToRoman($arabic, $roman)
    {
        $expected = $roman;
        $actual = $this->_object->convertArabicToRoman($arabic);
        self::assertEquals($expected, $actual);
    }

    /**
     * Test convert Arabic to Roman numerals with wrong data type parameter $arabic (not integer).
     */
    public function testConvertArabicToRomanWrongDataType()
    {
        $this->setExpectedException('InvalidArgumentException', 'RomanNumerals::convertArabicToRoman expects integer.');
        $this->_object->convertArabicToRoman(new stdClass());
    }

    /**
     * Test convert Arabic to Roman numerals beyond range limits.
     */
    public function testConvertArabicToRomanBeyondRange()
    {
        self::assertEquals('less than I', $this->_object->convertArabicToRoman(0));
        self::assertEquals('less than I', $this->_object->convertArabicToRoman(-1));
        self::assertEquals('more than MMM', $this->_object->convertArabicToRoman(3001));
    }


    /**
     * Data provider for testing convert Arabic to Roman numerals.
     *
     * @return mixed[]
     */
    public function convertArabicToRomanProvider()
    {
       return array(
         array(1, 'I'),
         array(2, 'II'),
         array(3, 'III'),
         array(4, 'IV'),
         array(5, 'V'),
         array(6, 'VI'),
         array(7, 'VII'),
         array(8, 'VIII'),
         array(9, 'IX'),
         array(10, 'X'),
         array(11, 'XI'),
         array(12, 'XII'),
         array(13, 'XIII'),
         array(14, 'XIV'),
         array(15, 'XV'),
         array(16, 'XVI'),
         array(17, 'XVII'),
         array(18, 'XVIII'),
         array(19, 'XIX'),
         array(20, 'XX'),
         array(21, 'XXI'),
         array(24, 'XXIV'),
         array(29, 'XXIX'),
         array(30, 'XXX'),
         array(34, 'XXXIV'),
         array(39, 'XXXIX'),
         array(49, 'XLIX'),
         array(54, 'LIV'),
         array(69, 'LXIX'),
         array(75, 'LXXV'),
         array(89, 'LXXXIX'),
         array(99, 'XCIX'),
         array(134, 'CXXXIV'),
         array(199, 'CXCIX'),
         array(256, 'CCLVI'),
         array(289, 'CCLXXXIX'),
         array(499, 'CDXCIX'),
         array(812, 'DCCCXII'),
         array(999, 'CMXCIX'),
         array(1222, 'MCCXXII'),
         array(1348, 'MCCCXLVIII'),
         array(1453, 'MCDLIII'),
         array(1492, 'MCDXCII'),
         array(1499, 'MCDXCIX'),
         array(1516, 'MDXVI'),
         array(1649, 'MDCXLIX'),
         array(1701, 'MDCCI'),
         array(1789, 'MDCCLXXXIX'),
         array(1812, 'MDCCCXII'),
         array(1815, 'MDCCCXV'),
         array(1848, 'MDCCCXLVIII'),
         array(1879, 'MDCCCLXXIX'),
         array(1901, 'MCMI'),
         array(1916, 'MCMXVI'),
         array(1923, 'MCMXXIII'),
         array(1949, 'MCMXLIX'),
         array(1957, 'MCMLVII'),
         array(1999, 'MCMXCIX'),
         array(2499, 'MMCDXCIX'),
         array(2749, 'MMDCCXLIX'),
         array(3000, 'MMM'),
       );
    }
}
