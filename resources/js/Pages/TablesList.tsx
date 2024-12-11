import React, { useState, useEffect } from 'react';
import axios from 'axios';

const TablesList = () => {
  const [tables, setTables] = useState([]);
  const [loading, setLoading] = useState(true);
  const [error, setError] = useState(null);

  useEffect(() => {
    // Fetch tables from the backend API
    axios.get('/api/tables')
      .then(response => {
        setTables(response.data); // Set tables data
        setLoading(false); // Set loading to false
      })
      .catch(error => {
        setError(error.message); // Set error if any
        setLoading(false);
      });
  }, []);

  if (loading) {
    return (
      <div className="flex justify-center items-center h-screen">
        <div className="spinner-border animate-spin inline-block w-8 h-8 border-4 border-solid border-gray-900 border-t-transparent rounded-full"></div>
      </div>
    );
  }

  if (error) {
    return (
      <div className="text-center text-red-600">
        <p>Error: {error}</p>
      </div>
    );
  }

  return (
    <div className="max-w-7xl mx-auto p-6">
      <h1 className="text-2xl font-semibold text-gray-800 mb-4">Tables in Database</h1>
      <div className="space-y-6">
        {tables.map((table, index) => (
          <div key={index}>
            <h2 className="text-xl font-semibold text-gray-700 mb-2">{table.name}</h2>
            <table className="min-w-full bg-white border border-gray-200 rounded-lg shadow-md">
              <thead>
                <tr>
                  <th className="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Field</th>
                  <th className="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Type</th>
                  <th className="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Nullable</th>
                  <th className="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Default</th>
                  <th className="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Key</th>
                  <th className="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Extra</th>
                </tr>
              </thead>
              <tbody className="text-sm font-medium text-gray-700">
                {table.columns.length === 0 ? (
                  <tr>
                    <td colSpan="6" className="px-6 py-4 text-center">No columns found</td>
                  </tr>
                ) : (
                  table.columns.map((column, index) => (
                    <tr key={index} className="hover:bg-gray-100">
                      <td className="px-6 py-4">{column.Field}</td>
                      <td className="px-6 py-4">{column.Type}</td>
                      <td className="px-6 py-4">{column.Nullable}</td>
                      <td className="px-6 py-4">{column.Default}</td>
                      <td className="px-6 py-4">{column.Key}</td>
                      <td className="px-6 py-4">{column.Extra}</td>
                    </tr>
                  ))
                )}
              </tbody>
            </table>
          </div>
        ))}
      </div>
    </div>
  );
};

export default TablesList;
