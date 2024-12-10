import React from 'react';
import Welcome from '@/Components/Welcome';
import AppLayout from '@/Layouts/AppLayout';
import { User } from 'lucide-react';

export default function Dashboard() {
  return (
    <AppLayout
      title="Dashboard"
      renderHeader={() => (
        <h2 className="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
          Dashboard
        </h2>
      )}
    >
      <div className="py-12">
        <div className="max-w-7xl mx-auto sm:px-6 lg:px-8">
          <div className="overflow-hidden">
            <div className="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-4">
              {[1000,2000,30000,40000,50000].map(item => (
                <div className="rounded-lg bg-white animate-pulse p-4">
                <div className="">
                  <div className="flex items-center justify-between">
                  <div className="text-2xl">{item}K</div>
                  <div className="p-2 rounded-lg bg-gray-200">
                  <User />
                  </div>
                  </div>
                  <div className="text-lg">
                    Lorem ipsum dolor sit.
                  </div>
                </div>
              </div>
              ))}
            </div>
          </div>
        </div>
      </div>
    </AppLayout>
  );
}
