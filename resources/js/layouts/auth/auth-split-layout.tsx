import AppLogoIcon from '@/components/app-logo-icon';
import { Card, CardContent, CardDescription, CardHeader, CardTitle } from '@/components/ui/card';
import { type SharedData } from '@/types';
import { Link, usePage } from '@inertiajs/react';
import { type PropsWithChildren } from 'react';

interface AuthLayoutProps {
    title?: string;
    description?: string;
}

export default function AuthSplitLayout({ children, title, description }: PropsWithChildren<AuthLayoutProps>) {
    const { name, quote } = usePage<SharedData>().props;

    return (
        <div className="relative grid h-dvh flex-col items-center justify-center px-8 sm:px-0 lg:max-w-none lg:grid-cols-2 lg:px-0">
            <div
                className="bg-muted relative hidden h-full flex-col p-10 text-white lg:flex dark:border-r"
                style={{ backgroundImage: "url('/images/kemenimipas.png')", backgroundSize: 'cover', backgroundPosition: 'center' }}
            >
                <div className="absolute inset-0 bg-zinc-900/70" />
                <Link href={route('home')} className="relative z-20 flex items-center text-lg font-medium">
                    <AppLogoIcon className="mr-2 size-8 fill-current text-white" />
                    {name}
                </Link>
                {quote && (
                    <div className="relative z-20 mt-auto">
                        <blockquote className="space-y-2">
                            <p className="text-lg">&ldquo;{quote.message}&rdquo;</p>
                            <footer className="text-sm text-neutral-300">{quote.author}</footer>
                        </blockquote>
                    </div>
                )}
            </div>
            <div className="w-full lg:p-8">
                <div className="mx-auto flex w-full flex-col justify-center space-y-6 sm:w-[450px]">
                    <Link href={route('home')} className="relative z-20 flex items-center justify-center lg:hidden">
                        <AppLogoIcon className="h-10 fill-current text-black sm:h-12" />
                    </Link>
                    <Card>
                        <CardHeader className="items-start gap-2 text-left sm:items-center sm:text-center">
                            <CardTitle className="text-xl font-medium">{title}</CardTitle>
                            {description && <CardDescription className="text-sm text-balance">{description}</CardDescription>}
                        </CardHeader>
                        <CardContent>
                            {children}
                        </CardContent>
                    </Card>
                </div>
            </div>
        </div>
    );
}
