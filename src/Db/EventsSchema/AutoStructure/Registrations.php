<?php
/**
 * This file has been automatically generated by Pomm's generator.
 * You MIGHT NOT edit this file as your changes will be lost at next
 * generation.
 */

namespace App\Db\EventsSchema\AutoStructure;

use PommProject\ModelManager\Model\RowStructure;

/**
 * Registration
 *
 * Structure class for relation events.registrations.
 * 
 * Class and fields comments are inspected from table and fields comments.
 * Just add comments in your database and they will appear here.
 * @see http://www.postgresql.org/docs/9.0/static/sql-comment.html
 *
 *
 *
 * @see RowStructure
 */
class Registrations extends RowStructure
{
    /**
     * __construct
     *
     * Structure definition.
     *
     * @access public
     */
    public function __construct()
    {
        $this
            ->setRelation('events.registrations')
            ->setPrimaryKey(['id'])
            ->addField('id', 'int4')
            ->addField('event_id', 'int4')
            ->addField('first_name', 'varchar')
            ->addField('last_name', 'varchar')
            ->addField('email', 'varchar')
            ->addField('phone', 'varchar')
            ;
    }
}
