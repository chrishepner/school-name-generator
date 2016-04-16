<?php

namespace SchoolNameGenerator;

/**
 * Provider for the Faker generator
 */
class FakerProvider extends \Faker\Provider\Base
{
    protected static $schoolSuffixes = array(
        'Academy',
        'Elementary',
        'High',
        'High School',
        'Institute',
        'Middle School',
        'School of Fine Arts',
        'School for Boys',
        'School for Girls',
        'Secondary School',
        'Kindergarten',
    );

    protected static $universityTypes = array('College', 'University');
    protected static $universitySuffixes = array(
        'Institute of Technology'
    );
    protected static $universityNameFormats = array(
        '{{universityProperName}} {{universitySuffix}}',
        '{{universityPlace}} {{universitySuffix}}',
        '{{universityPrefix}} {{universityPlace}}',
        '{{universityPrefix}} {{universityState}}, {{universityCity}}',
    );

    public function universityPrefix()
    {
        return static::randomElement(static::$universityTypes) . ' of';
    }

    public function universitySuffix()
    {
        return static::randomElement(array_merge(static::$universityTypes, static::$universitySuffixes));
    }

    public function universityCity()
    {
        return $this->generator->city;
    }
    public function universityState()
    {
        return $this->generator->state;
    }

    protected static $schoolNameFormats = array(
        '{{schoolProperName}} {{schoolSuffix}}',
    );

    public function universityPlace()
    {
        return static::randomElement([
            $this->generator->city,
            $this->generator->state
        ]);
    }

    public function universityProperName()
    {
        return $this->generator->lastName;
    }

    public function schoolProperName()
    {
        if (rand(0, 1) % 2 === 0) {
            return $this->generator->lastName;
        } else {
            return $this->generator->city;
        }
    }

    public static function schoolSuffix()
    {
        return static::randomElement(static::$schoolSuffixes);
    }

    /**
     * Returns a randomly-generated school name
     * This excludes "higher education" names
     * @return string School name
     */
    public function schoolName()
    {
        $format = static::randomElement(static::$schoolNameFormats);
        return $this->generator->parse($format);
    }

    /**
     * Returns a randomly-generated university/college name
     * @return string University name
     */
    public function universityName()
    {
        $format = static::randomElement(static::$universityNameFormats);
        return $this->generator->parse($format);
    }
}