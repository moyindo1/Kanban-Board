<?php

namespace Config;

use CodeIgniter\Config\BaseConfig;
use CodeIgniter\Validation\StrictRules\CreditCardRules;
use CodeIgniter\Validation\StrictRules\FileRules;
use CodeIgniter\Validation\StrictRules\FormatRules;
use CodeIgniter\Validation\StrictRules\Rules;

class Validation extends BaseConfig
{
    // --------------------------------------------------------------------
    // Setup
    // --------------------------------------------------------------------

    /**
     * Stores the classes that contain the
     * rules that are available.
     *
     * @var list<string>
     */
    public array $ruleSets = [
        Rules::class,
        FormatRules::class,
        FileRules::class,
        CreditCardRules::class,
    ];

    /**
     * Specifies the views that are used to display the
     * errors.
     *
     * @var array<string, string>
     */
    public array $templates = [
        'list'   => 'CodeIgniter\Validation\Views\list',
        'single' => 'CodeIgniter\Validation\Views\single',
    ];

    // --------------------------------------------------------------------
    // Rules
    // --------------------------------------------------------------------

    public $spalten = [
        'spalte' => 'required',
        'spaltenbeschreibung' => 'required',
        'sortid' => 'required|integer',
        'boardsid' => 'required|integer',
    ];

    public $tasks = [
        'tasks' => 'required',
        'taskartenid' => 'required',
        'personenid' => 'required',
        'spaltenid' => 'required',
        'erinnerungsdatum' => 'required',
        'notizen' => 'required',
    ];

    public $tasks_errors = [
        'tasks' => [
            'required' => 'Die Task-Bezeichnung ist erforderlich.'
            ],
        'taskartenid' => [
            'required' => 'Die Taskarten-ID ist erforderlich.'
            ],
        'personenid' => [
            'required' => 'Die Personen-ID ist erforderlich.'
            ],
        'spaltenid' => [
            'required' => 'Die Spalten-ID ist erforderlich.'
            ],
        'erinnerungsdatum' => [
            'required' => 'Das Erinnerungsdatum ist erforderlich.'
            ],
        'notizen' => [
            'required' => 'Die Notiz ist erforderlich.'
            ]
    ];
    public $spalten_errors = [
        'spalte' => [
            'required' => 'Die Spalten-Bezeichnung ist erforderlich.',
        ],
        'spaltenbeschreibung' => [
            'required' => 'Die Spaltenbeschreibung ist erforderlich.',
        ],
        'sortid' => [
            'required' => 'Die Sort-ID ist erforderlich.',
            'integer' => 'Die Sort-ID muss eine Zahl sein.',
        ],
        'boardsid' => [
            'required' => 'Die Boards-ID ist erforderlich.',
            'integer' => 'Die Boards-ID muss eine Zahl sein.',
        ],
    ];


}
