<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Inertia\Inertia;


class DatabaseController extends Controller
{
    public function index()
    {
        return Inertia::render("TablesList");
    }

    public function getTables()
    {
        // Get all tables in the current database
        $tables = DB::select('SHOW TABLES');

        // Extract table names
        $tables = array_map(function($table) {
            return (object) ['name' => $table->{'Tables_in_' . env('DB_DATABASE')}];
        }, $tables);

        // For each table, get its columns
        foreach ($tables as $table) {
            $columns = DB::select('SHOW COLUMNS FROM ' . $table->name);
            $table->columns = array_map(function($column) {
                return (object) [
                    'Field' => $column->Field, // Column name
                    'Type' => $column->Type,   // Column type (e.g., varchar, int)
                    'Nullable' => $column->Null, // Nullable
                    'Default' => $column->Default, // Default value
                    'Key' => $column->Key, // Index (Primary, Unique)
                    'Extra' => $column->Extra // Extra information (e.g., auto_increment)
                ];
            }, $columns);
        }

        return response()->json($tables);
    }
}
