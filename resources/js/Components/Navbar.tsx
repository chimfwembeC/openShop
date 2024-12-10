import React, { useState } from 'react';
// import { Link } from 'react-router-dom';
import { ShoppingCart, Search, Menu, User } from 'lucide-react';
import { UserMenu } from './auth/UserMenu';
import { MobileMenu } from './MobileMenu';
import { Link } from '@inertiajs/react';

export function Navbar() {  
  const [isMobileMenuOpen, setIsMobileMenuOpen] = useState(false);


  return (
    <>
      <nav className="fixed top-0 w-full bg-white shadow-sm z-50">
        <div className="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
          <div className="flex justify-between items-center h-16">
            <div className="flex-shrink-0">
              <Link href="/" className="text-2xl font-bold text-indigo-600">
                Wyo Stores
              </Link>
            </div>
            
            <div className="hidden md:block">
              <div className="ml-10 flex items-center space-x-8">
                <Link href="/" className="text-gray-700 hover:text-indigo-600">
                  Home
                </Link>
                <Link href="/shop" className="text-gray-700 hover:text-indigo-600">
                  Shop
                </Link>
                <Link href="/categories" className="text-gray-700 hover:text-indigo-600">
                  Categories
                </Link>
                <Link href="/new-arrivals" className="text-gray-700 hover:text-indigo-600">
                  New Arrivals
                </Link>
                {/* {user?.role === 'admin' && (
                  <Link to="/admin" className="text-gray-700 hover:text-indigo-600">
                    Admin Dashboard
                  </Link>
                )} */}
              </div>
            </div>
            
            <div className="flex items-center space-x-4">
              <button className="p-2 rounded-lg hover:bg-gray-100">
                <Search className="h-5 w-5 text-gray-600" />
              </button>
              
              <button className="p-2 rounded-lg hover:bg-gray-100 relative">
                <ShoppingCart className="h-5 w-5 text-gray-600" />
                <span className="absolute top-0 right-0 h-4 w-4 bg-indigo-600 rounded-full text-xs text-white flex items-center justify-center">
                  2
                </span>
              </button>
              
              {/* {isAuthenticated ? (
                <UserMenu />
              ) : ( */}
                <Link
                  href='/login'
                  className="flex items-center space-x-2 p-2 rounded-lg hover:bg-gray-100"
                >
                  <User className="h-5 w-5 text-gray-600" />
                  <span className="text-sm font-medium text-gray-700">Login</span>
                </Link>
              {/* )} */}
              
              <button
                onClick={() => setIsMobileMenuOpen(true)}
                className="md:hidden p-2 rounded-lg hover:bg-gray-100"
              >
                <Menu className="h-5 w-5 text-gray-600" />
              </button>
            </div>
          </div>
        </div>
      </nav>        
      
      <MobileMenu
        isOpen={isMobileMenuOpen}
        onClose={() => setIsMobileMenuOpen(false)}
      />
    </>
  );
}