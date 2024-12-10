import { router } from '@inertiajs/core';
import { Link, Head } from '@inertiajs/react';
import React, { PropsWithChildren, useState } from 'react';
import useRoute from '@/Hooks/useRoute';
import useTypedPage from '@/Hooks/useTypedPage';
import Banner from '@/Components/Banner';
import { Navbar } from '@/Components/Navbar';


interface Props {
  title: string;
  renderHeader?(): JSX.Element;
}

export default function GuestLayout({
  title,  
  children,
}: PropsWithChildren<Props>) {
  const page = useTypedPage();
  const route = useRoute();

  
  
  return (
    <div>
      <Head title={title} />

      <Banner />
        <Navbar />
      <div className="min-h-screen bg-gray-100 dark:bg-gray-900">            
        {/* <!-- Page Content --> */}
        <main>{children}</main>
      </div>      
    </div>
  );
}
