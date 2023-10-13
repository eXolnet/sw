import {User} from "@/types/user";

export type PageProps<T extends Record<string, unknown> = Record<string, unknown>> = T & {
    auth: {
        user: User;
    };
};

export * from "@/types/user";
export * from "@/types/movie";
export * from "@/types/paginator";
