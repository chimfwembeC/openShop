import React from 'react';

export function Hero() {
  return (
    <div className="relative bg-gray-900 h-[600px] flex items-center">
      <div className="absolute inset-0">
        <img
          src="https://images.unsplash.com/photo-1441986300917-64674bd600d8?ixlib=rb-1.2.1&auto=format&fit=crop&w=1950&q=80"
          alt="Hero background"
          className="w-full h-full object-cover opacity-40"
        />
      </div>
      <div className="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
        <h1 className="text-4xl md:text-6xl font-bold text-white mb-6">
          Discover Your Style
        </h1>
        <p className="text-xl text-gray-200 mb-8 max-w-2xl mx-auto">
          Explore our curated collection of premium fashion items that define your unique style
        </p>
        <button className="bg-indigo-600 text-white px-8 py-3 rounded-full text-lg font-semibold hover:bg-indigo-700 transition-colors">
          Shop Now
        </button>
      </div>
    </div>
  );
}