import { Link } from '@inertiajs/react';
import React from 'react';
import useRoute from '@/Hooks/useRoute';
import useTypedPage from '@/Hooks/useTypedPage';
import { Head } from '@inertiajs/react';
import { Hero } from '@/Components/Hero';
import { ProductSection } from '@/Components/ProductSection';
import { CategorySection } from '@/Components/CategorySection';
import { NewArrivals } from '@/Components/NewArrivals';
import { ReviewSection } from '@/Components/ReviewSection';
import GuestLayout from '@/Layouts/GuestLayout';

interface Props {
    canLogin: boolean;
    canRegister: boolean;
    laravelVersion: string;
    phpVersion: string;
    products: [];
}

export default function Welcome({
    products,
    canLogin,
    canRegister,
    laravelVersion,
    phpVersion,
}: Props) {
    const route = useRoute();
    const page = useTypedPage();

    // console.log('products', products);
    return (
        <GuestLayout title='Welcome'>
            <Head title="Welcome" />

            <main className="pt-16">
                <Hero />
                <ProductSection products={products} />
                <CategorySection />
                <NewArrivals />
                <ReviewSection />
            </main>
        </GuestLayout>
    );
}
